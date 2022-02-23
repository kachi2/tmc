<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::get('/about-us', [HomeController::class, 'About'])->name('about-us');
Route::get('/contact-us', [HomeController::class, 'Contact'])->name('contact-us');
Route::post('/tmc/contact-us', [HomeController::class, 'Contacts'])->name('contactUs');

Route::get('/index', [HomeController::class, 'Index'])->name('index');
Route::get('/', [HomeController::class, 'Index'])->name('index');
Route::get('/courses', [HomeController::class, 'Courses'])->name('courses');
Route::get('/course/details/{id}', [HomeController::class, 'CourseDetails'])->name('course.details');
Route::get('/courses/categories/', [HomeController::class, 'CourseCategories'])->name('fetchCategory');
Route::post('/course/enrollment/{id}', [HomeController::class, 'TraineeEnrollment'])->name('traineeEnrollment');



Route::prefix('dashboard')->group(function(){
    Route::get('/', [AdminController::class, 'Courses'])->name('admin.index'); 
    Route::get('/course/details/{id}', [AdminController::class, 'CourseDetails'])->name('admin.course.details');
    Route::get('/course/create', [AdminController::class, 'Create'])->name('admin.course.create');

});




require __DIR__.'/auth.php';
