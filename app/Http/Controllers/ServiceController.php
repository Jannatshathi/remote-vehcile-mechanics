<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Category;

class ServiceController extends Controller
{
    public function servicelist(){
        $service=Service::with('category')->get();
        $data=Category::all();
        //dd($data);
        return view('admin.pages.service.service-list',compact('service', 'data'));
    }
    public function store(Request $request){
        // $image_name=null;
        // dd($request->all());
//              step 1: check image exist in this request.
                 if($request->hasFile('service_image'))
                 {
                     $file=$request->file('service_image');
                     // step 2: generate file name
                     $image_name=date('Ymdhis') .'.'. $file->getClientOriginalExtension();

                     //step 3 : store into project directory

                     $file->storeAs('/services',$image_name);
                    }

        $request->validate([
            'name'=>'required',
            'cost'=>'required',
            'details'=>'required',
        ]);
        
         //dd($request->all());
        Service::create([
           
            'name'=>$request->name,
            'cost'=>$request->cost,
            'details'=>$request->details,
            'image'=>$image_name,
            'category_id'=>$request->category,
            
        
        ]);
         return redirect()->back()->with('success','service-category created successfully.');
    }
}
