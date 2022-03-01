<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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
Route::get('/category/list', [HomeController::class, 'Category'])->name('users.category');
Route::get('/categories/{id}', [HomeController::class, 'Categories'])->name('users.categories');
Route::get('/courses/snatika', [HomeController::class, 'Snatika'])->name('courses.snatika');

Route::prefix('users')->group(function(){
    Route::get('/courses', [UserController::class, 'Courses'])->name('users.courses');
    Route::get('/account', [UserController::class, 'Account'])->name('users.account');
});


//admin pages
Route::prefix('dashboard')->group(function(){
    Route::get('/', [AdminController::class, 'Courses'])->name('admin.index'); 
    Route::get('/course/details/{id}', [AdminController::class, 'CourseDetails'])->name('admin.course.details');
    Route::get('/course/create', [AdminController::class, 'Create'])->name('admin.course.create');
    Route::post('/course/store', [AdminController::class, 'Store'])->name('admin.course.store');
    Route::get('/course/edit/{id}', [AdminController::class, 'Edit'])->name('admin.course.edit');
    Route::post('/course/update/{id}', [AdminController::class, 'Update'])->name('admin.course.update');
    Route::get('/category/{id}', [AdminController::class, 'Category'])->name('admin.category');
    Route::get('/course/enrollment', [AdminController::class, 'Enrollment'])->name('courses.enrollment');
    Route::get('/account/profile', [AdminController::class, 'Profile'])->name('account.profile');
});
require __DIR__.'/auth.php';
