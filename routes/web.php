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

Auth::routes();

Route::middleware(['auth'])->group(function () {

// numbers networks

Route::resource('/admin/networks', 'NetworksController');

// numbers routes
Route::get('/admin/numbers/single-addition', 'NumbersController@singleView')->name('numbersSingle');

Route::get('/admin/numbers/bulk-addition', 'NumbersController@bulkView')->name('numbersBulk');

Route::post('/admin/numbers/bulk-addition', 'NumbersController@bulkStore')->name('bulkStore');

Route::resource('/admin/numbers', 'NumbersController');

// numbers trigger messages
Route::get('/admin/trigger-messages', 'TriggerMessagesController@index')->name('triggerMessages');


});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// network routes


// Route::get('/', function () {
//     return view('welcome2');
// });