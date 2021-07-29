<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Role;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyRoleRequest extends FormRequest  {


 
public function rules()
{
    



return [
'ids' => 'required|array',
    'ids.*' => 'exists:roles,id',
];
    
}

}