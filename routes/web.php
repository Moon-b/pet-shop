<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetCategoryController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\PetProductCategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.pages.dashboard.dashboard');
});


// Route::get('/petproductcategory', function () {
//     return view('admin.pages.petproductcategory.petproductcategory');
// });
Route::get('/petproduct', function () {
    return view('admin.pages.petproduct.petproduct');
});
Route::get('/donationform', function () {
    return view('admin.pages.donationform.donationform');
});
Route::get('/adoptionform', function () {
    return view('admin.pages.adoptionform.adoptionform');
});
Route::get('/customer', function () {
    return view('admin.pages.customer.customer');
});
Route::get('/order', function () {
    return view('admin.pages.order.order');
});
Route::get('/orderdetails', function () {
    return view('admin.pages.orderdetails.orderdetails');
});
Route::get('/payment', function () {
    return view('admin.pages.payment.payment');
});
Route::get('/petcategory',[PetCategoryController::class,'petcategory'])->name('PetCategory');
Route::get('/petcategoryform',[PetCategoryController::class,'petcategoryform'])->name('PetCategory.form');
Route::post('/petcategorypost',[PetCategoryController::class,'petcategorypost'])->name('PetCategory.post');
Route::get('/pet',[PetController::class,'pet'])->name('Pet');
Route::get('/petform',[PetController::class,'petform'])->name('Pet.form');
Route::post('/petpost',[PetController::class,'petpost'])->name('Pet.post');
Route::get('/pet/edit/{id}',[PetController::class,'petedit'])->name('pet.edit');
Route::put('/pet/update/{id}',[PetController::class,'petupdate'])->name('pet.update');
Route::get('/pet/delete/{id}',[PetController::class,'petdelete'])->name('pet.delete');
Route::get('/petproductcategory',[PetProductCategoryController::class,'petproductcategory'])->name('PetProductCategory');
Route::get('/petproductcategoryform',[PetProductCategoryController::class,'petproductcategoryform'])->name('PetProductCategory.form');
Route::post('/petproductcategorypost',[PetProductCategoryController::class,'petproductcategorypost'])->name('PetProductCategory.post');
