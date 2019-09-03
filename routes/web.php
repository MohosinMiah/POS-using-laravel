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

Route::get('/relation-check', function () {
    // return view('welcome');
    echo "<h1>Supply</h1>";
    $supply = App\Product::find(1)->supplier;
    echo "<pre>";
    echo $supply->first_name.' ';
    echo $supply->last_name."<br>";
    echo $supply->address."<br>";
    echo $supply->phone."<br>";
    echo "</pre>";

    echo "<h1>Category</h1>";
    $supply = App\Product::find(1)->category;
    echo "<pre>";
    echo $supply->name.' '."<br>";
    echo $supply->note."<br>";

    echo "</pre>";

});


Route::get('/', function () {

    return view('welcome');
});



Route::get('pos/', function () {

    return redirect('/');

});



/**
 * Category Route Start
 */

Route::get('category/list','CategoryController@index')->name('category_index');

Route::get('create/category','CategoryController@create');

Route::post('save/category','CategoryController@store')->name('create_category');

Route::get('edit/category/{id}','CategoryController@edit')->name('edit_category');

Route::post('update/category/{id}','CategoryController@update')->name('update_category');

Route::get('show/category/{id}','CategoryController@show')->name('show_category');

Route::get('delete/category/{id}','CategoryController@destroy')->name('destroy_category');



/**
 * Category Route End
 */


/**
 * Product Route Start
 */

Route::get('product/list','ProductController@index')->name('product_index');

Route::get('create/product','ProductController@create');

Route::post('save/product','ProductController@store')->name('create_product');

Route::get('edit/product/{id}','ProductController@edit')->name('edit_product');

Route::post('update/product/{id}','ProductController@update')->name('update_product');

Route::get('show/product/{id}','ProductController@show')->name('show_product');

Route::get('delete/product/{id}','ProductController@destroy')->name('destroy_product');



/**
 * Product Route End
 */
