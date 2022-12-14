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
    return view('home');
})->name('home');
Route::get('/about-page', function () {
    return view('about');
})->name('about');
Route::get('/member-page', function () {
    return view('ourMember');
})->name('member');
Route::get('/gallery-page', function () {
    return view('gallery');
})->name('gallery');

