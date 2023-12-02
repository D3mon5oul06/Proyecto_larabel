<?php

use App\Http\Controllers\sitioController;
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

/* Route::get('/', function () { 
    return view('landing/home'); */

/*}); */

/*Route::get('/comic', function () {*/
    /*return view('landing/comic');*/
/*});*/

/*Route::get('/personajes', function () {*/
    /*return view('landing/personajes');*/
    
/*});

/*Route::get('/acerca', function () {*/
    /*return view('landing/acerca');*/
/*});*/




Route::prefix('landing')->group(function () {
    Route::get('/comic', [sitioController::class, 'comic'])->name('landing.comic');
    Route::get('/personajes', [sitioController::class, 'personajes'])->name('landing.personajes');
    Route::get('/home', [sitioController::class, 'index'])->name('landing.home');
    Route::get('/acerca', [sitioController::class, 'acerca'])->name('landing.acerca');
    Route::get('/personas', [sitioController::class, 'personas'])->name('landing.personas');
});