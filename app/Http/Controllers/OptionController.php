<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Question;
use Illuminate\Http\Request;

class OptionController extends Controller
{
     public function create($id)
    {
        $question = Question::findOrFail($id);
        return view('admin.questions.options',compact('question'));
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'options' => 'required|array|min:1',
            'options.*' => 'required|string',
            'correct' => 'array'
        ]);

        foreach ($request->options as $key => $value) {
            Option::create([
                'question_id' => $id,
                'option_text' => $value,
                'is_correct' => in_array($key, $request->correct ?? [])
            ]);
        }

        return redirect()->back();
    }
}

