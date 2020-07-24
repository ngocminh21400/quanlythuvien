@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sách
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            
            @if(session('thongbao'))
                <div class="alert alert-success">{{session('thongbao')}}</div>
            @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Tác giả</th>
                        <th>Thể loại</th>
                        <th>Hình ảnh</th>
                        <th>Năm xuất bản</th>
                        <th>Nhà xuất bản</th>
                        <th>Trị giá</th>
                        <th>Số lượng</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($sach as $item)
                    <tr class="odd gradeX" align="center">
                        <td>{{$item->id}}</td>
                        <td>{{$item->TenSach}}</td>
                        <td>{{$item->TacGia}}</td>
                        <td>{{$item->theloai->Ten}}</td>
                        <td><img width="100px" src="images/{{$item->Hinh}}"></td>
                        <td>{{$item->NamXuatBan}}</td>
                        <td>{{$item->NhaXuatBan}}</td>
                        <td>{{$item->TriGia}}</td>
                        <td>{{$item->SoLuong}}</td>
                        <td class="center"><a href="admin/sach/xoa/{{$item->id}}"> <i class="fa fa-trash-o  fa-fw"></i></a></td>
                        <td class="center"> <a href="admin/sach/sua/{{$item->id}}"> <i class="fa fa-pencil fa-fw"></i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection