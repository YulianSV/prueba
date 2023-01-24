<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InvoiceController;

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
    return view('inicio');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
Route::group(['middleware' => ['role:customer']], function () {

Route::get('/buyProduct', [App\Http\Controllers\ProductController::class, 'buy'])->name('product.buy');
Route::get('/purchaseProduct', [App\Http\Controllers\ProductController::class, 'indexPurchase'])->name('product.purchase');

 });

Route::group(['middleware' => ['role:administrator']], function () {

Route::get('/createProduct', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
Route::post('/updateProduct', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
Route::get('/editProduct', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
Route::post('/saveProduct', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
Route::get('/destroyProduct', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');
Route::get('/invoice', [App\Http\Controllers\InvoiceController::class, 'index'])->name('invoice.index');
Route::post('/invoiceProduct', [App\Http\Controllers\InvoiceController::class, 'store'])->name('product.invoice');
Route::get('/invoiceProduct2', [App\Http\Controllers\InvoiceController::class, 'show'])->name('product.invoice2');
Route::get('/showInvoice', [App\Http\Controllers\InvoiceController::class, 'show'])->name('invoice.show');
Route::get('/listInvoice', [App\Http\Controllers\InvoiceController::class, 'list'])->name('invoice.list');
// Route::get('/invoice', [App\Http\Controllers\InvoiceController::class, 'index'])->name('invoice');
});



