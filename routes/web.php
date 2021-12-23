<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sampleController;
use App\Http\Controllers\userController;
use App\Http\Controllers\relationController;
use App\Http\Controllers\collectionsController;
use App\Http\Controllers\validationController;
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
Route::post("/submit",[userController::class,'save']);
Route::get("/main",[userController::class,'show']);
Route::get("/back",[userController::class,'addme']);
Route::get("update/{id}",[userController::class,'edit']);
Route::post("/update",[userController::class,'nono']);
Route::get("/delete/{id}",[userController::class,'del']);
Route::get("/delete/{id}",[userController::class,'del']);


Route::get("data1",[relationController::class,'index1']);
Route::get("data2",[relationController::class,'index2']);
Route::get("collect",[collectionsController::class,'index']);
// Route::get('/registerform',function(){
//     return view('registerview');
// });
// Route::get('/loginform',function(){
//     if(!session('email')){
//         return view('loginview');
//     }
//     else{
//         return view('dashboardview');

//     }
// });
// Route::get('/dashboardform',function(){
//     if(session('email')){
//     return view('dashboardview');
//     }
//     else{
//         return redirect('loginform')->with("status","login first");
//     }
// });
Route::post("/register",[validationController::class,'validate_register']);
Route::post("/dashboard",[validationController::class,'validate_login']);
// Route::get('/list',function(){
//     if(session('email')){
//         return view('listview');
//     }
//     else{
//         return redirect('loginform');

//     }
    
// });
Route::get('/logout',function(){
    session()->pull('email');
    return redirect('/loginform');
});
Route::group(['middleware'=>['Employee']],function(){
    Route::get("/dashboardform",function () {
        return view('dashboardview');
    });
    Route::get("/list",function(){
        return view('listview');
    });
});
Route::group(['middleware'=>['EmployeeLoggedIn']],function(){
    Route::get("/loginform",function () {
        return view('loginview');
    });
    Route::get("/registerform",function(){
        return view('registerview');
    });
});