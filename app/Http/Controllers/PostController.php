<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Share;

class PostController extends Controller
{
    public function index()
    {
        $title= '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        //dd(request('search'));
        return view('posts', [
            "title" => "All Posts" . $title,
            "active" => 'posts',
            //"posts" => Post::all()
            //"posts" => Post::with(['author', 'category'])->latest()->get()  //eager-loading
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(100)->withQueryString()
        ]);

    }

    public function show(Post $post)
    {
        //Sharing link
        $shareComponent = Share::currentPage('Miarao')
        ->facebook()
        ->twitter()
        ->telegram()
        ->whatsapp()->getRawLinks();
        //checking linknya berjalan atau tidak 
        // dd($shareComponent);       
        return view('post', compact('shareComponent'), [
            "title" => "Single-post",
            "active" => 'posts',
            "post" => $post
        ]);
        // return view('post', [
        //     "title" => "Single-post",
        //     "active" => 'posts',
        //     "post" => $post
        // ]);

        return view('categories', [
            'title' => 'Post Categories',
            "active" => 'categories',
            'categories' => Category::all()
        ]);

        
        
    }
}
