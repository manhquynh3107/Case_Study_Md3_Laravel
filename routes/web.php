<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProjectController;
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


Route::resource('projects', ProjectController::class );
Route::get('/listFilm', function (){
    return view('admin.index');
});
Route::get('add', function (){
    return view('admin.addUser');
});
Route::get('edit', function (){
    return view('admin.edit');
});


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


