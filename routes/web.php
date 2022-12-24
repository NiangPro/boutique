<?php

use App\Http\Livewire\Cart;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Home;
use App\Http\Livewire\Login;
use App\Http\Livewire\Shop;
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

Route::get("/", Home::class)->name("home");
Route::get("/boutique", Shop::class)->name("shop");
Route::get("/panier", Cart::class)->name("cart");
Route::get("/contact", Contact::class)->name("contact");
Route::get("/connexion", Login::class)->name("login");

