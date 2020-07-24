@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sách
                    <small>Thêm</small>
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

                <form action="admin/sach/them" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tên sách</label>
                        <input class="form-control" name="TenSach" placeholder="Tên sách" />
                    </div>
                    <div class="form-group">
                        <label>Tác giả</label>
                        <input class="form-control" name="TacGia" placeholder="Tác giả" />
                    </div>
                    <div class="form-group">
                        <label>Thể loại</label>
                        <select class="form-control" name="TheLoai" id="TheLoai">
                            @foreach($theloai as $tl)
                                <option value="{{$tl->id}}">{{$tl->Ten}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Năm xuất bản</label>
                        <input type="number" class="form-control" name="NamXuatBan" placeholder="Năm xuất bản" />
                    </div>
                    <div class="form-group">
                        <label>Nhà xuất bản</label>
                        <input class="form-control" name="NhaXuatBan" placeholder="Nhà xuất bản" />
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <input id="Hinh" type="file" class="form-control" name="Hinh" required/>
                    </div>
                    <div class="form-group">
                        <label>Trị giá</label>
                        <input type="number" class="form-control" name="TriGia" placeholder="Tri giá" />
                    </div>
                    <div class="form-group">
                        <label>Số lượng hiện có</label>
                        <input type="number" class="form-control" name="SoLuong" placeholder="Số lượng" />
                    </div>
                    <button type="submit" class="btn btn-default">Thêm</button>
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