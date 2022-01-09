<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Deposite;

class HomewebController extends Controller
{
    public function webhome(){
        if (!empty(auth()->user())) {
            $dep = Deposite::where('user_id',auth()->user()->id)->first();
            return view('website.pages.webhome',compact('dep'));
        }
        else {
            $dep = 0;
            return view('website.pages.webhome',compact('dep'));
        }
        
    }
}
