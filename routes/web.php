<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;

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


Route::get('/', [FrontendController::class,'home'])->name('home');
Route::get('/apply', [FrontendController::class,'apply']);
Route::post('/apply', [FrontendController::class,'applyStore'])->name('apply_store');
Route::get('/about', [FrontendController::class,'about']);
Route::get('/testimonials', [FrontendController::class,'testimonials']);
Route::get('/funding', [FrontendController::class,'funding']);
Route::get('/services', [FrontendController::class,'services']);
Route::get('/services/detail/{slug}', [FrontendController::class,'services-detail']);
Route::get('/faq', [FrontendController::class,'faq']);
Route::get('/loans', [FrontendController::class,'loans']);
Route::get('/contact', [FrontendController::class,'contact']);
Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
