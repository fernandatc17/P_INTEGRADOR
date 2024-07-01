<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoMovimientoController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\VentaDetalleController;
use App\Http\Controllers\ComprobanteController;
use App\Http\Controllers\ReclamoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\CartController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/admin', [ProductoController::class, 'index']);
//Rutas prueba--------------------------------
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

Route::get('/cart/summary', [CartController::class, 'getCartSummary'])->name('cart.summary');




#Rutas para productos 
Route::get('/clientesp', [ProductoController::class, 'index2']);
// Route::get('/clientesp/reclamos', [ReclamoController::class, 'reclamos']);
Route::get('/clientes/somos', [ProductoController::class, 'somos']);
Route::get('/clientes/carrito', [ProductoController::class, 'carrito']);
Route::get('/clientes/detalle/{id}', [ProductoController::class, 'detalle']);
Route::get('/productos/filtrar', [ProductoController::class, 'filtrar'])->name('productos.filtrar');

Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');
Route::post('/productos/store', [ProductoController::class, 'store'])->name('productos.store');
Route::get('/productos/edit/{id}', [ProductoController::class, 'edit'])->name('productos.edit');
Route::post('/productos/update', [ProductoController::class, 'update'])->name('productos.update');
Route::get('/productos/show/{id}', [ProductoController::class, 'show'])->name('productos.show');
Route::get('/productos/delete/{id}', [ProductoController::class, 'destroy'])->name('productos.destroy');

#Rutas para categorias 

Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::get('/categorias/create', [CategoriaController::class, 'create'])->name('categorias.create');
Route::post('/categorias/store', [CategoriaController::class, 'store'])->name('categorias.store');
Route::get('/categorias/edit/{id}', [CategoriaController::class, 'edit'])->name('categorias.edit');
Route::post('/categorias/update', [CategoriaController::class, 'update'])->name('categorias.update');
Route::get('/categorias/show/{id}', [CategoriaController::class, 'show'])->name('categorias.show');
Route::get('/categorias/delete/{id}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');

#Rutas para categorias 


Route::get('/producto-movimientos', [ProductoMovimientoController::class, 'index'])->name('producto-movimientos.index');
Route::get('/producto-movimientos/create', [ProductoMovimientoController::class, 'create'])->name('producto-movimientos.create');
Route::post('/producto-movimientos/store', [ProductoMovimientoController::class, 'store'])->name('producto-movimientos.store');
Route::get('/producto-movimientos/edit/{id}', [ProductoMovimientoController::class, 'edit'])->name('producto-movimientos.edit');
Route::post('/producto-movimientos/update', [ProductoMovimientoController::class, 'update'])->name('producto-movimientos.update');
Route::get('/producto-movimientos/show/{id}', [ProductoMovimientoController::class, 'show'])->name('producto-movimientos.show');
Route::get('/producto-movimientos/delete/{id}', [ProductoMovimientoController::class, 'destroy'])->name('producto-movimientos.destroy');

#Rutas para ventas 


Route::get('/ventas', [VentaController::class, 'index'])->name('ventas.index');
Route::get('/ventas/create', [VentaController::class, 'create'])->name('ventas.create');
Route::post('/ventas/store', [VentaController::class, 'store'])->name('ventas.store');
Route::get('/ventas/edit/{id}', [VentaController::class, 'edit'])->name('ventas.edit');
Route::post('/ventas/update', [VentaController::class, 'update'])->name('ventas.update');
Route::get('/ventas/show/{id}', [VentaController::class, 'show'])->name('ventas.show');
Route::get('/ventas/delete/{id}', [VentaController::class, 'destroy'])->name('ventas.destroy');

#Rutas para venta-detalle

Route::get('/venta_detalles', [VentaDetalleController::class, 'index'])->name('venta_detalles.index');
Route::get('/venta_detalles/create', [VentaDetalleController::class, 'create'])->name('venta_detalles.create');
Route::post('/venta_detalles/store', [VentaDetalleController::class, 'store'])->name('venta_detalles.store');
Route::get('/venta_detalles/edit/{id}', [VentaDetalleController::class, 'edit'])->name('venta_detalles.edit');
Route::post('/venta_detalles/update', [VentaDetalleController::class, 'update'])->name('venta_detalles.update');
Route::get('/venta_detalles/show/{id}', [VentaDetalleController::class, 'show'])->name('venta_detalles.show');
Route::get('/venta_detalles/delete/{id}', [VentaDetalleController::class, 'destroy'])->name('venta_detalles.destroy');

#Rutas para comprobantes

Route::get('/comprobantes', [ComprobanteController::class, 'index'])->name('comprobantes.index');
Route::get('/comprobantes/create', [ComprobanteController::class, 'create'])->name('comprobantes.create');
Route::post('/comprobantes/store', [ComprobanteController::class, 'store'])->name('comprobantes.store');
Route::get('/comprobantes/edit/{id}', [ComprobanteController::class, 'edit'])->name('comprobantes.edit');
Route::post('/comprobantes/update', [ComprobanteController::class, 'update'])->name('comprobantes.update');
Route::get('/comprobantes/show/{id}', [ComprobanteController::class, 'show'])->name('comprobantes.show');
Route::get('/comprobantes/delete/{id}', [ComprobanteController::class, 'destroy'])->name('comprobantes.destroy');

#Rutas para reclamos
// Route::resource('reclamos', ReclamoController::class);
Route::get('/reclamos', [ReclamoController::class, 'index'])->name('reclamos.index');
Route::get('/reclamos/create', [ReclamoController::class, 'create'])->name('reclamos.create');
Route::post('/reclamos/store', [ReclamoController::class, 'store'])->name('reclamos.store');
Route::get('/reclamos/edit/{id}', [ReclamoController::class, 'edit'])->name('reclamos.edit');
Route::post('/reclamos/update', [ReclamoController::class, 'update'])->name('reclamos.update');
Route::get('/reclamos/show/{id}', [ReclamoController::class, 'show'])->name('reclamos.show');
Route::get('/reclamos/delete/{id}', [ReclamoController::class, 'destroy'])->name('reclamos.destroy');

#Rutas para clientes
Route::resource('clientes', ClienteController::class);
Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('/clientes/store', [ClienteController::class, 'store'])->name('clientes.store');
Route::get('/clientes/edit/{id}', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::post('/clientes/update', [ClienteController::class, 'update'])->name('clientes.update');
Route::get('/clientes/show/{id}', [ClienteController::class, 'show'])->name('clientes.show');
Route::get('/clientes/delete/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');


Route::get('/contactos', [ContactoController::class, 'index'])->name('contactos.index');
Route::get('/contactos/create', [ContactoController::class, 'create'])->name('contactos.create');
Route::post('/contactos/store', [ContactoController::class, 'store'])->name('contactos.store');
Route::get('/contactos/edit/{id}', [ContactoController::class, 'edit'])->name('contactos.edit');
Route::post('/contactos/update', [ContactoController::class, 'update'])->name('contactos.update');
Route::get('/contactos/show/{id}', [ContactoController::class, 'show'])->name('contactos.show');
Route::get('/contactos/delete/{id}', [ContactoController::class, 'destroy'])->name('contactos.destroy');


