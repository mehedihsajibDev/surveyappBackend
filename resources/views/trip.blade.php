<!DOCTYPE html>
<html lang="en">
<head>
  <title>Survey TripActivity</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

  <script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
</script>

<script
src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js">
</script>

<script
src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.1/js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.1/css/bootstrap-datepicker.min.css" />
{{-- here time link --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.13.18/jquery.timepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.13.18/jquery.timepicker.min.css">


<link rel="stylesheet" href="{{asset('backend')}}/css/style.css">

  <script type="text/javascript">
    $(document).ready(function(){
        $('#stepExample1').timepicker({ 'step': 15 });

       });
</script>
<script type="text/javascript">
       $(document).ready(function(){$('#stepExample2').timepicker({ 'step': 15,'scrollDefault': 'now'  });});</script>
</head>
<body>
  <style>
table, th, td {
  margin-top: 50px;
  border: 1px solid black;
  border-collapse: collapse;

}
th, td {
  padding: 15px;
  color: #3D3C3A;
}
#slider {
  -webkit-appearance: none;
  width: 100%;
  height: 5px;
  background: #484848;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}
#slider:hover {
  opacity: 1;
}

#slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background: goldenrod;
  cursor: pointer;
}

#slider::-moz-range-thumb {
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background: goldenrod;
  cursor: pointer;
}
</style>


 <form action="{{route('trippost')}}" method="POST" id="myform">
 @csrf

<div class="container" style="max-width: 780px; margin-top: 30px;">


<div class="rows">

  <table class="table table-striped table-responsive centered">
    <thead>
       <tr>

      <th colspan="">
         <p class="text-center text-success" style="font-size: 14px;"> Trip Activity
     </th>

    </tr>
    <tr>

        <td>  <label for="time" class="text-success">ট্রিপ নম্বর</label></td>
    </tr>
      <tr>

        <td>
           @php

            $newtrip=\App\TripactivityModel::where('user_id',Auth::User()->id)->orderby('id','desc')->first()

            @endphp
            @if (empty($newtrip->user_id))
            <input type="text" name="tripno" class="form-control" value="1">
            @else

            <input type="text" name="tripno" class="form-control" value="{{($newtrip->tripno)+1}}">

            @endif

        </td>

      </tr>
    </thead>
    <tbody>
        <tr>
            <td>
            <label for="time" class="text-success">কার্য শুরুর সময়</label>
             </td>
        </tr>
        <tr>
            <td>

                <div>



                    @php
            $time1=\App\Onlyhome::where('user_id',Auth::User()->id)->orderby('id','desc')->first()
        @endphp
         @php
       $time2=\App\TripactivityModel::where('user_id',Auth::User()->id)->orderby('id','desc')->first()
        @endphp

            @if (empty($time2->user_id)&&empty($time1->user_id))
            <input  type="text" id="stepExample1" name="starttime" value="08:30">
              @else
              @if (empty($time1->user_id))
              <input readonly type="text" id="stepExample1" name="starttime" value="{{$time1->end_time}}">
              @else
              @if (empty($time2->user_id))
              <input readonly type="text" id="stepExample1" name="starttime" value="{{$time1->end_time}}">
              @else
              @if($time2->endtime<$time1->end_time)
            <input readonly type="text" id="stepExample1" name="starttime" value="{{$time1->end_time}}">
              @elseif($time2->endtime>$time1->end_time)
            <input readonly type="text" id="stepExample1" name="starttime" value="{{$time2->endtime}}">

            @endif
            @endif
            @endif
            @endif
            @error('starttime')
            <span class="text-danger">{{$message}}</span>
            @enderror

                    </div>
                </div>
                @error('starttime')
                <span class="text-danger">{{$message}}</span>
                @enderror

            </td>
        </tr>
    <tr>
        <td>
        <label for="time" class="text-success">কার্য সমাপ্তির সময়</label>
         </td>
    </tr>
    <tr>
        <td>

            <div>
                <div style="float: left;">
                    <input type="text" id="stepExample2" name="endtime" placeholder="10:00am">
                </div>
            </div>
            @error('endtime')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </td>
    </tr>
    <tr>
           <th><p class="text-success">যাত্রা শুরুর ঠিকানা:<p></th>
        </tr>

  <tr>
  <td>
    <select class="form-select" style="font-size: 14px;" name="destination" id="ddlModels">
        <optgroup class="selectfont">
            <option></option>
      <option value="1" >শেষ গন্তব্য থেকে</option>
      <option value="2">অন্য ঠিকানা থেকে  </option>


    </optgroup>
      </select>
      <?php
      $useradress=\App\TripactivityModel::where('user_id',Auth::User()->id)->orderby('id','desc')->first()

      ?>
      <script type="text/javascript">
        $(function () {
            $("#ddlModels").change(function () {
                var element=document.getElementById('adressesid');
                if ($(this).val() == 2) {

                 element.style.display='block';
                 document.getElementById('adressesid').value = ''

                    $("#adressesid").removeAttr("disabled");
                    $("#adressesid").focus();
                } else {
                    // $("#adressesid").attr("disabled", "disabled");
                    element.style.display='block';


    document.getElementById('adressesid').value = "<?php if(empty($useradress->adresses)){echo '';}else{echo $useradress->adresses; }  ?>";




                }
            });
        });
    </script>
  @error('destination')
  <span class="text-danger">{{$message}}</span>
  @enderror
 </td>
 </tr>


        <tr>
           <th><p class="text-success">ব্যবহৃত পরিবহন :<p></th>
        </tr>
  <tr>
  <td>
      <div>
  <select class="form-select "  id="type" style="font-size: 14px;" name="transport">

    <optgroup class="selectfont">
        <option></option>
  <option value="পায়ে হেঁটে">পায়ে হেঁটে</option>
  <option value="রিকশা">রিকশা  </option>
  <option value="বাইসাইকেল">বাইসাইকেল</option>
  <option value="মোটর সাইকেল">মোটর সাইকেল </option>


