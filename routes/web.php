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
// Route::get('/MyProfile', [App\Http\Controllers\Admin\FrontViewController::class, 'index']);
Route::get('/Tickets', [App\Http\Controllers\Admin\table_controller::class, 'index']);
// Route::get('/Tickets/add',[App\Http\Controllers\Admin\table_controller::class, 'add']);

Route::post('/Tickets/add/insert', [App\Http\Controllers\Admin\table_controller::class, 'insert']);
// Route::get('/Tickets/addTicket',[App\Http\Controllers\Admin\table_controller::class, 'addTicket']);
Route::get('/deleteTicket/{id}', [App\Http\Controllers\Admin\table_controller::class, 'delete']);
Route::get('/editTicket/{id}', [App\Http\Controllers\Admin\table_controller::class, 'edit']);
Route::put('/updateTicket/{id}', [App\Http\Controllers\Admin\table_controller::class, 'update']);
// Route::get('/TicketsBechi',[App\Http\Controllers\Admin\table_controller::class, 'ind']);

Route::get('/Billing', [App\Http\Controllers\Billing_Info\Bill_controller::class, 'index']);
Route::get('/Billing/add', [App\Http\Controllers\Billing_Info\Bill_controller::class, 'billing']);
Route::post('/Billing/add/insert', [App\Http\Controllers\Billing_Info\Bill_controller::class, 'insert']);

Route::get('/ChangePlan', [App\Http\Controllers\Plan_Controller\plan_controller::class, 'showPlans']);
Route::get('/ShowPlan/{id}', [App\Http\Controllers\Plan_Controller\plan_controller::class, 'PlanDetails']);
Route::get('/ChangePackage/{id}', [App\Http\Controllers\Plan_Controller\plan_controller::class, 'changePlan']);

Route::get('/Session', [App\Http\Controllers\Session\sessionController::class, 'index']);
