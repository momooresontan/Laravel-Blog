<?php

use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminPostController;
use App\Services\Newsletter;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;


Route::get('/', [PostController::class, 'index'])->name("home");

Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::post('newsletter', NewsletterController::class);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store']);

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('admin/posts/create', [PostController::class, 'create'])->middleware('admin');
Route::post('admin/posts', [PostController::class, 'store'])->middleware('admin');

Route::get('admin/posts/', [AdminPostController::class, 'index'])->middleware('admin');
Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit'])->middleware('admin');


// Route::get('/categories/{category:slug}', function(Category $category){
//     return view("posts", [
//         "posts" => $category->posts,
//         "currentCategory" => $category,
//         "categories" => Category::all(),
//     ]);
// })->name("category");

// Route::get('/authors/{author:username}', function(User $author){
//     return view("posts.index", [
//         "posts" => $author->posts,
//     ]);
// });
