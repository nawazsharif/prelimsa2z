<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Student;
use App\Models\QuizStudent;
use Illuminate\Http\Request;


class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if ($request->ajax()) {
            $answer=Answer::create([
                'stu_id' => $request->input('student_id'),
                'question_id' => $request->input('question_id'),
                'given_answer' => $request->input('answer'),
                'true_answer' => $request->input('true_answer')
            ]);
            if ($request->input('answer')==$request->input('true_answer')) {
                $insert=QuizStudent::where('student_id',$request->input('student_id'))->where('quiz_id',$request->input('quiz_id'))->increment('result');
            }
            else{
                $insert=QuizStudent::where('student_id',$request->input('student_id'))->where('quiz_id',$request->input('quiz_id'))->first();
                $result = $insert->result - (.5);
                $insert->result = $result;
                $insert->save();
            }
            return response($answer);
        }else{
            return "ajax not done";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
