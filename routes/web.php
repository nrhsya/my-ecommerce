<?php

use App\Livewire\Dashboard\Home;
use App\Livewire\Dashboard\Product;
use App\Livewire\Dashboard\Shop;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('home', Home::class)->name('home');
Route::get('shop', Shop::class)->name('shop');
Route::get('product', Product::class)->name('product');
