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
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailsController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\PostController;
use App\Http\Controllers\PostReciveController;
use App\Http\Controllers\frontend\SignupController;
use App\Http\Controllers\frontend\UserLoginController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\MyProfileController;

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
Route::get('/petcategory/edit/{id}',[PetCategoryController::class,'petcategoryedit'])->name('PetCategory.edit');
Route::put('/petcategory/update/{id}',[PetCategoryController::class,'petcategoryupdate'])->name('PetCategory.update');
Route::get('/petcategory/delete/{id}',[PetCategoryController::class,'petcategorydelete'])->name('PetCategory.delete');



Route::get('/pet',[PetController::class,'pet'])->name('Pet');
Route::get('/petform',[PetController::class,'petform'])->name('Pet.form');
Route::post('/petpost',[PetController::class,'petpost'])->name('Pet.post');
Route::get('/pet/edit/{id}',[PetController::class,'petedit'])->name('pet.edit');
Route::put('/pet/update/{id}',[PetController::class,'petupdate'])->name('pet.update');
Route::get('/pet/delete/{id}',[PetController::class,'petdelete'])->name('pet.delete');




Route::get('/petproductcategory',[PetProductCategoryController::class,'petproductcategory'])->name('PetProductCategory');
Route::get('/petproductcategoryform',[PetProductCategoryController::class,'petproductcategoryform'])->name('PetProductCategory.form');
Route::post('/petproductcategorypost',[PetProductCategoryController::class,'petproductcategorypost'])->name('PetProductCategory.post');
Route::get('/petproductcategory/edit/{id}',[PetProductCategoryController::class,'petproductcategoryedit'])->name('PetProductCategory.edit');
Route::put('/petproductcategory/update/{id}',[PetProductCategoryController::class,'petproductcategoryupdate'])->name('PetProductCategory.update');
Route::get('/petproductcategory/delete/{id}',[PetProductCategoryController::class,'petproductcategorydelete'])->name('PetProductCategory.delete');




Route::get('/petproduct',[PetProductController::class,'petproduct'])->name('PetProduct');
Route::get('/petproductform',[PetProductController::class,'petproductform'])->name('PetProduct.form');
Route::post('/petproductpost',[PetProductController::class,'petproductpost'])->name('PetProduct.post');
Route::get('/petproduct/edit{id}',[PetProductController::class,'petproductedit'])->name('PetProduct.edit');
Route::put('/petproductupdate/{id}',[PetProductController::class,'petproductupdate'])->name('PetProduct.update');
Route::get('/petproduct/delete{id}',[PetProductController::class,'petproductdelete'])->name('PetProduct.delete');


Route::get('/logout',[UserController::class,'logout'])->name('logout');


Route::get('/donationlist',[DonationListController::class,'donationlist'])->name('DonationList');
Route::get('/donationlistform',[DonationListController::class,'donationlistform'])->name('DonationList.form');
Route::post('/donationlistpost',[DonationListController::class,'donationlistpost'])->name('DonationList.post');



Route::get('/adoptionlist',[AdoptionListController::class,'adoptionlist'])->name('AdoptionList');
Route::get('/adoptionlistform',[AdoptionListController::class,'adoptionlistform'])->name('AdoptionList.form');
Route::post('/adoptionlistpost',[AdoptionListController::class,'adoptionlistpost'])->name('AdoptionList.post');


Route::get('/user',[UserController::class,'user'])->name('user');
Route::get('/useredit/{id}',[UserController::class,'useredit'])->name('user.edit');
Route::put('/userupdate/{id}',[UserController::class,'userupdate'])->name('user.update');
Route::get('/userform',[UserController::class,'userform'])->name('user.form');

Route::get('/userdelete/{id}',[UserController::class,'userdelete'])->name('user.delete');
Route::get('/userview',[UserController::class,'userview'])->name('user.view');




Route::get('/order',[OrderController::class,'order'])->name('Order');
Route::get('/orderdetails',[OrderDetailsController::class,'orderdetails'])->name('OrderDetails');

Route::get('/post/receive',[PostReciveController::class,'postreceive'])->name('Postreceive');
Route::get('/post/approve/{post_id}',[PostReciveController::class,'postapprove'])->name('Post.approve');

// Route::get('/postreceives',[PostReceiveController::class,'postreceives'])->name('Postreceives');
});

Route::get('/post',[PostController::class,'post'])->name('Post');
Route::get('/postcreate',[PostController::class,'postcreate'])->name('Post.create');
Route::post('/postform',[PostController::class,'postform'])->name('Post.form');
Route::get('/post/view/{id}',[PostController::class,'postview'])->name('Post.view');
Route::get('/post/adopt/{id}',[PostController::class,'postadopt'])->name('Post.adopt');
Route::get('/post/donate/{id}',[PostController::class,'postdonate'])->name('Post.donate');

Route::get('/website',[HomeController::class,'home'])->name('home');
Route::get('/cart', function () {
    return view('frontend.pages.cart.cart');
});
Route::get('/signup',[SignupController::class,'signup'])->name('signup');
Route::post('/userpost',[SignupController::class,'userpost'])->name('user.post');

Route::get('/userlogin',[UserLoginController::class,'userlogin'])->name('userlogin');
Route::post('/douserlogin',[UserLoginController::class,'douserlogin'])->name('douserlogin');
Route::get('/douserlogout',[UserLoginController::class,'douserlogout'])->name('douserlogout');
Route::get('/product/view/{id}',[HomeController::class,'showProduct'])->name('product.view');



Route::get('/cart/view',[CartController::class,'viewCart'])->name('cart.view');
Route::get('/cart/add/{id}',[CartController::class,'addToCart'])->name('cart.add');
Route::get('/cart/clear',[CartController::class,'clearCart'])->name('cart.clear');
Route::get('/cart/delete/{id}',[CartController::class,'deleteCart'])->name('cart.delete');
Route::post('/cart/update/{id}',[CartController::class,'updateCart'])->name('cart.update');

// Route::get('/checkout',[OrderController::class,'checkout'])->name('checkout');
// Route::post('/order/place',[OrderController::class,'orderPlace'])->name('order.place');


Route::get('/myprofile',[MyProfileController::class,'myprofile'])->name('myprofile');
Route::get('/mypost',[MyProfileController::class,'mypost'])->name('mypost');