<?php

namespace App\Http\Controllers;
use App\Models\Request_service;
use App\Models\Myrequest;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class MyrequestController extends Controller
{
    public function myreq(){
        $req= Myrequest::where('email', Auth::User()->email)->get();
        //dd($req);
        return view('website.pages.myrequest', compact('req'));
    }
    public function store(Request $request){
        //dd($request->all());
        Myrequest::create([
            'name'=>$request->name,
            'email'=>Auth::User()->email,
            'address'=>$request->address,
            'location'=>$request->location,
            'service_id'=>$request->service_id,

        ]);
        return redirect()->route('website.myrequest')->with('success','Request sended');
    }
//     public function viewRequest($id){
//          //dd($id);
//         $status = Request_service::find($id);
//         if ($status) {
//             return view('admin.pages.request',compact('status'));
//         }
// }
}