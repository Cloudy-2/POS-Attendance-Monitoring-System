<?php

use App\Http\Controllers\Display;
use Illuminate\Support\Facades\Route;

Route::get('/Employee',[Display::class,'Display2']);
Route::get('/Attendance',[Display::class,'Display']);
Route::get('/AttendanceDash',[Display::class,'Display1']);
Route::get('/AttendanceRecords', [Display::class, 'AttendanceRecords']);
Route::get('/admindash',[Display::class,'Display3']);
Route::get('/position',[Display::class,'Display4']);
Route::get('/schedule',[Display::class,'Display5']);
Route::get('/holiday',[Display::class,'Display6']);
Route::get('/overtime',[Display::class,'Display7']);
Route::get('/payroll',[Display::class,'Display8']);
Route::get('/deduction',[Display::class,'Display9']);
Route::get('/cashadvance',[Display::class,'Display10']);
Route::get('/login',[Display::class,'Display11']);

Route::post('/loginAuth', [Display::class,'loginAuth']);
Route::post('/Submit', [Display::class,'Submit']);
Route::post('/add', [Display::class,'add']);