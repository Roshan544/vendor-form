<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorFormController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('vendor-form', 'vendor-form');
Route::post('vendor-form', [VendorFormController::class, 'submit']);


// Route::get('admin.dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('admin.dashboard', [AdminController::class, 'admin']);

Route::view('admin.dashboard', 'admin.dashboard');