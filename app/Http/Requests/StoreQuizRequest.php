<?php

namespace App\Http\Requests;

use App\Models\Quiz;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreQuizRequest extends FormRequest
{

    public function rules()
    {
        return [
            'question_lenth' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'unique' => [
                'string',
                'required',
            ],
            'title' => [
                'string',
                'required',
            ],
            'time' => [
                'required'
            ],
            'status' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
