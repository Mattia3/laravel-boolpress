<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function api(Request $request){
      $category = $request ->query('category');

      $posts = Post::with('category')
      ->paginate(5);
     
      // if($category){
      //   $posts = $posts->where("category_id", $category);
      //   return response()->json($posts);
      // }

      return response()->json($posts);
    }

    public function index($id){
      $singolPost = Post::where('id', $id)->first() ;
      
      return $singolPost;
    }

    
}
