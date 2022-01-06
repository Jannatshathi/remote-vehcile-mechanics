<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Deposite;

class HomewebController extends Controller
{
    public function webhome(){
        $dep = Deposite::where('user_id','=',Auth::user()->id)->first();
        return view('website.pages.webhome',compact('dep'));
    }
}
