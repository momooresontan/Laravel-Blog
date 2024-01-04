<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

require_once('C:\Users\Sontan Momooreoluwa\Desktop\Laravel Projects\blog\vendor\autoload.php');

Route::post('newsletter', function () {
    request()->validate([ 'email' => 'required|email' ]);
    $mailchimp = new \MailchimpMarketing\ApiClient();

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us11'
    ]);
    // $response = $mailchimp->lists->addListMember('e08a118052', [
    //     'email_address' => 'momooresontan@yahoo.com',
    //     'status' => 'subscribed'
    // ]);
    // ddd($response);
    try{
        $response = $mailchimp -> lists -> addListMember('e08a118052', [
            'email_address' => request('email'),
            'status' => 'subscribed'
        ]);
    } catch(\Exception $e){
        \Illuminate\Validation\ValidationException::withMessages([
            'email' => 'This email could not be added to our newsletter list'
        ]);
    }

    return redirect('/')->with('success', 'You are now signed up for our newsletter');
});

Route::get('/', [PostController::class, 'index'])->name("home");

Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store']);

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

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
