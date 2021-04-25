<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductGalleryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
// Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

///// Route::get('/', function () {
//    // return view('pages.dashboard');
// ///});
// Auth::routes(['register' => false]);

// Route::get('products/{id}/gallery', [ProductController::class, 'gallery'])->name('products.gallery');

// Route::get('transactions/{id}/set-status', [TransactionController::class, 'setStatus'])->name('transactions.status');
// Route::resource('products', ProductController::class);
// Route::resource('product-galleries', ProductGalleryController::class);
// Route::resource('transactions', TransactionController::class);

////// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', 'DashboardController@index')->name('dashboard');

Auth::routes(['register' => false]);

Route::get('products/{id}/gallery', 'ProductController@gallery')
    ->name('products.gallery');
Route::resource('products', 'ProductController');

Route::resource('product-galleries', 'ProductGalleryController');

Route::get('transactions/{id}/set-status', 'TransactionController@setStatus')
    ->name('transactions.status');
Route::resource('transactions', 'TransactionController');