</optgroup>

  </select>
  @error('transport')
  <span class="text-danger">{{$message}}</span>
  @enderror
  </div>
 </td>
 </tr>

  <th><p class="text-success">মাল্টিটাস্কিং / যৌথ কার্য :<p></th>
  </tr>

  <tr>
  <td>
  <select class="form-select " style="font-size: 14px;" name="multitask" id="size">

<option></option>


  </select>

  @error('multitask')
            <span class="text-danger">{{$message}}</span>
  @enderror

            <script type="text/javascript">
                $(document).ready(function () {
                $("#type").change(function () {
                    var val = $(this).val();
                    if (val == "পায়ে হেঁটে"){
 $("#size").html("<option value='বন্ধু/পরিবারের সাথে কথা বলা'>বন্ধু/পরিবারের সাথে কথা বলা </option> <option value='অন্য যাত্রীদের সাথে কথা বলা'>অন্য যাত্রীদের সাথে কথা বলা </option> <option value='শৈল্পিক কার্য'>শৈল্পিক কার্য  </option> <option value='বিনোদন(রেডিও,গান বা ভিডিও)'>বিনোদন(রেডিও,গান বা ভিডিও)</option> <option value='শরীর চর্চা,গেমস খেলা'>শরীর চর্চা,গেমস খেলা</option> <option value='ব্যক্তিগত ফোন কল/মেসেজ'>ব্যক্তিগত ফোন কল/মেসেজ</option> <option value='পানীয়/খাদ্যগ্রহণ'>পানীয়/খাদ্যগ্রহণ</option> <option value='সৃজনশীল চিন্তাভাবনা করা'>সৃজনশীল চিন্তাভাবনা করা</option><option value='কিছুই না করা'>কিছুই না করা</option> <option value='অন্য কোনো  কিছু করা'>অন্য কোনো  কিছু করা</option>");
                                   }
                        else if (val == "রিকশা") {
 $("#size").html("<option value='ব্যক্তিগত ফোন কল/মেসেজ'>সামাজিক যোগযোগ মাধ্যম ব্যবহার</option><option value='পরিবারের যত্ন:খাওয়ান,খেলা,শিক্ষা'>পরিবারের যত্ন:খাওয়ান,খেলা,শিক্ষা</option> <option value='পানীয়/খাদ্যগ্রহণ'>পানীয়/খাদ্যগ্রহণ</option><option value='অনলাইন ব্যাংকিং '>অনলাইন ব্যাংকিং </option> <option value='বিনোদন(রেডিও,গান বা ভিডিও)'>বিনোদন(রেডিও,গান বা ভিডিও) </option> <option value='শৈল্পিক কার্য'>শৈল্পিক কার্য</option> <option value='সৃজনশীল চিন্তাভাবনা করা'>সৃজনশীল চিন্তাভাবনা করা</option> <option value='ইন্টারনেট ব্রাউজিং/ই-মেইল'>ইন্টারনেট ব্রাউজিং/ই-মেইল</option><option value='বন্ধু/পরিবারের সাথে কথা বলা'>বন্ধু/পরিবারের সাথে কথা বলা</option> <option value='বন্ধু/পরিবারের সাথে কথা বলা'>বন্ধু/পরিবারের সাথে কথা বলা</option><option value='অন্য কোনো  কিছু করা'>অন্য কোনো  কিছু করা</option><option value='কিছুই না করা'>কিছুই না করা</option>" );
                    } else if (val == "বাইসাইকেল") {
 $("#size").html("<option value='ব্যক্তিগত ফোন কল/মেসেজ'>সামাজিক যোগযোগ মাধ্যম ব্যবহার</option><option value='পরিবারের যত্ন:খাওয়ান,খেলা,শিক্ষা'>পরিবারের যত্ন:খাওয়ান,খেলা,শিক্ষা</option> <option value='পানীয়/খাদ্যগ্রহণ'>পানীয়/খাদ্যগ্রহণ</option><option value='অনলাইন ব্যাংকিং '>অনলাইন ব্যাংকিং </option> <option value='বিনোদন(রেডিও,গান বা ভিডিও)'>বিনোদন(রেডিও,গান বা ভিডিও) </option> <option value='শৈল্পিক কার্য'>শৈল্পিক কার্য</option> <option value='সৃজনশীল চিন্তাভাবনা করা'>সৃজনশীল চিন্তাভাবনা করা</option> <option value='ইন্টারনেট ব্রাউজিং/ই-মেইল'>ইন্টারনেট ব্রাউজিং/ই-মেইল</option><option value='বন্ধু/পরিবারের সাথে কথা বলা'>বন্ধু/পরিবারের সাথে কথা বলা</option> <option value='বন্ধু/পরিবারের সাথে কথা বলা'>বন্ধু/পরিবারের সাথে কথা বলা</option><option value='অন্য কোনো  কিছু করা'>অন্য কোনো  কিছু করা</option><option value='কিছুই না করা'>কিছুই না করা</option>" );
                  } else if (val == "মোটর সাইকেল") {
$("#size").html("<option value='ব্যক্তিগত ফোন কল/মেসেজ'>সামাজিক যোগযোগ মাধ্যম ব্যবহার</option><option value='পরিবারের যত্ন:খাওয়ান,খেলা,শিক্ষা'>পরিবারের যত্ন:খাওয়ান,খেলা,শিক্ষা</option> <option value='পানীয়/খাদ্যগ্রহণ'>পানীয়/খাদ্যগ্রহণ</option><option value='অনলাইন ব্যাংকিং '>অনলাইন ব্যাংকিং </option> <option value='বিনোদন(রেডিও,গান বা ভিডিও)'>বিনোদন(রেডিও,গান বা ভিডিও) </option> <option value='শৈল্পিক কার্য'>শৈল্পিক কার্য</option> <option value='সৃজনশীল চিন্তাভাবনা করা'>সৃজনশীল চিন্তাভাবনা করা</option> <option value='ইন্টারনেট ব্রাউজিং/ই-মেইল'>ইন্টারনেট ব্রাউজিং/ই-মেইল</option><option value='বন্ধু/পরিবারের সাথে কথা বলা'>বন্ধু/পরিবারের সাথে কথা বলা</option> <option value='বন্ধু/পরিবারের সাথে কথা বলা'>বন্ধু/পরিবারের সাথে কথা বলা</option><option value='অন্য কোনো  কিছু করা'>অন্য কোনো  কিছু করা</option><option value='কিছুই না করা'>কিছুই না করা</option>" );

                    }

                });
            });
            </script>
