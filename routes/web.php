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

// routes/web.php


// routes/web.php

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'login']);
Route::post('/stream', [PageController::class, 'selectStream']);
Route::post('/semester', [PageController::class, 'selectSemester']);
Route::get('/courses/{selectedSemester}/{selectedStream}', [PageController::class, 'showCourses']);
Route::post('/additional-data', [PageController::class, 'processAdditionalData'])->name('formSubmit');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/student', [App\Http\Controllers\HomeController::class, 'student'])->name('student');
