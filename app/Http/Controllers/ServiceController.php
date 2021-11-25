<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Category;

class ServiceController extends Controller
{
    public function servicelist(){
        $service=Service::all();
        $data=Category::all();
        //dd($data);
        return view('pages.service.service-list',compact('service', 'data'));
    }
    public function store(Request $request){
         //dd($request->all());
        Service::create([
           
            'name'=>$request->name,
            'cost'=>$request->cost,
            'details'=>$request->details,
            'category_id'=>$request->category
        
        ]);
         return redirect()->back();
        //  ->with('success','service-category created successfully.');
    }
}
