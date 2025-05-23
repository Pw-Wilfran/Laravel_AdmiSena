<?php

use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ApprenticeController;
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


// Courses
Route::get('courses', [CourseController::class, 'index'])->name('course.index');
Route::get('courses/create', [CourseController::class, 'create'])->name('course.create');
Route::post('courses/store', [CourseController::class, 'store'])->name('course.store');

// Teachers
Route::get('teachers', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('teachers/create', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('teachers/store', [TeacherController::class, 'store'])->name('teacher.store');

// Apprentices
Route::get('apprentices', [ApprenticeController::class, 'index'])->name('apprentice.index');
Route::get('apprentices/create', [ApprenticeController::class, 'create'])->name('apprentice.create');
Route::post('apprentices/store', [ApprenticeController::class, 'store'])->name('apprentice.store');
