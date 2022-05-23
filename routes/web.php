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
    return view('home_screen.home_screen');
});
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});
Route::get('/mitra', function () {
    return view('partner.production_partner');
});
Route::get('/mitra/detail', function () {
    return view('partner.detail_production_partner');
});
Route::get('/home_screen', function () {
    return view('layout.home_screen.home_screen');
});
