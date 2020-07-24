@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thể loại
                    <small>Danh sách các thể loại</small>
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
                        <th>Tên thể loại</th>
                        <th>Hình</th>
                        <th>Chỉnh sửa gần nhất</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($theloai as $item)
                    <tr class="odd gradeX" align="center">
                        <td>{{$item->id}}</td>
                        <td>{{$item->Ten}}</td>
                        <td><img width="100px" src="images/{{$item->Hinh}}"></td>
                        <td>{{$item->update_at}}</td>
                        <td class="center"> <a href="admin/theloai/sua/{{$item->id}}"><i class="fa fa-pencil fa-fw"></i></a></td>
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