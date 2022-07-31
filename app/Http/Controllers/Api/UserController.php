<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        if($users){
            return $this->responseWithSuccess($users, "your request accepted");
        }
        else{
            return $this->responseWithError($users, "your request has been failed");
        }
    }
    public function create(Request $request){
        try{
             $image_name = null;

        if($request->hasFile('image_name'))
                 {
                     $file=$request->file('image_name');
                     // step 2: generate file name
                     $image_name=date('Ymdhms').'.'.$file->getClientOriginalExtension();
                     //step 3 : store into project directory
                     $file->storeAs('/uploads',$image_name);
                    }
            
            $user = User::create([
                'name' =>$request->name,
                'email' =>$request->email,
                'password' =>bcrypt($request->password),
                'phone' =>$request->phone,
                'image' =>$image_name
            ]);
            return $this->responseWithSuccess($user, "your request has been created successfully");
        }
        catch(\Throwable $th){
            return $this->responseWithError($user, "your request has been failed");

        }

    }
    public function delete($id){
        $user = User::find($id);
        try{
            $user->delete();
            return $this->responseWithSuccess($user, "your request has been deleted successfully");
        }
        catch(\Throwable $th){
            return $this->responseWithError($user, "your request has been failed");
        }
    }
    public function update(Request $request,$id){
        $user = User::find($id);
        try{
            $image_name = null;

            if($request->hasFile('image_name'))
                     {
                         $file=$request->file('image_name');
                         // step 2: generate file name
                         $image_name=date('Ymdhms').'.'.$file->getClientOriginalExtension();
                         //step 3 : store into project directory
                         $file->storeAs('/uploads',$image_name);
                        }
            $user->update([
              'name' =>$request->name,
              'email' =>$request->email,
              'password' =>$request->password,
              'phone' =>$request->phone,
              'image' =>$request->image_name
  
          ]);
              return $this->responseWithSuccess($user, "your request has been updated successfully" );
          }
          catch (\Throwable $th){
              return $this->responseWithError($user, "your request has been failed");
  
          }
    }
}