</td>
 </tr>

       <tr>
       <td>
        <div class="leftclock">
            <label for="time" class="text-success">টিকেটের মূল্য/পার্কিং ফি:</label>
      <input type="text" name="ticketprice" id="Ticketprice" class="form-control" />
     <!-- partial -->
        </div>

       </td>

       </tr>

       <tr>
        <td>
          <label class="text-success">
          গন্তব্যের ঠিকানা:
রাস্তার নাম + বাড়ির নম্বর:
এলাকা + পোস্ট কোড:

          </label>
          </td>
        </tr>

        <tr>
        <td>
            @php
            $useradress=\App\TripactivityModel::where('user_id',Auth::User()->id)->orderby('id','desc')->first()
            @endphp
            <textarea  name="adresses" rows="3" cols="50" id="adressesid" style='display:none;' > </textarea>
            @error('adresses')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </td>
        </tr>

       <tr>

         <td><p class="text-success" >সহযাত্রী:</p></td>


       </tr>
     <tr>
     <td>
  <select class="form-select" style="font-size: 14px;" name="copartner">
  <optgroup class="selectfont">
      <option></option>
  <option value="স্বামী/স্ত্রী">স্বামী/স্ত্রী</option>
  <option value="সন্তান">সন্তান</option>
  <option value="পিতামাতা">পিতামাতা </option>
   <option value="বাড়ির অন্য বাসিন্দা">বাড়ির অন্য বাসিন্দা </option>
  <option value="আত্মীয়">আত্মীয় </option>
  <option value="বন্ধুবান্ধব">বন্ধুবান্ধব </option>
  <option value="অন্য কোনো পরিচিত">অন্য কোনো পরিচিত  </option>
  <option value="অপরিচিত কেউ">অপরিচিত কেউ</option>

  </optgroup>

