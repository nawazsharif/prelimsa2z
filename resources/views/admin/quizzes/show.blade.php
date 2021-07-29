@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.show') }} {{ trans('cruds.quiz.title') }}
        </div>

        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.quizzes.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
                <table class="table table-bordered table-striped">
                    <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.quiz.fields.id') }}
                        </th>
                        <td>
                            {{ $quiz->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quiz.fields.title') }}
                        </th>
                        <td>
                            {{ $quiz->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quiz.fields.course') }}
                        </th>
                        <td>
                            {{ $quiz->course->title ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quiz.fields.question_lenth') }}
                        </th>
                        <td>
                            {{ $quiz->question_lenth }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quiz.fields.unique') }}
                        </th>
                        <td>
                            {{ $quiz->unique }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quiz.fields.time') }}
                        </th>
                        <td>
                            {{ $quiz->time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quiz.fields.status') }}
                        </th>
                        <td>
                            {{ $quiz->status }}
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.quizzes.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
            </div>
        </div>
    </div>



@endsection
