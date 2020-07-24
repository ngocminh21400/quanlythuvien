<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
        return view('admin.sach.them', ['theloai'=>$theloai]);
    }

    public function postThem(Request $request){
        $this->validate($request,
        [
            'TenSach'=>'required|max:250',
            'TacGia'=>'required|max:250',
            'TheLoai'=>'required',
            'NamXuatBan'=>'required|max:4',
            'NhaXuatBan'=>'required|max:255',
            'TriGia'=>'required|max:7',
            'SoLuong'=>'required|max:4'
        ],[
            'TenSach.required'=>'Bạn chưa nhập tên sách',
            'TenSach.max'=>'Tên sách không dài quá 250 kí tự',
            'TacGia.required'=>'Bạn chưa nhập tên tác giả',
            'TacGia.max'=>'Tên tác giả không dài quá 250 kí tự',
            'TheLoai.required'=>'Bạn chưa chọn thể loại',
            'NamXuatBan.required'=>'Bạn chưa nhập năm xuất bản',
            'NamXuatBan.max'=>'Năm xuất bản gồm 4 số',
            'NhaXuatBan.required'=>'Bạn chưa nhập nhà xuất bản',
            'NhaXuatBan.max'=>'Tên nhà xuất bản không dài quá 250 kí tự',
            'TriGia.required'=>'Bạn chưa nhập trị giá cho sách',
            'TriGia.max'=>'Trị giá sách phải thấp hơn 10.000.000',
            'SoLuong.required'=>'Bạn chưa nhập số lượng sách',
            'SoLuong.max:4'=>'Số lượng sách ít hơn 10.000'
        ]);

        $sach = new Sach;
        $sach->TenSach = $request->TenSach;
        $sach->TacGia = $request->TacGia;
        $sach->id_TheLoai = $request->TheLoai;
        $sach->NamXuatBan = $request->NamXuatBan;
        $sach->NhaXuatBan = $request->NhaXuatBan;
        $sach->TriGia = $request->TriGia;
        $sach->SoLuong = $request->SoLuong;
        if($request->hasFile('Hinh')){
            $file = $request->file('Hinh');
            //Lay ten hinh de kiem tra
            $name = $file->getClientOriginalName();
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg' ){
                return redirect('admin/sach/them')->with('loi', 'Bạn chỉ được thêm ảnh có đuôi là jpg, png, jpeg');
            }
            $hinh = Str::random(4)."_".$name;
            while(file_exists("images".$hinh)){
                $hinh = Str::random(4).$name;
            }
            $file->move("images", $hinh);
            $sach->Hinh = $hinh;
        }
        $sach->save();

        return redirect('admin/sach/them')->with('thongbao','Thêm thành công');
    }

    public function getSua($id){
        $sach = Sach::find($id);
        $theloai = TheLoai::all();
        return view('admin.sach.sua', ['sach'=>$sach, 'theloai'=>$theloai]);
    }

    public function postSua(Request $request, $id){
        $this->validate($request,
        [
            'TenSach'=>'required|max:250',
            'TacGia'=>'required|max:250',
            'TheLoai'=>'required',
            'NamXuatBan'=>'required|max:4',
            'NhaXuatBan'=>'required|max:255',
            'TriGia'=>'required|max:7',
            'SoLuong'=>'required|max:4'
        ],[
            'TenSach.required'=>'Bạn chưa nhập tên sách',
            'TenSach.max'=>'Tên sách không dài quá 250 kí tự',
            'TacGia.required'=>'Bạn chưa nhập tên tác giả',
            'TacGia.max'=>'Tên tác giả không dài quá 250 kí tự',
            'TheLoai.required'=>'Bạn chưa chọn thể loại',
            'NamXuatBan.required'=>'Bạn chưa nhập năm xuất bản',
            'NamXuatBan.max'=>'Năm xuất bản gồm 4 số',
            'NhaXuatBan.required'=>'Bạn chưa nhập nhà xuất bản',
            'NhaXuatBan.max'=>'Tên nhà xuất bản không dài quá 250 kí tự',
            'TriGia.required'=>'Bạn chưa nhập trị giá cho sách',
            'TriGia.max'=>'Trị giá sách phải thấp hơn 10.000.000',
            'SoLuong.required'=>'Bạn chưa nhập số lượng sách',
            'SoLuong.max:4'=>'Số lượng sách ít hơn 10.000'
        ]);

        $sach = Sach::find($id);
        $sach->TenSach = $request->TenSach;
        $sach->TacGia = $request->TacGia;
        $sach->id_TheLoai = $request->TheLoai;
        $sach->NamXuatBan = $request->NamXuatBan;
        $sach->NhaXuatBan = $request->NhaXuatBan;
        $sach->TriGia = $request->TriGia;
        $sach->SoLuong = $request->SoLuong;
        if($request->hasFile('Hinh')){
            $file = $request->file('Hinh');
            //Lay ten hinh de kiem tra
            $name = $file->getClientOriginalName();
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg' ){
                return redirect('admin/sach/them')->with('loi', 'Bạn chỉ được thêm ảnh có đuôi là jpg, png, jpeg');
            }
            $hinh = Str::random(4)."_".$name;
            while(file_exists("images".$hinh)){
                $hinh = Str::random(4).$name;
            }
            unlink("images/".$sach->Hinh);
            $file->move("images", $hinh);
            $sach->Hinh = $hinh;
        }
        $sach->save();
        return redirect('admin/sach/sua/'.$id)->with('thongbao', 'Thay đổi thành công');
    }

    public function getXoa($id){
        $sach = Sach::find($id);
        unlink("images/".$sach->Hinh);
        $sach->delete();

        return redirect('admin/sach/danhsach')->with('thongbao', 'Xóa thành công');
    }
}
