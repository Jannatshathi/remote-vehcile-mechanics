<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Servicetype;
use Illuminate\Http\Request;

class ServicetypeController extends Controller
{
    public function index(){
        $servicetypes = Servicetype::all();
        if($servicetypes){
            return $this->responseWithSuccess($servicetypes);
        }
        else{
            return $this->responseWithError();
        }
    }
}
