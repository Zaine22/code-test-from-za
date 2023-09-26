<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
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
Route::get('/company', [CompanyController::class, 'index']);
Route::get('/company/create', [CompanyController::class, 'create']);
Route::post('/company/store', [CompanyController::class, 'store']);
Route::delete('/company/{company:id}/delete', [CompanyController::class, 'destory']);
Route::get('/company/{company:id}/edit', [CompanyController::class, 'edit']);
Route::get('/company/{company:id}/employees', [CompanyController::class, 'employee']);
Route::patch('/company/{company:id}/update', [CompanyController::class, 'update']);

Route::get('/employee', [EmployeeController::class, 'index']);
Route::get('/employee/create', [EmployeeController::class, 'create']);
Route::post('/employee/store', [EmployeeController::class, 'store']);
Route::delete('/employee/{employee:id}/delete', [EmployeeController::class, 'destory']);
Route::get('/employee/{employee:id}/edit', [EmployeeController::class, 'edit']);
Route::patch('/employee/{employee:id}/update', [EmployeeController::class, 'update']);

Route::get('/dashboard', [CompanyController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
