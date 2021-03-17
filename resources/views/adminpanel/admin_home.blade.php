<!DOCTYPE html>
<html>
<head>
	<title>SurveyAdminPanel</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

</head>

<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SurveyApp</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>


    </ul>
    <ul class="nav navbar-nav navbar-right">

      <li>  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div></li>
    </ul>
  </div>
</nav>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @php
    //$tblhomeandtripdata=\App\HomeandTrip::where('user_id',Auth::User()->id)->orderby('created_at','asc')->get()

      $alluser=\App\User::all();
      @endphp
      @foreach ($alluser as $allusers)
      <tr>
        <td>{{$allusers->id}}</td>
        <td>{{$allusers->name}}</td>
        <td>{{$allusers->email}}</td>
        <td>{{$allusers->contact}}</td>

        <td><a href="allactivity/{{$allusers->id}}">View Details</a> </td>
      </tr>
      @endforeach





  </tbody>
</table>
</body>
</html>
