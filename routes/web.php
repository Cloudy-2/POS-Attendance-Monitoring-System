<?php

use App\Http\Controllers\Display;
use Illuminate\Support\Facades\Route;

Route::get('/Employee',[Display::class,'Display2'])->name('admin.employee');
Route::get('/addEmployeeList', [Display::class, 'DisplayAddEmployeeList'])->name('admin.addEmployeeList');
Route::get('/Attendance',[Display::class,'Display'])->name('admin.attendance');
Route::get('/AttendanceDash',[Display::class,'Display1'])->name('admin.attendanceDash');
Route::get('/AttendanceRecords', [Display::class, 'AttendanceRecords'])->name('admin.attendanceRecords');
Route::get('/admindash',[Display::class,'Display3'])->name('admin.dashboard');
Route::get('/position',[Display::class,'Display4'])->name('admin.position');
Route::get('/schedule',[Display::class,'Display5'])->name('admin.schedule');
Route::get('/holiday',[Display::class,'Display6'])->name('admin.holiday');
Route::get('/overtime',[Display::class,'Display7'])->name('admin.overtime');
Route::get('/payroll',[Display::class,'Display8'])->name('admin.payroll');
Route::get('/deduction',[Display::class,'Display9'])->name('admin.deduction');
Route::get('/cashadvance',[Display::class,'Display10'])->name('admin.cashadvance');
Route::get('/login',[Display::class,'Display11'])->name('admin.login');

Route::post('/loginAuth', [Display::class,'loginAuth'])->name('admin.loginAuth');
Route::post('/Submit', [Display::class,'Submit'])->name('admin.submit');
Route::post('/add', [Display::class,'add'])->name('admin.add');
