<?php 
    namespace App\Models;
    use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

    class Post {
        public static function find($slug){
            base_path();
            if(!file_exists($path = resource_path("posts/{$slug}.php"))){
                throw new ModelNotFoundException();
                //abort(404);
            }
            return cache()->remember("posts.{$slug}", 1200, fn() => file_get_contents($path));
        }
        public static function all(){
            $files = File::files(resource_path("posts/"));

            return array_map(fn($file) => $file->getContents(), $files);
        }
    }
?>