<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
    public function register(){
        return view('pages.register');
    }
    public function store(Request $request){
        // dd($request->all());
        Register::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'pass'=>$request->pass,
            'phone'=>$request->phone,
            'address'=>$request->address,


        ]);
        return redirect()->back();
    }
}
