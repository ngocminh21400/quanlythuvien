@extends('admin.layout.index')

@section('content')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thể loại
                    <small>Sửa</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->

            <div class="col-lg-7" style="padding-bottom:120px">
                @if(count($errors) > 0)
                    @foreach($errors->all() as $err)
                    <div class="alert alert-danger">
                        {{$err}} <br>
                    </div>
                    @endforeach
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
                <form action="admin/theloai/sua/{{$theloai->id}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tên thể loại</label>
                        <input class="form-control" name="theloai" placeholder="Nhập tên thể loại sách" value="{{$theloai->Ten}}" />
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <img src="images/{{$theloai->Hinh}}" width="400px"><br><br>
                        <label>Hình ảnh mới</label>
                        <input id="Hinh" type="file" class="form-control" name="Hinh"/>
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