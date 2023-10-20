<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', function () {
    return view('welcome');
});

route::get('/portfolio', [ContactController::class, 'index'])->name('portfolio.index');
Auth::routes();

route::post('/portfolio', [ContactController::class, 'ContactMe'])->name('portfolio.ContactMe');
