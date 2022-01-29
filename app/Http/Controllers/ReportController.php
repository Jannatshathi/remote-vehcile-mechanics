<?php

namespace App\Http\Controllers;

use App\Models\Myrequest;
use Illuminate\Http\Request;


class ReportController extends Controller
{
    public function report(){
        $reports=[];
        if(request()->has('fromdate'))
        {
            $from_date=request()->fromdate;
            $to_date=request()->todate;
            
        
        $reports=Myrequest::where('status','completed')
        ->whereDate('created_at','>=',$from_date)
        ->whereDate('created_at','<=',$to_date)
        ->get();}
       
        return view('admin.pages.report', compact('reports'));
    }
}
