<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sampleController extends Controller
{
    //
    public function without_parameters(){
        return 'this is without parameters';
    }
    public function with_parameters($id){
        return $id;
    }
    
}
