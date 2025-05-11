<?php

use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('menu');
});


// Training Centers
Route::get('trainingCenters', [TrainingCenterController::class, 'index'])->name('trainingcenter.index');
Route::get('trainingCenters/create', [TrainingCenterController::class, 'create'])->name('trainingcenter.create');
Route::post('trainingCenters/store', [TrainingCenterController::class, 'store'])->name('trainingcenter.store');


// Areas
Route::get('areas', [AreaController::class, 'index'])->name('area.index');
Route::get('areas/create', [AreaController::class, 'create'])->name('area.create');
Route::post('areas/store', [AreaController::class, 'store'])->name('area.store');


// Computers
Route::get('computers', [ComputerController::class, 'index'])->name('computer.index');
Route::get('computers/create', [ComputerController::class, 'create'])->name('computer.create');
Route::post('computers/store', [ComputerController::class, 'store'])->name('computer.store');
