<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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
    return view('welcome');
});

Route::get('/howitworks', function () {
    return view('pages.howitworks');
});

Route::get('/faq', function () {
    return view('pages.faq');
});
Route::get('/user/contact', function () {
    return view('pages.contact');
});

Route::get('/test', [TestController::class, 'index'])->name('test');
Route::get('/show/{ref_id}', [TestController::class, 'show'])->name('show');

Route::get('/register/{reg_number}', [App\Http\Controllers\HomeController::class, 'ref_link'])->name('ref_link');

Auth::routes();

Route::get('/customer/users/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('customer/users/dashboard');
// Route::get('/register', [App\Http\Controllers\HomeController::class, 'getcountry']);


