<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\productosController;
use App\Http\Controllers\clientesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmpleosController;
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
    return view('welcome.index');
});

Route::get('/', [homeController::class, 'index']) -> name("welcome.index");

Route::get('/nosotros', [homeController::class, 'nosotros']) -> name("nosotros.index");

Route::resource("/productos", productosController::class);

Route::resource("/clientes", clientesController::class);



Route::get("/empleos", [EmpleosController::class, "index"])->name("empleos.index");
Route::post("/empleos", [EmpleosController::class, "subirEmpleo"]);

Route::get("/users", [UserController::class, "create"]) ->name("users.register");

// Create New User
Route::post('/users', [UserController::class, 'store'])->middleware("guest");

//Logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show login form
Route::get("/login", [UserController::class, 'login'])->name("users.login");

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

//em