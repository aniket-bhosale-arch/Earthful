<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StripeController;






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

// Route::get('/', function () {
//     return view('welcome
//     ');
// });

// Route::get('/test-view', function () {
//     return view('test', ['message' => 'Hello world']);
// });




Auth::routes([
    'verify' => true
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

// <<<<--------------------------------  Routesforstripe  ------------------>>>>

Route::post('/session',[StripeController::class,'session'])->name('session');
Route::get('/success',[StripeController::class,'success'])->name('success');
Route::post('/cancel',[StripeController::class,'cancel'])->name('cancel');

// <<<<--------------------------------  Routesforproductpage  ------------------>>>>
Route::get('/search',[ProductController::class,'search'])->name('product.search');

// Route::get('/show',[ProductController::class,'show'])->name('show');

// Route::get('/debug-products', function () {
//     return \App\Models\Product::take(5)->get();
// });


// Route::get('/',[ProductController::class,'index'])->name('index');
Route::get('/',[ProductController::class,'index'])->name('index');

Route::get('/product/{slug}', [ProductController::class, 'show'])
    ->name('product.show');
    
Route::get('/category/{slug}', [ProductController::class, 'byCategory'])
->name('products.by.category');


// Route::get('/product_details/{id}',[ProductController::class,'product_details'])->name('product_details');
Route::get('/shop',[ProductController::class,'shop'])->name('shop');


// Route::get('/plantprotein',[ProductController::class,'plantprotein'])->name('plantprotein');
// Route::get('/gut',[ProductController::class,'gut'])->name('gut');
// Route::get('/hair',[ProductController::class,'hair'])->name('hair');
// Route::get('/skin',[ProductController::class,'skin'])->name('skin');
// Route::get('/sleep',[ProductController::class,'sleep'])->name('sleep');
// Route::get('/pcos',[ProductController::class,'pcos'])->name('pcos');
// Route::get('/men_category',[ProductController::class,'men_category'])->name('men_category');
// Route::get('/women_category',[ProductController::class,'women_category'])->name('women_category');
// Route::get('/men_multi',[ProductController::class,'men_multi'])->name('men_multi');
// Route::get('/women_multi',[ProductController::class,'women_multi'])->name('women_multi');
// Route::get('/teen_multi',[ProductController::class,'teen_multi'])->name('teen_multi');

// <<<<--------------------------------  Routesforcart  ------------------>>>>
Route::get('/add_to_cart/{id}',[ProductController::class,'addToCart'])->name('add_to_cart');
Route::get('/cart',[ProductController::class,'cart'])->name('cart')->middleware('auth');
Route::patch('/update-cart',[ProductController::class,'update'])->name('update_cart');
Route::delete('/remove_cart',[ProductController::class,'remove'])->name('remove_cart');









