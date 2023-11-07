<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;


class PostController extends Controller
{
    public function index(){

        return Post::latest()->filter(
            request(['search', 'category', 'author'])
        )->get();

        // return view("posts.index", [
        //     "posts" => Post::latest()->filter(
        //         request(['search', 'category', 'author'])
        //     )->paginate(),
        // ]);
    }

    public function show(Post $post){
        return view("posts.show", [
            "post" => $post
        ]);
    }
}
