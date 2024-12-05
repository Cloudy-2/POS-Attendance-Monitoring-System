<?php

use App\Http\Controllers\Display;
use Illuminate\Support\Facades\Route;

Route::get('/Attendance',[Display::class,'Display']);
Route::get('/AttendanceDash',[Display::class,'Display1']);
Route::post('/Submit', [Display::class,'Submit']);
Route::get('/AttendanceRecords', [Display::class, 'AttendanceRecords']);
