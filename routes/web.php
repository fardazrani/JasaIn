<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('user.index');
});
//Redirect
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $role_id = Auth::user()->role_id;
    if ($role_id == 1) {
        return view('admin.users.index');
    } else if ($role_id == 3) {
        return view('owner.index');
    } else if ($role_id == 2) {
        return view('user.index');
    }
})->name('welcome');
//admin
Route::get('dashboard/{id}/account', [AdminController::class, 'account'])->name('account');
Route::put('dashboard/{id}/update', [AdminController::class, 'update'])->name('update');
Route::delete('dashboard/{id}', [AdminController::class, 'destroy'])->name('destroy');
Route::get('dashboard/control', [AdminController::class, 'view'])->name('control');
Route::get('dashboard/post', [AdminController::class, 'post'])->name('post');
Route::get('dashboard/superdata', [AdminController::class, 'superdata'])->name('superdata');
//owner
Route::get('dashboard/create', [OwnerController::class, 'create'])->name('create');
Route::get('dashboard/{id}/edit', [OwnerController::class, 'edit'])->name('edit');
Route::put('dashboard/{id}', [OwnerController::class, 'update'])->name('updateo');
// Route::delete('dashboard/delete/{id}', [OwnerController::class, 'destroy'])->name('delete');
Route::delete('dashboard/{id}', [OwnerController::class, 'destroy']);
Route::get('dashboard/view', [OwnerController::class, 'view'])->name('view');
Route::get('dashboard/data', [OwnerController::class, 'data'])->name('data');
Route::get('dashboard/order/{user}', [OwnerController::class, 'order'])->name('order');
Route::post('dashboard/store', [OwnerController::class, 'store'])->name('store'); //asdsd
//user  
Route::get('/cari-jasa', [PageController::class, 'service'])->name('carijasa');
Route::get('/kontak', [PageController::class, 'contact'])->name('kontak');
Route::get('/tentang', [PageController::class, 'about'])->name('tentang');
Route::get('/{user}/status', [PageController::class, 'status'])->name('status');
//transaction
Route::get('/{id}/detail', [TransactionController::class, 'detail'])->name('detail');
Route::post('/{id}/detail/pay', [TransactionController::class, 'booking'])->name('booking');
Route::post('/{id}/confirm', [TransactionController::class, 'confirmBooking'])->name('confirmBooking');//update status
// Route::post('/{id}/store', [TransactionController::class, 'store'])->name('confirmStore');
