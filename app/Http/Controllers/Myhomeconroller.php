<?php

namespace App\Http\Controllers;
use App\Onlyhome;
use App\HomeandTrip;

use Illuminate\Http\Request;

class Myhomeconroller extends Controller
{
    public function onlyhomeactivity(Request $request){

        $request->validate([
            'starttime' => 'required',
            'endtime' => 'required',
            'task' => 'required',



           ],

        [
            'starttime.required' => 'please enter your starttime name',
            'endtime.required' => 'please enter your endtime name',
            'task.required' => 'please enter your task name',


        ]);


        $category=new Onlyhome;
        $category->user_id = auth()->user()->id; //sync with user
        $category->start_time = $request->input('starttime');
        $category->end_time = $request->input('endtime');
        $category->task = $request->input('task');
        $category->multitaask = $request->input('multitask');
        $category->cost = $request->input('Expenditurecost');
        $category->reason_cost = $request->input('Reasons_Expenditurecost');
        $category->copartner = $request->input('copartner');
        $category->save();

        $categorytwo=new HomeandTrip;
        $categorytwo->user_id = auth()->user()->id; //sync with user
        $categorytwo->starttime = $request->input('starttime');
        $categorytwo->endtime = $request->input('endtime');
        $categorytwo->task = $request->input('task');
        $categorytwo->multitaask = $request->input('multitask');
        $category->cost = $request->input('Expenditurecost');
        $categorytwo->reason_cost = $request->input('Reasons_Expenditurecost');
        $categorytwo->copartner = $request->input('copartner');
        $categorytwo->save();


        return view('homeORtrip');


          }
          public function __construct()
          {
              $this->middleware('auth');
          }
 }


