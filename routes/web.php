<?php

use App\Livewire\CartComponent;
use App\Livewire\CheckoutComponent;
use App\Livewire\HomeComponent;
use App\Livewire\ShopComponent;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',HomeComponent::class);
Route::get('/shop', ShopComponent::class);
Route::get('/cart', CartComponent::class);
Route::get('/checkout', CheckoutComponent::class);

//Route::middleware([
//    'auth:sanctum',
//    config('jetstream.auth_session'),
 //   'verified',
//])->group(function () {
 //   Route::get('/dashboard', function () {
//        return view('dashboard');
  //  })->name('dashboard');
//});
