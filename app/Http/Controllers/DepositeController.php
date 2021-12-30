<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deposite;

class DepositeController extends Controller
{
    public function deposite(){
        return view('website.pages.deposite');
    }
    public function depositeList(){
        $deposite=Deposite::all();
        //dd($deposite);
        return view('admin.pages.deposite-list',compact('deposite'));
    }
    public function store(Request $request){
         // $image_name=null;
        //dd($request->all());
//              step 1: check image exist in this request.
if($request->hasFile('receipt'))
{
    $file=$request->file('receipt');
    // step 2: generate file name
    $image_name=date('Ymdhms').'.'.$file->getClientOriginalExtension();

    //step 3 : store into project directory

    $file->storeAs('/uploads',$receipt);
   }
        Deposite::create([
            'remark'=>$request->remark,
            'transaction id'=>$request->transactionid,
            'amount'=>$request->amount,
            'receipt'=>$request->receipt,
            
        ]);
        return redirect()->back();
    }

    public function depositeStore(Request $request){
            // dd($request->all());
            
            Deposite::create([
                'remark'=>$request->remark,
                'transaction id'=>$request->transaction_id,
                'amount'=>$request->amount,
                'reciept'=>$request->receipt,
                
            ]);
            return redirect()->back();
    }
}