</select>
</td>
</tr>
<tr>
  <td>
    <label class="text-success">Think about the trip you have just made and
TICK the box that best describes your experience:</label>
  </td>
</tr>
<tr>
  <td>
    <label class="text-success">
    যাত্রা / ভ্রমণের সময় আমি …………………… ছিলাম

  </label>
  </td>
</tr>
<tr>
<td>



  <div style="width: 350px;">
   <div style="width: 100%;display: inline-block; ">
    <div style="display: inline-block;   float:left;">প্রচন্ড রকমের</div>


    <div style="display: inline-block;  margin-left: 70px;  red;">বিরক্ত</div>

    <div style="display: inline-block;  float: right;padding-left:5px;">মোটেও না </div>
  </div>

</div>
<div style="width: 300px;padding-left: 26px;" >



   <div style="width: 100%; display: inline-block; padding-left: 8px;">
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>

    <div style="display: inline-block;  float: left;">.</div>
  </div>
  <input style="width: 100%;" id="slider" name="q1value" type="range" min="0" max="120" step="20" value=""
  onchange="detectChange(this.value)" />
  <div class="range">
    <output id="output1" name="result"></output>
  </div>
  <script type="text/javascript">
	function detectChange(value) {
  var rangeDiv = document.getElementById("output1");
  rangeDiv.value = value;


}

</script>
           @error('q1value')
            <span class="text-danger">{{$message}}</span>
            @enderror
</div>

<br>

  </td>
</tr>
<tr>
  <td>
    <label class="text-success">
যাত্রা / ভ্রমণের সময় আমি …………………… ছিলাম


  </label>
  </td>
</tr>
<tr>
  <td>


  <div style="width: 350px;">
   <div style="width: 100%;display: inline-block; ">
    <div style="display: inline-block;   float:left;">প্রচন্ড রকমের</div>


    <div style="display: inline-block;  margin-left: 70px;  red;">ক্লান্ত
</div>

    <div style="display: inline-block;  float: right;padding-left:5px;">মোটেও না </div>
  </div>

</div>
<div style="width: 300px;padding-left: 26px;" >



   <div style="width: 100%; display: inline-block; padding-left: 8px;">
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>

    <div style="display: inline-block;  float: left;">.</div>
  </div>
  <input style="width: 100%;" id="slider" name="q2value" value="" type="range" min="0" max="120" step="20"
  onchange="detectChange(this.value)"/>
  <div class="range">
    <output id="output2" name="result"></output>
  </div>
  <script type="text/javascript">
	function detectChange(value) {
  var rangeDiv = document.getElementById("output2");
  rangeDiv.value = value;


}

