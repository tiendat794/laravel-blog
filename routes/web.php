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

Route::get('/','Viewcontroller@index');
Route::get('/home','Viewcontroller@index');
Route::get('/index.html','Viewcontroller@index');
Route::get('ttl/{idLT}', 'Viewcontroller@tintrongloai');
Route::get('tin/{id}/{TieuDe}.html', 'Viewcontroller@chitiettin')->name('chitiettin'); // làm cái route cho nó đẹp đi. làm gì đẹp
Route::post('guiykien/{id}/{TieuDe}.html','Viewcontroller@guiykien')->name('guiykien');
Route::get('/contact','Viewcontroller@contact');
Route::post('/guimail', 'GuimailController@guimaillienhe');
Route::get('/timkiem','Viewcontroller@timkiem');
Route::get('/bao-cao','Viewcontroller@baocao');
Auth::routes();

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::group(['middleware' => ['auth','Quantri']], function () {
    Route::resource('theloai', 'TheloaiController');
    Route::resource('loaitin', 'LoaitinController');
    Route::resource('tintuc', 'TintucController');
    Route::resource('ykien', 'YkienController');
    Route::get('/qt', function(){
        return view('quantri/index');
    });
    Route::get('/admin', function () {
        return view('quantri/index');
    });
    Route::resource('user', 'UserController');
    Route::get('/user/{id}/{idgroup}', 'UserController@updateIdgroup')->name('updateIdgroup');
    
});
Route::group(['middleware' => ['auth','Quantri']], function () {
  
});