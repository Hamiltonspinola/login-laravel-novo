<?php

use App\Http\Controllers\PedidosController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdutosController;
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
Route::middleware('auth')->group(function(){
    #Rotas de Pedidos
    Route::get('/pedidos/create', [PedidosController::class, 'create'])->name('pedidos.create');
    Route::put('/pedidos/edit/{id}', [PedidosController::class, 'update'])->name('pedidos.update');
    Route::get('/pedidos/edit/{id}', [PedidosController::class, 'edit'])->name('pedidos.edit');
    Route::delete('/pedidos/{id}', [PedidosController::class, 'destroy'])->name('pedidos.destroy');
    Route::get('/pedidos/{id}', [PedidosController::class, 'show'])->name('pedidos.show'); 
    Route::post('/pedidos/create', [PedidosController::class, 'store'])->name('pedidos.store');
    Route::get('/pedidos', [PedidosController::class, 'index'])->name('pedidos.index');
    #Rotas de Posts
    Route::get('/posts/creates', [PostController::class, 'creates'])->name('posts.creates');
    Route::put('/posts/edit/{id}', [PostController::class, 'update'])->name('posts.update');
    Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
    Route::delete('posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [PedidosController::class, 'index'])->middleware(['auth'])->name('dashboard');  

//  Route::get('/dashboard', function () {
//      return view('dashboard');
//  })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
