<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FoodCategoryController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RestCategoryController;

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
/*
Route::get('/booking', [BookingController::class, 'create'])->name('booking.create');
Route::get('/client', [ClientController::class, 'index'])->name('client.index');
Route::get('/food', [FoodController::class, 'index'])->name('food.index');
Route::get('/foodcater', [FoodCategoryController::class, 'index'])->name('foodcat.index');
Route::get('order', [OrderController::class, 'index'])->name('order.index');
Route::get('place', [PlaceController::class, 'index'])->name('place.index');
Route::get('/restaurant', [RestaurantController::class, 'index'])->name('restaurant.index');
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/rest', [RestCategoryController::class, 'index'])->name('rest.index');*/


Route::resource('foodcat', FoodCategoryController::class);
Route::resource('user', UserController::class);
Route::resource('rest', RestCategoryController::class);
Route::resource('restaurant', RestaurantController::class);
Route::resource('place', PlaceController::class);
Route::resource('client', ClientController::class);
Route::resource('booking', BookingController::class);
Route::resource('food', FoodController::class);
Route::resource('order', OrderController::class);

