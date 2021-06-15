<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
    return view('pages.index');
})->name('pages.index');

Route::get('/zohoverify/verifyforzoho.html', function () {
    return "37801565";
});

Route::post('/cotizacion-mail', [PagesController::class, 'cotizacionMail'])->name('cotizacion-mail');
