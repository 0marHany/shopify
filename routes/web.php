<?php

use App\Http\Controllers\crediteCardController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\itemController;
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

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/', [customerController::class, 'create']);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/addProduct', [itemController::class, 'create']);

Route::post('/home', [customerController::class, 'store']);

Route::post('/addProduct', [itemController::class, 'store']);

Route::get('/showProduct', [itemController::class, 'index']);

Route::get('/card', [crediteCardController::class, 'create']);

Route::post('/card', [crediteCardController::class, 'store']);
