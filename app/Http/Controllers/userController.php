<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\student;
use App\Models\apitable;
class userController extends Controller
{
    function save(Request $req){
    $data= new student;
    $data->name=$req->name;
    $data->email=$req->email;
    $data->gender=$req->gender;
    $data->phone=$req->phone;
    $data->description=$req->description;
    $data->language=$req->language;
    $data->country=$req->country;
    $data->state=$req->state;
    $data->city=$req->city;
    $data->save();
    return redirect('main');
    }
   
    public function del($id) {
        DB::delete('delete from students where id = ?',[$id]);
        echo "Record deleted successfully.
        ";
        echo '<a href="/main">
        Click Here</a> to go back.';
        }
    function show(){
        $info=student::all();
        return view('main',['members'=>$info]);
        // return $info;
    }
    function addme(){
        return view('userview');
    }
    function edit($id){
        $store=student::find($id);
        return view('edit',['udata'=>$store]);
        // echo $store->name;
    }
    function nono(Request $req){
        $from=student::find($req->id);
        $from->name=$req->name;
        $from->email=$req->email;
        $from->gender=$req->gender;
        $from->phone=$req->phone;
        $from->description=$req->description;
        $from->language=$req->language;
        $from->country=$req->country;
        $from->state=$req->state;
        $from->city=$req->city;
   $from->save();
   return redirect('main');
        }
    /*function getData(){
        return ["name"=>"Reshma"];
    }
    function list($id){
        return student::find($id);
    }
    function listpara($id=null){
        return $id?student::find($id): "hello";
    }*/

    public function listu(){
        return student::all();
    }/*
    public function add(Request $reqd){
      $student=new student;
      $student->name=$reqd->name;
      $student->email=$reqd->email;
      $student->gender=$reqd->gender;
      $student->phone=$reqd->phone;
      $student->description=$reqd->description;
      $student->language=$reqd->language;
      $student->country=$reqd->country;
      $student->state=$reqd->state;
      $student->city=$reqd->city;
      $result=$studuent->save();
      if($result){
          return ["Result]"=>"data has been inserted"];
      }
      else{
        return ["Result]"=>"operation failed"];
      }
    }*/
}