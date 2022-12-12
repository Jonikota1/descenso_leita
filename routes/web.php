<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\BicisController;
use App\Http\Controllers\AlojamientosController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PistasController;
use App\Http\Controllers\EnvioController;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;


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
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/prueba', function () { //RUTA PARA HACER PRUEBAS Y VER LOS CAMBIOS Y EJECUTAR ALGUN CAMBIO COMO CAMBIAR PERMISOS
    $user = User::find(1)->roles()->sync([1]);
    return $user;
});  //LE DOY AL USUARIO QUE QUIERO LOS ROLES QUE QUIERO, EN ESTE CASO LE DOY ADMINSITRADOR

Route::post('contactanos',[ContactanosController::class, 'store'])->name('contactanos.store');
Route::get('contactanos',[ContactanosController::class, 'index'])->name('contactanos.index');
Route::resource('bicis', BicisController::class);
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');
Route::get('/pistas', function () {
    return view('laciana.pistas');
});
Route::get('/interes', function () {
    return view('laciana.interes');
});

Route::resource('alojamientos', AlojamientosController::class);

Route::post('pay', [PaymentController::class, 'pay'])->name('payment');
Route::get('success', [PaymentController::class, 'success']);
Route::get('error', [PaymentController::class, 'error']);

//Route::get('envio',[EnviosController::class, 'index'])->name('envio.index');
//Route::post('envio',[EnviosController::class, 'create'])->name('envio.create');
//Route::get('datos',[EnviosController::class, 'datos'])->name('envio.datos');

Route::get('envio',[EnvioController::class, 'index'])->name('envio.index');
Route::post('envio',[EnvioController::class, 'create'])->name('envio.create');
Route::get('datos',[EnvioController::class, 'datos'])->name('envio.datos');


Route::get('/gracias', function () {
    return view('envio.gracias');
});

Route::get('/legal', function () {
    return view('nosotros.legal');
});

Route::get('/nosotros', function () {
    return view('nosotros.nosotros');
});

Route::get('/error', function () {
    return view('error.index');
});

