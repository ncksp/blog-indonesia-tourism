<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

class ArticleController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if(Auth::check()) return redirect(route('home'));

        $articles = Article::with('category')->get();
        return view('public.welcome', compact('articles'))->with('categories', $this->categories);
    }

    public function byCategory($id)
    {
        $articles = Article::whereHas('category', function ($q) use ($id) {
            $q->where('id', $id);
        })->get();
        return view('public.welcome', compact('articles'))->with('categories', $this->categories);
    }

    public function blogByUser()
    {
        $articles = Article::where('user_id', Auth::user()->id)->get();
        return view('user.blogs', compact('articles'))->with('categories', $this->categories);;
    }

    public function store(Request $request)
    {
        if(Auth::user()->isAdmin()) return abort(404);

        $request->validate([
            'title' => 'required',
            'category_id' => 'required|exists:categories,id',
            'photo' => 'mimes:jpeg,jpg,png,gif|required',
            'description' => 'required'
        ]);

        $file = $request->file('photo');
        $fileName = Uuid::uuid4() . $file->getClientOriginalName();
        $file->move(public_path('images/'), $fileName);

        $data = $request->all();
        $data['image'] = $fileName;
        $data['user_id'] = Auth::user()->id;
        try {
            Article::create($data);
            return redirect()->route('blogs')->with('success', 'Add Blog Success');
        } catch (\Throwable $th) {
            return redirect()->back();
        }
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('public.story-details', compact('article'))->with('categories', $this->categories);
    }

    public function destroy($id)
    {
        if(Auth::user()->isAdmin()) return abort(404);

        try {
            Article::find($id)->delete();
            return redirect()->route('blogs')->with('success', 'Delete blog Success');
        } catch (\Throwable $th) {
            return redirect()->back();
        }
    }
}
