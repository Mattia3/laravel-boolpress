<?php

namespace App\Http\Controllers\api;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(){
      $categories = Category::all();
      return response()->json($categories) ;
    }
}
