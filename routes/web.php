<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


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

Route::redirect(uri:'/',destination:'login');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    if(auth()->user()->role_id==3){
    return redirect('/parent');
    }elseif(auth()->user()->role_id==2){
    return redirect('/doctor');
    }elseif(auth()->user()->role_id==1){
    return "I am Admin";
    }else{
    abort(403);
    }
   })->name('dashboard');

   Route::group(['middleware' => 'auth'], function() {

    Route::group(['middleware' => 'role:parent', 'prefix' => '', 'as' => 'parent.'], function() {
        Route::get("/parent",[
            'uses'=>'App\Http\Controllers\ParentController@index',
        'as'=>'parent']);
    });

    Route::group(['middleware' => 'role:doctor', 'prefix' => '', 'as' => 'doctor.'], function() {
        Route::get("/doctor",[
            'uses'=>'App\Http\Controllers\DoctorController@index',
        'as'=>'doctor']);
        });

    Route::group(['middleware' => 'role:admin', 'prefix' => '', 'as' => 'admin.'], function() {
 
        });
       
       });


