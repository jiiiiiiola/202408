<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/000', function () {
    return "Hi jila!";
});

Route::get('/user/auth/login', 'App\Http\Controllers\UserAuthController@Login');
Route::get('signup', 'App\Http\Controllers\UserAuthController@SignUp');
Route::get('/user/auth/profile/{id}', 'App\Http\Controllers\UserAuthController@Profile');

// Route::group(['prefix' => 'user'], function () {
//     Route::group(['prefix' => 'auth'], function () {
//         Route::get('login', 'App\Http\Controllers\UserAuthController@Login');
//     });
// });

Route::group(['prefix' => 'merchandise'], function () {
    Route::get('{merchandise_id}', 'App\Http\Controllers\MerchandiseController@MerchandiseItemPage');
});


