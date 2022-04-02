<?php

use App\Http\Controllers\DashbordController;
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

Route::get('/', [DashbordController::class, 'dashbord'])->name('product.list');
Route::get('/create/product', [DashbordController::class, 'create'])->name('create.product');
Route::post('/create/product', [DashbordController::class, 'store']);
Route::get('/edit/product/{id}', [DashbordController::class, 'edit'])->name('edit.product');
Route::post('/edit/product/{id}', [DashbordController::class, 'update']);
Route::get('/delete/product/{id}', [DashbordController::class, 'delete'])->name('delete.product');
