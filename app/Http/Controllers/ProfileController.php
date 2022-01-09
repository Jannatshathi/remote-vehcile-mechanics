<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function profile()
    {
           return view('website.pages.user-profile');
    }

    public function edit($id)
    {
        
        $users=User::find($id);
        return view('website.pages.user-profile-edit',compact('users'));
    }
    public function update(Request $request,$id)
    {
        
        $users=User::find($id);
        $users->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
           

        ]);
        return redirect()->route('website.user.profile')->with('msg','Profile Updated');
    }
}
