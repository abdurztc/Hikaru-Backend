<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
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
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Route::get('/', function () {
//     return view('pages.dashboard');
// });
Auth::routes(['register' => false]);

Route::resource('products', ProductController::class);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');