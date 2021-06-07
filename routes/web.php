<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EdicioController;
use App\Http\Controllers\HomeController;


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
    return view('welcome');
});

Route::get('/dashboard', [EdicioController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

/*EDICCIO D'UAURIS*/
Route::get('/edicio', [EdicioController::class, 'edit'])->middleware(['auth'])->name('usuari.edit');
Route::post('/edicion', [EdicioController::class, 'update'])->middleware(['auth'])->name('usuari.update');






Route::get('/admin',[HomeController::class,'admin'])->name('admin')->middleware(['auth']);





/*REAL TIME NOTIFICATION */

Route::get('home',[HomeController::class, 'index'])->name("home");

Route::post('mensaje/send',[HomeController::class,'send'])->name('enviar');



require __DIR__.'/auth.php';
