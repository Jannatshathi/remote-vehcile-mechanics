<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        if($users){
            return $this->responseWithSuccess($users);
        }
        else{
            return $this->responseWithError();
        }
    }
}
