<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
Route::get('/register', [RegisterController::class, 'showFormRegister'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('dki');

Route::get('/data_user', function () {
    return view('admin.addUser');
})->name('addUser');
Route::get('/charts', function () {
    return view('admin.charts');
})->name('charts');
Route::get('/listUser', function () {
    return view('admin.listUser');
})->name('listUser');
Route::get('/notFound', function () {
    return view('admin.modals');
})->name('notFound');
Route::get('/map', function () {
    return view('admin.map');
})->name('map');
Route::get('/pricing', function () {
    return view('admin.pricing');
})->name('pricing');
Route::get('/tables', function () {
    return view('admin.tables');
})->name('tables');


Route::get('/home', function () {
    return view('frontend.pages.home');
})->name('home');
Route::get('/kind', function () {
    return view('frontend.pages.kind');
})->name('kind');
Route::get('/aboutUs', function () {
    return view('frontend.pages.about');
})->name('aboutUs');
Route::get('/contactUs', function () {
    return view('frontend.pages.contact');
})->name('contactUs');
Route::get('showListFilm', function (){
    return view('list-film');
})->name('showListFilm');



Route::get("comingSoon", function () {
    return view('coming_soon.coming_soon');
})->name('comingSoon');
Route::get('/', function () {
    return view('auth.login');
})->name('unAuthenticate');


