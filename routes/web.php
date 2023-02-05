<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/second',[\App\Http\Controllers\indexController::class,'second']);
Route::get('/four',[\App\Http\Controllers\indexController::class,'four']);
Route::get('/five',[\App\Http\Controllers\indexController::class,'five']);
Route::get('/six',[\App\Http\Controllers\indexController::class,'six']);
Route::get('/seven',[\App\Http\Controllers\indexController::class,'seven']);
Route::get('/eight',[\App\Http\Controllers\indexController::class,'eight']);
Route::get('/nine',[\App\Http\Controllers\indexController::class,'nine']);
Route::get('/ten',[\App\Http\Controllers\indexController::class,'ten']);
Route::get('/twelve',[\App\Http\Controllers\indexController::class,'twelve']);
Route::get('/thirteen',[\App\Http\Controllers\indexController::class,'thirteen']);
Route::get('/fourteen',[\App\Http\Controllers\indexController::class,'fourteen']);
Route::get('/fifteen',[\App\Http\Controllers\indexController::class,'fifteen']); // computed method
Route::get('/sixteen',[\App\Http\Controllers\indexController::class,'sixteen']); // whatcher method
Route::get('/seventeen',[\App\Http\Controllers\indexController::class,'seventeen']); // whatcher method
Route::get('/eightteen',[\App\Http\Controllers\indexController::class,'eightteen']); // whatcher method
Route::get('/nineteen',[\App\Http\Controllers\indexController::class,'nineteen']); // component
Route::get('/twenty',[\App\Http\Controllers\indexController::class,'twenty']); // component
Route::get('/twentyone',[\App\Http\Controllers\indexController::class,'twentyone']); // props
Route::get('/twentytwo',[\App\Http\Controllers\indexController::class,'twentytwo']); // Props Validation
Route::get('/twentythree',[\App\Http\Controllers\indexController::class,'twentythree']); // slot
Route::get('/twentyfour',[\App\Http\Controllers\indexController::class,'twentyfour']); // let
Route::get('/twentysix',[\App\Http\Controllers\indexController::class,'twentysix']); // Event modifier Stop,
Route::get('/twentyseven',[\App\Http\Controllers\indexController::class,'twentyseven']); // Event modifier keyboard,
Route::get('/twentyeight',[\App\Http\Controllers\indexController::class,'twentyeight']); // Mount ,
Route::get('/thirty',[\App\Http\Controllers\indexController::class,'thirty']); // Lifecycle ,
Route::get('/test',[\App\Http\Controllers\indexController::class,'test']); // Test ,
// prevent, self ...
