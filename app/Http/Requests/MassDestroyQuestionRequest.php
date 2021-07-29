<?php

namespace App\Http\Requests;

use App\Models\Question;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyQuestionRequest extends FormRequest
{


    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:questions,id',
        ];
    }
}