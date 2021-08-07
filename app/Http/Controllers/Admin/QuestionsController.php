<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyQuestionRequest;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use App\Models\Question;
use App\Models\Quiz;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class QuestionsController extends Controller
{
    public function index()
    {

        $questions = Question::with(['quiz'])->get();

        return view('admin.questions.index', compact('questions'));
    }

    public function create()
    {
        $quizzes = Quiz::all()->pluck('unique', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.questions.create', compact('quizzes'));
    }

    public function store(StoreQuestionRequest $request)
    {
        $question = Question::create($request->all());

        return redirect()->route('admin.quizzes.questions',[$request->quiz_id]);
    }

    public function edit(Question $question)
    {

        $quizzes = Quiz::all()->pluck('question_lenth', 'id')->prepend(trans('global.pleaseSelect'), '');

        $question->load('quiz');

        return view('admin.questions.edit', compact('quizzes', 'question'));
    }

    public function update(UpdateQuestionRequest $request, Question $question)
    {
        $question->update($request->all());

        return redirect()->route('admin.questions.index');
    }

    public function show(Question $question)
    {

        $question->load('quiz');

        return view('admin.questions.show', compact('question'));
    }

    public function destroy(Question $question)
    {
        $question->delete();

        return back();
    }

    public function massDestroy(MassDestroyQuestionRequest $request)
    {
        Question::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
