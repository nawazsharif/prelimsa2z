<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesTable extends Migration
{
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('question_lenth');
            $table->string('unique');
            $table->string('title');
            $table->time('time');
            $table->integer('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
