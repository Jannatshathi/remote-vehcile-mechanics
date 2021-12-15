<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userList(){
    $users = User::all();
    return view('admin.layouts.user.user-list', compact('users'));
   }
   public function store(Request $request){
    User::create([
       
        'email'=>$request->email,
        'password'=>bcrypt( $request->password),
       
    ]);
   return view('website.register.store');
}
}