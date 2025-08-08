<?php

namespace App\Services;

use App\Repositories\QuizRepository;

class QuizService
{
    public $quizRepository;
    public function __construct(QuizRepository $quizRepository)
    {
        $this->quizRepository= $quizRepository;
    }

    public function registerdata($request){
        return $this->quizRepository->registerdata($request);
    }
    public function  logindata($request){
        return $this->quizRepository->logindata($request);
    }

    public function logout(){
        return $this->quizRepository->logout();
    }
}
