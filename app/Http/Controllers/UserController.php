<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function userList(){
    $users = User::where('role','user')->get();
    //dd($users);
    return view('admin.pages.user.user-list', compact('users'));
   }

public function profile(){
    return view('website.pages.user-profile');
}


}