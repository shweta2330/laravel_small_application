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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('add-product', [ProductController::class, 'index']);
Route::get('contact', [ProductController::class, 'contact']);

Route::post('submit-product', [ProductController::class, 'store']);

Route::get('product-table', [ProductController::class, 'show']);
Route::post('con-submit', [ProductController::class, 'contacsubmit']);

Route::get('export-excel-csv-file', [ProductController::class, 'exportExcelCSV']);


require __DIR__.'/auth.php';
