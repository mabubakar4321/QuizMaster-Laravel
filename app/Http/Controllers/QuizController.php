<?php

namespace App\Http\Controllers;

use App\Http\Requests\quizzesRequest;
use App\Http\Requests\quizzesupdateReqeuest;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class QuizController extends Controller
{
public $categoryService;
    public function __construct(CategoryService $categoryService){
        $this->categoryService=$categoryService;
    }
 public function addquize(){

    $data=$this->categoryService->addquize();
   
    return view('admin.quizze.addquize',compact('data'));
 }

 public function addquizesss(quizzesRequest $request){
    if($this->categoryService->addquizesss($request)){
        return redirect()->route('quizshow');
    }else{
        return redirect()->back();
    }
 }

 public function showquizzes(){
   $data= $this->categoryService->showquizzes();
        return view('admin.quizze.showquizze',compact('data'));
    
 }

 public function deletequizes($id){
    if($this->categoryService->deletequizes($id)){
        return redirect()->back();
    }
 }

 public function updatequiz($id){
    $data=$this->categoryService->updatequiz($id);
    $cateogry=Category::all();
    return view('admin.quizze.updatequiz',compact('data','cateogry'));
 }
 public function updateallquiz( quizzesupdateReqeuest  $request,$id){
            if($this->categoryService->updateallquiz($request,$id)){
                return redirect()->route('quizshow');
            }else{
                return redirect()->back();
            }
 }
}
