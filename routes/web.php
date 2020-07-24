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

Route::get('admin/dangnhap', 'NhanSuController@getDangNhap');
Route::post('admin/dangnhap', 'NhanSuController@postDangNhap');
Route::get('admin/dangxuat', 'NhanSuController@getDangXuat');

Route::group(['prefix'=>'admin','middleware'=>'adminlogin'], function(){
    Route::get('/{id}', 'NhanSuController@getDoi');
    Route::post('/{id}', 'NhanSuController@postDoi');

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

        // Route::get('xoa/{id}', 'TheLoaiController@getXoa');
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
    
    Route::group(['prefix'=>'taichinh'], function(){
        Route::get('phieumuon', 'TaichinhController@getPhieuMuon');
        Route::get('phieutra', 'TaichinhController@getPhieuTra');
        Route::get('doanhthu', 'TaichinhController@getDoanhThu');
        Route::get('doanhthu/{filler}', 'TaiChinhController@getFiller');
    });

    Route::group(['prefix'=> 'ajax'], function(){
        Route::get('muonsach/{idMuonSach}', 'AjaxController@getChiTietMuonSach');
        Route::get('trasach/{idTraSach}', 'AjaxController@getChiTietTraSach');
    });
});

//---------------Nhân viên -----------------------//
Route::get('nhanvien/dangnhap', 'NhanVienController@getDangNhap');
Route::post('nhanvien/dangnhap', 'NhanVienController@postDangNhap');
Route::get('nhanvien/dangxuat', 'NhanVienController@getDangXuat');

Route::group(['prefix' => 'nhanvien', 'middleware'=>'NhanVienlogin'], function() {
    Route::get('/', function () {
        return redirect() -> route('muonsach/danhsach');
    });

    Route::group(['prefix' => 'muonsach'], function() {
        Route::get('danhsach', [
            'as' => 'danhsachmuon',
            'uses'=>'MuonSachController@getData'
        ]);
        Route::get('chitiet/{id}', [
            'as' => 'chitietmuon',
            'uses' => 'MuonSachController@goToDetail'
        ]);
        Route::get('taomoi', [
            'as' => 'taomoimuon' 
            ,'uses' => 'MuonSachController@getCreate'
        ]);
        Route::post('taomoi', [
            'as' => 'taomoimuon',
            'uses' => 'MuonSachController@postCreate'
        ]);
        Route::get('themsachmuon/{id}', [
            'as' => 'themsachmuon' 
            ,'uses' => 'MuonSachController@addDebtBook'
        ]);
        Route::get('xoasachmuon/{id}', [
            'as' => 'xoasachmuon' 
            ,'uses' => 'MuonSachController@DelDebtBook'
        ]);
        
    });

    Route::group(['prefix'=> 'ajax'], function() {
        Route::get('muonsach/user/{id}', 'AjaxController@getInfoUser');
        Route::get('muonsach/book/{key}', 'AjaxController@searchBook');
    });
    
    Route::group(['prefix'=>'user'], function(){
        Route::get('danhsach', 'NhanVienController@getDanhSach');

        Route::get('them', 'NhanVienController@getThem');
        Route::post('them', 'NhanVienController@postThem');

        Route::get('sua/{id}', 'NhanVienController@getSua');
        Route::post('sua/{id}', 'NhanVienController@postSua');

        Route::get('xoa/{id}', 'NhanVienController@getXoa');
    });

    Route::group(['prefix' => 'trasach'], function() {
        Route::post('{idmuonsach}', 'NhanVienController@postTraSach');

        Route::get('danhsach', 'NhanVienController@getDSTraSach');

        Route::get('chitiet/{id}', [
            'as' => 'chitietmuon',
            'uses' => 'MuonSachController@goToDetail'
        ]);
        
        Route::get('ajax/{idTraSach}', 'AjaxController@getChiTietTraSach');
    });

    Route::get('quydinh', 'NhanVienController@getQuyDinh');
});

//---------------USER-----------------------//
Route::get('/', 'UserController@TrangChu');
Route::get('thuvien', 'UserController@ThuVien');
Route::get('contact', 'UserController@Contact');
Route::get('thongtin', 'UserController@ThongTin');
Route::get('search', 'UserController@Search');

Route::get('muonsach/{id}', 'UserController@MuonSach')->middleware('Userlogin');
Route::get('login','UserController@Login');
Route::post('login','UserController@PostLogin');
Route::get('logout','UserController@Logout');