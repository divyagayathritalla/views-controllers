<?php

namespace App\Http\Controllers;

use App\Models\companie;
use App\Models\device;
use App\Models\apitable;
use Illuminate\Http\Request;

class relationController extends Controller
{
    //
    function index1(){
        //return"hello";
        //return companie::find(1);
        return apitable::find(4)->getCompany;
    }
    function index2(){
        // return"one to one";
         // return device::find(1);
         return apitable::find(1)->getDevice;
    } 
}
