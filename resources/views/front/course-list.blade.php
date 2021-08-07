
@extends('layouts.front')
@section('content')
    @include('component.front.subHeader',['title'=>'All Course','desc'=>'Test your Knowledge'])

    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                @foreach($courses as $course)
                    <div class="post-preview">
                        <a href="/course/{{$course->id}}">
                            <h2 class="post-title">{{$course->title}}</h2>
                            <h3 class="post-subtitle">{{$course->desc}}</h3>
                        </a>
                        <!-- <p class="post-meta">
                            Posted by
                            <a href="#!">Start Bootstrap</a>
                            on September 24, 2021
                        </p> -->
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                @endforeach
            </div>
        </div>
    </div>
@endsection
