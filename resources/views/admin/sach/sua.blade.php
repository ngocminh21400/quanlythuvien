@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sách
                    <small>Sửa</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach
                    </div>
                @endif
                @if(session('loi'))
                    <div class="alert alert-danger">
                        {{session('loi')}}
                    </div>
                @endif
                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif

                <form action="admin/sach/sua/{{$sach->id}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tên sách</label>
                        <input class="form-control" name="TenSach" placeholder="Tên sách" value="{{$sach->TenSach}}"/>
                    </div>
                    <div class="form-group">
                        <label>Tác giả</label>
                        <input class="form-control" name="TacGia" placeholder="Tác giả" value="{{$sach->TacGia}}"/>
                    </div>
                    <div class="form-group">
                        <label>Thể loại</label>
                        <select class="form-control" name="TheLoai" id="TheLoai">
                            @foreach($theloai as $tl)
                                <option
                                @if($sach->id_TheLoai == $tl->id)
                                    {{"selected"}}
                                @endif
                                value="{{$tl->id}}">{{$tl->Ten}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Năm xuất bản</label>
                        <input type="number" class="form-control" name="NamXuatBan" placeholder="Năm xuất bản" value="{{$sach->NamXuatBan}}"/>
                    </div>
                    <div class="form-group">
                        <label>Nhà xuất bản</label>
                        <input class="form-control" name="NhaXuatBan" placeholder="Nhà xuất bản" value="{{$sach->NhaXuatBan}}"/>
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <img src="images/{{$sach->Hinh}}" width="400px"><br><br>
                        <label>Hình ảnh mới</label>
                        <input id="Hinh" type="file" class="form-control" name="Hinh"/>
                    </div>
                    <div class="form-group">
                        <label>Trị giá</label>
                        <input type="number" class="form-control" name="TriGia" placeholder="Tri giá" value="{{$sach->TriGia}}"/>
                    </div>
                    <div class="form-group">
                        <label>Số lượng hiện có</label>
                        <input type="number" class="form-control" name="SoLuong" placeholder="Số lượng" value="{{$sach->SoLuong}}"/>
                    </div>
                    <button type="submit" class="btn btn-default">Sửa</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection

@section('script')
<script>
    $("#Hinh").change(function(e) {
        for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {        
            var file = e.originalEvent.srcElement.files[i];      
            var img = document.createElement("img");
            var reader = new FileReader();
            reader.onloadend = function() {
                img.src = reader.result;
                img.width = 300;
            }
            reader.readAsDataURL(file);
            $("input").after(img);
        }
    });

</script>
@endsection