</script>
@error('q2value')
            <span class="text-danger">{{$message}}</span>
            @enderror
</div>


  </td>
</tr>
<tr>
  <td>
    <label class="text-success">
যাত্রা / ভ্রমণের সময় আমি …………………… ছিলাম



  </label>
  </td>
</tr>
<tr>
  <td>


  <div style="width: 350px;">
   <div style="width: 100%;display: inline-block; ">
    <div style="display: inline-block;   float:left;">প্রচন্ড রকমের</div>


    <div style="display: inline-block;  margin-left: 70px;  red;"> চিন্তিত
</div>

    <div style="display: inline-block;  float: right;padding-left:5px;">মোটেও না
 </div>
  </div>

</div>
<div style="width: 300px;padding-left: 26px;" >



   <div style="width: 100%; display: inline-block; padding-left: 8px;">
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>

    <div style="display: inline-block;  float: left;">.</div>
  </div>
  <input style="width: 100%;" id="slider" name="q3value" value="" type="range" min="0" max="120" step="20"
  onchange="detectChange(this.value)"/>
  <div class="range">
    <output id="output3" name="result"></output>
  </div>
  <script type="text/javascript">
	function detectChange(value) {
  var rangeDiv = document.getElementById("output3");
  rangeDiv.value = value;


}

</script>
@error('q3value')
            <span class="text-danger">{{$message}}</span>
            @enderror
</div>


<br>

  </td>
</tr>
<tr>
  <td>
    <label class="text-success">
যাত্রা / ভ্রমণের সময় আমি …………………… ছিলাম


  </label>
  </td>
</tr>
<tr>
  <td>


  <div style="width: 350px;">
   <div style="width: 100%;display: inline-block; ">
    <div style="display: inline-block;   float:left;">প্রচন্ড রকমের</div>


    <div style="display: inline-block;  margin-left: 70px;  red;"> অবসাদগ্রস্ত
</div>

    <div style="display: inline-block;  float: right;padding-left:5px;">মোটেও না
 </div>
  </div>

</div>
<div style="width: 300px;padding-left: 26px;" >



   <div style="width: 100%; display: inline-block; padding-left: 8px;">
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>

    <div style="display: inline-block;  float: left;">.</div>
  </div>
  <input style="width: 100%;" id="slider" name="q4value" value="" type="range" min="0" max="120" step="20"
    onchange="detectChange(this.value)"/>
  <div class="range">
    <output id="output4" name="result"></output>
  </div>
  <script type="text/javascript">
	function detectChange(value) {
  var rangeDiv = document.getElementById("output4");
  rangeDiv.value = value;


}

</script>
@error('q4value')
            <span class="text-danger">{{$message}}</span>
            @enderror
</div>

<br>

  </td>
</tr>
<tr>
  <td>
    <label class="text-success">
এই যাত্রা বা ভ্রমন আমার জন্য ছিল ……………………



  </label>
  </td>
</tr>
<tr>
  <td>


  <div style="width: 350px;">
   <div style="width: 100%;display: inline-block; ">
    <div style="display: inline-block;   float:left;">প্রচন্ড রকমের</div>


    <div style="display: inline-block;  margin-left: 70px;  red;">  নিম্নমানের

</div>

    <div style="display: inline-block;  float: right;padding-left:5px;">মোটেও না
 </div>
  </div>

</div>
<div style="width: 300px;padding-left: 26px;" >



   <div style="width: 100%; display: inline-block; padding-left: 8px;">
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>

    <div style="display: inline-block;  float: left;">.</div>
  </div>
  <input style="width: 100%;" id="slider"  name="q5value" value="" type="range" min="0" max="120" step="20"
  onchange="detectChange(this.value)"/>
  <div class="range">
    <output id="output5" name="result"></output>
  </div>
  <script type="text/javascript">
	function detectChange(value) {
  var rangeDiv = document.getElementById("output5");
  rangeDiv.value = value;


}

