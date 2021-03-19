<!DOCTYPE html>
<html>
<head>
	<title>UserallData</title>
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
      <li class="active"><a href="{{route('admin.dashboard')}}">Home</a></li>


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

<table class="table table-bordered">
    <thead>
<h4 class="text text-success text-center p-2">Report of {{$name->name}} <br><br>[ Home And Trip ] </h4>

<hr>
      <tr>
        <th scope="col">start_date</th>
        <th scope="col">start_time</th>
        <th scope="col">end_time</th>
        <th scope="col">task</th>
        <th scope="col">multitaask</th>
        <th scope="col">tripno</th>
        <th scope="col">transport</th>
        <th scope="col">destination</th>
        <th scope="col">adresses</th>
        <th scope="col">cost</th>
        <th scope="col">ticketprice</th>
        <th scope="col">reason_cost</th>
        <th scope="col">q1value</th>
        <th scope="col">q2value</th>
        <th scope="col">q3value</th>
        <th scope="col">q4value</th>
        <th scope="col">q5value</th>
        <th scope="col">q6value</th>
        <th scope="col">q7value</th>
        <th scope="col">q8value</th>
      </tr>
    </thead>
    <tbody>





            @foreach ($tblhomeandtripdata as $tblhomeandtripdatas)

            <tr>

                <td>{{$tblhomeandtripdatas->created_at->format('m/d/Y')}}</td>
                <td>{{$tblhomeandtripdatas->starttime}}</td>
                <td>{{$tblhomeandtripdatas->endtime}}</td>
                <td>{{$tblhomeandtripdatas->task}}</td>

                <td>{{$tblhomeandtripdatas->multitaask}}</td>
                @if($tblhomeandtripdatas->tripno==0)
                <td></td>
                @else
                <td>{{$tblhomeandtripdatas->tripno}}</td>
                @endif


                <td>{{$tblhomeandtripdatas->transport}}</td>
                <td>{{$tblhomeandtripdatas->destination}}</td>
                <td>{{$tblhomeandtripdatas->adresses}}</td>
                <td>{{$tblhomeandtripdatas->cost}}</td>
                <td>{{$tblhomeandtripdatas->ticketprice}}</td>
                <td>{{$tblhomeandtripdatas->reason_cost}}</td>
                <td>{{$tblhomeandtripdatas->q1value}}</td>
                <td>{{$tblhomeandtripdatas->q2value}}</td>
                <td>{{$tblhomeandtripdatas->q3value}}</td>
                <td>{{$tblhomeandtripdatas->q4value}}</td>
                <td>{{$tblhomeandtripdatas->q5value}}</td>
                <td>{{$tblhomeandtripdatas->q6value}}</td>
                <td>{{$tblhomeandtripdatas->q7value}}</td>
                <td>{{$tblhomeandtripdatas->q8value}}</td>
              </tr>




            @endforeach





    </tbody>
  </table>
  <table class="table table-bordered">
    <thead>
<h4 class="text text-success text-center p-2">[ Only Home Activity ] </h4>
      <tr>
        <th>start_date</th>
        <th scope="col">start_time</th>
        <th scope="col">end_time</th>
        <th scope="col">task</th>
        <th scope="col">multitaask</th>
        <th scope="col">cost</th>
        <th scope="col">reason_cost</th>
        <th scope="col">copartner</th>

      </tr>
    </thead>
    <tbody>

         @foreach ($tblhomedata as $tbldatas)
            <tr>
            <td>{{$tbldatas->created_at->format('m/d/Y')}}</td>
            <td>{{$tbldatas->start_time}}</td>
            <td>{{$tbldatas->end_time}}</td>
            <td>{{$tbldatas->task}}</td>
            <td>{{$tbldatas->multitaask}}</td>
            <td>{{$tbldatas->cost}}</td>
            <td>{{$tbldatas->reason_cost}}</td>
            <td>{{$tbldatas->copartner}}</td>


            </tr>

            @endforeach



    </tbody>
  </table>
</body>
</html>
