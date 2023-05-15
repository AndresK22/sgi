<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AutController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\EntradaMedicamentoController;
use App\Http\Controllers\DetalleEntradaController;
use App\Http\Controllers\SalidaMedicamentoController;
use App\Http\Controllers\DetalleSalidaController;
use App\Http\Controllers\ControlMensualController;

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

//----------------------------Autenticacion------------------------
//Inicio
Route::get('/', [AutController::class,'index'])->name('login')->middleware('guest');
//Crear primer usuario
Route::view('register', 'aut.create')->name('register')->middleware('guest');
Route::post('register/store', [AutController::class,'store'])->name('register.store')->middleware('guest');
//Iniciar sesion
Route::post('login', [AutController::class,'login'])->name('login.login')->middleware('guest');
//Cerrar sesion
Route::post('logout', [AutController::class,'logout'])->name('logout')->middleware('auth');

//Vista inicial dashboard
Route::get('dashboard', [AutController::class,'dashboard'])->name('dashboard')->middleware('auth');

//------------------------------------Usuarios-------------------------------------
Route::group(['middleware' => ['role:administrador']], function () {
    //Inicio
    Route::get('user', [UserController::class, 'index'])->name('user.index')->middleware('auth');
    //Crear
    Route::get('user/create', [UserController::class, 'create'])->name('user.create')->middleware('auth');
    Route::post('user/store', [UserController::class,'store'])->name('user.store')->middleware('auth');
    //Editar
    Route::get('user/edit/{user}', [UserController::class, 'edit'])->name('user.edit')->middleware('auth');
    Route::put('user/update/{user}', [UserController::class,'update'])->name('user.update')->middleware('auth');
    //Eliminar
    Route::get('user/destroy/{user}/{rol}', [UserController::class,'destroy'])->name('user.destroy')->middleware('auth');
});