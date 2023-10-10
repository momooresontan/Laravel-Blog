<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            "name"=>"Personal",
            "slug"=>"personal",    
        ]);
        $family = Category::create([
            "name"=>"Family",
            "slug"=>"family",    
        ]);
        $work = Category::create([
            "name"=>"Work",
            "slug"=>"work",    
        ]);

        Post::create([
            "user_id"=>$user->id,
            "category_id"=>$family->id,
            "title"=>"My Family Post",    
            "slug"=>"my-first-post",    
            "excerpt"=>"Integer leo mi, consectetur eget erat ac, gravida fringilla mauris",    
            "body"=>"Integer leo mi, consectetur eget erat ac, gravida fringilla mauris. Aliquam libero dui, venenatis rhoncus vestibulum ut, semper sed ex. Praesent suscipit tincidunt nibh vel sollicitudin. Fusce malesuada, est finibus porttitor pellentesque, turpis sapien aliquam nisl, eget sagittis odio libero vitae tortor. Quisque quis libero malesuada, rutrum ex sed, mollis velit. Aenean libero erat, sagittis quis tristique eget, suscipit at est. Sed cursus tortor et lorem pulvinar, at facilisis risus eleifend. Nam laoreet tempor blandit.",    
        ]);
        Post::create([
            "user_id"=>$user->id,
            "category_id"=>$work->id,
            "title"=>"My Work Post",    
            "slug"=>"my-work-post",    
            "excerpt"=>"Integer leo mi, consectetur eget erat ac, gravida fringilla mauris",    
            "body"=>"Integer leo mi, consectetur eget erat ac, gravida fringilla mauris. Aliquam libero dui, venenatis rhoncus vestibulum ut, semper sed ex. Praesent suscipit tincidunt nibh vel sollicitudin. Fusce malesuada, est finibus porttitor pellentesque, turpis sapien aliquam nisl, eget sagittis odio libero vitae tortor. Quisque quis libero malesuada, rutrum ex sed, mollis velit. Aenean libero erat, sagittis quis tristique eget, suscipit at est. Sed cursus tortor et lorem pulvinar, at facilisis risus eleifend. Nam laoreet tempor blandit.",    
        ]);



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
