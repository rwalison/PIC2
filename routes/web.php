<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerShop;

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

Route::controller(ControllerShop::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/checkout', 'checkout');
    Route::get('/entrega-e-pagamento', 'payment');
    Route::get('/pedido-concluido', 'concluido')->name('concluido');
    Route::get('/{id}', 'show');
    Route::get('/info-product/{id}', 'getCart');
    Route::post('/finalizar-pedido', 'store');
    
});
