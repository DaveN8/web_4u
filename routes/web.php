<?php

use App\Http\Controllers\AllContentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Package;
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
    return view('landingpage');
})->name('landingpage');


// Route::get('/formPackages', function (){
//     return view('formPackages');
// });

// Route::get('/loginPage', function(){
//     return view('loginPage');
// });
Route::get('/contoh1', function () {
    return view('layouts/Produk/templateBday1');
});

Route::get('/contoh2', function () {
    return view('layouts/Produk/templateBday2');
});
// Route::get('/signinPage', [UserController::class, 'register'])->name('register');
// Route::post('/signinPage', [UserController::class, 'registerPost'])->name('register.post');

// Route::get('/loginPage', [UserController::class, 'login'])->name('login');
// Route::post('/loginPage', [UserController::class, 'loginPost'])->name('login.post');

Route::get('/profile', function(){
    return view('profile');
});

Route::resource('user', UserController::class);
Route::resource('login', LoginController::class);

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

//Product
Route::resource('product', ProductController::class);
Route::get('/productsPage', [ProductController::class, 'index'])->name('productsPage');
// Route::get('/createProducts', [ProductController::class, 'create'])->name('createProducts');
// Route::post('/productsPage', [ProductController::class, 'store'])->name('storeProducts');
// Route::get('/productsPage/{productsPage}/edit', [ProductController::class, 'edit'])->name('editProducts');



//Package
Route::resource('package', PackageController::class);
Route::get('/package', [PackageController::class, 'index'])->name('package');
Route::get('/formPackage', [PackageController::class, 'create'])->name('formPackage');
Route::post('/dataPackage', [PackageController::class, 'store'])->name('storePackage');

Route::get('/pembelianPage', function () {
    return view('pembelianPage');
});

Route::get('/admin', [AllContentController::class, 'index'])->name('admin');


