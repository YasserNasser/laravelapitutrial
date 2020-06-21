<?php

namespace App\Http\Controllers\Api;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::get();
        return response()->json(['categories'=>$categories]);
    }
    public function index1(){
        $categories = Category::get();
        return view('index',['categories'=>$categories]);
    }
}
