<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Services\QuizService;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
  public $quizService;
    public function __construct(QuizService $quizService){
       
   $this->quizService= $quizService;


    }
    public function register(){
        return view('auth.register');
    }
    public function login(){
        return view('auth.login');
    }
    public function registerdata(RegisterRequest $request){
            if($this->quizService->registerdata($request)){
                return redirect()->back()->with('success','You Registered Successfully');
            }   else{
                return redirect()->back()->with('error',"Some error in the code ");
            }    
    }

    public function logindata(loginRequest $request){
    if($this->quizService->logindata($request))
{
             $user=Auth::user();
             return match($user->role){
                   'admin'=>redirect()->route('admin.dashboard'),
                    'user'=>redirect()->route('user.dashboard'),
                    default=>redirect()->back()->with('error', 'Unauthorized role.'),
             };

    
             }else{
                return redirect()->back()->with('error', 'Invalid credentials');
             }
}


public function logout(){
    if($this->quizService->logout()){
        return redirect()->route('main');
    }else{
        return redirect()->back();
    }

}


public function main(){
    if(Auth::check()){
        return match(Auth::user()->role){
       'admin'=>redirect()->route('admin.dashboard'),
       'user'=>redirect()->route('user.dashboard'),
       default =>abort(403,'Unauthorized '),
        };
    }
    return view('welcome');
}
}
