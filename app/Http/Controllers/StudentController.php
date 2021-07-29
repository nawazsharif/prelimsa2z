<?php

namespace App\Http\Controllers;

use Validetion;
use App\Models\Quiz;
use App\Models\Course;
use App\Models\Student;
use App\Models\Question;
use App\Models\QuizStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreStudentRequest;

class StudentController extends Controller
{
    public function index(){
        $courses = Course::all();
        return view('front.dashboard',\compact('courses'));
    }


    public function display(Course $course)
    {
        $quizes = $course->with('allQuizes')->get();
        return view('front.quizList',\compact('quizes'));
    }
    public function displayQuiz($id)
    { 
        $quiz = Quiz::find($id);
        if($quiz){
            $checker=QuizStudent::where('student_id',auth()->user()->id)->where('quiz_id',$quiz->id)->count();
            if ($checker>0) {
    
                $selectIdForQuestion=Quiz::where('id',$quiz->id)->value('id');
                $selectQuestions=Question::Join('answers','answers.question_id', 'questions.id')->where('answers.stu_id', intval(auth()->user()->id))->where('quiz_id',$selectIdForQuestion)->get();
                
                $toatal_mark = QuizStudent::where('quiz_id',$quiz->id)->where('student_id',auth()->user()->id)->first();
    
               
                return view('front.showAnswer')->with('questions',$selectQuestions)->with('result',$toatal_mark->result);
            }else{
                $student = QuizStudent::create([
                'student_id' => auth()->user()->id,
                'quiz_id' => $quiz->id
                ]);
    
                $student_id=auth()->user()->id;
                $findcourse= Quiz::where('id',$quiz->id)->value('id');
                $findtime= Quiz::where('id',$quiz->id)->value('time');
                $course= Quiz::where('id',$quiz->id)->value('title');
                $quizId = $quiz->id;
                $questions=Question::where('quiz_id',$quiz->id)->get();
                // dd($questions);
                return view('front.showQuestion')->with('quizId',$quizId)->with('questions', $questions)->with('student_id',$student_id)->with('course',$course)->with('time',$findtime);
            }
        }
       else{
           print_r('Quis is not published yeat');
       }
    }

}
