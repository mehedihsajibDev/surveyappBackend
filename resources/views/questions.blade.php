<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="refresh" content="300">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>survey app</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
  rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
   crossorigin="anonymous">
   <script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
</script>

  <link rel="stylesheet" href="{{asset('backend')}}/css/style.css">
  <style>
    table,
    th,
    td {
      margin-top: 50px;
      border: 1px solid black;
      border-collapse: collapse;
      width: 300px;
    }

    th,
    td {
      padding: 15px;
      color: #3D3C3A;
    }
  </style>
</head>

<body>



    <a href="{{ url('/logout') }}"
    onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
    Logout
</a>

<div >
<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
  <div class="container-fluid">
    <div class="bgq_table">
      <!-- <h5 class="bgq_table_h5">Below are five statements that you may agree or disagree with. Using the 1-7 scale below, indicate your agreement with each item by circling the number.
        </h5> -->
    </div>


    <form action="{{url('questionans')}}" method="POST">
@csrf
<p class="text-center text-success">নিচের প্রশ্নগুলোর উত্তর দিন</p>
      <table class="table table-striped table-responsive ">
        <thead>

     <tr>
            <th scope="col">জীবনের সন্তুষ্টির মানদণ্ড</th><br>
            @foreach($answer as $getans)
            <th scope="col">{{$getans->ans_title}}</th>
            @endforeach
            </tr>

        </thead>
        <tbody>
            @foreach($question as $key =>$questionget)
          <tr>

            <td>
              <p class="ptextcolor">{{$questionget->question_title}}</p>

            </td>
            @foreach($answer as $ansget)
            <td>
              <div class="form-check form-check-inline">

     <input class="form-check-input" id="ans{{$key}}" type="radio" required  name="answere_id[{{$key}}]" value="{{$ansget->id}} "
                >

                <label class="form-check-label" for="1strow_inlineRadio1">{{$ansget->id}}</label>

              </div>
            </td>
            @endforeach
          </tr>
  @endforeach

        </tbody>
      </table>

      </table>


      <div class="form-group text-center" style="padding: 40px;">
        <input type="submit" name="submit" class="btn btn-info btn-md mt-3 " value="submit"><br>

      </div>


    </form>
  </div>
</div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>
