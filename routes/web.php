<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserQuizController;
use Illuminate\Support\Facades\Route;
ROute::get('/',[AuthController::class,'main'])->name('main');
Route::middleware('guest')->group(function(){
    
Route::get('/register',[AuthController::class,'register'])->name('registers');
Route::post('/registerdata',[AuthController::class,'registerdata']);
Route::get('login',[AuthController::class,'login'])->name('login');
Route::post('login',[AuthController::class,'logindata']);


});
Route::middleware('auth')->group(function(){
Route::get('logout',[AuthController::class,'logout']);
});


Route::middleware(['auth','role:admin'])->group(function(){
Route::get('admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
ROute::get('addcategory',[AdminController::class,'addcategory']);
Route::post('addcategory',[AdminController::class,'addcategories']);
Route::get('showcateogries',[AdminController::class,'showcategory'])->name('showcateogry');
Route::get('deletecategory/{id}',[AdminController::class,'deletecategory']);
Route::get('editcateogry/{id}',[AdminController::class,'editcateogry']);
Route::post('updatecategory/{id}',[AdminController::class,'updatecategory']);
ROute::get('addquize',[QuizController::class,'addquize'])->name('addquize');
Route::post('addquizesss',[QuizController::class,'addquizesss']);
ROute::get('showquizzes',[QuizController::class,'showquizzes'])->name('quizshow');
ROute::get('deletequizes/{id}',[QuizController::class,'deletequizes']);
Route::get('updatequiz/{id}',[QuizController::class,'updatequiz']);
ROute::post('updateallquiz/{id}',[QuizController::class,'updateallquiz']);
Route::get('showquestions',[QuestionController::class,'question'])->name('showquestion');
Route::get('addquestions',[QuestionController::class,'addquestion']);
Route::post('addquestions',[QuestionController::class,'addsquestion']);
Route::get('/admin/questions/{id}', [OptionController::class, 'create'])->name('options.create');
Route::post('/admin/questions/{id}', [OptionController::class, 'store'])->name('options.store');
  







});

Route::middleware(['auth','role:user'])->group(function(){
Route::get('user/dashboard',[UserController::class,'dashboard'])->name('user.dashboard');

Route::get('/quiz', [UserQuizController::class, 'showQuiz'])->name('quiz.show');
   Route::post('/quiz/submit', [UserQuizController::class, 'submitQuiz'])->name('quiz.submit');
});

