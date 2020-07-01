<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', 'MainController@WelcomePage');
Route::get('/', 'MainController@WelcomePage');

Route::get('/about', function () {
    return 'Important information about our project';
});
Route::group(
    [
        'prefix' => 'categories',
        'as' => 'categories.'
    ],
    function () {
        Route::get('/', 'NewsController@getNewsCategories')->name('getNewsCategories');
        Route::get('/{id}', 'NewsController@getNewsByCategoryId')->name('getNewsByCategoryId');
    }
);

Route::group(
    [
        'prefix' => 'news',
        'as' => 'news.'
    ],
    function () {
        Route::get('/add', 'NewsController@openAddingNewsPage')->name('addingNewsPage');
        Route::get('/{id}', 'NewsController@getNewsById')->name('getNewsById');
    }
);

Route::group(
    [
        'prefix' => 'auth',
        'as' => 'auth.'
    ],
    function () {
        Route::get('/', 'AuthorizationController@main')->name('auth_main');
        Route::get('/check', 'AuthorizationController@authorization')->name('authorization');
    }
);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

