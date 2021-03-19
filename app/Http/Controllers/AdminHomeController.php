<?php

namespace App\Http\Controllers;

use App\User;
use App\GetAnswere;
use App\Home_Single;
use App\HomeandTrip;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
public function showallData($id){

    $tblhomeandtripdata=HomeandTrip::where('user_id',$id)->orderby('created_at','asc')->get();
    $tblhomedata=Home_Single::where('user_id',$id)->orderby('created_at','asc')->get();
    $name=User::where('id',$id)->orderby('id','asc')->first();

    return view('adminpanel.usersalldata',compact('tblhomeandtripdata','tblhomedata','name'));
}
public function showallUser(){
    return view('adminpanel.admin_home');
}
public function showquestionans(){
    return view('adminpanel.questiionAnswere');
}

public function allqestionsandanswere($id){
    $allQaandAns=GetAnswere::where('user_id',$id)->orderby('id','asc')->get();
    $name=User::where('id',$id)->orderby('id','asc')->first();
    return view('adminpanel.allquestionsandans',compact('allQaandAns','name'));
}
}
