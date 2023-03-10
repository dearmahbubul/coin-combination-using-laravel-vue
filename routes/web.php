<?php

use App\Http\Controllers\CoinGeneratorController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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


Route::get('/', [CoinGeneratorController::class, 'index'])->name('coin-generator.index');
Route::get('/generate-coin-contributions', [CoinGeneratorController::class, 'index'])->name('coin-generator.index');
Route::post('/generate-coin-contributions', [CoinGeneratorController::class, 'generateCoinContributions'])->name('coin-generator.make');

