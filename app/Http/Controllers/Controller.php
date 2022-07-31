<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function responseWithSuccess($users, $msg){
        return response()->json([
            'success'=>'true',
            'data'=>$users,
            'message'=>$msg,
            'status'=>'200'
        ]);
    }
    public function responseWithError($users, $msg){
        return response()->json([
            'success'=>'false',
            'data'=>'not available',
            'message'=>$msg,
            'status'=>'400'
        ]);
    }
}
