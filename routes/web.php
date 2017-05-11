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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']],function(){

  Route::get('/index', 'HomeController@index');
  Route::resource('/suggest', 'SuggestController');
  Route::resource('/suggestview', 'SuggestController');
  Route::resource('/verify', 'VerifyController');
  Route::resource('/profile', 'ProfileController');

  Route::resource('/semak', 'SemakController');
  Route::get('/terima/{id}','SemakController@terima');
  Route::get('/tolak/{id}','SemakController@tolak');
  Route::get('/semak-pembuktian', 'SemakController@SemakPembuktian');
  Route::get('/senarai-pelajar', 'SemakController@Senarai');


  Route::get('/bukti/{id}', 'VerifyController@bukti');

  Route::resource('/kemaskini', 'KemaskiniController');

  Route::get('muat-turun/{id}', 'VerifyController@download')->name('download');


});

  Route::resource('/admin','AdminController');


Route::get('muat-turun/{id}', 'DownloadController@download')->name('download');
