<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Service;
use App\Models\Deposite;
use App\Models\Myrequest;


class HomeController extends Controller
{
    public function home(){
        $all['users']=User::where('role','user')->count();
        $all['mechanics']=User::where('role','mechanics')->count();
        $all['services']=Service::all()->count();
        $all['requests']=Myrequest::all()->count();
        $all['deposites']=Deposite::all()->count();
        return view('admin.pages.home',compact('all'));

        
    }
}
