<?php

namespace App\Http\Controllers;
use App\TheLoai;
use Illuminate\Support\Str;


use Illuminate\Http\Request;

class TheLoaiController extends Controller
{
    //
    public function getDanhSach()
    {
        $theloai = TheLoai::all();   
        return view('admin.theloai.danhsach',['theloai'=>$theloai]);
    }

    public function getThem()
    {
        return view('admin.theloai.them');
    }

    public function postThem(Request $request)
    {
        $this->validate($request,
        [
            'theloai'=>'required|unique:TheLoai,Ten|max:250'
        ],[
            'theloai.required'=>'Bạn chưa nhập thể loại sách',
            'theloai.unique'=>'Tên thể loại đã tồn tại',
            'theloai.max'=>'Thể loại không dài quá 250 kí tự'
        ]);
        
        $theloai = new TheLoai;
        $theloai->Ten = $request->theloai;
        if($request->hasFile('Hinh')){
            $file = $request->file('Hinh');
            //Lay ten hinh de kiem tra
            $name = $file->getClientOriginalName();
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg' ){
                return redirect('admin/theloai/them')->with('loi', 'Bạn chỉ được thêm ảnh có đuôi là jpg, png, jpeg');
            }
            $hinh = Str::random(4)."_".$name;
            while(file_exists("images".$hinh)){
                $hinh = Str::random(4)."_".$name;
            }
            $file->move("images", $hinh);
            $theloai->Hinh = $hinh;
        }
        $theloai->save();
        return redirect('admin/theloai/them')->with('thongbao','Thêm thành công!');
    }

    public function getSua($id){
        $theloai = TheLoai::find($id);
        return view('admin.theloai.sua', ['theloai'=>$theloai]);
    }

    public function postSua(Request $request, $id){
        $this->validate($request,
        [
            'theloai'=>'required|unique:TheLoai,Ten|max:250'
        ],[
            'theloai.required'=>'Bạn chưa nhập thể loại sách',
            'theloai.unique'=>'Tên thể loại đã tồn tại',
            'theloai.max'=>'Thể loại không dài quá 250 kí tự'
        ]);
        
        $theloai = TheLoai::find($id);
        $theloai->Ten = $request->theloai;
        if($request->hasFile('Hinh')){
            $file = $request->file('Hinh');
            //Lay ten hinh de kiem tra
            $name = $file->getClientOriginalName();
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg' ){
                return redirect('admin/theloai/sua/'.$id)->with('loi', 'Bạn chỉ được thêm ảnh có đuôi là jpg, png, jpeg');
            }
            $hinh = Str::random(4)."_".$name;
            while(file_exists("images".$hinh)){
                $hinh = Str::random(4)."_".$name;
            }
            unlink("images/".$theloai->Hinh);
            $file->move("images", $hinh);
            $theloai->Hinh = $hinh;
        }
        $theloai->save();
        return redirect('admin/theloai/sua/'.$id)->with('thongbao','Thay đổi thành công!');
    }
}
