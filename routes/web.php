<?php

use App\Http\Controllers\TireTypeController;
use App\Http\Controllers\TireCodeController;
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


// Route::get('/', function () {
//     return view('tires.index');
// });

Route::get('/', [TireCodeController::class, 'index']);
Route::get('/tires/create', [TireCodeController::class, 'create']);
Route::post('/tires/store', [TireCodeController::class, 'store']);

Route::get('/tiretypes', [TireTypeController::class, 'index']);
Route::get('/tiretypes/create', [TireTypeController::class, 'create']);
Route::post('/tiretypes/store', [TireTypeController::class, 'store']);