</script>
@error('q5value')
            <span class="text-danger">{{$message}}</span>
            @enderror
</div>


<br>

  </td>
</tr>
<tr>
  <td>
    <label class="text-success">
এই যাত্রা বা ভ্রমন আমার জন্য ছিল ……………………




  </label>
  </td>
</tr>
<tr>
  <td>


  <div style="width: 350px;">
   <div style="width: 100%;display: inline-block; ">
    <div style="display: inline-block;   float:left;">প্রচন্ড রকমের</div>


    <div style="display: inline-block;  margin-left: 70px;  red;">  খারাপ
</div>

    <div style="display: inline-block;  float: right;padding-left:5px;">মোটেও না
 </div>
  </div>

</div>
<div style="width: 300px;padding-left: 26px;" >



   <div style="width: 100%; display: inline-block; padding-left: 8px;">
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>

    <div style="display: inline-block;  float: left;">.</div>
  </div>
  <input style="width: 100%;" id="slider" name="q6value" value="" type="range" min="0" max="120" step="20"
  onchange="detectChange(this.value)"/>
  <div class="range">
    <output id="output6" name="result"></output>
  </div>
  <script type="text/javascript">
	function detectChange(value) {
  var rangeDiv = document.getElementById("output6");
  rangeDiv.value = value;


}

</script>
@error('q6value')
            <span class="text-danger">{{$message}}</span>
            @enderror
</div>



<br>

  </td>
</tr>
<tr>
  <td>
    <label class="text-success">
যাত্রা বা ভ্রমণ শেষে আমি …………………… অনুভাব করছিলাম
  </label>
  </td>
</tr>
<tr>
  <td>
  <div style="width: 350px;">
   <div style="width: 100%;display: inline-block; ">
    <div style="display: inline-block;   float:left;">প্রচন্ড রকমের</div>


    <div style="display: inline-block;  margin-left: 70px;  red;"> অসুস্থ
</div>

    <div style="display: inline-block;  float: right;padding-left:5px;">মোটেও না
 </div>
  </div>

</div>
<div style="width: 300px;padding-left: 26px;" >



   <div style="width: 100%; display: inline-block; padding-left: 8px;">
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>

    <div style="display: inline-block;  float: left;">.</div>
  </div>
  <input style="width: 100%;" id="slider" name="q7value" value="" type="range" min="0" max="120" step="20"
  onchange="detectChange(this.value)"/>
  <div class="range">
    <output id="output7" name="result"></output>
  </div>
  <script type="text/javascript">
	function detectChange(value) {
  var rangeDiv = document.getElementById("output7");
  rangeDiv.value = value;


}

</script>
@error('q7value')
            <span class="text-danger">{{$message}}</span>
            @enderror
</div>


<br>

  </td>
</tr>
  <tr>
  <td>

  <label class="text-success">
   এই যাত্রা নিয়ে আমার সার্বিক অভিজ্ঞতা / মূল্যায়ন:
  </label>
  <br>
  <div style="width: 350px;">
   <div style="width: 100%;display: inline-block; ">
    <div style="display: inline-block;   float:left;">খুবই নিম্নমানের</div>


    <div style="display: inline-block;  margin-left: 70px;  red;">অভিজ্ঞতা</div>

    <div style="display: inline-block;  float: right;padding-left:5px;"> সম্ভাব্য সর্বোত্তম </div>
  </div>

</div>
<div style="width: 300px;padding-left: 26px;" >



   <div style="width: 100%; display: inline-block; padding-left: 8px;">
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>
    <div style="display: inline-block;  width:16%; float:left;">.</div>

    <div style="display: inline-block;  float: left;">.</div>
  </div>
  <input style="width: 100%;" id="slider" name="q8value" value="" type="range" min="0" max="120" step="20"
  onchange="detectChange(this.value)"/>
  <div class="range">
    <output id="output8" name="result"></output>
  </div>
  <script type="text/javascript">
	function detectChange(value) {
  var rangeDiv = document.getElementById("output8");
  rangeDiv.value = value;


}

</script>
@error('q8value')
            <span class="text-danger">{{$message}}</span>
            @enderror
</div>

  </td>
</tr>

