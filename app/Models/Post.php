<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    public $title;
    public $excerpt;
    public $slug;
    public $body;
    public  function __construct($title,
    $excerpt,
     $slug,$body){
   $this->title=$title;
   $this->excerpt=$excerpt;
   $this->slug=$slug;
   $this->body=$body;
    }
    /**
     * @throws \Exception
     */

public static function findAll(){
    return cache()->rememberForever('posts.all',function (){
        return collect(File::files(resource_path('files')))
            ->map(fn($file)=>YamlFrontMatter::parseFile($file))
            ->map(fn ($document) =>new Post(
                $document->title,
                $document->excerpt,
                $document->slug,
                $document->body()
            )
            );
    });

}

    /**
     * @throws \Exception
     */
    public  static function find($slug){

       $post =static::findAll()->firstWhere('slug',$slug);
       if (!$post){
           throw new ModelNotFoundException();
       }
       return $post;

    }
}
