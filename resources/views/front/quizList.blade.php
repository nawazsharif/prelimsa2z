
@extends('layouts.front')
@section('content')
    @include('component.front.subHeader',['title'=>'All Quizzes','desc'=>'Participate and Enjoy!!'])
<div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    @foreach($quizes as $quize)
                    <div class="post-preview">
                        <a href="/quiz/{{$quize->id}}">
                            <h2 class="post-title">{{$quize->title}}</h2>
                            <!-- <h3 class="post-subtitle">{{$quize->desc}}</h3> -->
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