<tr>
    <td>
           <div class="form-group text-center">
               <div class="2nd div" style="max-width: 780px;margin-bottom:50px;margin-top:-10px;" >
                   <div class="container text-center" style="width: 400px;" >
                     <h3 class="text-primary" style="font-size: 18px">Do you Have Another Activity?</h3>
                   </div>
                   <div class="container text-center"style="width: 400px;">

                       <a href="javascript:;"  onclick="document.getElementById('myform').submit()">

                         <span class="text-success"> Yes</span>
                       </a>




                     <a href="#" id="nobtn" data-toggle="modal" data-target="#myModals" style="padding-left: 8px;><span class="text-primary">
                        <span class="text-danger"> No</span>
                      <span class="moreactivity text-primary">

                          <div class="modal fade" id="myModals" role="dialog" >
                              <div class="modal-dialog modal-sm" >
                                <div class="modal-content">
                                  <div class="modal-header" >
                                    <button type="button" class="close" data-dismiss="modal"></button>

                                  </div>
                                  <div class="modal-body">
                                    <div class="">
                                       <h3 class="text-center" style="font-size: 18px;">

                                         </h3>

                                     <?php
                                  date_default_timezone_set('Asia/Dhaka');
                                  $time=date('Hi');

                                  if(($time >="2350")&&($time>="2400")): ?>
                              <small>Okk.You can Go Now</small><br><br>
                                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                   <p style="color: brown">Logout</p>
                                  </a>

                                  <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                                  </form>
                                   <?php endif; ?>
                                   Your Task is pending.Please fill up your all record till 12:00am.

                                </div>
                                  </div>
                                   <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                        <a href="{{route('home_secondpart')}}">Close</a>
                                      </button>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </span>
                         </a>
                   </div>

                 </div>
               </div>
           </td>
         </tr>

    </tbody>
  </table>
</div>
</div>

