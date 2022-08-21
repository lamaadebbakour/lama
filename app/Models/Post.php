<?php
namespace App\Models;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
class Post{

    public $title;
    public $date;
    public $slug;
    // public $excerpt;
    // public $body;
    // public $image;

    public function __construct($title, $slug, $date)
    {
        $this->title = $title;
        $this->slug = $slug;
        // $this->excerpt = $excerpt;
        $this->date = $date;
        // $this->image = $image;
        // $this->body = $body;
    }

public static function all(){
    $files=File::files(__DIR__."/../../resources/posts/");

    return  array_map(function($file){

return $file->getContents();

    },$files);
}



    public static function find($slug){
        if(! file_exists($path=__DIR__."/../../resources/posts/{$slug}.html")){

            return redirect("/");

        }
        return cache()->remember("post.{$slug}",10,fn()=>file_get_contents($path));
    }

}
