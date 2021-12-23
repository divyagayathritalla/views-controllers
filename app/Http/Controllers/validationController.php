<?php

namespace App\Http\Controllers;
use App\Models\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class validationController extends Controller
{
    //
    public function validate_register(Request $req){
     
        $validate=$req->validate([
            'email'=>"required|email",
            'password'=>"required|min:8"
        ]);

        if($validate){

            $data=new employee;
            $data->Email=$req->email;
            $data->Password=md5($req->password);
            $result=$data->save();
            if($result){
                return redirect('loginform');
            }
           
        }     
    }

    public function validate_login(Request $req){
     
        $validate=$req->validate([
            'email'=>"required|email",
            'password'=>"required|min:8"
        ]);

        if($validate){

            $data=new employee;
            $data->Email=$req->email;
            $data->Password=md5($req->password);
            $result=DB::select('select *from employees where Email=? and Password=?',[$data->Email,$data->Password]);
            $a=$req->email;
            if($result){
                $req->session()->put('email',$a);
                // echo $a;
                return redirect('dashboardform');
            }
            else{
                return redirect('loginform')->with("status","Incorrect email or password");
                 
            }

           
           
        }     
    }
}
