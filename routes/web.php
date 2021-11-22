<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vistasdeinmo;
use App\Http\Controllers\registerController;
use App\Http\Controllers\sessionsController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\ambientesController;
use App\Http\Controllers\propiedadesController;
use App\Http\Controllers\tiposController;
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

//Route::get('/', function () {
  //  return view('vista1');
//});
//Route::get('/',[vistasdeinmo::class,'vista1']);

//Route::get('/',[vistasdeinmo::class,'vista1']);
Route::get('/about.php',[vistasdeinmo::class,'vista2']);
Route::get('/agents.php',[vistasdeinmo::class,'vista3']);
Route::get('/blog.php',[vistasdeinmo::class,'vista4']);
Route::get('/contact.php',[vistasdeinmo::class,'vista5']);
Route::get('/buysalerent.php',[vistasdeinmo::class,'vista6']);
Route::get('/property-detail.php',[vistasdeinmo::class,'vista7']);

//registro funcional
Route::get('/register.php',[registerController::class,'create'])
->name('register.index');

Route::post('/register.php',[registerController::class,'store'])
->name('register.store');

//login

Route::get('/',[sessionsController::class,'create'])
->name('login.index');  

Route::post('/',[sessionsController::class,'store'])
->name('login.store');

Route::get('/logout',[sessionsController::class,'destroy'])
->name('login.destroy');

Route::get('/dash',[adminController::class,'index'])
->middleware('auth.admin')
->name('admin.index');

// crude 
Route::resource('Propiedades','App\Http\Controllers\PropiedadesController');
Route::resource('Ambientes','App\Http\Controllers\AmbientesController');
Route::resource('Tipos','App\Http\Controllers\TiposController');