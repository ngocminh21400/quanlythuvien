<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sach;
use App\TheLoai;

class SachController extends Controller
{
    //
    public function getDanhSach(){
        if(isset($_REQUEST['maloai'])){
            $sach = Sach::where('id_TheLoai', $_REQUEST['maloai'])->get();
            return view('admin.sach.danhsach', ['sach'=>$sach]);
        }else{
            $sach = Sach::all();
            return view('admin.sach.danhsach', ['sach'=>$sach]);
        }
    }

    public function getThem(){
        $theloai = TheLoai::all();
        return view('admin.sach.them', ['theloai', $theloai]);
    }
}
