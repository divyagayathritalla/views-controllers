<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;
use App\Http\Controllers\userController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("listu",[userController::class,'listu']);
Route::get("list",[apiController::class,'list']);
Route::get("listrow/{id}",[apiController::class,'listrow']);
Route::post("putdata",[apiController::class,'putData']);
Route::put("update1",[apiController::class,'update1']);
Route::put("update2/{id}",[apiController::class,'update2']);

Route::delete("delete/{id}",[apiController::class,'delete']);
