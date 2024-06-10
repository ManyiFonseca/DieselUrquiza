<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BombaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome');

//CRUD de Bombas   
Route::resource('Bombas', BombaController::class);// crear 7 rutas para CRUD 