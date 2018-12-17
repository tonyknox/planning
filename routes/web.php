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

Route::get('/', 'DirectoriesController@welcome' );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('test', 'HomeController@test');

Route::resource('articles', 'ArticlesController');

Route::get('books/menu/{menu}', 'BooksController@menu')->name('bkmenu');
Route::resource('books', 'BooksController');

Route::resource('chapters', 'ChaptersController');

Route::resource('directories', 'DirectoriesController');

Route::resource('mimages', 'MimagesController');

Route::resource('people', 'PeopleController');

Route::resource('places', 'PlacesController');

Route::resource('pages', 'PagesController');
Route::resource('greeneries', 'GreeneriesController');
Route::resource('mccplans', 'MccplansController');

Route::get('SearchArticles', 'SearchController@searcharticles');
Route::get('SearchChapters', 'SearchController@searchchapters');
Route::get('SearchGreeneries', 'SearchController@searchgreeneries');
Route::get('SearchMccplans', 'SearchController@searchmccplans');
Route::get('SearchMimages', 'SearchController@searchmimages');
Route::get('SearchPages', 'SearchController@searchpages');
Route::get('SearchPeople', 'SearchController@searchpeople');
Route::get('SearchPlaces', 'SearchController@searchplaces');