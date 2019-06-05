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

Route::get('/','IndexController@index')->name('home');
Route::get('product/{id}','IndexController@product')->name('home.product');
Route::get('category/{id}','IndexController@category')->name('home.category');
Route::get('subcategory/{id}','IndexController@subcategory')->name('home.subcategory');
Route::get('login_page','UsersController@getLogin')->name('home.getLogin');
Route::post('user_register','UsersController@postRegister')->name('home.postRegister');
Route::post('user_login','UsersController@postLogin')->name('home.postLogin');
Route::get('user_logout','UsersController@getLogout')->name('home.getLogout');
Route::get('cart','CartController@index')->name('home.cartIndex');
Route::post('cart','CartController@cart')->name('home.cart');
Route::get('remove/{id}','CartController@remove')->name('home.remove');
Route::post('checkout','CheckoutController@checkout')->name('home.checkout');
Route::get('order','CheckoutController@order')->name('home.order');
Route::group(['prefix'=>'admin','middleware'=>'adminLogin'], function(){
	Route::get('/','AdminController@index')->name('admin');
	Route::group(['prefix'=>'category'], function(){
		Route::get('/','CategoryController@index')->name('category.index');
		Route::get('create','CategoryController@getCreate')->name('category.getCreate');
		Route::post('create','CategoryController@postCreate')->name('category.postCreate');
		Route::get('edit/{id}','CategoryController@getEdit')->name('category.getEdit');
		Route::post('edit/{id}','CategoryController@postEdit')->name('category.postEdit');
		Route::get('delete/{id}','CategoryController@getDelete')->name('category.getDelete');
	});
	Route::group(['prefix'=>'subcategory'], function(){
		Route::get('/','SubCategoryController@index')->name('subcategory.index');
		Route::get('create','SubCategoryController@getCreate')->name('subcategory.getCreate');
		Route::post('create','SubCategoryController@postCreate')->name('subcategory.postCreate');
		Route::get('edit/{id}','SubCategoryController@getEdit')->name('subcategory.getEdit');
		Route::post('edit/{id}','SubCategoryController@postEdit')->name('subcategory.postEdit');
		Route::get('delete/{id}','SubCategoryController@getDelete')->name('subcategory.getDelete');
	});
	Route::group(['prefix'=>'product'], function(){
		Route::get('/','ProductController@index')->name('product.index');
		Route::get('create','ProductController@getCreate')->name('product.getCreate');
		Route::post('create','ProductController@postCreate')->name('product.postCreate');
		Route::get('edit/{id}','ProductController@getEdit')->name('product.getEdit');
		Route::post('edit/{id}','ProductController@postEdit')->name('product.postEdit');
		Route::get('delete/{id}','ProductController@getDelete')->name('product.getDelete');
		Route::group(['prefix'=>'sku'], function(){
			Route::get('/{id}','SkuController@index')->name('sku.index');
			Route::post('create/{id}','SkuController@postCreate')->name('sku.postCreate');
			Route::post('edit/{id}','SkuController@postEdit')->name('sku.postEdit');
			Route::get('delete/{id}','SkuController@getDelete')->name('sku.getDelete');
		});
		Route::group(['prefix'=>'gallery'], function(){
			Route::get('/{id}','GalleryController@index')->name('gallery.index');
			Route::post('create/{id}','GalleryController@postCreate')->name('gallery.postCreate');
			Route::post('edit/{id}','GalleryController@postEdit')->name('gallery.postEdit');
			Route::get('delete/{id}','GalleryController@getDelete')->name('gallery.getDelete');
		});
	});
});


