<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mechanics;

class MechanicsController extends Controller
{
    public function mechanicslist(){
        $mechanics=Mechanics::all();
        //dd($mechanics);
        return view('admin.pages.mechanics.mechanics-list',compact('mechanics'));
    }
    public function store(Request $request){
        // dd($request->all());
        $image_name = '';

        if($request->hasFile('image_name'))
                 {
                     $file=$request->file('image_name');
                     // step 2: generate file name
                     $image_name=date('Ymdhms').'.'.$file->getClientOriginalExtension();

                     //step 3 : store into project directory

                     $file->storeAs('/uploads',$image_name);
                    }

        //dd($request->all());
        Mechanics::create([
          
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt( $request->password),
            'phone'=>$request->phone,
            'address'=>$request->address,
            'image'=>$image_name,
        ]);
        return redirect()->back();
    }
    public function meclist(){
        $mechanics=Mechanics::all();

        return view('website.pages.mechanics-list',compact('mechanics'));
    }
  
   
}
