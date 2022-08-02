<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Servicetype;
use Illuminate\Http\Request;
use Throwable;

class ServicetypeController extends Controller
{
    public function index(){
        //$servicetypes = Servicetype::all();
        // if($servicetypes){
        //     return $this->responseWithSuccess($servicetypes, "your request has been created successfully");
        // }
        // else{
        //     return $this->responseWithError($servicetypes, "your request has been failed");
        // }
        try{
            $servicetypes = Servicetype::all();
            return $this->responseWithSuccess($servicetypes, "your request has been proceed successfully");
        }
        catch(\Throwable $th){
            return $this->responseWithError($servicetypes, "your request has been denied");
        }
    }
    public function create(Request $request){
        try{
            $servicetype = Servicetype::create([
                'name' =>$request->name,
                'status' =>$request->status,
                'description' =>$request->description
            ]);
            return $this->responseWithSuccess($servicetype, "your request has been created successfully");
        }
        catch(\Throwable $th){
            
            return $this->responseWithError($servicetype,"your request has been failed");
        }

        }
        public function update(Request $request,$id){
            $servicetype = Servicetype::find($id);
            try{
                $servicetype->update([
                    'name' =>$request->name,
                    'status' =>$request->status,
                    'description' =>$request->description
                ]);
                return $this->responseWithSuccess($servicetype, "your request has been created successfully");

            }
            catch(\Throwable $th){
                return $this->responseWithError($servicetype, "your request has been failed");
            }
        }
        public function delete($id){
            $servicetype = Servicetype::find($id);
            try{
                $servicetype->delete();
                return $this->responseWithSuccess($servicetype, "your request has been created successfully");
            }
            catch(\Throwable $th){
                return $this->responseWithError($servicetype, "your request has been failed");
            }
        }
        
}
