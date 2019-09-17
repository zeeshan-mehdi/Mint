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


Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/about/bills','PagesController@bills');
Route::get('/about/budgets','PagesController@budgets');
Route::get('/about/credits','PagesController@credit');
Route::get('/about/alerts','PagesController@alerts');
Route::get('/about/categorization','PagesController@categorization');
Route::get('/about/investments','PagesController@investments');
Route::get('/about/security','PagesController@security');
