<?php

use App\Article;
use App\Category;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'phone' => '089639385477',
            'role' => 0,
            'password' => Hash::make('user')
        ]);
        $categories = Category::all();
        foreach ($categories as $cat) {
            Article::create([
                'user_id' => $user->id,
                'category_id' => $cat->id,
                'title' => Faker\Provider\id_ID\Address::state(),
                'description' => Faker\Provider\Lorem::text(),
                'image' => Faker\Provider\Image::image(public_path('images/'),400,300, null, false)
            ]);
        }
    }
}
