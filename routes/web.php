<?php

use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\ChecklistSectionController;
use App\Http\Controllers\ChecklistPointController;
use App\Http\Controllers\LocationController;

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::resource('organizations', OrganizationController::class);
Route::resource('branches', BranchController::class);
Route::resource('checklistsections', ChecklistSectionController::class);
Route::resource('checklistpoints', ChecklistPointController::class);
Route::resource('locations', LocationController::class);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';