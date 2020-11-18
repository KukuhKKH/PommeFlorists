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
    return view('pages.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Profil
Route::group(['prefix' => 'profil'], function () {
    Route::get('tentang-perusahaan', 'ProfilController@tentang_perusahaan')->name('profil.perusahaan');
    Route::get('visi', 'ProfilController@visi')->name('profil.visi');
    Route::get('misi', 'ProfilController@misi')->name('profil.misi');
});

// Our Service
Route::group(['prefix' => 'our-service'], function () {
    Route::get('anniversary', 'OurServiceController@anniversary')->name('our-service.anniversary');
    Route::get('birthday', 'OurServiceController@birthday')->name('our-service.birthday');
    Route::get('graduation', 'OurServiceController@graduation')->name('our-service.graduation');
    Route::get('weeding', 'OurServiceController@weeding')->name('our-service.weeding');
});

//Kategori Bunga
Route::group(['prefix' => 'kategori-bunga'], function () {
    Route::get('head-bucket', 'KategoriBungaController@head_bucket')->name('kategori-bunga.head-bucket');
    Route::get('bunga-meja', 'KategoriBungaController@bunga_meja')->name('kategori-bunga.bunga-meja');
    Route::get('bunga-kering', 'KategoriBungaController@bunga_kering')->name('kategori-bunga.bunga-kering');
    Route::get('bunga-papan', 'KategoriBungaController@bunga_papan')->name('kategori-bunga.bunga-papan');
});
