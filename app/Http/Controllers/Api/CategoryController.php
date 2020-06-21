<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Traits\ResponseJson;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CategoryController extends Controller
{
    use ResponseJson;

    public function index(){
        $categories = Category::select('id','name_'.app()->getLocale() .' as name','created_at','updated_at')->get();
        return response()->json(['categories'=>$categories]);
    }

    public function getCategoryById(Request $request){

        $category = Category::select('id','name_'.app()->getLocale() .' as name','created_at','updated_at')->find($request->id);
          
           if(!$category)
              return $this->returnError('404','this Category is not Found');

        return $this->returnData('category',$category,'200','we found the category');
    }

    public function setCategoryStatus(Request $request){

        $category = Category::select('id','name_'.app()->getLocale() .' as name','created_at','updated_at')->find($request->id);
          
           if(!$category)
              return $this->returnError('404','this Category is not Found');
              
              if($request->has('status')){
                  $category->active =$request->status;
                  $category->save();
                  return $this->returnSuccessMessage('we Update the category Status as you Wish');
                }
                
             return $this->returnError('412' ,'An Error Happend Please try Later Check the Category Id Or the Status');

    }









    public function index1(){
        $categories = Category::get();
        return view('index',['categories'=>$categories]);
    }
}
