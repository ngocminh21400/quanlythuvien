@extends('nhanvien.layout.index')

@section('content')
     <!-- Page Content -->
     <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh sách phiếu mượn
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID Phiếu</th>
                            <th>Khách hàng</th>
                            <th>Ngày mượn</th>
                            <th>Ngày trả</th>
                            <th>Tổng tiền</th>
                            <th>Trạng thái</th>
                            <th>Chi tiết</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lend as $item)
                        <tr class="odd gradeX" align="center" >
                            <td>{{$item -> id}}</td>
                            <td>{{$item -> user -> HoTen}}</td>
                            <td>{{$item -> NgayMuon}}</td>
                            <td>{{$item -> NgayTra}}</td>
                            <td class="center"> {{$item -> TongTien}}</td>
                            <td class="center">{{$item -> TrangThai == 1 ? 'Đã trả sách' : 'Chưa trả sách'}}</td>
                            <td><a href="{{route('chitietmuon', $item)}}">Chi tiết</a></td>
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
