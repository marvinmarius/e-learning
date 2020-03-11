<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

                 //auth-api routes

    Route::post('login', 'API\AuthController@login');
    Route::post('register', 'API\AuthController@register');

    Route::group(['middleware' => 'auth:api'], function() {
        Route::get('logout', 'API\AuthController@logout');
        Route::get('user', 'API\AuthController@user');

});
//category
Route::get('category', 'CategoryController@index')->name('category.index');
Route::post('category', 'CategoryController@store')->name('category.store');
Route::get('category/create', 'CategoryController@create')->name('category.create');
Route::get('category/{category}', 'CategoryController@show')->name('category.show');
Route::put('category/{category}', 'CategoryController@update')->name('category.update');
Route::put('category/{category}', 'CategoryController@destroy')->name('category.destroy');
Route::put('category/{category}/edit', 'CategoryController@edit')->name('category.edit');

//sub_category
Route::get('subcategory', 'SubCategoryController@index')->name('subcategory.index');
//courses
Route::get('course', 'courseController@index')->name('course.index');
