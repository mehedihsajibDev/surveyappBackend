


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="300">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>survey app</title>
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



    </style>
     <script type="text/javascript">
      $(document).ready(function(){
          $('#stepExample1').timepicker({ 'step': 15 });

         });
</script>
<script type="text/javascript">
         $(document).ready(function(){$('#stepExample2').timepicker({ 'step': 15,'scrollDefault': 'now' });});</script>
</head>
<body>





<div>

</div>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
        Logout
    </a>
    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>

<form action="{{route('home_single')}}" method="POST"
data-js-validate="true" data-js-highlight-state-msg="true" data-js-show-valid-msg="true"
id="myform" >
    @csrf
  <div class="container" style="max-width: 780px;">


<table class="table table-striped table-responsive centered">
  <thead>
    <tr>
      <td colspan="" style="padding-top: 20px;padding-bottom: 20px;">
       <h3 class="text-success text-center">Whole day Activity entry</h3>
     </td>

    </tr>
  </thead>
  <tbody>


   <tr>
       <td>
           <p class="text-success text-center">Please register only one activity per row and for the Multi-tasking please use the last column
            Before Making the first trip of the day,please mention your time use and associated activities
           </p>


       </td>


    </tr>

    <tr>

      <td>
        <label for="time" class="text-success">কার্য শুরুর সময়</label>
      </td>

    </tr>
    <tr>
     <td>
        <div>
            @php
            $time=\App\Home_Single::where('user_id',Auth::User()->id)->orderby('id','desc')->first()
        @endphp

            <div style="float: left;">


                @if (empty($time->user_id))
                <input readonly type="text" id="stepExample1" name="starttime" value="12:00am">
                  @else
                <input readonly type="text"   id="stepExample1" name="starttime"  value=" {{$time->end_time}}" >
                @endif

            </div>

        </div>

     {{-- <input type="time" name="starttime" id="time"/> --}}

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
  <th><p class="text-success">কার্য<p></th>
  </tr>
     <tr>
     <td>
         <div>

 <select class="form-select" style="font-size: 14px;" name="task">
  <optgroup class="selectfont">
  <option></option>
  <option value="ঘুম">ঘুম </option>
  <option value="খাদ্য ও পানীয় গ্রহণ">খাদ্য ও পানীয় গ্রহণ:  </option>

  <option value="ব্যক্তিগত যত্ন / কাজ">ব্যক্তিগত যত্ন / কাজ </option>
   <option value="নিজে গৃহস্থলীর কাজ করা">নিজে গৃহস্থলীর কাজ করা </option>
  <option value="মোবাইল ফোন সম্পর্কিত/ সংশ্লিষ্ট কাজ ">মোবাইল ফোন সম্পর্কিত/ সংশ্লিষ্ট কাজ </option>
  <option value="গৃহস্থলীর সদস্যদের সাহায্য করা ">গৃহস্থলীর সদস্যদের সাহায্য করা  </option>
   <option value="ধর্মীয় কার্যক্রম">ধর্মীয় কার্যক্রম </option>
  <option value="শপিং বা বাজার করা (দোকানে, ফোনে এবং অনলাইনে">শপিং বা বাজার করা (দোকানে, ফোনে এবং অনলাইনে) </option>
  <option value="শিক্ষা">শিক্ষা </option>
   <option value="চাকরি / ব্যবসা ও সংশ্লিষ্ট কার্যক্রম">চাকরি / ব্যবসা ও সংশ্লিষ্ট কার্যক্রম </option>
  <option value="সামাজিক যোগাযোগ ">সামাজিক যোগাযোগ </option>
  <option value="অবসর বিনোদন, অবকাশ যাপন">অবসর বিনোদন, অবকাশ যাপন </option>
     <option value="খেলাধূলা / ব্যায়াম / প্রাতঃ ভ্রমন">খেলাধূলা / ব্যায়াম / প্রাতঃ ভ্রমন </option>
  <option value="চিকিৎসা সেবা গ্রহণ ">চিকিৎসা সেবা গ্রহণ  </option>
  <option value="বেসরকারি সেবা গ্রহণ (চিকিৎসা ব্যতীত)">বেসরকারি সেবা গ্রহণ (চিকিৎসা ব্যতীত)</option>
   <option value="সরকারি ও নাগরিক সেবা গ্রহণ (চিকিৎসা ব্যতীত)">সরকারি ও নাগরিক সেবা গ্রহণ (চিকিৎসা ব্যতীত) </option>
  <option value="গৃহস্থলীর বাহিরের কাউকে সাহায্য করা">গৃহস্থলীর বাহিরের কাউকে সাহায্য করা  </option>
  <option value="স্বেচ্ছাসেবীর কাজ / সমাজসেবা">স্বেচ্ছাসেবীর কাজ / সমাজসেবা </option>
  </optgroup>
