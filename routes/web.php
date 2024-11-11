<?php

use App\Livewire\CartPage;
use App\Livewire\HomePage;
use App\Livewire\CheckOutPage;
use App\Livewire\MyOrdersPage;
use App\Livewire\ProductsPage;
use App\Livewire\CategoriesPage;
use App\Livewire\MyOrderDetailPage;
use App\Livewire\ProductDetailPage;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//   return view('welcome');
//});


Route::get('/', HomePage::class);

Route::get('/categories', CategoriesPage::class);
Route::get('/products', action: ProductsPage::class);
Route::get('/products/{product}', action: ProductDetailPage::class);
Route::get('/cart', action: CartPage::class);
Route::get('/checkout', CheckOutPage::class);
Route::get('/my-orders', MyOrdersPage::class);
Route::get('/my-orders/{order}', MyOrderDetailPage::class);