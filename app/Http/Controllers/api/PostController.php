<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function api(){
      $posts = Post::with('category')->paginate(3);
      
      return $posts;
    }

    public function index($id){
      $singolPost = Post::where('id', $id)->first() ;
      
      return $singolPost;
    }
}
