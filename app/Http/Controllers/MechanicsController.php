<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MechanicsController extends Controller
{
    public function mechanics(){
        return view('admin.contents.mechanics');
    }
}
