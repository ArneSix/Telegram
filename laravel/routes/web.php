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

Route::get('/home', 'PagesController@home')->name('home');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/privacy', 'PageController@privacy')->name('privacy');
Route::get('/article', 'PageController@articles')->name('articles');
Route::get('/article/{article}', 'PageController@article')->name('article');
Route::get('/donate', 'PageController@donate')->name('donate');

// Custom page handler
Route::get('/{page}', 'PagesController@default');

// All routes following this line will require authentication to access.
Auth::routes();

Route::get('/dashboard', 'AdminController@home')->name('admin.home');

// CRUD routes for pages
Route::get('/dashboard/page', 'AdminController@pages')->name('admin.pages');
Route::get('/dashboard/page/create', 'PageController@create')->name('admin.page.create');
Route::post('/dashboard/page/store', 'PageController@store')->name('admin.page.store');
Route::get('/dashboard/page/edit/{page}', 'PageController@edit')->name('admin.page.edit');
Route::patch('/dashboard/page/update/{page}', 'PageController@update')->name('admin.page.update');
Route::delete('/dashboard/page/delete/{page}', 'PageController@delete')->name('admin.page.delete');

// CRUD routes for articles
Route::get('/dashboard/article', 'AdminController@articles')->name('admin.articles');
Route::get('/dashboard/article/create', 'ArticleController@create')->name('admin.article.create');
Route::post('/dashboard/article/store', 'ArticleController@store')->name('admin.article.store');
Route::get('/dashboard/article/edit/{article}', 'ArticleController@edit')->name('admin.article.edit');
Route::patch('/dashboard/article/update/{article}', 'ArticleController@update')->name('admin.article.update');
Route::delete('/dashboard/article/delete/{article}', 'ArticleController@delete')->name('admin.article.delete');

// R routes for donations
Route::get('/dashboard/donations', 'AdminController@donations')->name('admin.donations');
Route::get('/dashboard/donations/{donation}', 'DonationController@show')->name('admin.donations.show');

// CRUD routes for api-keys
Route::get('/dashboard/keys', 'AdminController@keys')->name('admin.keys');
Route::get('/dashboard/keys/{key}', 'KeyController@show')->name('admin.keys.show');
Route::get('/dashboard/key/create', 'KeyController@create')->name('admin.keys.create');
Route::post('/dashboard/key/store', 'KeyController@store')->name('admin.keys.store');
Route::get('/dashboard/key/edit/{key}', 'KeyController@edit')->name('admin.keys.edit');
Route::patch('/dashboard/key/update/{key}', 'KeyController@update')->name('admin.keys.update');
Route::delete('/dashboard/key/delete/{key}', 'KeyController@delete')->name('admin.keys.delete');
