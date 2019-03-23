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
Route::get('index',['as'=>'trangchu','uses'=>'PageController@getIndex']);

Route::get('loai-sach/{type}',['as'=>'loaisach','uses'=>'PageController@getLoaisp']);

Route::get('chi-tiet-sach/{id}',['as'=>'chitiet','uses'=>'PageController@getChitiet_sach']);

Route::get('gio-hang',['as'=>'giohang','uses'=>'PageController@getGioHang']);