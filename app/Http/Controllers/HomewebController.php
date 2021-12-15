<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomewebController extends Controller
{
    public function webhome(){
        return view('website.pages.webhome');
    }
}
