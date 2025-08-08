<?php

namespace App\Repositories;

use App\Models\User;
use Auth;
use Hash;

class QuizRepository
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        
    }

    public function registerdata($request){
        return User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
    }

    public function logindata($request){
        $credentials=[
            'email'=>$request->email,
             'password'=>$request->password,
        ];
        if(Auth::attempt( $credentials)){
            return true;
        }else{
            return false;
        }
    }

    public function logout(){
       
        Auth::logout();
    }
}
