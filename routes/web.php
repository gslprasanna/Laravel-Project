<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomtypeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;


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

Route::get('/',[HomeController::class,'home']);
Route::get('/service/{id}',[HomeController::class,'service_detail']);


Route::get('admin', function () {
    return view('dashboard');
});
Route::get('h', function () {
    return view('hi');
});   
      
//RoomType Routes
Route::get('admin/roomtype/{id}/delete',[RoomtypeController::class,'destroy']);

Route::resource('admin/roomtype',RoomtypeController::class);

Route::get('admin/rooms/{id}/delete',[RoomController::class,'destroy']);

Route::resource('admin/rooms',RoomController::class);

//customers
Route::get('admin/customer/{id}/delete',[CustomerController::class,'destroy']);
Route::resource('admin/customer',CustomerController::class);
//admin login
Route::get('admin/login',[AdminController::class,'login']);
Route::post('admin/login',[AdminController::class,'check_login']);
Route::get('admin/logout',[AdminController::class,'logout']);
//images
Route::get('admin/roomtypeimage/delete/{id}',[RoomtypeController::class,'destroy_image']);
//booking
Route::get('admin/booking/{id}/delete',[BookingController::class,'destroy']);
Route::get('admin/booking/available-rooms/{checkin_date}',[BookingController::class,'available_rooms']);
Route::resource('admin/booking',BookingController::class);
//cstoer
Route::get('login',[CustomerController::class,'login']);
Route::post('customer/login',[CustomerController::class,'customer_login']);
Route::get('register',[CustomerController::class,'register']);
Route::get('logout',[CustomerController::class,'logout']);

Route::get('booking',[BookingController::class,'front_booking']);
// Service CRUD
Route::get('admin/service/{id}/delete',[ServiceController::class,'destroy']);
Route::resource('admin/service',ServiceController::class);