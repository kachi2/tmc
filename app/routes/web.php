<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/index', [HomeController::class, 'Index'])->name('index');
Route::get('/', [HomeController::class, 'Index'])->name('index');
Route::get('/courses', [HomeController::class, 'Courses'])->name('courses');
Route::get('/course/details/{id}', [HomeController::class, 'CourseDetails'])->name('course.details');
Route::get('/courses/categories/', [HomeController::class, 'CourseCategories'])->name('fetchCategory');
Route::post('/course/enrollment/{id}', [HomeController::class, 'TraineeEnrollment'])->name('traineeEnrollment');




require __DIR__.'/auth.php';
