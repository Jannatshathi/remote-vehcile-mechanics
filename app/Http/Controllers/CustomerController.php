<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class CustomerController extends Controller
{
    public function customerlist(){
        $customer=Customer::all();
        //dd($customer);
        return view('pages.customer.customer-list',compact('customer'));
    }
    public function store(Request $request){
        //dd($request->all());
        Customer::create([
        
            'c_name'=>$request->c_name,
            'email'=>$request->email,
            'pass'=>$request->pass,
            'phone'=>$request->phone,
            
        ]);
        return redirect()->back();
    }
}
