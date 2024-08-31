<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// import controller
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UmurController;
use App\Http\Controllers\EmployeeController;

// import middleware
use App\Http\Middleware\CekUmur;

// untuk menampilkan halaman.
Route::get('/', function () {
    return view('welcome');
});

Route::get('/fahmi/profile', function(){
    return view('fahmi');
})->name('fahmi');

Route::get('utama', function(){
    return view('utama');
});

// untuk handle halaman menuju 404 | notfound
Route::fallback(function(){
    return "Halaman 404 | not found";
});


// Membuat sebuah CRUD memerlukan routing dibawah :
// Route::get();
// Route::post();
// Route::put('profile/{id}');
// Route::delete('profile/{id}');
// =

Route::resource('profile', ProfileController::class);

// Route::get('profile/create', function(){

// });

// mengalihka beberapa method
Route::match(['GET','POST'], 'jangan_dibuka',  function(){
    return redirect ('/');
});


// Middleware

Route::get('cek_umur_saya', [UmurController::class, 'showForm']);
Route::post('cek_proses', [UmurController::class, 'cekProses'])->name('proses');

route::get('home', function(){
    return "kamu sudah berusia lebih dari 18 tahun";
})->middleware(CekUmur::class);

// controller
Route::get('employee', [EmployeeController::class, 'index']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
