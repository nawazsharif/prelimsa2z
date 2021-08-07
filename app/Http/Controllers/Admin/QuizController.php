<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyQuizRequest;
use App\Http\Requests\StoreQuizRequest;
use App\Http\Requests\UpdateQuizRequest;
use App\Models\Course;
use App\Models\Question;
use App\Models\Quiz;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::with(['course'])->get();

        return view('admin.quizzes.index', compact('quizzes'));
    }

    public function create()
    {

        $courses = Course::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.quizzes.create', compact('courses'));
    }

    public function store(StoreQuizRequest $request)
    {
        $quiz = Quiz::create($request->all());

        return redirect()->route('admin.quizzes.index');
    }

    public function edit(Quiz $quiz)
    {
        $courses = Course::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $quiz->load('course');

        return view('admin.quizzes.edit', compact('courses', 'quiz'));
    }

    public function update(UpdateQuizRequest $request, Quiz $quiz)
    {
        $quiz->update($request->all());

        return redirect()->route('admin.quizzes.index');
    }

    public function show(Quiz $quiz)
    {
         $quiz->load('course');

        return view('admin.quizzes.show', compact('quiz'));
    }

    public function destroy(Quiz $quiz)
    {
        $quiz->delete();

        return back();
    }

    public function massDestroy(MassDestroyQuizRequest $request)
    {
        Quiz::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
    public function questionList(Quiz $quiz)
    {
        $questions = Question::where('quiz_id', $quiz->id)->get();
        return view('admin.quizzes.question-list', compact('questions','quiz'));
    }
    public function questionCreate(Quiz $quiz)
    {
        $quizzes = $quiz;
        return view('admin.quizzes.question-create', compact('quizzes'));
    }
}