</form>
<div class="container" style="max-width: 780px;">
    <table class="table table-striped">
        <thead>
    <h4 class="text text-success text-center p-2"><u > Your recent activities </u> </h4>
          <tr>

            <th scope="col">start_time</th>
            <th scope="col">end_time</th>
            <th scope="col">task</th>
            <th scope="col">multitaask</th>
            <th scope="col">tripno</th>
            <th scope="col">cost</th>
            <th scope="col">reason_cost</th>
            <th scope="col">copartner</th>
          </tr>
        </thead>
        <tbody>


            @php
           $tblhomeandtripdata=\App\HomeandTrip::where('user_id',Auth::User()->id)->orderby('created_at','asc')->get()
            @endphp




                @foreach ($tblhomeandtripdata as $tblhomeandtripdatas)

                <tr>


                    <td>{{$tblhomeandtripdatas->starttime}}</td>
                    <td>{{$tblhomeandtripdatas->endtime}}</td>
                    <td>{{$tblhomeandtripdatas->task}}</td>

                    <td>{{$tblhomeandtripdatas->multitaask}}</td>
                    @if($tblhomeandtripdatas->tripno==0)
                    <td></td>
                    @else
                    <td>{{$tblhomeandtripdatas->tripno}}</td>
                    @endif


                    <td>{{$tblhomeandtripdatas->cost}}</td>
                    <td>{{$tblhomeandtripdatas->reason_cost}}</td>
                    <td>{{$tblhomeandtripdatas->copartner}}</td>

                  </tr>




                @endforeach





        </tbody>
      </table>


    </div>



  <script type="text/javascript">
    function timePicker(id){
       var input = document.getElementById(id);
       var timePicker = document.createElement('div');
    timePicker.classList.add('time-picker');


       //open timepicker
       input.onclick= function(){
          timePicker.classList.toggle('open');

          this.setAttribute('disabled','disabled');
          timePicker.innerHTML +=`
          <div class="set-time">
             <div class="label">
                <a id="plusH" class="text-success" >+</a>
                <input class="set text-success" type="text" id="hour"  value="12">
                <a id="minusH" class="text-success">-</a>
             </div>
             <br>
             <div class="label">
                <a id="plusM" class="text-success">+</a>
                <input type="text" class="set text-success"  id="minute" value="00">
                <a id="minusM" class="text-success">-</a>
             </div>
          </div>
          <div id="submitTime" class=" text-success" style="padding-left:40px;">Set time</div>`;

          this.after(timePicker);
          var plusH = document.getElementById('plusH');
          var minusH = document.getElementById('minusH');
          var plusM = document.getElementById('plusM');
          var minusM = document.getElementById('minusM');
          var h = parseInt(document.getElementById('hour').value);
          var m = parseInt(document.getElementById('minute').value);
         //increment hour
          plusH.onclick = function(){
             h = isNaN(h) ? 0 : h;
             if(h===23){
                h =-1;
             }
              h++;
             document.getElementById('hour').value = (h<10?'0':0)+h;
          }
          //decrement hour
          minusH.onclick = function(){
             h = isNaN(h) ? 0 : h;
             if(h===0){
                h =24;
             }
             h--;
             document.getElementById('hour').value = (h<10?'0':0)+h;
          }
          //increment hour
          plusM.onclick = function(){
             m = isNaN(m) ? 0 : m;
             if(m===45){
                m =-15;
             }
              m = m+15;
             document.getElementById('minute').value = (m<10?'0':0)+m;
          }
          //decrement hour
          minusM.onclick = function(){
            m = isNaN(m) ? 0 : m;
             if(m===0){
                m =60;
             }
             m = m-15;
             document.getElementById('minute').value = (m<10?'0':0)+m;
          }

          //submit timepicker
          var submit = document.getElementById("submitTime");
          submit.onclick = function(){
            input.value = document.getElementById('hour').value+':'+document.getElementById('minute').value;
             input.removeAttribute('disabled');
             timePicker.classList.toggle('open');
             timePicker.innerHTML = '';
          }
       }
    }
    function timePicker2(id){
       var input = document.getElementById(id);
       var timePicker2 = document.createElement('div');
       timePicker2.classList.add('time-picker');


       //open timepicker
       input.onclick= function(){
      timePicker2.classList.toggle('open');

          this.setAttribute('disabled','disabled');
          timePicker2.innerHTML +=`
          <div class="set-time">
             <div class="label">
                <a id="plusH" class="text-success">+</a>
                <input class="set text-success" type="text" id="hour" value="08">
                <a id="minusH" class="text-success">-</a>
             </div>
             <br>
             <div class="label">
                <a id="plusM" class="text-success">+</a>
                <input type="text" class="set text-success"  id="minute" value="30">
                <a id="minusM" class="text-success">-</a>
             </div>
          </div>
          <div id="submitTime" class=" text-success" style="padding-left:40px;">Set time</div>`;
          this.after(timePicker2);
          var plusH = document.getElementById('plusH');
          var minusH = document.getElementById('minusH');
          var plusM = document.getElementById('plusM');
          var minusM = document.getElementById('minusM');
          var h = parseInt(document.getElementById('hour').value);
          var m = parseInt(document.getElementById('minute').value);
         //increment hour
          plusH.onclick = function(){
             h = isNaN(h) ? 0 : h;
             if(h===23){
                h =-1;
             }
              h++;
             document.getElementById('hour').value = (h<10?'0':0)+h;
          }
          //decrement hour
          minusH.onclick = function(){
             h = isNaN(h) ? 0 : h;
             if(h===0){
                h =24;
             }
             h--;
             document.getElementById('hour').value = (h<10?'0':0)+h;
          }
          //increment hour
          plusM.onclick = function(){
             m = isNaN(m) ? 0 : m;
             if(m===45){
                m =-15;
             }
              m = m+15;
             document.getElementById('minute').value = (m<10?'0':0)+m;
          }
          //decrement hour
          minusM.onclick = function(){
            m = isNaN(m) ? 0 : m;
             if(m===0){
                m =60;
             }
             m = m-15;
             document.getElementById('minute').value = (m<10?'0':0)+m;
          }

          //submit timepicker
          var submit = document.getElementById("submitTime");
          submit.onclick = function(){
            input.value = document.getElementById('hour').value+':'+document.getElementById('minute').value;
             input.removeAttribute('disabled');
             timePicker2.classList.toggle('open');
             timePicker2.innerHTML = '';
          }
       }
    }

    timePicker('timePicker');
    timePicker2('timePicker2');





    </script>
</body>
</html>
