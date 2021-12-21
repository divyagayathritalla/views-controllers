<?php

namespace App\Http\Controllers;
use App\Models\apitable;
use Illuminate\Http\Request;

class apiController extends Controller
{
    //
    public function list(){
        return apitable::all();
    }
    public function putData(Request $req){
        $apitable=new apitable;
        $apitable->name=$req->name;
        $apitable->number=$req->number;
        
        $result=$apitable->save();
        if($result){
            return ["Result"=>"data has been inserted"];
        }
        else{
          return ["Result"=>"operation failed"];
        }
    }
    public function listrow($id){
        return apitable::find($id);
     }
    public function update1(Request $req){
        $apitable =apitable::find($req->id); //(request the id in json) //updation using json
        $apitable->name=$req->name;
        $apitable->number=$req->number;
        $result=$apitable->save();
        if($result){
            return ["Result"=>"data has been updated"];
        }
        else{
            return ["Result"=>"operation failed"];
        }
     }
    /* public function update2(Request $req){
        $apitable =apitable::find($id);  
        $apitable->name=$req->name;
        $apitable->number=$req->number;     //updationusing route
        $result=$apitable->save();
        if($result){
            return ["Result"=>"data has been updated"];
        }
        else{
            return ["Result"=>"operation failed"];
        }
     }*/
     public function delete($id){
         $apitable=apitable::find($id);
         $result=$apitable->delete();
         if($result){
            return ["Result"=>"data has been deleted"];
        }
        else{
            return ["Result"=>"operation failed"];
        }
     }
}
