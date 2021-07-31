@extends('layouts.front')

@push('scripts')

<script type="text/javascript">
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        $('.ansform').on('submit',function(e){
            var form = $(this);
            var submit = form.find("[type=submit]");
            var submitOriginalText = submit.attr("value");

            e.preventDefault();
            var data = form.serialize();
            var url = form.attr('action');
            var post = form.attr('method');
            $.ajax({
                type : post,
                url : url,
                data :data,
                success:function(data){
                   submit.attr("value", "Submitted");
                },
                beforeSend: function(){
                   submit.attr("value", "Loading...");
                   submit.prop("disabled", true);
                },
                error: function() {
                    submit.attr("value", submitOriginalText);
                    submit.prop("disabled", false);
                   // show error to end user
                }
            })
        })
    </script>


<!-- script for time limitation of exam -->
<script type="text/javascript">
var timeoutHandle;
function countdown(minutes) {
    let newArray = minutes.split(':');
    var minutes = parseInt(newArray[0]*60)+parseInt(newArray[1]*1);
    var seconds = 60;
    var mins = minutes
    function tick() {
        var counter = document.getElementById("timer");
        var current_minutes = mins-1
        seconds--;
        counter.innerHTML =
        current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
        if( seconds > 0 ) {
            timeoutHandle=setTimeout(tick, 1000);
        } else {

            if(mins > 1){

               // countdown(mins-1);   never reach “00″ issue solved:Contributed by Victor Streithorst
               setTimeout(function () { countdown(mins - 1); }, 1000);

            }
        }
    }
    tick();
}

countdown('{{$time}}');

</script>

<!-- script for disable url -->
<script type="text/javascript">

    var time= '{{$time}}';
    let newArray = time.split(':');
    var minutes = parseInt(newArray[0]*60)+parseInt(newArray[1]*1);
    var realtime = minutes*60000;
    setTimeout(function () {
        alert('Time Out');
        window.location.href= '/dashboard';},
   realtime);
  
    $('#done_btn').click(function() {
        location.reload();
    });
    
</script>

@endpush



@section('content')
    <div>
        <div class="d-flex justify-content-between">
        
            <h1 class="col-lg-offset-4" style="color: red;"><span style="background-color:seagreen;color: white;border-radius: 5px"><b>  Examination on {{$course}}  </b></span></h1>
            <nav class="col-lg-1 pull-right">
            <div class="sidebar-nav-fixed affix">
                <h1><b>Time <span id="timer" style="color: red">0.00</span></b></h1><br>
            </div>
            </nav>
        </div>  
         <div class="col-md-6 offset-md-3 m-4" style="background-color: white">
        
        @foreach($questions as $question)
            <div class="col-md-6 col-lg-8 col-sm-6 col-lg-offset-2">
                <form method="post" action="{{route('answer.store')}}" class="ansform">
                	{{ csrf_field() }}

                    <h3>{{$question->question}} ?</h3>
                    <div class="col-lg-offset-1">
                        <input type="hidden" name="question_id" value="{{$question->id}}">
                        <input type="hidden" name="student_id" value="{{$student_id}}">
                        <input type="hidden" name="true_answer" value="{{$question->answer}}">
                        <input type="hidden" name="quiz_id" value="{{$quizId}}">
                        <input name="answer" value="{{$question->choice_1}}" type="radio"> {{$question->choice_1}} <br>
                        <input name="answer" value="{{$question->choice_2}}" type="radio">{{$question->choice_2}}<br>
                        <input name="answer" value="{{$question->choice_3}}" type="radio">{{$question->choice_3}}<br>
                        <input name="answer" value="{{$question->choice_4}}" type="radio">{{$question->choice_4}}<br>
                        <input type="submit" name="submit" value="submit" class="btn btn-primary" id="submitbtn">
                    </div>
                 </form>
            </div>
         @endforeach
         <div class="text-center my-4">
         <button type="button" id="done_btn" class="btn btn-success text-center">Done</button>

         </div>
        </div>
    </div>

@endsection

	 
