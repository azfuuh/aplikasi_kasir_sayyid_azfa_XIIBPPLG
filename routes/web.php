<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware(['guest'])->group(function(){

    Route::get('/',[SesiController::class,'index'])->name('login');
    Route::post('/',[SesiController::class,'login']);
});

Route::get('/home',function(){
    return redirect('/home');
});

Route::controller(AdminController::class)->group(function (){
    Route::get('/home','index')->name('home');
});

Route::middleware(['auth'])->group(function(){

Route::get('/dashboard',[HomeController::class,'index']);
Route::get('/dashboard/operator',[HomeController::class,'operator'])->middleware('userAkses:operator')->middleware('userAkses:operator');
Route::get('/dashboard/keuangan',[HomeController::class,'keuangan'])->middleware('userAkses:keuangan')->middleware('userAkses:keuangan');
Route::get('/dashboard/marketing',[HomeController::class,'marketing'])->middleware('userAkses:marketing')->middleware('userAkses:marketing');
route::get('views/login');
route::get('/user/user',[UserController::class,'index']);

Route::get('/logout',[SesiController::class,'logout']);

});
