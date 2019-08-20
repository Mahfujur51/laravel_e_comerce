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

Route::get('/','ProductController@index')->name('index');
Route::get('/products','PagesController@products')->name('products');
Route::get('/product/{slug}','PagesController@show')->name('product.show');

Route::group(['prefix'=>'admin'],function(){
     Route::get('/','AdminPagesController@index')->name('admin.index');
     Route::get('/products','AdminPagesController@mange_product')->name('admin.products');
     Route::get('/product/create','AdminPagesController@product_create')->name('admin.product.create');
     Route::post('/product/store','AdminPagesController@product_store')->name('admin.product.store');
     Route::get('/product/edit/{id}','AdminPagesController@product_edit')->name('admin.product.edit');
     Route::post('/product/update/{id}','AdminPagesController@product_update')->name('admin.product.update');
     Route::post('/product/delete/{id}','AdminPagesController@product_delete')->name('admin.product.delete');


    // ==========================Category Route==============//
     Route::get('/category','CategoryController@manage_category')->name('admin.categories');
     Route::get('/category/create','CategoryController@create_category')->name('admin.category.create'); 
     Route::post('/category/store','CategoryController@store_category')->name('admin.category.store');
     Route::get('/category/edit/{id}','CategoryController@edit_category')->name('admin.category.edit');
     Route::post('/category/update/{id}','CategoryController@update_category')->name('admin.category.update');
    
});

