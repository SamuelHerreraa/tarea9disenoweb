<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin/settings', [App\Http\Controllers\SettingsController::class, 'index'])->name('admin.settings');



Route::view('/', 'main')->name('main');
Route::view('/photos', 'photos')->name('photos');
Route::view('/contact', 'contact')->name('contact');
