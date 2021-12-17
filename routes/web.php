<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sampleController;
use App\Http\Controllers\userController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*Route::get("/sample1",[sampleController::class,'without_parameters'] );

Route::get("/sample2/{id}",[sampleController::class,'with_parameters'] );

Route::get('/', function () {
    return view('welcome');
        
    });

Route::get('/about',function(){
    return view('about');
});*/

/*Route::get('/about/{page}',function($page){
    return view('about',["page"=>$page]);
});*/

/*Route::get('/default/{default?}',function($default="Gayathri"){
    return view('default',['default'=>$default]);

});

Route::get('/users/{name}{id}', function ($name,$id) {
    return 'You are looking for '.$name.'with id '.$id;
});*/
/*Route::get('/userview',function(){
    return view('userview');
});
*/
Route::get('/form',function(){
    return view('userview');
});
Route::post('/submit',[userController::class,'save']);
Route::get('/main',[userController::class,'show']);