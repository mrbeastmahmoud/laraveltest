<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){

//return Posts::latest()->filter(request(['search','category','authors']))->paginate(5);

        return view('posts.index',[
           // "posts"=>Posts::latest()->filter()->get(),
             "posts"=>Posts::latest()->filter(request(['search','category','authors']))->paginate(6)->withQueryString()


        ]);
    }
//    public function getPosts(){ //create.blade.php your one filter fun
//     return Posts::latest()->filter()->get();
////        $posts = Posts::latest();
////        if (request('search')){
////            $posts->where('title','like','%'.request('search').'%')
////                ->orWhere('body','like','%'.request('search').'%');
////        }
////        return $posts->get();
//    }
public function showPosts(Posts $post){
    return view('posts.showPosts', [
        'post' => $post

    ]);
}
public function create(){
        return "hello ";
}
}
