<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SessionsController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;
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

Route::get('/',[PostController::class, 'index'])->name('home');

Route::get('posts/{post:slug}',[PostController::class,'show']);

Route::get('register',[RegisterController::class,'create'])->middleware('guest');
Route::post('register',[RegisterController::class,'store'])->middleware('guest');

Route::get('login',[SessionsController::class,'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout',[SessionsController::class,'destroy'])->middleware('auth');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');


Route::post('admin/posts', [AdminPostController::class, 'store'])->middleware('admin');
Route::get('admin/posts/create', [AdminPostController::class, 'create'])->middleware('admin');

Route::get('admin/posts', [AdminPostController::class, 'index'])->middleware('admin');
Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit'])->middleware('admin');
Route::patch('admin/posts/{post}', [AdminPostController::class, 'update'])->middleware('admin');
Route::delete('admin/posts/{post}', [AdminPostController::class, 'destroy'])->middleware('admin')->name('admin.posts.destroy');
Route::get('/admin/posts/add-category', [CategoryController::class, 'create'])->middleware('admin')->name('category.create');
Route::post('/admin/posts/add-category', [CategoryController::class, 'store'])->middleware('admin')->name('category.store');

Route::get('categories/{category:slug}',function (\App\Models\Category $category){
    return view ('posts',[
        'posts' => $category->posts,
        "currentCategory"=> $category,
        'categories' => \App\Models\Category::all()
    ]);
});

Route::get('authors/{author:username}',function (\App\Models\User $author){
    return view ('posts',[
        'posts' => $author->posts,
        'categories' => \App\Models\Category::all()
        ]);
});


Route::get('/about', function(){
    return view ('about');
});

Route::get('/contact', function(){
    return view ('contact');
});
