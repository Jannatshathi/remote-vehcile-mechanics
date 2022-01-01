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
if($request->hasFile('image'))
{
    $file=$request->file('image');
    // step 2: generate file name
    $fileimage=date('Ymdhms').'.'.$file->getClientOriginalExtension();

    //step 3 : store into project directory

    $file->storeAs('/uploads',$fileimage);
   }
        Deposite::create([
            'user_id'=>$request->user_id,
            'remark'=>$request->remark,
            'transaction_id'=>$request->transaction_id,
            'amount'=>$request->amount,
            'reciept'=>$fileimage
            
        ]);
        return redirect()->back()->with('success','Sucessfully deposite send');
    }

    public function depositeStore(Request $request){
            // dd($request->all());
            if($request->hasFile('image'))
{
    $file=$request->file('image');
    // step 2: generate file name
    $fileimage=date('Ymdhms').'.'.$file->getClientOriginalExtension();

    //step 3 : store into project directory

    $file->storeAs('/uploads',$fileimage);
   }
            
            Deposite::create([
                'user_id'=>$request->user_id,
                'remark'=>$request->remark,
                'transaction_id'=>$request->transaction_id,
                'amount'=>$request->amount,
                'reciept'=>$fileimage
                
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
        return redirect()->route('admin.deposite.list');
    }
    public function deleteDeposite($id){
        Deposite::find($id)->delete();
        return redirect()->back();
    }
}
