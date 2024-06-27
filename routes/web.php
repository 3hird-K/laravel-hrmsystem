<?php

// routes/web.php

use App\Http\Controllers\AttendanceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegistrationController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Middleware\DashboardMiddleware;

use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\RegularEmployeeController;

// Route::get("/", function () {
//     return view("welcome");
// });

Route::get('/', [AuthController::class, 'showLoginForm'])->name('welcome');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);



Route::get('/admin', [AuthController::class, 'showAdminForm'])->name('admin');
Route::post('/admin', [AuthController::class, 'admin']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/logout-dashboard', [DashboardController::class, 'logout'])->name('logout.dashboard');


// Routes for administrators
Route::middleware(['auth', AdminMiddleware::class])->group(function () {
    Route::get('/register', [RegistrationController::class, 'register'])->name('register');
    Route::post('/register', [RegistrationController::class, 'store'])->name('register.store');
});

// Routes for HR users
Route::middleware(['auth', DashboardMiddleware::class])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'showDashboardForm'])->name('dashboard');
    // Route::get('/employee', [DashboardController::class, 'EmployeesData'])->name('emp_data');
    Route::get('/list_employee', [DashboardController::class, 'ShowEmployeesData'])->name('all_emp_data');
    Route::get('/department', [DashboardController::class, 'ShowDepartmentForm'])->name('department');
    Route::get('/leave', [DashboardController::class, 'ShowLeaveForm'])->name('leave');
    Route::get('/payroll', [DashboardController::class, 'ShowPayrollForm'])->name('payroll');
    Route::get('/account', [DashboardController::class, 'ShowAccountForm'])->name('account-modify');



    // supervisor
    Route::get('/employee', [EmployeesController::class, 'index'])->name('emp_data');
    Route::post('/store', [EmployeesController::class, 'store'])->name('supervisor.store');
    Route::get('/delete/{id}', [EmployeesController::class, 'destroy'])->name('supervisor.destroy');
    Route::get('/edit/{id}', [EmployeesController::class, 'edit'])->name('supervisor.edit');

    Route::post('/update/{id}', [EmployeesController::class, 'update'])->name('supervisor.update');


    // regular Employee
    // Route::get('/employee', [RegularEmployeeController::class, 'index'])->name('emp_data');
    Route::post('/stores', [RegularEmployeeController::class, 'store'])->name('employee.store');
    Route::get('/deletes/{id}', [RegularEmployeeController::class, 'destroy'])->name('employee.destroy');
    // Route::get('/edit/{id}', [RegularEmployeeController::class, 'edit'])->name('supervisor.edit');

    // Route::post('/update/{id}', [RegularEmployeeController::class, 'update'])->name('supervisor.update');



    // Departments
    Route::post('/storeDepartment', [DepartmentController::class, 'store'])->name('department.store');
    Route::get('/deleteDeparment/{id}', [DepartmentController::class, 'destroy'])->name('department.destroy');



    // Attendance
    Route::post('/Attendance',[AttendanceController::class,'store'])->name('attendance.store');
});
