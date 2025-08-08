<?php

namespace App\Http\Controllers;

use App\Http\Requests\questionRequest;
use App\Models\Question;
use App\Models\Quizze;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public function question(){
        $questions=Question::all();
        $quizze=Quizze::all();
        return view('admin.questions.showquestions',compact('questions','quizze'));
    }

     public function addquestion(){
        $quiz=Quizze::all();
        return view('admin.questions.addquestion',compact('quiz'));
    }
    public $categoryService;
       public function __construct(CategoryService $categoryService){
            $this->categoryService=$categoryService;
       }

       public function addsquestion(questionRequest $request){
        $question=Question::create([
            'question_text'=>$request->questiontext,
            'quiz_id'=>$request->quiz_id,
        ]);
        return redirect()->route('showquestion');
       }
       
}
