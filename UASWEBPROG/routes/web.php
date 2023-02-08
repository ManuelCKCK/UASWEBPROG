<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
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

Route::get('/', [AccountController::class, 'index'])->name('mainmenu');
Route::get('/register', [AccountController::class, 'register'])->name('register');
Route::post('/register', [AccountController::class, 'user'])->name('user');
Route::get('/login', [AccountController::class, 'logindata'])->name('logindata');
Route::post('/login', [AccountController::class, 'login'])->name('login');
Route::get('/admin/{account_id}', [ItemController::class, 'itemviewadmin'])->name('itemviewadmin');
Route::get('/user/{account_id}', [ItemController::class, 'itemview'])->name('userhome');
Route::get('/logout', [AccountController::class, 'logout'])->name('logout');

Route::get('/itemdetail/{id}', [ItemController::class, 'itemdetail'])->name('itemdetail');
Route::post('/itemdetailbuy/{id}', [ItemController::class, 'itemacc'])->name('itemacc');
Route::get('/itemdetailbuy/{id}', [ItemController::class, 'itemacc'])->name('itemacc');
//Route::get('/confirmbuy/{id}', [ItemController::class, 'buyshow'])->name('buyshow');
//Route::post('/confirmbuy/', [ItemController::class, 'buyshowconfirm'])->name('buyshowconfirm');
Route::get('/cart/{account_id}', [OrderController::class, 'buyview'])->name('buyview');
//Route::get('/cart/{id}', [OrderController::class, 'buyview'])->name('buyview');
Route::delete('/deleteitem/{order_id}',[OrderController::class,'deleteitem'])->name('deleteitem');
Route::get('/deleteitem/{order_id}',[OrderController::class,'deleteitem'])->name('deleteitem');
Route::get('/checkout',[OrderController::class,'viewcheckout'])->name('viewcheckout');
Route::get('/checkoutadmin',[OrderController::class,'viewcheckoutadmin'])->name('viewcheckoutadmin');
Route::get('/profileuser/{id}',[AccountController::class, 'showprofile'])->name('showprofile');
Route::get('/admincart/{account_id}', [OrderController::class, 'buyviewadmin'])->name('buyviewadmin');
Route::post('/itemdetailbuy/{id}', [ItemController::class, 'itemaccadmin'])->name('itemaccadmin');
Route::get('/itemdetailbuyadmin/{id}', [ItemController::class, 'itemaccadmin'])->name('itemaccadmin');
Route::get('/itemdetailadmin/{id}', [ItemController::class, 'itemdetailadmin'])->name('itemdetailadmin');
Route::get('/adminprofile/{id}',[AccountController::class, 'showprofileadmin'])->name('showprofileadmin');
Route::get('/accmain/{id}',[AccountController::class, 'showprofileall'])->name('showprofileall');
Route::get('/updaterole/{id}',[AccountController::class, 'updaterole'])->name('updaterole');
Route::delete('/deleteacc/{account_id}',[AccountController::class,'deleteacc'])->name('deleteacc');
Route::get('/deleteacc/{account_id}',[AccountController::class,'deleteacc'])->name('deleteacc');