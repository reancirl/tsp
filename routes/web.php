<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/accounts-import', [App\Http\Controllers\AccountsController::class, 'import_get'])->name('accounts.import_get');
Route::post('/accounts-import', [App\Http\Controllers\AccountsController::class, 'import_post'])->name('accounts.import_post');
Route::resource('/accounts', App\Http\Controllers\AccountsController::class);
Route::resource('/roles', App\Http\Controllers\RolesController::class);
