<?php

use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\PointController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\EntityController;
use App\Http\Controllers\EntitySectionController;
use App\Http\Controllers\ChecklistController;

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::resource('organizations', OrganizationController::class);
Route::resource('branches', BranchController::class);
Route::resource('sections', SectionController::class);
Route::resource('points', PointController::class);
Route::resource('locations', LocationController::class);
Route::resource('entities', EntityController::class);
Route::resource('entitysections', EntitySectionController::class);
Route::resource('checklists', ChecklistController::class);
Route::post('checklists/{checklist}/add-points', [ChecklistController::class, 'addPoint'])->name('checklists.add-points');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';