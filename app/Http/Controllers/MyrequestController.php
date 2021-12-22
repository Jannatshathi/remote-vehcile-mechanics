<?php

namespace App\Http\Controllers;
use App\Models\Request_service;
use App\Models\Myrequest;

use Illuminate\Http\Request;

class MyrequestController extends Controller
{
    public function myreq(){
        $req= Myrequest::all();
        //dd($req);
        return view('website.pages.myrequest', compact('req'));
    }
    public function store(Request $request){
        // dd($request->all());
        Myrequest::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'location'=>$request->location,
            'service'=>$request->service,

        ]);
        return redirect()->back();
    }
    public function viewRequest($id){
         dd($id);
        $status = Request_service::find($id);
        if ($status) {
            return view('admin.pages.request',compact('status'));
        }
}
}