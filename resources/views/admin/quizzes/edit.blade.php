@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.quiz.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.quizzes.update", [$quiz->id]) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="course_id">{{ trans('cruds.quiz.fields.course') }}</label>
                    <select class="form-control select2 {{ $errors->has('course') ? 'is-invalid' : '' }}" name="course_id" id="course_id">
                        @foreach($courses as $id => $entry)
                            <option value="{{ $id }}" {{ (old('course_id') ? old('course_id') : $quiz->course->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('course'))
                        <span class="text-danger">{{ $errors->first('course') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.quiz.fields.course_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="question_lenth">{{ trans('cruds.quiz.fields.question_lenth') }}</label>
                    <input class="form-control {{ $errors->has('question_lenth') ? 'is-invalid' : '' }}" type="number" name="question_lenth" id="question_lenth" value="{{ old('question_lenth', $quiz->question_lenth) }}" step="1" required>
                    @if($errors->has('question_lenth'))
                        <span class="text-danger">{{ $errors->first('question_lenth') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.quiz.fields.question_lenth_helper') }}</span>
                </div>
{{--                <div class="form-group">--}}
{{--                    <label class="required" for="unique">{{ trans('cruds.quiz.fields.unique') }}</label>--}}
{{--                    <input class="form-control {{ $errors->has('unique') ? 'is-invalid' : '' }}" type="text" name="unique" id="unique" value="{{ old('unique', $quiz->unique) }}" required>--}}
{{--                    @if($errors->has('unique'))--}}
{{--                        <span class="text-danger">{{ $errors->first('unique') }}</span>--}}
{{--                    @endif--}}
{{--                    <span class="help-block">{{ trans('cruds.quiz.fields.unique_helper') }}</span>--}}
{{--                </div>--}}
                <div class="form-group">
                    <label class="required" for="title">{{ trans('cruds.quiz.fields.title') }}</label>
                    <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('unique', $quiz->title) }}" required>
                    @if($errors->has('title'))
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.quiz.fields.unique_helper') }}</span>
                </div>

                <div class="form-group">
                    <label class="required" for="time">{{ trans('cruds.quiz.fields.time') }}</label>
                    <input class="form-control timepicker {{ $errors->has('time') ? 'is-invalid' : '' }}" type="text" name="time" id="time" value="{{ old('time', $quiz->time) }}" required>
                    @if($errors->has('time'))
                        <span class="text-danger">{{ $errors->first('time') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.quiz.fields.time_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="status">{{ trans('cruds.quiz.fields.status') }}</label>
                    <input class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" type="number" name="status" id="status" value="{{ old('status', $quiz->status) }}" step="1">
                    @if($errors->has('status'))
                        <span class="text-danger">{{ $errors->first('status') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.quiz.fields.status_helper') }}</span>
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
