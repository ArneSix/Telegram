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
Route::get('/about', 'PageController@about')->name('about');
Route::get('/privacy', 'PageController@privacy')->name('privacy');
Route::get('/article', 'PageController@articles')->name('articles');
Route::get('/article/{article}', 'PageController@article')->name('article');
Route::get('/donate', 'PageController@donate')->name('donate');



// Custom page handler
Route::get('/page/{page}', 'PageController@default');

// All routes following this line will require authentication to access.
Auth::routes(['verify' => true]);

Route::prefix('dashboard')->as('dashboard.')->group(function () {
    Route::group(['middleware' => ['verified']], function () {
        Route::get('/', 'DashboardController@getIndex')->name('index');

        Route::get('/page', 'DashboardController@getIndexPages')->name('index.pages');

        // CRUD routes for pages

        Route::get('/page/create', 'AdminController@pageCreate')->name('page.create');
        Route::post('/page/store', 'AdminController@pageStore')->name('page.store');
        Route::get('/page/edit/{page}', 'AdminController@pageEdit')->name('page.edit');
        Route::patch('/page/update/{page}', 'AdminController@pageUpdate')->name('page.update');
        Route::delete('/page/delete/{page}', 'AdminController@pageDelete')->name('page.delete');

        // CRUD routes for articles
        Route::get('/article', 'DashboardController@getIndexArticles')->name('index.articles');

        Route::get('/article/create', 'DashboardController@articleCreate')->name('article.create');
        Route::post('/article/store', 'DashboardController@articleStore')->name('article.store');
        Route::get('/article/edit/{article}', 'DashboardController@articleEdit')->name('article.edit');
        Route::patch('/article/update/{article}', 'DashboardController@articleUpdate')->name('article.update');
        Route::delete('/article/delete/{article}', 'DashboardController@articleDelete')->name('article.delete');

        // R routes for donations
        Route::get('/donations', 'DashboardController@getIndexDonations')->name('index.donations');

        Route::get('/donations/{donation}', 'DonDashboardController@donationShow')->name('donation.show');

        // CRUD routes for api-keys
        Route::get('/keys', 'DashboardController@getIndexKeys')->name('index.keys');

        Route::get('/keys/{key}', 'DashboardController@keyShow')->name('key.show');
        Route::get('/key/create', 'DashboardController@createKey')->name('key.create');
        Route::post('/key/store', 'DashboardController@storeKey')->name('key.store');
        Route::get('/key/edit/{key}', 'DashboardController@editKey')->name('key.edit');
        Route::patch('/key/update/{key}', 'DashboardController@updateKey')->name('key.update');
        Route::delete('/key/delete/{key}', 'DashboardController@deleteKey')->name('key.delete');
    });
});

