@extends('layouts.front')

@section('script')
<script type="text/javascript">

</script>
@endsection

@section('content')
<body style="background-color: #63e9ab">
    <div class="container">
        <h2 style="text-align: center;">Review Question</strong></h2>

        @php
        $correct_ans = $questions->filter(function ($item) {
                return $item->true_answer == $item->given_answer;
            });
            $wrong_ans = $questions->filter(function ($item) {
                return $item->true_answer != $item->given_answer;
            });
        @endphp
        <p>Total Answer : {{$questions->count()}}</p>
        <p>Corrent answer : {{$correct_ans->count()}}</p>
        <p>Wrong Ans: {{$wrong_ans->count()}}</p>


        <p>Mark : {{$result}}</p> 
  		@foreach($questions as $question)
            <div class="">
                    <div class="">
                    	<!-- <p>{{$question->id}}</p> -->
                    	<input type="hidden" name="questionId" id="question" value="{{$question->id}}">

                        <input type="hidden" name="true_answer"  value="{{$question->answer}}">

                        <table class="table bg-warning">
                          <tbody>
                            <div class="form-group">
                                
                            <tr class="bg-warning">
                              <td><strong>Question : </strong></td>
                              <td><input type="text" class="form-control" name="question" value="{{$question->question}}" readonly></td>

                            </tr>
                            </div>

                            <div class="form-group">
                            
                            <tr class="@if($question->given_answer ==$question->choice_1){{__('bg-danger')}}@else{{__('bg-warning')}}@endif">
                              <td><strong>Choice1 : </strong></td>
                              <td><input name="choice1" class="form-control"  value="{{$question->choice_1}}" type="text" readonly></td>
                            </tr>
                          </div>

                          <div class="form-group">
                            <tr class="@if($question->given_answer==$question->choice_2){{__('bg-danger')}}@else{{__('bg-warning')}}@endif">
                              <td><strong>Choice2 : </strong></td>
                              <td><input name="choice2" class="form-control" value="{{$question->choice_2}}" type="text" readonly></td>
                            </tr>
                          </div>

                          <div class="form-group">
                            <tr class="@if($question->given_answer ==$question->choice_3){{__('bg-danger')}}@else{{__('bg-warning')}}@endif">
                              <td><strong>Choice3 : </strong></td>
                              <td><input name="choice3" class="form-control" value="{{$question->choice_3}}" type="text" readonly></td>
                            </tr>
                          </div>

                          <div class="form-group">
                            <tr class="@if($question->given_answer==$question->choice_4){{__('bg-danger')}}@else{{__('bg-warning')}}@endif">
                              <td><strong>Choice4 : </strong></td>
                              <td><input name="choice4" class="form-control" value="{{$question->choice_4}}" type="text" readonly></td>
                            </tr>
                          </div>

                          <div class="form-group">
                            <tr class="bg-success">
                              <td><strong>Answer : </strong></td>
                              <td><input name="answer" class="form-control" value="{{$question->answer}}" type="text" readonly></td>
                            </tr>
                          </div>
                          </tbody>
                        </table>
                    </div>
                
            </div><br>
         @endforeach






<a href="/dashboard"><button type="button" name="ReviewDone" class="btn btn-primary btn-block">Review Done</button></a><br><br>

</body>




@endsection
