<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', [ProductController::class, 'index']);

Route::get('/addProduct', function () {
    return view('product/addProduct');
});

Route::get('/details', function () {
    return view('product/detailsProduct');
});

Route::get('/edit/{id}', function () {
    return view('product/editProduct');
});

Route::post('/create', [ProductController::class, 'create']);
Route::post('/update', [ProductController::class, 'update']);

Route::resources([
    'products' => ProductController::class
]);
