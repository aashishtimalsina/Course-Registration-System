<?php

use App\Http\Controllers\PageController;
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

use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'login']);
Route::post('/stream', [PageController::class, 'selectStream']);
Route::post('/semester', [PageController::class, 'selectSemester']);
Route::get('/courses/{selectedSemester}/{selectedStream}', [PageController::class, 'showCourses']);
Route::post('/additional-data', [PageController::class, 'processAdditionalData'])->name('formSubmit');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/student', [App\Http\Controllers\HomeController::class, 'student'])->name('student');
Route::get('/student/{id}/edit', [App\Http\Controllers\HomeController::class, 'edit'])->name('student.edit');
Route::put('/student/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('student.update');
