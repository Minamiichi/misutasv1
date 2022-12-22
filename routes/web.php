<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\SavingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InmutationController;
use App\Http\Controllers\BlogGalleryController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\OutmutationController;
use App\Http\Controllers\AdmindashboardController;
use App\Http\Controllers\PPDBGalleryController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('/blog/details/{slug}' , [LandingPageController::class, 'details'])->name('details');

Route::middleware(['auth:sanctum', 'verified'])->name('dashboard.')->prefix('dashboard')->group(function (){
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::resource('ppdb', PpdbController::class);
    Route::resource('ppdb.pgallery', PPDBGalleryController::class)->shallow()->only([
        'index', 'create', 'store', 'destroy'
    ]);
    Route::resource('payment', PaymentController::class);
    Route::resource('saving', SavingController::class);
    Route::get('/cetak_pdf', [SavingController::class, 'cetak_pdf'])->name('cetak_pdf');
    Route::get('/cetak_pdfPembayaran', [PaymentController::class, 'cetak_pdfPembayaran'])->name('cetak_pdfPembayaran');

    Route::middleware(['admin'])->group(function(){
        Route::resource('admindashboard', AdmindashboardController::class);
        Route::resource('student', StudentController::class);
        Route::resource('room', RoomController::class);
        Route::resource('alumni', AlumniController::class);
        Route::resource('teacher', TeacherController::class);
        Route::resource('inmutation', InmutationController::class);
        Route::resource('outmutation', OutmutationController::class);
       

        Route::resource('blog', BlogController::class); 
        Route::resource('blog.gallery', BlogGalleryController::class)->shallow()->only([
            'index', 'create', 'store', 'destroy'
        ]);

        Route::resource('user', UserController::class)->only([
            'index', 'edit', 'update', 'destroy'
        ]);

        Route::get('/tabungan', [Savingcontroller::class, 'tabungan'])->name('tabungan');
        Route::get('/pembayaran', [Paymentcontroller::class, 'pembayaran'])->name('pembayaran');
        Route::get('/cetak_pdfAdmin', [SavingController::class, 'cetak_pdfAdmin'])->name('cetak_pdfAdmin');
        Route::get('/cetak_pdfPembayaranAdmin', [PaymentController::class, 'cetak_pdfPembayaranAdmin'])->name('cetak_pdfPembayaranAdmin');
        Route::get('/ppdbAdmin', [PpdbController::class, 'infoPpdbAdmin'])->name('infoPpdbAdmin');
        Route::get('/ppdbAdminGallery', [PpdbGalleryController::class, 'infoPpdbAdminGallery'])->name('infoPpdbAdminGallery');
    });
});
