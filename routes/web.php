<?php

use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [DashboardController::class, 'index'])->name('home');

// pages
Route::controller(PagesController::class)->group(function (){
    Route::get('/pages','index')->name('pages.home');
    Route::post('/pages/store','store')->name('pages.store');
    Route::get('/pages/{id}/edit','edit')->name('pages.edit');
    Route::put('/pages/{id}/update', 'update')->name('pages.update');
    Route::delete('/pages/{id}/delete', 'destroy')->name('pages.delete');
});

// content

Route::controller(ContentController::class)->group(function (){
    Route::prefix('content')->group(function (){
        Route::get('/','index')->name('content.home');
    });
});
