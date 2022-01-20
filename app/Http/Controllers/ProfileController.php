<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Deposite;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $status=false;
        $profile=Deposite::where('user_id',auth()->user()->id)->get();
        // dd($profile);
        $user_amount = auth()->user()->amount;
        // dd($user);
        if ($profile->isEmpty() || $user_amount == 0) {
            return view('website.pages.user-profile', compact('status'));
        } else {
            $status=true;
            return view('website.pages.user-profile', compact('status'));
        }
        
           
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
