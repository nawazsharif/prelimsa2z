@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.course.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.courses.update", [$course->id]) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label class="required" for="title">{{ trans('cruds.course.fields.title') }}</label>
                    <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $course->title) }}" required>
                    @if($errors->has('title'))
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.course.fields.title_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="desc">{{ trans('cruds.course.fields.desc') }}</label>
                    <textarea class="form-control {{ $errors->has('desc') ? 'is-invalid' : '' }}" name="desc" id="desc">{{ old('desc', $course->desc) }}</textarea>
                    @if($errors->has('desc'))
                        <span class="text-danger">{{ $errors->first('desc') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.course.fields.desc_helper') }}</span>
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
