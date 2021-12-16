<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function userList(){
    $users = User::all();
    return view('admin.pages.user.user-list', compact('users'));
   }
   
}