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
        //dd($request->all());
        Mechanics::create([
          
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'phone'=>$request->phone,
            'address'=>$request->address,
        ]);
        return redirect()->back();
    }
    

   
}
