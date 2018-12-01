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

Route::group(['middleware' => 'cors'], function () {
// post
    Route::get('/posts', 'PostController@index');
    Route::get('/posts/{id}', 'PostController@show');
    Route::post('/posts', 'PostController@create');

// comment
    Route::post('/comments', 'CommentController@create');

// category
    Route::get('/categories', 'CategoryController@index');
// vue
    Route::get('/{any}', function () {
        return view('app');
    })->where('any', '.*');
});

