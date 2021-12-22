<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Request_service;
use App\Models\Myrequest;


class RequestController extends Controller
{
    public function requestList(){
        $request=Myrequest::all();
        // dd($request);
        return view('admin.pages.request-list',compact('request'));
    }
    public function store(Request $request){
        // dd($request->all());
        Request_service::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'location'=>$request->location,
            'service'=>$request->service,

        ]);
        
        return redirect()->back();
    }
    public function request(){
        return view('website.pages.request');
    }

    public function viewRequest($id){
        // dd($id);
        $status = Myrequest::find($id);
        if ($status) {
            return view('admin.pages.request',compact('status'));
        }
    }

    public function updateRequest( Request $request,$id){
        // dd($request->all());
        // dd($id);
        Myrequest::find($id)->update([
            'status'=>$request->status
        ]);
        return redirect()->route('admin.request.list');
    }

}
