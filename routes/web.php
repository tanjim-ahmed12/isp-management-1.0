<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/MyProfile',[App\Http\Controllers\Admin\FrontViewController::class, 'index']);
Route::get('/Tickets',[App\Http\Controllers\Admin\table_controller::class, 'index']);
Route::get('/Tickets/add',[App\Http\Controllers\Admin\table_controller::class, 'add']);
Route::get('/Billing',[App\Http\Controllers\Admin\FrontViewController::class, 'billing']);
Route::post('/Tickets/add/insert',[App\Http\Controllers\Admin\table_controller::class, 'insert']);