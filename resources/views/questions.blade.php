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


    <form action="{{route('answeresubmit')}}" method="POST">
@csrf
<p class="text-center text-success">নিচের প্রশ্নগুলোর উত্তর দিন</p>
      <table class="table table-striped table-responsive ">
        <thead>

     <tr>
            <th scope="col">জীবনের সন্তুষ্টির মানদণ্ড</th><br>
            <th scope="col">দৃঢ়ভাবে একমত</th>
            <th scope="col">একমত</th>
            <th scope="col">সামান্য একমত</th>
            <th scope="col">নিরপেক্ষ</th>
            <th scope="col">কিছুটা দ্বিমত</th>
            <th scope="col">দ্বিমত</th>
            <th scope="col">দৃঢ়ভাবে দ্বিমত</th>
            </tr>

        </thead>
        <tbody>
          <tr>

            <td>
              <p class="ptextcolor">বেশিরভাগ ক্ষেত্রেই আমার জীবন আমার দৃষ্টিতে একটি আদর্শ জীবনের কাছাকাছি</p>
            </td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="1strow_inlineRadioOptions"
                 id="1strow_inlineRadio1" value="Strongly Disagree" required>

                <label class="form-check-label" for="1strow_inlineRadio1">1</label>
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="1strow_inlineRadioOptions" i
                d="1strow_inlineRadio2" value="Disagree"required>
                <label class="form-check-label" for="1strow_inlineRadio2">2</label>
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="1strow_inlineRadioOptions"
                id="1strow_inlineRadio3" value="Slightly Disagree"required>
                <label class="form-check-label" for="1strow_inlineRadio3">3</label>
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="1strow_inlineRadioOptions"
                id="1strow_inlineRadio4" value="Neither agree nor disagree"required>
                <label class="form-check-label" for="1strow_inlineRadio4">4</label>
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="1strow_inlineRadioOptions"
                id="1strow_inlineRadio5" value="Slightly agree"required>
                <label class="form-check-label" for="1strow_inlineRadio5">5</label>
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="1strow_inlineRadioOptions"
                id="1strow_inlineRadio6" value="Agree"required>
                <label class="form-check-label" for="1strow_inlineRadio6">6</label>
              </div>
            </td>

            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="1strow_inlineRadioOptions"
                id="1strow_inlineRadio7" value="Strongly Agree"required>
                <label class="form-check-label" for="1strow_inlineRadio7">7</label>
              </div>
            </td>
          </tr>

          <tr>

            <td>
              <p class="ptextcolor">আমি একটি অত্তান্ত চমৎকার জীবনযাপন করি</p>
            </td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="2ndrow_inlineRadioOptions"
                id="2ndrow_inlineRadio1" value="দৃঢ়ভাবে একমত"required>

                <label class="form-check-label" for="2ndrow_inlineRadio1">1</label>
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="2ndrow_inlineRadioOptions"
                id="2ndrow_inlineRadio2" value="একমত"required>
                <label class="form-check-label" for="2ndrow_inlineRadio2">2</label>
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="2ndrow_inlineRadioOptions"
                id="2ndrow_inlineRadio3" value="সামান্য একমত"required>
                <label class="form-check-label" for="2ndrow_inlineRadio3">3</label>
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="2ndrow_inlineRadioOptions"
                 id="2ndrow_inlineRadio4" value="নিরপেক্ষ"required>
                <label class="form-check-label" for="2ndrow_inlineRadio4">4</label>
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="2ndrow_inlineRadioOptions"
                 id="2ndrow_inlineRadio5" value="কিছুটা দ্বিমত"required>
                <label class="form-check-label" for="2ndrow_inlineRadio5">5</label>
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="2ndrow_inlineRadioOptions"
                 id="2ndrow_inlineRadio6" value="দ্বিমত"required>
                <label class="form-check-label" for="2ndrow_inlineRadio6">6</label>
              </div>
            </td>

            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="2ndrow_inlineRadioOptions"
                id="2ndrow_inlineRadio7" value="দৃঢ়ভাবে দ্বিমত"required>
                <label class="form-check-label" for="2ndrow_inlineRadio7">7</label>
              </div>
            </td>
          </tr>
          <tr>

            <td>
              <p class="ptextcolor">আমি আমার জীবন নিয়ে সন্তুষ্ট</p>
            </td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="3rdrow_inlineRadioOptions" id="3rdrow_inlineRadio1" value="দৃঢ়ভাবে একমত"required>

                <label class="form-check-label" for="3rdrow_inlineRadio1">1</label>
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="3rdrow_inlineRadioOptions" id="3rdrow_inlineRadio2" value="একমত"required>
                <label class="form-check-label" for="3rdrow_inlineRadio2">2</label>
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="3rdrow_inlineRadioOptions" id="3rdrow_inlineRadio3" value="সামান্য একমত"required>
                <label class="form-check-label" for="3rdrow_inlineRadio3">3</label>
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="3rdrow_inlineRadioOptions" id="3rdrow_inlineRadio4" value="নিরপেক্ষ"required>
                <label class="form-check-label" for="3rdrow_inlineRadio4">4</label>
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="3rdrow_inlineRadioOptions" id="3rdrow_inlineRadio5" value="কিছুটা দ্বিমত"required>
                <label class="form-check-label" for="3rdrow_inlineRadio5">5</label>
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="3rdrow_inlineRadioOptions" id="3rdrow_inlineRadio6" value="দ্বিমত"required>
                <label class="form-check-label" for="3rdrow_inlineRadio6">6</label>
              </div>
            </td>

            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="3rdrow_inlineRadioOptions" id="3rdrow_inlineRadio7" value="দৃঢ়ভাবে দ্বিমত"required>
                <label class="form-check-label" for="3rdrow_inlineRadio7">7</label>
              </div>
            </td>
          </tr>
          <tr>

            <td>
              <p class="ptextcolor">এখন পর্যন্ত আমার এই জীবনের জন্য গুরুত্বপূর্ণ/প্রয়োজনীয় সব কিছুই আমি পেয়েছি</p>
            </td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="4throw_inlineRadioOptions" id="4throw_inlineRadio1" value="দৃঢ়ভাবে একমত	"required>

                <label class="form-check-label" for="4throw_inlineRadio1">1</label>
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="4throw_inlineRadioOptions" id="4throw_inlineRadio2" value="একমত"required>
                <label class="form-check-label" for="4throw_inlineRadio2">2</label>
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="4throw_inlineRadioOptions" id="4throw_inlineRadio3" value="সামান্য একমত"required>
                <label class="form-check-label" for="4throw_inlineRadio3">3</label>
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="4throw_inlineRadioOptions" id="4throw_inlineRadio4" value="নিরপেক্ষ"required>
                <label class="form-check-label" for="4throw_inlineRadio4">4</label>
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="4throw_inlineRadioOptions" id="4throw_inlineRadio5" value="কিছুটা দ্বিমত"required>
                <label class="form-check-label" for="4throw_inlineRadio5">5</label>
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="4throw_inlineRadioOptions" id="4throw_inlineRadio6" value="দ্বিমত"required>
                <label class="form-check-label" for="4throw_inlineRadio6">6</label>
              </div>
            </td>

            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="4throw_inlineRadioOptions" id="4throw_inlineRadio7" value="দৃঢ়ভাবে দ্বিমত"required>
                <label class="form-check-label" for="4throw_inlineRadio7">7</label>
              </div>
            </td>
          </tr>
          <tr>

            <td>
              <p class="ptextcolor">যদি এই জীবন নতুন করে শুরু করা সম্ভব হয়, তবে আমি এতে প্রায় কোনও পরিবর্তনই করব না</p>
            </td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="5throw_inlineRadioOptions" id="5throw_inlineRadio1" value="দৃঢ়ভাবে একমত"required>

                <label class="form-check-label" for="5throw_inlineRadio1">1</label>
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="5throw_inlineRadioOptions" id="5throw_inlineRadio2" value="একমত"required>
                <label class="form-check-label" for="5throw_inlineRadio2">2</label>
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="5throw_inlineRadioOptions" id="5throw_inlineRadio3" value="সামান্য একমত"required>
                <label class="form-check-label" for="5throw_inlineRadio3">3</label>
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="5throw_inlineRadioOptions" id="5throw_inlineRadio4" value="নিরপেক্ষ"required>
                <label class="form-check-label" for="5throw_inlineRadio4">4</label>
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="5throw_inlineRadioOptions" id="5throw_inlineRadio5" value="কিছুটা দ্বিমত"required>
                <label class="form-check-label" for="5throw_inlineRadio5">5</label>
              </div>
            </td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="5throw_inlineRadioOptions" id="5throw_inlineRadio6" value="দ্বিমত"required>
                <label class="form-check-label" for="5throw_inlineRadio6">6</label>
              </div>
            </td>

            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="5throw_inlineRadioOptions" id="5throw_inlineRadio7" value="দৃঢ়ভাবে দ্বিমত"required>
                <label class="form-check-label" for="5throw_inlineRadio7">7</label>
              </div>
            </td>
          </tr>
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
