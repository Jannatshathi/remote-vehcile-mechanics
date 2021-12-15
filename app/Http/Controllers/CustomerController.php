<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class CustomerController extends Controller
{
    public function customerlist(){
        $customer=Customer::all();
        //dd($customer);
        return view('admin.pages.customer.customer-list',compact('customer'));
    }
    
    public function customerform(){
        return view('admin.pages.customer.customer-form');
       
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'phone'=>'required|max:11',
        ]);
        //dd($request->all());
        Customer::create([
        
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'phone'=>$request->phone,
            
        ]);
        return redirect()->route('admin.customer.list')->with('success','customer form created successfully.');
    }
    public function customer(){
        return view('website.pages.customer');
        }
       //return redirect()->back()
}
