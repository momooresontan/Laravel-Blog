<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view("posts");
});

Route::get('/posts/{post}', function($slug){
    //Find a post by it's slug and pass it a view called post
    // if(!file_exists($path = __DIR__ . "/../resources/posts/{$slug}.php")){
    //     return redirect("/");
    //     //abort(404);
    // }
    // $post = cache()->remember("posts.{$slug}", 1200, fn() => file_get_contents($path));

    // return view("post", ["post" => $post]);
})->where("post", "[A-z_\-]+");