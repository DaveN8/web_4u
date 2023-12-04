<?php

use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Products;

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

Route::get('/', function () {
    return view('landingPage');
})->name('landingPage');

// Route::get('/formPackages', function (){
//     return view('formPackages');
// });

// Route::get('/loginPage', function(){
//     return view('loginPage');
// });

Route::get('/signinPage', [UserController::class, 'register'])->name('register');
Route::post('/signinPage', [UserController::class, 'registerPost'])->name('register.post');

Route::get('/loginPage', [UserController::class, 'login'])->name('login');
Route::post('/loginPage', [UserController::class, 'loginPost'])->name('login.post');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

//Product
Route::resource('product', ProductController::class)->middleware('admin');
Route::get('/productsPage', [ProductController::class, 'index'])->name('productsPage');
Route::get('/createProducts', [ProductController::class, 'create'])->name('createProducts');
Route::post('/productsPage', [ProductController::class, 'store'])->name('storeProducts');
// Route::get('/productsPage/{productsPage}/edit', [ProductController::class, 'edit'])->name('editProducts');



//Package
Route::get('/package', [PackageController::class, 'index'])->name('package');
Route::get('/formPackage', [PackageController::class, 'create'])->name('formPackage');
Route::post('/dataPackage', [PackageController::class, 'store'])->name('storePackage');

Route::get('/pembelianPage', function(){
    return view('pembelianPage');
});