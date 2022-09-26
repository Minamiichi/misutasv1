<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\PPDBController;

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

Route::get('/', [LandingPageController::class, 'index'])->name('index');
Route::get('/about', [LandingPageController::class, 'about'])->name('about');
Route::get('/infoPpdb', [LandingPageController::class, 'infoPpdb'])->name('infoPpdb');
Route::get('/siswa', [LandingPageController::class, 'siswa'])->name('siswa');

Route::get('/blog', [LandingPageController::class, 'blog'])->name('blog');
Route::get('/blog/details', [LandingPageController::class, 'details'])->name('details');

Route::middleware(['auth:sanctum', 'verified'])->name('dashboard.')->prefix('dashboard')->group(function (){
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    

    Route::middleware(['admin'])->group(function(){
        Route::resource('student', StudentController::class);
        Route::resource('room', RoomController::class);
        Route::resource('alumni', AlumniController::class);
        Route::resource('teacher', TeacherController::class);
        Route::resource('ppdb', PPDBController::class);
    });
});
