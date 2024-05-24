<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdviserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/customers/dashboard', [CustomerController::class, 'dashboard'])->name('customer.dashboard');
    Route::get('/customers/recharges', [CustomerController::class, 'recharges'])->name('customer.recharges');
    Route::get('/customers/chanels', [CustomerController::class, 'chanels'])->name('customer.chanels');

    Route::get('/adviser/dashboard', [AdviserController::class, 'dashboard'])->name('adviser.dashboard');
    Route::get('/adviser/recharges', [AdviserController::class, 'recharges'])->name('adviser.recharges');
    Route::get('/adviser/recharges/create', [AdviserController::class, 'create'])->name('advisers.recharge.create');
    Route::post('/adviser/recharges/store', [AdviserController::class, 'store'])->name('advisers.recharge.store');
    Route::get('/adviser/recharges/{id}/edit', [AdviserController::class, 'edit'])->name('adviser.recharges.edit');
    Route::put('/adviser/recharges/{id}', [AdviserController::class, 'update'])->name('adviser.recharges.update');
    Route::post('/adviser/recharges/{id}/cancel', [AdviserController::class, 'cancelRecharge'])->name('advisers.recharge.cancel');

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/customers', [AdminController::class, 'customers'])->name('admin.customers');
    Route::get('/admin/advisers', [AdminController::class, 'advisers'])->name('admin.advisers');
    Route::get('/admin/recharges', [AdminController::class, 'recharges'])->name('admin.recharges');
    Route::get('/admin/advisers/new', [AdminController::class, 'advisersnew'])->name('admin.advisers.new');
    Route::post('/admin/advisers/new/store', [AdminController::class, 'adviser_store'])->name('admin.advisers.new.store');
});

require __DIR__ . '/auth.php';
