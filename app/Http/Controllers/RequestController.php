<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Service;
use App\Models\Myrequest;
use Illuminate\Http\Request;
use App\Models\Request_service;
// use Illuminate\Support\Facades\Auth;


class RequestController extends Controller
{
    public function request(){
        return view('website.pages.request');
    }

    public function requestList(){
        // if(Auth::User()->role=='admin')
        // {
             $request=Myrequest::all();
        // }
        // else 
        // {

        //     $request=Myrequest::where('mechanics_id', Auth::User()->id)->get();
        //     //dd($request);
        // }
        
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
        
        return redirect()->route('admin.request.list')->with('success', 'Your requested has been responded');
    }
    
    public function viewRequest($id){
        // dd($id);
        $status = Myrequest::find($id);
        if ($status) {
            return view('admin.pages.request',compact('status'));
        }
    }

    public function updateRequest( Request $request,$id){
        //  dd($request->all());
        
        // dd($id);
        if ($request->status == "completed") {
            $request = Myrequest::find($id)->update([
                'status'=>$request->status,
                'mechanics_id'=>auth()->user()->id
            ]);
            $request = Myrequest::find($id);
            // dd($request);
            $service_id = $request->service_id;
            // dd($service_id);
            $worker_id = $request->mechanics_id;
            // dd($worker_id);
            // $service = Service::where('id',$service_id)->get();
            $service = Service::find($service_id);
            // dd($service->cost);
            $service_cost = $service->cost;
            // dd($service_cost);
            $percent = 10;
            $Admin_cost = ($service_cost*10)/100;
            // dd($Admin_cost);
            $final = $service_cost-$Admin_cost;
            // dd($final);
            $user = User::find($worker_id);
            // dd($user->amount);
            // dd($user_ammount);
            $total_ammount = ($user->amount) + $final;
            // dd($total_ammount);
            $userUpdate = User::find($worker_id);
            // dd($userUpdate);
            $userUpdate->update([
                'amount'=>$total_ammount
            ]);
            User::where('id',auth()->user()->id)->update([
                'status'=>'available'
            ]);
            return redirect()->route('admin.request.list');


        } else {
            // dd(auth()->user()->id);
            $user = User::where('id',auth()->user()->id)->update([
                'status'=>'engaged'
            ]);
            Myrequest::find($id)->update([
                'status'=>$request->status,
                'mechanics_id'=>auth()->user()->id
            ]);
            return redirect()->route('admin.request.list');
        }
        
       
    }
    public function deleteRequest($id){
        Myrequest::find($id)->delete();
        return redirect()->back();
    }

}
