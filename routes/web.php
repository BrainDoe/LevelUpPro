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

Route::get('/customer/users/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/customer/users/support_ticket', [App\Http\Controllers\HomeController::class, 'support_ticket'])->name('support_ticket');

Route::get('/customer/users/user_profile', [App\Http\Controllers\HomeController::class, 'user_profile'])->name('user_profile');

Route::post('/customer/users/update_profile/{id}', [App\Http\Controllers\HomeController::class, 'update_profile'])->name('update_profile');

Route::get('/customer/users/edit_profile/{reg_number}', [App\Http\Controllers\HomeController::class, 'edit_profile'])->name('edit_profile');

Route::get('/customer/users/referral_link', [App\Http\Controllers\HomeController::class, 'referral_link'])->name('referral_link');

Route::get('/logins', [App\Http\Controllers\HomeController::class, 'registers'])->name('registers');
