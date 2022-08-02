<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicetype;
use Illuminate\Support\Facades\DB;

class Service_typeController extends Controller
{
    public function servicetype(){
        return view('admin.pages.service.service-type');
    }
    public function store(Request $request){
        Servicetype::create([
            'name'=>$request->name,
            'status'=>$request->status,
            'description'=>$request->description,
        ]);
        return redirect()->route('admin.service.type.list')->with('success','service-type created successfully.');

    }
    public function servicetypelist(){
        //$stype = Servicetype::all();
        $stype = DB::table('servicetypes')->get();
        $stype = Servicetype::paginate(5);

        return view('admin.pages.service.service-type-list',compact('stype'));
    }
 }
