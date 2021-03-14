<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\UserController;
use App\Models\Complaint;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('login', [PageController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.post');

Route::get('register', [PageController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register.post');

Route::middleware('user')->group(function() {
    Route::post('store-pengaduan/user', [ComplaintController::class, 'store'])->name('store.complaint');
    Route::get('form-pengaduan', [PageController::class, 'formPengaduan'])->name('form.pengaduan');
});

Route::middleware('admin')->group(function() {
    Route::get('system/index', [PageController::class, 'dashboardIndex'])->name('dashboard.index');
 
    Route::get('store/complaint/{id}/response', [PageController::class, 'addComplaintRespond'])->name('store.complaint.response');
    Route::post('store/complaint/respond-post', [ResponseController::class, 'store'])->name('store.complaint.post');

    Route::get('verifikasi/pengaduan', [PageController::class, 'verComplaint'])->name('ver.complaint');
    Route::get('verifikasi/pengaduan/{id}', [ComplaintController::class, 'setStatus'])->name('veriy.pengaduan');
    Route::get('delete/pengaduan/{id}', [ComplaintController::class, 'destroy'])->name('delete.complaint');
 
    Route::get('delete/tanggapan/{id}', [ResponseController::class, 'destroy'])->name('delete.respond');
    Route::get('edit/tanggapan/{id}', [PageController::class, 'editTanggapan'])->name('edit.respond');
    Route::patch('update/tanggapan/{id}', [ResponseController::class, 'update'])->name('update.tanggapan');
    Route::get('delete/user/{id}', [UserController::class, 'destroy'])->name('delete.user');
    Route::get('create/user', [UserController::class, 'create'])->name('create.user');
    Route::get('edit/user/{id}', [UserController::class, 'edit'])->name('edit.user');
    Route::patch('update/user/{id}', [UserController::class, 'update'])->name('update.user');
    Route::post('store/user', [UserController::class, 'store'])->name('store.user');
    
    Route::get('data_petugas', [PageController::class, 'dataPetugas'])->name('data.petugas');
    Route::get('data_masyarakat', [PageController::class, 'dataUser'])->name('data.user');
    Route::get('data_pengaduan', [PageController::class, 'dataComplaint'])->name('data.complaint');
    Route::get('data_tanggapan', [PageController::class, 'dataRespond'])->name('data.respond');
 
    Route::get('detail_pengaduan/{id}', [ComplaintController::class, 'show'])->name('show.complaint');
    Route::get('laporan_petugas', [PageController::class, 'reportPetugas'])->name('report.petugas');
    Route::get('laporan_masyarakat', [PageController::class, 'reportUser'])->name('report.user');
    Route::get('laporan_pengaduan', [PageController::class, 'reportComplaint'])->name('report.complaint');
    Route::get('laporan_tanggapan', [PageController::class, 'reportRespond'])->name('report.respond');    
});