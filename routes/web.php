<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Product;
use App\Models\Transaction;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;


Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/welcome', function () {

    $totalCategories = Category::count();
    $totalProducts = Product::count();
    $totalTransactions = Transaction::count();

    return view('welcome', compact('totalCategories', 'totalProducts', 'totalTransactions'));
})->middleware('auth')->name('welcome');


Route::middleware(['auth'])->group(function () {

    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('transactions', TransactionController::class);


});

require __DIR__.'/auth.php';