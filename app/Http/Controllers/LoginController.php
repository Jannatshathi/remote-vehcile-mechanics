<?php

namespace App\Http\Controllers;
use App\Models\User;
 use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function registration(){
        return view('website.pages.registration');
    }

    public function registrationPost(Request $request){
        // dd($request->all());
        if($request->hasFile('user_image'))
                 {
                     $file=$request->file('user_image');
                     // step 2: generate file name
                     $image_name=date('Ymdhms').'.'.$file->getClientOriginalExtension();

                     //step 3 : store into project directory

                     $file->storeAs('/uploads',$image_name);
                    }
                    $request->validate([
                        'phone'=>'required |max:11',
                    ]);
        User::create([
            'image'=>$image_name,
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'password'=>bcrypt( $request->password),
        ]);
        return redirect()->route('website.login');
        
    }
    
    public function login(){
        return view('website.pages.login');
    }
    public function register(){
        return view('website.pages.registration');
    }


    public function doLogin(Request $request){
        // dd($request->all());
        $userpost=$request->except('_token');
            // dd($userpost);
            // dd(Auth::attempt($userpost));
        if (Auth::attempt($userpost)) {
            // dd("true");
            return redirect()->route('webhome')->with('message', 'Login successfull');
        }
        else
        return redirect()->route('website.login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('webhome');
    }
}
