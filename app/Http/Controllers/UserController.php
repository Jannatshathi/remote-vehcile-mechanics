<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function userList(){
        $users = DB::table('users')->where('role','user')->get();
        //$users = User::where('role','user')->toBase()->get();
        //dd($users);
    return view('admin.pages.user.user-list', compact('users'));
   }

    public function profile(){
    return view('website.pages.user-profile');
}


}