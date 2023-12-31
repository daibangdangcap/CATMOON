<?php

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

//MAINPAGE
Route::get('/mainpage',function(){
    return view('client/dashboard');
})->name('mainpage');

//SHOPPING
// Route::get('/product-category',function(){
//     return view('client/shopping/products/product-category');
// })->name('product-category');
Route::prefix('/product-category')->group(function(){
    Route::get('',function(){
        return view('client/shopping/products/product-category');
    })->name('product-category');
    Route::get('/{idSP}',function(){return view('client/shopping/products/product_detail');})->name('product-detail');
});
