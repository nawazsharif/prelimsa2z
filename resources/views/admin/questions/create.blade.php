@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.create') }} {{ trans('cruds.question.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.questions.store") }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="required" for="quiz_id">{{ trans('cruds.question.fields.quiz') }}</label>
                    <select class="form-control select2 {{ $errors->has('quiz') ? 'is-invalid' : '' }}" name="quiz_id" id="quiz_id" required>
                        @foreach($quizzes as $id => $entry)
                            <option value="{{ $id }}" {{ old('quiz_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('quiz'))
                        <span class="text-danger">{{ $errors->first('quiz') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.question.fields.quiz_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="question">{{ trans('cruds.question.fields.question') }}</label>
                    <input class="form-control {{ $errors->has('question') ? 'is-invalid' : '' }}" type="text" name="question" id="question" value="{{ old('question', '') }}" required>
                    @if($errors->has('question'))
                        <span class="text-danger">{{ $errors->first('question') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.question.fields.question_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="choice_1">{{ trans('cruds.question.fields.choice_1') }}</label>
                    <input class="form-control {{ $errors->has('choice_1') ? 'is-invalid' : '' }}" type="text" name="choice_1" id="choice_1" value="{{ old('choice_1', '') }}" required>
                    @if($errors->has('choice_1'))
                        <span class="text-danger">{{ $errors->first('choice_1') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.question.fields.choice_1_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="choice_2">{{ trans('cruds.question.fields.choice_2') }}</label>
                    <input class="form-control {{ $errors->has('choice_2') ? 'is-invalid' : '' }}" type="text" name="choice_2" id="choice_2" value="{{ old('choice_2', '') }}" required>
                    @if($errors->has('choice_2'))
                        <span class="text-danger">{{ $errors->first('choice_2') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.question.fields.choice_2_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="choice_3">{{ trans('cruds.question.fields.choice_3') }}</label>
                    <input class="form-control {{ $errors->has('choice_3') ? 'is-invalid' : '' }}" type="text" name="choice_3" id="choice_3" value="{{ old('choice_3', '') }}" required>
                    @if($errors->has('choice_3'))
                        <span class="text-danger">{{ $errors->first('choice_3') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.question.fields.choice_3_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="choice_4">{{ trans('cruds.question.fields.choice_4') }}</label>
                    <input class="form-control {{ $errors->has('choice_4') ? 'is-invalid' : '' }}" type="text" name="choice_4" id="choice_4" value="{{ old('choice_4', '') }}" required>
                    @if($errors->has('choice_4'))
                        <span class="text-danger">{{ $errors->first('choice_4') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.question.fields.choice_4_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="answer">{{ trans('cruds.question.fields.answer') }}</label>
                    <input class="form-control {{ $errors->has('answer') ? 'is-invalid' : '' }}" type="text" name="answer" id="answer" value="{{ old('answer', '') }}" required>
                    @if($errors->has('answer'))
                        <span class="text-danger">{{ $errors->first('answer') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.question.fields.answer_helper') }}</span>
                </div>
                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        {{ trans('global.save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>



@endsection
