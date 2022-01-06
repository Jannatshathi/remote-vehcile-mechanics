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
   public function userEdit($edit){
    $useredit=User::find($edit);
       return view('admin.pages.user.user-edit', compact('useredit'));
   }
   public function userEdited($edit){
    $useredit=User::find($edit);
    $useredit->update(request()->all());
    return redirect()->route('admin.user.list');

}

public function profile(){
    return view('website.pages.user-profile');
}


}