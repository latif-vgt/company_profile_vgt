<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\WelcomeController;

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

Route::get('/', WelcomeController::class)->name('welcome')->middleware(['company.profile.data']);
Route::get('about-us', AboutUsController::class)->name('about-us')->middleware(['company.profile.data']);
Route::get('service', ServiceController::class)->name('service')->middleware(['company.profile.data']);

Route::get('contact', function () {
})->name('contact');

Route::get('news', function () {
})->name('news');

Route::get('blog', function () {
})->name('blog');
