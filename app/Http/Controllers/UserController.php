<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        return view(Auth::user()->getRole().'.profile');
    }
    public function getUserOnly()
    {
        if(Auth::user()->isUser()) return abort(404);

        $users = User::where('role', '!=', Auth::user()->role)->get();

        return view('admin.users', compact('users'));
    }

    public function updateProfile(Request $request){
        $request->validate([
            'id' => 'required|exists:users,id',
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$request->all()['id'],
            'phone' => 'required'
        ]);
        $data = [
            'name' => $request->all()['name'],
            'email' => $request->all()['email'],
            'phone' => $request->all()['phone'],
        ];

        try {
            User::where('id',$request->all()['id'])
                ->update($data);
            return redirect()->route('profile')->with('success', 'Update Profile Success');
        } catch (\Throwable $th) {
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        if(Auth::user()->isUser()) return abort(404);

        try {
            User::find($id)->delete();
            return redirect()->route('users')->with('success', 'Delete user Success');
        } catch (\Throwable $th) {
            return redirect()->back();
        }
    }
}
