<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeandTrip;
use App\Home_Single;
use App\User;
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

}
