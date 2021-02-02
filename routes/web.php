<?php

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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', 'ProductController@index');
Route::get('/shop', 'ProductController@shop');
Route::get('/shopman', 'ProductController@shopman');
Route::get('/shopwoman', 'ProductController@shopwoman');



Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/checkout', function () {
    return view('checkout');
});
//Route::get('/product', function () {
//    return view('product');
//});
Route::group(['middleware' => 'roles', 'roles' => ['admin']], function () {
    Route::get('/admin', 'AdminController@index');
    Route::post('/add-role', 'AdminController@addRole');


});
Route::group(['middleware' => 'roles', 'roles' => ['Editor', 'admin']], function () {
    Route::get('/admin/category/', 'AdminController@category');
    Route::post('/admin/addCategory', 'AdminController@addCategory');
    Route::post('/admin/product/addProduct', 'AdminController@store');
    Route::get('/admin/product/create', 'AdminController@addProducts');
    Route::get('admin/products/', 'AdminController@product');
    Route::delete('/product/destroy/{id}', 'AdminController@destroy');
    Route::put('product/edit/{id}', 'AdminController@edit');
    Route::patch('/product/update/{id}', 'AdminController@update');
});
Route::group(['middleware' => 'roles', 'roles' => ['User','Editor','admin']], function () {

    Route::delete('/cart/destroy/{id}', 'ProductController@destroyCart');
    Route::post('add-to-cart/{id}', 'AdminController@addToCart');
    Route::POST('/add-to-cart/{id}', 'AdminController@add');
});
Route::get('cart', 'AdminController@cart');
Route::get('chickout', 'AdminController@chickout');
Route::get('product/{id}', 'ProductController@showProduct');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

