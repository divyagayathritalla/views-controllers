<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apitable extends Model
{
    //public $timestamps=false;

    use HasFactory;
    function getCompany(){
        return $this->hasMany('App\Models\companie');
    }
   public function getDevice(){
       return $this->hasOne('App\Models\device');
   }
    
}
