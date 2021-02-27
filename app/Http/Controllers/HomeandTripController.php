<?php

namespace App\Http\Controllers;
use App\TripactivityModel;
use App\Onlyhome;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeandTripController extends Controller
{
    public function home_second(){

        return view('secondhome');
    }
    public function trip_parts(){

        return view('trip');
    }
    public function tripposts(Request $request){


 $request->validate([


            'endtime' => 'required',
            'task'=>'required',
            'multitask' => 'required',
            'ticketprice' => 'required',
            'adresses' => 'required',
            'destination' => 'required',
            'transport'=>'required',
            'copartner' => 'required',

            'q1value' => 'required',
            'q2value'=>'required',
            'q3value' => 'required',
            'q4value' => 'required',
            'q5value' => 'required',
            'q6value' => 'required',
            'q7value'=>'required',
            'q8value' => 'required',


           ],

        [

            'endtime.required' => 'please enter your endtime name',
            'task.required' => 'please enter your task name',

            'multitask.required' => 'please enter your multitask name',
            'ticketprice.required' => 'please enter your ticketprice name',
            'adresses.required' => 'please enter your adresses name',
            'destination.required' => 'please enter your destination name',

            'transport.required' => 'please enter your transport name',
            'copartner.required' => 'please enter your copartner name',
            'q1value.required' => 'please enter your q1value name',
            'q2value.required' => 'please enter your q2value name',

            'q3value.required' => 'please enter your q3value name',
            'q4value.required' => 'please enter your q4value name',
            'q5value.required' => 'please enter your q5value name',
            'q6value.required' => 'please enter your q6value name',
            'q7value.required' => 'please enter your q7value name',
            'q8value.required' => 'please enter your q8value name',

        ]);

          $category=new TripactivityModel;
        $category->user_id = auth()->user()->id; //sync with user
        $category->tripno =$request->input('tripno');
        $category->starttime =$request->input('starttime');
        $category->endtime = $request->input('endtime');
        $category->task = $request->input('task');
        $category->multitaask = $request->input('multitask');
        $category->ticketprice = $request->input('ticketprice');
        $category->adresses = $request->input('adresses');
        $category->destination = $request->input('destination');
        $category->transport = $request->input('transport');
        $category->copartner = $request->input('copartner');
        $category->q1value = $request->input('q1value');
        $category->q2value = $request->input('q2value');
        $category->q3value = $request->input('q3value');
        $category->q4value = $request->input('q4value');
        $category->q5value = $request->input('q5value');
        $category->q6value = $request->input('q6value');
        $category->q7value = $request->input('q7value');
        $category->q8value = $request->input('q8value');
        $category->save();
        return view('homeORtrip');
        }
        public function __construct()
        {
            $this->middleware('auth');
        }

}
