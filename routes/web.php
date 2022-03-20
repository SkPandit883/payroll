<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CashBookController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\ExpensesEntryController;
use App\Http\Controllers\ExpenseCategoryController;

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

Route::get('/',[DashBoardController::class,'dashboard']);
Route::resource('/Expenses-Entries',ExpensesEntryController::class);
Route::resource('Expenses-Category', ExpenseCategoryController::class)->only(['store','update','destroy']);
Route::resource('CashBook',CashBookController::class)->only(['store','update','destroy','index','edit']);   