<?php

use App\Http\Controllers\Admin\ImageApiController;
use App\Http\Controllers\Api\AddProductController;
use App\Http\Controllers\Api\CreateUserController;
use App\Http\Controllers\Api\DeleteProductController;
use App\Http\Controllers\Api\DeleteUserController;
use App\Http\Controllers\Api\EditUserController;
use App\Http\Controllers\Api\ForgetUserController;
use App\Http\Controllers\Api\InfoUserController;
use App\Http\Controllers\Api\LoginUserController;
use App\Http\Controllers\Api\ShowProductsController;
use App\Http\Controllers\Api\UserProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::prefix('auth')->middleware('api')->group(function(){
    Route::post('Create',[CreateUserController::class,'create']);
    Route::post('Login',[LoginUserController::class,'login']);
    Route::post('password/email', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
});
Route::prefix('user')->middleware('auth:api','user-access:user')->group(function(){
    Route::post('Edit',[EditUserController::class,'edit']);
    Route::post('Info',[InfoUserController::class,'info']);
    Route::post('Delete',[DeleteUserController::class,'delete']);
    Route::get('MyProducts',[UserProductsController::class,'product']);
    Route::get('ShowProducts',[ShowProductsController::class,'index']);
    Route::post('AddProduct',[AddProductController::class,'add']);
    Route::post('DeleteProduct',[DeleteProductController::class,'delete']);


});
