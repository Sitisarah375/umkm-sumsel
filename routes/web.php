<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Navbar
Route::get('/', function () {
    return view('landing.index');
});
Route::get('/daerah', function () {
    return view('daerah.index');
});
Route::get('/about', function () {
    return view('about.index');
});
Route::get('/contact', function () {
    return view('contact.index');
});

// UMKM Ilir
Route::get('/wakuban', function () {
    return view('detail.wakuban');
});
Route::get('/pandaibesi', function () {
    return view('detail.pandaibesi');
});
Route::get('/aidil', function () {
    return view('detail.aidil');
});
Route::get('/faaza', function () {
    return view('detail.faaza');
});
Route::get('/galeri', function () {
    return view('detail.galeri');
});
Route::get('/monalisa', function () {
    return view('detail.monalisa');
});
Route::get('/penesak', function () {
    return view('detail.penesak');
});
Route::get('/sawit', function () {
    return view('detail.sawit');
});
