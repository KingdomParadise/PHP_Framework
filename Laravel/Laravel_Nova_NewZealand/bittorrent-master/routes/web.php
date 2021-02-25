<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StaticController;
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

Route::get('/', HomeController::class)->name('home');

Route::get('/impressum', [StaticController::class, 'imprint'])->name('static.imprint');
Route::get('/datenschutz', [StaticController::class, 'dataPrivacy'])->name('static.dataprivacy');
Route::get('/bildnachweise', [StaticController::class, 'imageLicences'])->name('static.imagelicences');
