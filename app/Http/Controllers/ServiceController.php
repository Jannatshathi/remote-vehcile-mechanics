<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Servicetype;

class ServiceController extends Controller
{
   
    public function serviceform()
    {
        $data=servicetype::all();
        return view('admin.pages.service.service-form',compact('data'));
    }

   public function sList(){
       $key=null;
       if(request()->search){
           $key=request()->search;
           $service=Service::with('servicetypes')
           ->where('name','Like','%'.$key.'%')
           ->get();
           return view('admin.pages.service.service-list',compact('service','key'));
       }


    $service=Service::with('servicetypes')->get();
    //dd($data);
    return view('admin.pages.service.service-list',compact('service','key'));
   }

    public function store(Request $request){
        // $image_name=null;
        //dd($request->all());
//              step 1: check image exist in this request.
                 

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
            'servicetypes_id'=>$request->servicetype,
            
            
        
        ]);
         return redirect()->route('admin.service.list')->with('success','service created successfully.');
    }
    public function servicelist(){
        $service=Service::with('servicetypes')->get();
        //dd($data);
        return view('website.pages.service-list',compact('service'));
    }
}