</select>
@error('task')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
</td>
     </tr>

   <tr>
  <th><p class="text-success">মাল্টিটাস্কিং / যৌথ কার্য :<p></th>
  </tr>
     <tr>
     <td>
         <div>

 <select class="form-select" style="font-size: 14px;" name="multitask" required>
  <optgroup class="selectfont">
    <option></option>
  <option value="শিক্ষা ও সংশ্লিষ্ট কার্যক্রম ">শিক্ষা ও সংশ্লিষ্ট কার্যক্রম </option>
  <option value="চাকুরী বা ব্যবসায়িক কাজ করা">চাকুরী বা ব্যবসায়িক কাজ করা </option>
  <option value="অনলাইনে/ফোনে কেনাকাটা">অনলাইনে/ফোনে কেনাকাটা</option>
  <option value="পরিবারের যত্ন:খাওয়ান,খেলা,শিক্ষা">পরিবারের যত্ন:খাওয়ান,খেলা,শিক্ষা</option>
  <option value="ঘুমানো, তন্দ্রা বা বিশ্রাম">ঘুমানো, তন্দ্রা বা বিশ্রাম </option>
  <option value="পানীয়/খাদ্যগ্রহণ">পানীয়/খাদ্যগ্রহণ</option>
  <option value="ব্যক্তিগত যত্ন:টেলিমেডিসিন ">ব্যক্তিগত যত্ন:টেলিমেডিসিন  </option>
  <option value="অনলাইন ব্যাংকিং">অনলাইন ব্যাংকিং </option>
  <option value="পরবর্তী ইভেন্টের প্রস্তুতি গ্রহণ">পরবর্তী ইভেন্টের প্রস্তুতি গ্রহণ </option>
  <option value="(পরবর্তী) দিনের পরিকল্পনা করা">(পরবর্তী) দিনের পরিকল্পনা করা</option>
  <option value="বিনোদন(রেডিও,গান বা ভিডিও)">বিনোদন(রেডিও,গান বা ভিডিও)</option>
  <option value="শরীর চর্চা,গেমস খেলা">শরীর চর্চা,গেমস খেলা </option>
  <option value="শৈল্পিক কার্য  ">শৈল্পিক কার্য  </option>
  <option value="সৃজনশীল চিন্তাভাবনা করা">সৃজনশীল চিন্তাভাবনা করা</option>
  <option value="মুদ্রিত বই/সংবাদপত্র পড়া ">মুদ্রিত বই/সংবাদপত্র পড়া  </option>
  <option value="ডিজিটাল বই/পত্রিকা  পড়া">ডিজিটাল বই/পত্রিকা  পড়া </option>
  <option value="ইন্টারনেট ব্রাউজিং/ই-মেইল ">ইন্টারনেট ব্রাউজিং/ই-মেইল </option>
  <option value="সামাজিক যোগযোগ মাধ্যম ব্যবহার">সামাজিক যোগযোগ মাধ্যম ব্যবহার </option>
  <option value="ব্যক্তিগত ফোন কল/মেসেজ">ব্যক্তিগত ফোন কল/মেসেজ </option>
  <option value="জানালার বাইরে / এদিক-ওদিক দেখা ">জানালার বাইরে / এদিক-ওদিক দেখা </option>
  <option value="বন্ধু/পরিবারের সাথে কথা বলা">বন্ধু/পরিবারের সাথে কথা বলা   </option>
  <option value="অন্য যাত্রীদের সাথে কথা বলা "> অন্য যাত্রীদের সাথে কথা বলা  </option>
  <option value="অন্য কোনো  কিছু করা"> অন্য কোনো  কিছু করা  </option>
  <option value="কিছুই না করা">কিছুই না করা   </option>
  </optgroup>
  </select>

         </div>
  </td>
  </tr>
  <tr>
  <th><p class="text-success">সহকর্মী:<p></th>

  </tr>
  <tr>
  <td>
 <select class="form-select" style="font-size: 14px;" name="copartner">
  <optgroup class="selectfont">
   <option></option>
  <option value="স্বামী/স্ত্রী">স্বামী/স্ত্রী</option>
  <option value="সন্তান">সন্তান</option>
  <option value="পিতামাতা">পিতামাতা </option>
   <option value="বাড়ির অন্য বাসিন্দা ">বাড়ির অন্য বাসিন্দা    </option>
  <option value="আত্মীয়">আত্মীয়   </option>
  <option value="বন্ধুবান্ধব">বন্ধুবান্ধব  </option>
  <option value="অন্য কোনো পরিচিত">অন্য কোনো পরিচিত  </option>
  <option value="অপরিচিত কেউ">অপরিচিত কেউ</option>

  </optgroup>

</select>

</td>
</tr>
<tr>
  <td>
      <label for="text" class="text-success">অর্থব্যয় (ঐচ্ছিক)</label>

  </td>
</tr>
<tr>
    <td>

     <input type="text" name="Expenditurecost" id="Expenditurecost"/>
    </td>
  </tr>
  <tr>
  <td>
      <label for="text" class="text-success">ব্যয়ের পিছনে কারণগুলি (ঐচ্ছিক)</label>
  </td>
</tr>
<tr>
<td>
  <input type="text" name="Reasons_Expenditurecost" id="Reasons_Expenditurecost" />
    </td>
  </tr>
  <tr>
      <td></td>
  </tr>
<tr>
    <td>


                <div class="2nd div" style="max-width: 780px;margin-bottom:50px;margin-top:-10px;" >
                    <div class="container text-center" style="width: 400px;" >
                      <h3 class="text-primary" style="font-size: 18px">Do you Have Another Activity?</h3>
                    </div>
                    <div class="container text-center"style="width: 400px;">
                        <a href="javascript:" onclick="document.getElementById('myform').submit()"><span class="text-success"> Yes</span></a>
                      <a href="#" id="nobtn" data-toggle="modal" data-target="#myModal" style="padding-left: 8px;><span class="text-danger"> No</span>
                       <span class="moreactivity text-primary">

                           <div class="modal fade" id="myModal" role="dialog" >
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
                                         <a href="{{route('home')}}">Close</a>
                                       </button>
                                     </div>
                                 </div>
                               </div>
                             </div>
                           </span>
                          </a>
                    </div>
                  </div>

    </td>
</tr>


  </tbody>
</table>
</form>

<table class="table table-striped">
    <thead>
<h4 class="text text-success text-center p-2"><u > Your recent activities </u> </h4>
      <tr>

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

        @php
 $tbldata=\App\Home_Single::where('user_id',Auth::User()->id)->orderby('id','desc')->get()

        @endphp


            @foreach ($tbldata as $tbldatas)
            <tr>
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
