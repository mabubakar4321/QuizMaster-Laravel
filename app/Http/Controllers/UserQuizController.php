<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Question;
use Illuminate\Http\Request;

class UserQuizController extends Controller
{
     public function showQuiz()
    {
        $questions = Question::with('options')->get(); // Eager loads options
        return view('user.quiz', compact('questions'));
    }
 public function submitQuiz(Request $request)
    {
        $data = $request->all();
        $correct = 0;
        $total = count($data['answers']); // number of questions answered

        foreach ($data['answers'] as $question_id => $selected_option_id) {
            $option = Option::where('id', $selected_option_id)
                            ->where('question_id', $question_id)
                            ->first();

            if ($option && $option->is_correct) {
                $correct++;
            }
        }

        $incorrect = $total - $correct;

        return view('user.result', compact('correct', 'incorrect', 'total'));
    }
}

