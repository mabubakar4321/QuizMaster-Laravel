<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\updateRequest;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public $categoryService;
    public function __construct(CategoryService $categoryService){
        $this->categoryService=$categoryService;
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function addcategory(){
        return view('admin.addcategory');
    }
    public function addcategories(CategoryRequest $request){
     if($this->categoryService->addcategories($request)){
                return redirect()->route('showcateogry');
            }   else{
                return redirect()->back();
            }  
    }

    public function showcategory(){
       $data= $this->categoryService->showcategory();
       return view('admin.showcategory',compact('data'));
    }
    public function deletecategory($id){
       if( $this->categoryService->deletecategory($id)){
        return redirect()->back();
       }else{
        return redirect()->back();
       }
    }

    public function editcateogry($id){
        $data=$this->categoryService->editcateogry($id);
        return view('admin.updatecateogry',compact('data'));
    }

    public function updatecategory(updateRequest  $request,$id){
      if(  $this->categoryService->updatecategory($request,$id)){
        return redirect()->route('showcateogry');
      }else{
        return redirect()->bac();
      }
    }

}
