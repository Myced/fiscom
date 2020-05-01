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

Route::get('/', 'HomeController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/publication', 'HomeController@publication')->name('publication');
Route::get('/claim', 'HomeController@claim')->name('claim');
Route::get('/payment', 'HomeController@payment')->name('payment');
Route::get('/apropos', 'HomeController@apropos')->name('apropos');
Route::get('/bibliotheque', 'HomeController@bibliotheque')->name('bibliotheque');
Route::get('/metier', 'HomeController@metier')->name('metier');
Route::get('/reseau', 'HomeController@reseau')->name('reseau');
Route::get('/event/details', 'HomeController@eventDetail')->name('event.detail');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/booking', 'HomeController@booking')->name('booking');
Route::get('/forfait', 'HomeController@forfait')->name('forfait');
Route::get('/myprofile', 'HomeController@myprofile')->name('myprofile');
Route::get('/metier/details', 'HomeController@metierDetail')->name('metier.detail');

Route::get('/documents/download/{hash}', 'Admin\DocumentsController@download')->name("document.download");

Route::group(['prefix' => 'admin'], function(){
    Route::get('/', 'Admin\HomeController@index')->name('admin');

    Route::group(['prefix' => 'documents'], function(){
        Route::get('/', 'Admin\DocumentsController@index')->name('admin.documents');
        Route::get('/create', 'Admin\DocumentsController@create')->name('admin.document.create');
        Route::post('/store', 'Admin\DocumentsController@store')->name('admin.document.store');
    });
});
