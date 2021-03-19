<!DOCTYPE html>
<html>
<head>
	<title>BackgroundQuestionsAndAnswere</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

</head>

<body>


<nav class="navbar navbar-inverse" style="width: 1500px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SurveyApp</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="{{route('admin.dashboard')}}">Home</a></li>


    </ul>
    <ul class="nav navbar-nav">
      <li ><a href="{{ URL::previous() }}">Back</a></li>


    </ul>

    <ul class="nav navbar-nav navbar-left ">

        <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span class="glyphicon glyphicon-log-in"></span> Logout</a>
            </a>
        </li>


          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
    </ul>
  </div>
</nav>
<div style="float: left;margin-left: 300px;">
    <table class="table table-bordered">
        <thead>
    <h4 class="text text-success text-center p-2">Answeres of {{$name->name}} <br><br> </h4>

    <hr>
          <tr>
            <th scope="col">Questionslist</th>
          </tr>
        </thead>
        <tbody>
            @php
             $questiiontitle=\App\Question::All();
            @endphp

    @foreach ($questiiontitle as $title )

    <tr><td>{{$title->question_title}}</td> </tr>

    @endforeach

        </tbody>
      </table>

</div>
<div style="float: left">
    <table class="table table-bordered">
    <thead>
        <h4 class="text text-success text-center p-2 invisible">Report of  <br><br> </h4>

    <hr class="invisible">
      <tr>

        <th scope="col">Answere</th>
      </tr>
    </thead>
    <tbody>

@foreach ($allQaandAns as $item)


@if ($item->answere_id==1)
<tr><td>দৃঢ়ভাবে একমত</td> </tr>
@elseif($item->answere_id==2)
<tr><td>একমত</td> </tr>
@elseif($item->answere_id==3)
<tr><td>সামান্য একমত</td> </tr>
@elseif($item->answere_id==4)
<tr><td>নিরপেক্ষ</td> </tr>
@elseif($item->answere_id==5)
<tr><td>কিছুটা দ্বিমত</td> </tr>
@elseif($item->answere_id==6)
<tr><td>দ্বিমত</td> </tr>
@elseif($item->answere_id==7)
<tr><td>দৃঢ়ভাবে দ্বিমত</td> </tr>
@else
<tr><td>nothhinng</td> </tr>
@endif
@endforeach
</tbody>
</table>
</div>

</body>
</html>
