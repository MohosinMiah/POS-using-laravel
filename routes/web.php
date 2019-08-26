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

// Route::get('category/list','CategoryController@index')->name('category_index');

Route::get('create/product','ProductController@create');

Route::post('save/category','ProductController@store')->name('create_product');

// Route::get('edit/category/{id}','CategoryController@edit')->name('edit_category');

// Route::post('update/category/{id}','CategoryController@update')->name('update_category');

// Route::get('show/category/{id}','CategoryController@show')->name('show_category');

// Route::get('delete/category/{id}','CategoryController@destroy')->name('destroy_category');



/**
 * Product Route End
 */
