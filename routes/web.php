<?php

use App\Http\Controllers\cobaController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//Route Name Prefixes
// route::name('location')->group(function(){
//     Route::get('/',[cobaController::class,'index'])->name('front_home');
//     Route::get('about',[cobaController::class,'contact'])->name('front_contact');
// });
// RouteControllers
Route::controller(cobaController::class)->group(function () {
    Route::get('/','index')->name('front_home');
    Route::get('/about','contact')->name('front_contact');
});
