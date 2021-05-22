<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
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
    return view('homeku');
});

Route::get('/homeku', [HelloController::class, 'index']);
Route::get('/homeku/callme', [HelloController::class, 'callme']);
Route::get('/homeku/aboutme', [HelloController::class, 'aboutme']);
Route::get('/callme/aboutme', [HelloController::class, 'aboutme']);
Route::get('/callme/callme', [HelloController::class, 'callme']);
Route::get('/aboutme/aboutme', [HelloController::class, 'aboutme']);
Route::get('/aboutme/callme', [HelloController::class, 'callme']);