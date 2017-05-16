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


  // Pelajar Function
  Route::get('/index', 'HomeController@index');
  Route::resource('/suggest', 'SuggestController');
  Route::resource('/suggestview', 'SuggestController');
  Route::resource('/verify', 'VerifyController');
  Route::resource('/profile', 'ProfileController');


  //Penasihat Semak Pelajar
  Route::resource('/semak', 'SemakController');
  Route::get('/terima/{id}','SemakController@terima');
  Route::get('/tolak/{id}','SemakController@tolak');
  Route::get('/semak-pembuktian', 'SemakController@SemakPembuktian');
  Route::get('/senarai-pelajar', 'SemakController@Senarai');


  // Tukar SIG
  Route::get('tukar','TukaranController@index');
  Route::patch('tukar/{id}','TukaranController@change');
  Route::get('tukar-pengesahan','TukaranController@view');
  Route::patch('tukar-pengesahan/{id}','TukaranController@update');


  // Main page lepas login
  Route::resource('/berita', 'BeritaController');


  Route::get('/bukti/{id}', 'VerifyController@bukti');

  Route::resource('/kemaskini', 'KemaskiniController');


  // Download Fail Pembuktian
  Route::get('muat-turun/{id}', 'VerifyController@download')->name('download');



  // Email Notify
  Route::get('send', function(Request $request) {

    $user = App\User::where('id',Auth::user()->id)->first();

    $user->notify(new App\Notifications\WelcomeNotification($user));

    return redirect('/tukar-pengesahan');

  });


});

  Route::resource('/admin','AdminController');

  Route::get('download','DownloadController@getExcel');




Route::get('muat-turun/{id}', 'DownloadController@download')->name('download');
