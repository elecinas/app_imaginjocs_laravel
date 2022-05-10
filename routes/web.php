<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

//Inicio
Route::get('/', [ProductsController::class, 'home'])->name('home');

//PRODUCTS
//Muestra lista de productos
Route::get('/products', [ProductsController::class, 'list'])->name('product.list');

//Crea un producto nuevo
Route::get('/products/create', [ProductsController::class, 'create'])
    ->name('product.create');
Route::post('/products', [ProductsController::class, 'store'])
    ->name('product.store');

//Edita un producto
Route::get('products/edit/{id}', [ProductsController::class, 'edit'])
    ->name('product.edit');
Route::put('products/edit/{id}', [ProductsController::class, 'update'])
    ->name('product.update');

//Elimina un producto
Route::delete('products/{id}', [ProductsController::class, 'delete'])
    ->name('product.delete');


//Cosicas Laravel Breeze

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
