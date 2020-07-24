@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Nhân viên
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12" style="padding-bottom:120px">
                @if(session('thongbao'))
                    <div class="alert alert-success">{{session('thongbao')}}</div>
                @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Họ tên</th>
                        <th>Email</th>
                        <th>Ngày sinh</th>
                        <th>Giới tính</th>
                        <th>Địa chỉ</th>
                        <th>SĐT</th>
                        <th>Cập nhật mới nhất</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($nhanvien as $item)
                    <tr class="odd gradeX" align="center">
                        <td>{{$item->id}}</td>
                        <td>{{$item->HoTen}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->NgaySinh}}</td>
                        <td>@if($item->GioiTinh == 1) Nam @else Nữ @endif</td>
                        <td>{{$item->DiaChi}}</td>
                        <td>{{$item->SoDT}}</td>
                        <td>{{$item->updated_at}}</td>
                        <td class="center"><a href="admin/nhansu/xoa/{{$item->id}}"> <i class="fa fa-trash-o  fa-fw"></i></a></td>
                        <td class="center"> <a href="admin/nhansu/sua/{{$item->id}}"> <i class="fa fa-pencil fa-fw"></i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection