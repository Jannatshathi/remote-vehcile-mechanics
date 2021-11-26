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
    public function store(Request $request){
        //dd($request->all());
        Customer::create([
        
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'phone'=>$request->phone,
            
        ]);
        return redirect()->back();
    }
}
