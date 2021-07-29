<?php

namespace App\Http\Requests;

use App\Models\Question;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreQuestionRequest extends FormRequest
{


    public function rules()
    {
        return [
            'quiz_id' => [
                'required',
                'integer',
            ],
            'question' => [
                'string',
                'required',
            ],
            'choice_1' => [
                'string',
                'required',
            ],
            'choice_2' => [
                'string',
                'required',
            ],
            'choice_3' => [
                'string',
                'required',
            ],
            'choice_4' => [
                'string',
                'required',
            ],
            'answer' => [
                'string',
                'required',
            ],
        ];
    }
}