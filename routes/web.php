<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetCategoryController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\PetProductCategoryController;
use App\Http\Controllers\PetProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdoptionListController;
use App\Http\Controllers\DonationListController;
use App\Http\Controllers\CustomerController;

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
Route::get('/',[UserController::class,'login'])->name('admin.login');
Route::post('/admin/dologin',[UserController::class,'dologin'])->name('admin.dologin');
Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('admin.pages.dashboard.dashboard');
})->name('dashboard');


// Route::get('/petproductcategory', function () {
//     return view('admin.pages.petproductcategory.petproductcategory');
// });
// Route::get('/petproduct', function () {
//     return view('admin.pages.petproduct.petproduct');
// });
// Route::get('/donationlist', function () {
//     return view('admin.pages.donationlist.donationlist');
// });
// Route::get('/adoptionlist', function () {
//     return view('admin.pages.adoptionlist.adoptionlist');
// });
// Route::get('/customer', function () {
//     return view('admin.pages.customer.customer');
// });
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
Route::get('/petproduct',[PetProductController::class,'petproduct'])->name('PetProduct');
Route::get('/petproductform',[PetProductController::class,'petproductform'])->name('PetProduct.form');
Route::post('/petproductpost',[PetProductController::class,'petproductpost'])->name('PetProduct.post');
Route::get('/logout',[UserController::class,'logout'])->name('logout');
Route::get('/donationlist',[DonationListController::class,'donationlist'])->name('DonationList');
Route::get('/donationlistform',[DonationListController::class,'donationlistform'])->name('DonationList.form');
Route::post('/donationlistpost',[DonationListController::class,'donationlistpost'])->name('DonationList.post');
Route::get('/adoptionlist',[AdoptionListController::class,'adoptionlist'])->name('AdoptionList');
Route::get('/adoptionlistform',[AdoptionListController::class,'adoptionlistform'])->name('AdoptionList.form');
Route::post('/adoptionlistpost',[AdoptionListController::class,'adoptionlistpost'])->name('AdoptionList.post');
Route::get('/customer',[CustomerController::class,'customer'])->name('Customer');
Route::get('/customeredit/{id}',[CustomerController::class,'customeredit'])->name('Customer.edit');
Route::get('/customerupdate',[CustomerController::class,'customerupdate'])->name('Customer.update');
Route::get('/customerform',[CustomerController::class,'customerform'])->name('Customer.form');
Route::get('/customerpost',[CustomerController::class,'customerpost'])->name('Customer.post');
Route::get('/customerdelete/{id}',[CustomerController::class,'customerdelete'])->name('Customer.delete');
Route::get('/customerview',[CustomerController::class,'customerview'])->name('Customer.view');
});
