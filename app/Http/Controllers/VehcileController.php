<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehcileController extends Controller
{
    public function vehcile(){

        return view('admin.pages.vehcile');
    }
}
