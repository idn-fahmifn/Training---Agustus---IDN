<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\ProfileController;

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
// Route::resource('profile', ProfileController::class);


