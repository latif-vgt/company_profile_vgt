<?php

use App\Models\InformationContent;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $informationContents = InformationContent::get()->pluck('value', 'key')->toArray();
    return view('welcome', compact('informationContents'));
})->name('welcome');

Route::get('about-us', function () {
    $informationContents = InformationContent::get()->pluck('value', 'key')->toArray();
    return view('about-us', compact('informationContents'));
})->name('about-us');

Route::get('contact', function () {
})->name('contact');

Route::get('services', function () {
})->name('services');

Route::get('news', function () {
})->name('news');

Route::get('blog', function () {
})->name('blog');
