<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Home;
use App\Http\Livewire\Category\Show as ShowCategory;
use App\Http\Livewire\Product\Show as ShowProduct;
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

Route::get('/', Home::class)->name('home');

Route::middleware(['auth:sanctum',])->group(function () {
    Route::get('/', Home::class)->name('home');
    Route::get('/categories',ShowCategory::class)->name('categories');
    Route::get('/products', ShowProduct::class)->name('products');
});

