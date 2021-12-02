<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicetype;

class Service_typeController extends Controller
{
    public function servicetype(){
        return view('admin.pages.service-type');
    }
    public function store(Request $request){
        Servicetype::create([
            'name'=>$request->name,
        ]);
        return redirect()->back();

    }
    public function servicetypelist(){
        $stype=Servicetype::all();

        return view('admin.pages.service-type',compact('stype'));
    }

    public function serviceList(){
        $services = Servicetype::all();
        // dd($services);
        return view('website.pages.service-type-list',compact('services'));
    }
}
