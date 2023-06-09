<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\Dex;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Testt;
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
    return view('auth.login');
});

Auth::routes();
Route::get('/adddmin',[HomeController::class,'adddmin'])->withoutMiddleware(['auth']);
Route::get('/adddminverif',[HomeController::class,'adddminverif'])->withoutMiddleware(['auth']);
Route::get('/adddminmessages',[HomeController::class,'adddminmessages'])->withoutMiddleware(['auth']);
Route::post('/addfunds',[HomeController::class,'addfunds']);
Route::post('/revverif',[HomeController::class,'revverif']);
Route::post('/addmsg',[HomeController::class,'addmsg'])->withoutMiddleware(['auth']);




Route::get('/profile',[HomeController::class,'profile']);
Route::post('/update',[HomeController::class,'update']);
Route::post('/verify',[HomeController::class,'verify']);
Route::get('/market',[HomeController::class,'crypto']);
Route::get('/settrade',[HomeController::class,'trade']);
Route::get('/tradeshist',[HomeController::class,'tradeshist']);
Route::get('/terms',[HomeController::class,'terms']);
Route::get('/aboutus',[HomeController::class,'aboutus']);
Route::get('/funds',[HomeController::class,'funds']);
Route::post('/conftrade',[HomeController::class,'conftrade']);
Route::post('/recharge',[HomeController::class,'recharge']);
Route::post('/withdraw',[HomeController::class,'withdraw']);
Route::get('/testt',[Testt::class,'testt']);






