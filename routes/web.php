<?php

use App\Http\Controllers\AutoController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ModeloController;
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

/*
Route::get('/', function () {
    return view('welcome');
});
*/


// PASO 5
Route::get('/', function () {
    return View('home');
})->name('home');
// ROUTE PARA PRESENTAR UNA VISTA UTILIZANDO EL MÉTODO VIEW Y EL MÉTODO NAME
Route::view('nosotros','nosotros')->name('about');

// ROUTE PARA PRESENTAR UNA VISTA UTILIZANDO EL MÉTODO VIEW Y EL MÉTODO NAME
Route::view('personal','personal')->name('personal');

Route::get('modelos', ModeloController::class)->name('models');

// PASAR PARAMETROS A LA ROUTE
Route::get('contactos/{name?}', [ContactoController::class, 'dataContact'])->name('contact');

Route::resource('autos', AutoController::class)->except('index');

//Ruta personalizada
Route::get('autos', 'App\Http\Controllers\AutoController@index')->name('indexauto');

Route::view('trabajos','trabajos')->name('jobs');


/*
Route::get('/', function () {
    return View('home');
})->name('home');

// ROUTE PARA PRESENTAR UNA VISTA UTILIZANDO EL MÉTODO VIEW Y EL MÉTODO NAME
Route::view('nosotros','nosotros')->name('about');

// ROUTE PARA PRESENTAR UNA VISTA UTILIZANDO EL MÉTODO VIEW Y EL MÉTODO NAME
Route::view('personal','personal')->name('personal');


Route::get('modelos',ModeloController::class)->name('models');

Route::get('contactos/{name?}',[ContactoController::class,'dataContact'])->name('contact');


Route::resource('autos',AutoController::class)->except('index','show');
*/
