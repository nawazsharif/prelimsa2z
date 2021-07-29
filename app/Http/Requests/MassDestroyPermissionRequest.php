<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Permission;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPermissionRequest extends FormRequest  {


    public function rules()
    {
        



        return [
        'ids' => 'required|array',
            'ids.*' => 'exists:permissions,id',
        ];
        
    }

}
