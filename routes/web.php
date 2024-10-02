<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ManagerAuthController;
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


Route::prefix('manager')->group(function () {

    Route::middleware(['guest:manager'])->group(function () {
        Route::get('/login', [ManagerAuthController::class, 'showLoginForm'])->name('manager.login');
        Route::post('/login', [ManagerAuthController::class, 'login']);
        Route::get('/register', [ManagerAuthController::class, 'showRegistrationForm'])->name('manager.register');
        Route::post('/register', [ManagerAuthController::class, 'register']);
    });

    Route::middleware(['auth:manager'])->group(function () {
        Route::get('/dashboard', [EmployeeController::class, 'index'])->name('manager.dashboard');
        Route::get('/employees/create', [EmployeeController::class, 'create'])->name('manager.employees.create');
        Route::post('/employees', [EmployeeController::class, 'store'])->name('manager.employees.store');
        Route::post('/logout', [ManagerAuthController::class, 'logout'])->name('manager.logout');
        Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('manager.employees.edit');
        Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->name('manager.employees.update');
        Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('manager.employees.destroy');
    });
});
