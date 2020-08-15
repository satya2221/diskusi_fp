<?php
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

Route::get('/', function () {
    return view('mainMenu');
});
Route::resource('pertanyaan','PertanyaanController');
Route::resource('jawaban','JawabanController');
Route::resource('komen_tanya','KomenTanyaController');
Route::resource('komen_jawab','KomenJawabController');
Route::resource('tag','TagController');
Route::resource('vote_tanya','VoteTanyaController');
Route::resource('vote_jawab','VoteJawabController');
Route::get('jawaban/{jawaban}/jawab','JawabanController@jawab');
Route::put('/pertanyaan/{pertanyaan}/best','PertanyaanController@updatebest');
Route::get('jawaban/{jawaban}/{pertanyaan}/jawabtop','JawabanController@jawabtop');

Route::get('poin/{pertanyaan}/{user_id}/add','PoinController@add');
Route::get('poin/{pertanyaan}/{user_id}/subtract','PoinController@subtract');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
