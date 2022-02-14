<?php

//use App\Models\Post;
//use App\Models\User;
use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\SocialShareButtonsController;
use App\Http\Controllers\AdminCategoryController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// manggil symbolic link, selalu pake kalau transfer hostingan 
Route::get('/sym', function () {
    Artisan::call('storage:link');
});

Route::get('/', [PostController::class, 'index'], function () {
    return view('posts', [
        "title" => "Home",
        "active" => 'home',
        'categories' => Category::all()
    ]);
    return view('categories')->with('categories' , $categories);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => 'about'
    ]);
});

Route::get ('/shop', function(){
    return view('shop', [
        "title" => "Shop",
        "active" => 'shop'
    ]);
});

Route::get('/posts', [PostController::class, 'index'], function () {
    return view('posts', [
        "title" => "Home",
        "active" => 'home',
    ]);
    return view('categories')->with('categories' , $categories);
});

// halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show', 'ShareWidget']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        "active" => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/forgot_password', [LoginController::class, 'forgot']);
Route::post('/forgot_password', [LoginController::class, 'password']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('admin');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::Class, 'checkSlug'])->middleware('admin');

Route::resource('/dashboard/posts', DashboardPostController::Class)->middleware('admin');

Route::resource('dashboard/categories', AdminCategoryController::class)->except('show')
->middleware('admin');

// Social media share
Route::get('/social-media-share', [SocialShareButtonsController::class,'ShareWidget']);

// comment
Route::post('/comment/store', 'App\Http\Controllers\CommentController@store')->name('comment.add')
->middleware('auth');
Route::post('/reply/store', 'App\Http\Controllers\CommentController@replyStore')->name('reply.add')
->middleware('auth');


/*  //tidak dipakai lagi, sudah ditangani query
Route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'title' => "Post by Category : $category->name",
        "active" => 'categories',
        'posts' => $category->posts->load('category', 'author'), //lazy eager-loading
    ]);
}); */

/*  //tidak dipakai lagi
Route::get('/authors/{author:username}', function(User $author) {
    return view('posts', [
        'title' => "Post by Author : $author->name",
        'active' => 'posts',
        'posts' => $author->posts->load('category', 'author'),  //lazy eager-loading
    ]);
}); */ 

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
