<?php

use App\Http\Livewire\Cart;
use App\Http\Livewire\Categories;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Deconnexion;
use App\Http\Livewire\Details;
use App\Http\Livewire\DetailsCategorie;
use App\Http\Livewire\Home;
use App\Http\Livewire\Login;
use App\Http\Livewire\Logout;
use App\Http\Livewire\Produits;
use App\Http\Livewire\Register;
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
Route::get("/inscription", Register::class)->name("register");
Route::get("/deconnexion", Logout::class)->name("logout");
Route::get("/deconnexion_admin", Deconnexion::class)->name("deconnexion");
Route::get("/tableau_de_bord", Dashboard::class)->name("dashboard");
Route::get("/categories", Categories::class)->name("categorie");
Route::get("/categorie/{nom}", DetailsCategorie::class)->name("cat");
Route::get("/{slug}", Details::class)->name("detail");
Route::get("/produits", Produits::class)->name("produit");

