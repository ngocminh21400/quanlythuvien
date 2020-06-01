<?php

//use Illuminate\Support\Facades\Route;

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

Route::group(['prefix'=>'admin'], function(){
    Route::group(['prefix'=>'sach'], function(){
        Route::get('danhsach', 'SachController@getDanhSach');

        Route::get('them', 'SachController@getThem');
        Route::post('them', 'SachController@postThem');

        Route::get('sua/{id}', 'SachController@getSua');
        Route::post('sua/{id}', 'SachController@postSua');

        Route::get('xoa/{id}', 'SachController@getXoa');
    });

    Route::group(['prefix'=>'theloai'], function(){
        Route::get('danhsach', 'TheLoaiController@getDanhSach');

        Route::get('them', 'TheLoaiController@getThem');
        Route::post('them', 'TheLoaiController@postThem');

        Route::get('sua/{id}', 'TheLoaiController@getSua');
        Route::post('sua/{id}', 'TheLoaiController@postSua');

        Route::get('xoa/{id}', 'TheLoaiController@getXoa');
    });

    Route::group(['prefix'=>'nhansu'], function(){
        Route::get('danhsach', 'NhanSuController@getDanhSach');

        Route::get('them', 'NhanSuController@getThem');
        Route::post('them', 'NhanSuController@postThem');

        Route::get('sua/{id}', 'NhanSuController@getSua');
        Route::post('sua/{id}', 'NhanSuController@postSua');

        Route::get('xoa/{id}', 'NhanSuController@getXoa');
    });

    Route::group(['prefix'=>'quydinh'], function(){
        Route::get('danhsach', 'QuyDinhController@getDanhSach');

        Route::get('them', 'QuyDinhController@getThem');
        Route::post('them', 'QuyDinhController@postThem');

        Route::get('sua/{id}', 'QuyDinhController@getSua');
        Route::post('sua/{id}', 'QuyDinhController@postSua');

        Route::get('xoa/{id}', 'QuyDinhController@getXoa');
    });
});