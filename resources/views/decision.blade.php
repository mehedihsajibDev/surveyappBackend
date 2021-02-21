<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="refresh" content="300">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>survey app</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js">
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js">
  </script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.1/js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.1/css/bootstrap-datepicker.min.css" />
  <link rel="stylesheet" href="{{asset('backend')}}/css/style.css">






  <style>
    body {
      background-color: #17a2b8;
    }

    .text-info {
      color: #e2e5e6 !important;
    }
  </style>
</head>

<body>
  <div>
    <a href="{{ url('/logout') }}"
    onclick="event.preventDefault();
             document.getElementById('logout-form').submit();"style="color:white">
    Logout
</a>
<form id="logout-form" action="{{ url('/logout') }}" method="POST">
    {{ csrf_field() }}
</form>
  </div>
  <div id="login">
    <h3 class="text-center text-white pt-5"></h3>
    <div class="container">
      <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
          <div id="login-box" class="col-md-12 ">
  <h4 class="text-center text-infolink mt-5">Household Daily Trip Entry</h4><hr>


            <div class="container" >

                <div class='col-sm-5' style="position: absolute;width:300px;height: 100px;top: 0;left: 0;right: 0;bottom: 0; margin: auto;">
                  <h4 class="text-center text-success">Were you home whole day?</h4><br>
                  <div class="">
        <div class="action-bar" style="margin-bottom: 40px;display: block;text-align: center;">
     <a href="" data-toggle="modal" data-target="#myModal"><span class="moreactivity text-primary">

      Yes
      <div class="modal fade" id="myModal" role="dialog" >
    <div class="modal-dialog modal-sm" >
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal"></button>
          <h3 class="modal-title" style="font-size: 18px;">Are you sure you haven't been outside today?</h3>
        </div>
        <div class="modal-body">
          <div class="">
      <div class="">
        <div class="action-bar" style="margin-bottom: 40px;">
    <a href="{{route('home')}}" class="text-success px-2">

        Yes
    </a>
    <a href="{{route('decision')}}" class="text-danger px-2">

        No
    </a>
       </div>

      </div>

      </div>
        </div>
         <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>

    </span></a>

    <a href="{{route('home_secondpart')}}" class="text-danger px-5">

        <b>No</b>
    </a>
       </div>

      </div>
                  </div>
                </div>

              </div>

                </div>

              </div>



            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="style.js"></script>




</body>

</html>
