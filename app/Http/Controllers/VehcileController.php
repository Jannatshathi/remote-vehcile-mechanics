<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehcile;

class VehcileController extends Controller
{
    public function vehcile(){
        return view('admin.pages.vehcile');
    }
    public function vehcileList(){
        $vehcile=Vehcile::all();
        return view('admin.pages.vehcile-list',compact('vehcile'));
    }
    public function vehcileStore(Request $request){
        if($request->hasfile('image'))
                 {
                     $file=$request->file('image');
                     // step 2: generate file name
                     $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();

                     //step 3 : store into project directory

                     $file->storeAs('/uploads',$filename);
                    }

        Vehcile::create([
            'type'=>$request->type,
            'model'=>$request->model,
            'color'=>$request->color,
            'image'=>$filename,
        ]);
        return redirect()->back();

    }
    public function vehList(){
        $vehcile=Vehcile::all();
        return view('website.pages.vehcile-list',compact('vehcile'));
    }
}
