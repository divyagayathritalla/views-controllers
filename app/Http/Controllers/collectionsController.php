<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class collectionsController extends Controller
{
    //
    public function index(){
        $a = collect([1, 2, 3,5,6]);
        echo $a."<br>";
        echo $a->avg()."<br>";
        echo $a->chunk(3)."<br>";
        $collection = collect([
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9],
        ]);
        echo $collection->collapse()."<br>";
        echo $collection->collapse()->sum()."<br>";
        $b = collect(['name', 'branch']);

        $combined = $b->combine(['divya gayathri', 'CSE']);
        echo $combined."<br>";
        $c= collect(['hari']);

       $concatenated = $c->concat(['harsha'])->concat(['name' => 'priya']);
       echo $concatenated."<br>";

      /* $bcollection = collect([1, 2, 3, 4, 5]);
       $bcollection->contains(function ($value, $key) {
         return $value > 5;
        });*/
        $d= collect([1, 2, 3, 4]);
        $dd=$d->count();
        echo $dd."<br>";
        echo $d->countBy()."<br>";
         
        $f = collect([1, 2]);
        $matrix = $f->crossJoin(['a', 'b']);
        echo $matrix."<br>";

        $diff = $d->diff([2, 4, 6, 8]);
        echo $diff."<br>";

        $collection = collect([
            'color' => 'orange',
            'type' => 'fruit',
            'remain' => 6,
        ]);
        
        $diff = $collection->diffAssoc([
            'color' => 'yellow',
            'type' => 'fruit',
            'remain' => 3,
            'used' => 6,
        ]);
        echo $diff."<br>";

        $collection = collect(['a', 'b', 'a', 'c', 'b']);

        $dup=$collection->duplicates();
        echo $dup."<br>";
        
    }
}
