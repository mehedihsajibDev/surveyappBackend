
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


  <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">






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

  <div id="login">
    <h3 class="text-center text-white pt-5"></h3>
    <div class="container">
      <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
          <div id="login-box" class="col-md-12 ">


            <form method="POST" action="{{ route('login') }}">
                @csrf
              <h3 class="text-center text-infolink">Login</h3>


              <div class="container">
                <div class="row">

                </div>
                <br />

                <div class='col-sm-5'>
                  <div class="form-group">
                    <label  class="text-success">Email</label><br>
                    <div class='input-group ''>

                      <input type='text'  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

                      </span>
                    </div>
                  </div>
                </div>

              </div>



              <div class="container">
                <div class='col-sm-5'>
                  <div class="form-group">
                    <label for="Household’s ID Nr.:" class="text-success">Password</label><br>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                </div>

              </div>
              {{-- <div class="container">
                <div class='col-sm-5'>
                  <div class="form-group ">
                    <label for="Personal ID Nr.:" class="text-success">Personal ID Nr.:</label><br>
                    <input type="text" name="login_password" id="login_password" class="form-control">
                  </div>
                </div>
              </div> --}}
              {{-- <div class="form-group text-center">

                <input type="submit" name="submit" class="btn btn-info btn-md mt-3 " value="submit"><br>
                <small>Don't have an acount?<span><a href="registraion.html">Register Now</a></span></small>
              </div> --}}
              <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-12 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                    <div class="form-group text-center" style="    margin-left: -439PX;
                    margin-top: 15px;">


                      <center> <small>Don't have an acount?<span><a href="register">Register Now</a></span></small></center>
                      </div>
                    @if (Route::has('password.request'))
                        <a style="    margin-left: -45px;"class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
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
