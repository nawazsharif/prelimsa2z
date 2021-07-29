<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizStudent extends Model
{
    use HasFactory;
    public $table = 'quiz_student';

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'quiz_id',
        'student_id',
        'result',
        'created_at',
        'updated_at'
    ];
}
