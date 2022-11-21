<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\BicisController;
use App\Http\Controllers\AlojamientosController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PistasController;
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
//Route::get('/paypal/pay', 'PaymentController@payWithPayPal');
//Route::get('/paypal/status', 'PaymentController@payPalStatus');
Route::get('/pistas', function () {
    return view('laciana.pistas');
});
Route::get('/interes', function () {
    return view('laciana.interes');
});

Route::resource('alojamientos', AlojamientosController::class);