<?php

use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\BranchController;

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::resource('organizations', OrganizationController::class);
Route::resource('branches', BranchController::class);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
