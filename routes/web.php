<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Admincontroller;

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


Route::get('/',[Homecontroller::class,"index"]);

Route::get('/redirects',[Homecontroller::class,"redirects"]);
Route::get('/users',[Admincontroller::class,"user"]);
Route::get('/deleteuser/{id}',[Admincontroller::class,"deleteuser"]);
Route::get('/foodmenu',[Admincontroller::class,"foodmenu"]);
Route::post('/uploadfood',[Admincontroller::class,"upload"]);
Route::get('/deletemenu/{id}',[Admincontroller::class,"deletemenu"]);
Route::get('/updatemenu/{id}',[Admincontroller::class,"updatemenu"]);
Route::post('/update/{id}',[Admincontroller::class,"update"]);
Route::post('/reservation',[Admincontroller::class,"reservation"]);
Route::get('/viewreservations',[Admincontroller::class,"viewreservations"]);
Route::get('/search',[Admincontroller::class,"search"]);
Route::get('/reservations',[Admincontroller::class,"reservations"]);
Route::get('/popup',[Admincontroller::class,"popup"]);
Route::get('/profile',[Admincontroller::class,"profile"]);
Route::get('/orders',[Admincontroller::class,"orders"]);
Route::post('/uploadorder',[Admincontroller::class,"uploadorder"]);
Route::get('/orderhistory',[Admincontroller::class,"orderhistory"]);
Route::get('/kitchenorders',[Admincontroller::class,"kitchenorders"]);
Route::get('/updatestatus/{id}',[Admincontroller::class,"updatestatus"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
