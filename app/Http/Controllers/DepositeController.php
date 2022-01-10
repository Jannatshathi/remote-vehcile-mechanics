<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Deposite;

class DepositeController extends Controller
{
    public function deposite($id){
        //dd($id);
        return view('website.pages.depositeform');
        // // dd('here');
        // $dep = Deposite::where('user_id',auth()->user()->id)->get();
        // $total = $dep->amount+$request->cost;
        // //dd($dep);
        // if (!empty($dep)) {
        //     return view('website.pages.deposite',compact('dep'));
        // }
        // else {
        //     // $dep = ;
        //     // return view('website.pages.deposite',compact('dep'));
        // }
        // dd($dep->id);
        
        }
    public function depositeList(){
        $deposite=Deposite::all();
        //dd($deposite);
        return view('admin.pages.deposite-list',compact('deposite'));
    }


    public function depositeStore( Request $request){ 
        // dd($request->all());
        Deposite::create([
            'user_id'=>auth()->user()->id,
            'amount'=>$request->amount,
              'remark'=>$request->remark,
              'transaction_id'=>$request->transaction_id
        ]);
        // $dep= Deposite::find($id)->first();
        // $amount = $dep->amount+$request->amount;
        // $dep->update([
        //     'amount'=>$amount,
        //     'remark'=>$request->remark,
        //     'transaction_id'=>$request->transaction_id
        // ]);
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
        // dd($request->all());
        $test = Deposite::find($id); 
        $old = $test->amount;
        $newAmmount = $request->amount;
        $total = $old + $newAmmount;
        // dd($total);
        $percent = 10;
        $final = ($percent / 100)*$total;
        // dd($final);

        Deposite::find($id)->update([
            'status'=>$request->status,
            'amount'=> $final
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
