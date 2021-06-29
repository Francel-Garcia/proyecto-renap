<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\EmpleadosController;

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

// Route::get('/empleados',function (){
//     ///return view('empleados.index');
//     return wiew('auth.login');
//     # code...
// }); 


Route::resource('empleados',EmpleadosController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/empleados/create',[EmpleadosController::class,'create'])->name('crear-empleado');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
