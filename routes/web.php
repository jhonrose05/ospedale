<?php

use Illuminate\Support\Facades\Route;
use App\Models\TbEp;
use App\Models\TbRole;

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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('users', App\Http\Controllers\UserController::class);

Route::get('registrarse', function () {
    $eps  = TbEp::pluck('nombre','id');
    $rol  = TbRole::pluck('nombre','id');
    // print_r($rol);die();
    return view('auth.register', compact('eps','rol'));
});