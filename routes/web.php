<?php

use App\Http\Controllers\PasseioTuristicoController;
use App\Models\PasseioTuristico;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PasseioTuristicoController::class, 'index']);


Route::get('/passeios', [PasseioTuristicoController::class, 'index1']);
