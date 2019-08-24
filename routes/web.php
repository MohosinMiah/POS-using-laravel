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

 Route::get('pos/category/list','CategoryController@index');

Route::get('pos/create/category','CategoryController@create');

Route::post('pos/save/category','CategoryController@store')->name('create_category');



/**
 * Category Route End
 */
