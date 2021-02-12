<?php

namespace App\Http\Controllers;
use App\Onlyhome;
use Illuminate\Http\Request;

class Myhomeconroller extends Controller
{
    public function onlyhomeactivity(Request $request){

        $request->validate([
            'starttime' => 'required',
            'endtime' => 'required',
            'task' => 'required',
            'copartner'=>'required',
            'multitask' => 'required',


           ],

        [
            'starttime.required' => 'please enter your starttime name',
            'endtime.required' => 'please enter your endtime name',
            'task.required' => 'please enter your task name',
            'multitask.required' => 'please enter your multitask name',

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
        return Redirect()->back()->with('success','Category is inserted');

          }
    }


