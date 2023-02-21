<?php

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

Auth::routes();

Route::get('/',[App\Http\Controllers\frontend\CareerController::class, 'index'])->name('/');
Route::get('/about',[App\Http\Controllers\frontend\CareerController::class, 'about'])->name('about');
Route::get('/privacy-policy',[App\Http\Controllers\frontend\CareerController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-conditions',[App\Http\Controllers\frontend\CareerController::class, 'termsConditions'])->name('terms-conditions');
Route::get('/security',[App\Http\Controllers\frontend\CareerController::class, 'security'])->name('security');
Route::get('/filter-job',[App\Http\Controllers\frontend\CareerController::class, 'filterJob'])->name('filter-job');
Route::get('/view-job/{job_id}',[App\Http\Controllers\frontend\CareerController::class, 'viewJob'])->name('view-job');

