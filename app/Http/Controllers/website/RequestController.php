<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Request_service;

class RequestController extends Controller
{
    public function requestList(){
        $request=Request_service::all();
        //dd($request);
        return view('admin.pages.request-list',compact('request'));
    }
    public function store(Request $request){
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
        $status = Request_service::find($id);
        if ($status) {
            return view('admin.pages.request',compact('status'));
        }
    }

    public function updateRequest( Request $request,$id){
        // dd($request->all());
        Request_service::find($id)->update([
            'status'=>$request->status
        ]);
        return redirect()->back();
    }

}