<?php

use Illuminate\Support\Facades\Auth;
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

// Code defined pages are listed down below.
// The PageController will return the right
// view for all known pages, for unknown pages
// it will check if the page exists in the data-
// base and how it should display those pages.

Route::get('lang/{locale}', 'LocalizationController@index');

Route::get('/', 'PageController@home')->name('home');
route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/privacy', 'PageController@privacy')->name('privacy');
Route::get('/article', 'PageController@articles')->name('articles');
Route::get('/article/{article}', 'PageController@article')->name('article');
Route::get('/donate', 'PageController@donate')->name('donate');
Route::post('/subscribe', 'EmailController@subscribe')->name('subscribe');
route::post('/mail', 'EmailController@store')->name('mail');



// Custom page handler
Route::get('/page/{page}', 'PageController@getPage');

// All routes following this line will require authentication to access.
Auth::routes(['verify' => true]);

Route::prefix('dashboard')->as('dashboard.')->group(function () {
    Route::group(['middleware' => ['verified']], function () {
        Route::get('/', 'DashboardController@getIndex')->name('index');

        Route::get('/page', 'DashboardController@getIndexPages')->name('index.pages');

        // CRUD routes for pages

        Route::get('/page/create', 'PageController@create')->name('page.create');
        Route::post('/page/store', 'PageController@store')->name('page.store');
        Route::get('/page/edit/{page}', 'PageController@edit')->name('page.edit');
        Route::patch('/page/update/{page}', 'PageController@update')->name('page.update');
        Route::delete('/page/delete/{page}', 'PageController@delete')->name('page.delete');

        // CRUD routes for articles
        Route::get('/article', 'DashboardController@getIndexArticles')->name('index.articles');

        Route::get('/article/create', 'ArticleController@create')->name('article.create');
        Route::post('/article/store', 'ArticleController@store')->name('article.store');
        Route::get('/article/edit/{article}', 'ArticleController@edit')->name('article.edit');
        Route::patch('/article/update/{article}', 'ArticleController@update')->name('article.update');
        Route::delete('/article/delete/{article}', 'ArticleController@delete')->name('article.delete');

        // R routes for donations
        Route::get('/donations', 'DashboardController@getIndexDonations')->name('index.donations');

        Route::get('/donations/{donation}', 'DonationController@show')->name('donation.show');

        // CRUD routes for api-keys
        Route::get('/keys', 'DashboardController@getIndexKeys')->name('index.keys');

        Route::get('/keys/{key}', 'KeyController@show')->name('key.show');
        Route::get('/key/create', 'KeyController@create')->name('key.create');
        Route::post('/key/store', 'KeyController@store')->name('key.store');
        Route::get('/key/edit/{key}', 'KeyController@edit')->name('key.edit');
        Route::patch('/key/update/{key}', 'KeyController@update')->name('key.update');
        Route::delete('/key/delete/{key}', 'KeyController@delete')->name('key.delete');
    });
});
