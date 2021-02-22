<?php

namespace App\Http\Controllers;

use App\Questions;
use App\User;
use App\Questionsanswere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class QuestionsController extends Controller
{
    public function questions(){
        if (Auth::User()->status==1) {
            return view('decision');
        }
        else{
            return view('questions');
        }
    }

    public function decision(){
        if (Auth::User()->status==1) {
            return view('decision');
        }
        else{
            return view('/');
        }
    }

    public function ans_submit(Request $request)
    {
        $qans=new Questionsanswere;
        $qans->user_id = Auth::user()->id;
        $qans->q1title='বেশিরভাগ ক্ষেত্রেই আমার জীবন আমার দৃষ্টিতে একটি আদর্শ জীবনের কাছাকাছি';
        $qans->ans1=$request->input('1strow_inlineRadioOptions');
        $qans->q2title='আমি একটি অত্তান্ত চমৎকার জীবনযাপন করি';
        $qans->ans2=$request->input('2ndrow_inlineRadioOptions');
        $qans->q3title='আমি আমার জীবন নিয়ে সন্তুষ্ট';
        $qans->ans3=$request->input('3rdrow_inlineRadioOptions');
        $qans->q4title='এখন পর্যন্ত আমার এই জীবনের জন্য গুরুত্বপূর্ণ/প্রয়োজনীয় সব কিছুই আমি পেয়েছি';
        $qans->ans4=$request->input('4throw_inlineRadioOptions');
        $qans->q5title='যদি এই জীবন নতুন করে শুরু করা সম্ভব হয়, তবে আমি এতে প্রায় কোনও পরিবর্তনই করব না';
        $qans->ans5=$request->input('5throw_inlineRadioOptions');
        $qans->save();

        User::where('id',Auth::User()->id)->update([
            'status'=>1
        ]);

        return redirect('decision');
    }



    public function __construct()
    {
        $this->middleware('auth');
    }
}


