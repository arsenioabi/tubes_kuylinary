<?php

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
    return view('layout.indexlayout');
})->name('index');

Route::get('/login', function () {
    return view('login.loginas');
})->name('login');

Route::get('/register', function () {
    return view('register.registas');
})->name('register');

Route::get('/loginadm', function () {
    return view('login.loginadmin');
})->name('loginadm');

Route::get('/about', function () {
    return view('about.about');
})->name('about');

Route::get('/loginuser', function () {
    return view('login.loginuser');
})->name('loginuser');

Route::get('/loginadmin', function () {
    return view('login.loginadmin');
})->name('loginadmin');

Route::get('/registuser', function () {
    return view('register.registuser');
})->name('registuser');

Route::get('/loguser', function () {
    return view('loguser.landinguser');
})->name('loguser');

Route::get('/registadmin', function () {
    return view('register.registadmin');
})->name('registadmin');

Route::post('/loginadmin', [LogAdminController::class,'store']);
Route::post('/loginuser', [LogUserController::class,'store']);
Route::post('/logout', [LogAdminController::class,'logout']);
Route::post('/landinguser', [LogUserController::class,'store']);
Route::get('/logmin',[DashminController::class,'index'])->name('logadmin');
Route::get('/promin',[ProminController::class,'index'])->name('promin');
Route::post('/registuser',[RegUserController::class,'store']);
Route::post('/registadmin',[RegAdminController::class,'store']);

Route::get('/logmin',[DashminController::class,'index'])->name('logadmin');
Route::get('/promin',[ProminController::class,'index'])->name('promin');
Route::get('admin/daftarrestoran/{id}/delete', [DaftarRestoranController::class, 'destroy']);
Route::get('admin/DaftarRestoran/{id}/delete', [DaftarRestoranController::class, 'destroy']);
Route::resource('admin/daftarrestoran', DaftarRestoranController::class);
Route::resource('admin/DaftarPariwisata', DaftarRestoranController::class);
Route::resource('user/DaftarMakanan', DaftarMakananController::class);