<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    public $table="answers";

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $fillable=[
        'stu_id',
        'question_id',
        'given_answer',
        'true_answer',
        'created_at',
        'updated_at'

    ];
}
