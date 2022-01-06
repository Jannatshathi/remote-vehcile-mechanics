<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Deposite;

class DepositeController extends Controller
{
    public function deposite(){
        // dd('here');
        $dep = Deposite::where('user_id','=',Auth::user()->id)->first();
        // dd($dep->id);
        return view('website.pages.deposite',compact('dep'));
    }
    public function depositeList(){
        $deposite=Deposite::all();
        //dd($deposite);
        return view('admin.pages.deposite-list',compact('deposite'));
    }


    public function depositeStore($id, Request $request){
        $dep= Deposite::find($id)->first();
        $amount = $dep->amount+$request->amount;
        $dep->update([
            'amount'=>$amount,
            'remark'=>$request->remark,
            'transaction_id'=>$request->transaction_id
        ]);
        return redirect()->back()->with('success','Sucessfully deposite send');
    }

    public function viewDeposite($id){
        // dd($id);
        $status = Deposite::find($id);
        if ($status) {
            return view('admin.pages.deposite',compact('status'));
        }
    }

    public function updateDeposite( Request $request,$id){
        // dd($id);
        Deposite::find($id)->update([
            'status'=>$request->status
        ]);
        
        // if(auth()->User()->id){
        //     $x=User::where('id')->get();
        //     $y=$x+Request->amount;
    
        //     "amount"->$y;
        // }
    
        return redirect()->route('admin.deposite.list');
    }
    public function deleteDeposite($id){
        Deposite::find($id)->delete();
        return redirect()->back();
    }
}
