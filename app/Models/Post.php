<?php 
    namespace App\Models;
    use Illuminate\Database\Eloquent\ModelNotFoundException;

    class Post {
        public static function find($slug){
            base_path();
            if(!file_exists($path = resource_path("posts/{$slug}.php"))){
                throw new ModelNotFoundException();
                //abort(404);
            }
            return cache()->remember("posts.{$slug}", 1200, fn() => file_get_contents($path));
        }
    }
?>