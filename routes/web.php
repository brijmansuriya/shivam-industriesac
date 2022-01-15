<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\VehicleController;
use App\Http\Controllers\Admin\BearingController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontController;
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

Route::get('/', [HomeController::class, 'index']);
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'admin'], function() {
    Route::get('/',[DashboardController::class,'index']);
});
Route::group(['prefix' => 'admin/category'], function() {
    Route::get('/', [categoryController::class, 'index']);
    Route::get('/add', [categoryController::class, 'add']);
    Route::get('/add/{id}', [categoryController::class, 'add']);
    Route::post('/save', [categoryController::class, 'save']);
    Route::get('/delete/{id}', [categoryController::class, 'delete']);
});
Route::group(['prefix' => 'admin/vehicle'], function() {
    Route::get('/', [VehicleController::class, 'index']);
    Route::get('/add', [VehicleController::class, 'add']);
    Route::get('/add/{id}', [VehicleController::class, 'add']);
    Route::post('/save', [VehicleController::class, 'save']);
    Route::get('/delete/{id}', [VehicleController::class, 'delete']);
});
Route::group(['prefix' => 'admin/bearing'], function() {
    Route::get('/', [BearingController::class, 'index']);
    Route::get('/add', [BearingController::class, 'add']);
    Route::get('/add/{id}', [BearingController::class, 'add']);
    Route::post('/save', [BearingController::class, 'save']);
    Route::get('/delete/{id}', [BearingController::class, 'delete']);
});

Route::group(['prefix' => 'admin/product'], function() {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/add', [ProductController::class, 'add']);
    Route::get('/add/{id}', [ProductController::class, 'add']);
    Route::post('/save', [ProductController::class, 'save']);
    Route::get('/delete/{id}', [ProductController::class, 'delete']);
});

Route::get('/aboutus', [FrontController::class, 'aboutus']);
Route::get('/contactus', [FrontController::class, 'contactus']);
Route::get('/service', [FrontController::class, 'service']);
Route::get('/product', [FrontController::class, 'product']);
Route::get('/productpage/{id}', [FrontController::class, 'productpage']);

Route::get('/clr', function () {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('view:clear');
});