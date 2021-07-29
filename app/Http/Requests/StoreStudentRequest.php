<?php

namespace App\Http\Requests;

use App\Models\Student;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreStudentRequest extends FormRequest
{
    public function rules()
    {
        return [
            'mobile'=>'required|numeric|unique:students|digits:11',
            'password' => 'required|string'
        ];
    }
}