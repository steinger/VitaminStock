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

Route::middleware('auth')->group( function() {
  Route::get('/', 'ContentsController@home')->name('home');
  Route::get('/dashboard', 'ContentsController@dashboard')->name('dashboard');
  Route::get('/debit/{product_id}', 'ContentsController@debit')->name('debit');
  Route::get('/products', 'ProductController@index')->name('products');
  Route::get('/products/new', 'ProductController@newProduct')->name('new_product');
  Route::post('/products/new', 'ProductController@newProduct')->name('create_product');
  Route::get('/products/{product_id}', 'ProductController@show')->name('show_product');
  Route::post('/products/{product_id}', 'ProductController@modify')->name('update_product');
  Route::get('/activity', 'ActivityController@index')->name('activity');
  Route::get('/activity/delete/{activity_id}', 'ActivityController@delete')->name('delete');
  Route::get('/activity/today', 'ActivityController@today')->name('today_activity');
  Route::get('/activity/overview', 'ActivityController@overview')->name('overview_activity');
  Route::get('/activity/list/{product_id}', 'ActivityController@list')->name('singlelist_activity');

  Route::get('export', 'ProductController@export');
});

Route::get('/home', function () {
    $data = [];
    $data['version'] = '1.1.1';
    return view('welcome', $data);
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
