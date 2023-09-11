<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', function () {
    return view('welcome');
});

        /* Student Profile */
Route::view('studentinfo','student/view-personal-info');
Route::view('current-academic','student/current-academic-progress');
Route::view('prev-academic','student/previous-academic-history');


        /* Routine */
Route::view('update-routine','routine/update-routine');
Route::view('view-routine','routine/view-routine');

        /* Reporting */
Route::view('view-report','reporting/view-reports');

        /* Grade Management */
Route::view('view-grade','grade-management/view-grades');
Route::view('update-grade','grade-management/update-grades');
Route::view('set-grade','grade-management/set-desired-grade');

        /* Enrollment */
Route::view('avail-course','enrollment/available-courses');
Route::view('course-recommendation','enrollment/course-recommendation');
Route::view('selected-course','enrollment/selected-courses');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});


Route::get('/student/view-personal-info', [StudentController::class, 'view']);
Route::get('/student/edit-personal-info', [StudentController::class, 'edit']);
Route::put('/student/update', [StudentController::class, 'update']);

Route::view('store','student/create-personal-info');
Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');

