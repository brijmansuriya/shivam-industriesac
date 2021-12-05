<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\HomeController;
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
    return view('home');
});
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

Route::get('/clr', function () {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('view:clear');
});