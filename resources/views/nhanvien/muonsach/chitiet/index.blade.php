@extends('nhanvien.layout.index')

@section('content')
     <!-- Page Content -->
     <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Phiếu mượn
                        <small>Chi tiết</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                @if(session('thongtin'))
                    <div class="alert alert-success">
                        Trả sách thành công
                        <table class="table">
                            <tbody>
                              <tr>
                                <th class="product__details__price" scope="row">Số ngày trễ</th>
                                <th scope="row">Tiền trễ</th>
                                <th scope="row">Tiền bồi thường</th>
                                <th scope="row">Tiền thuê sách</th>
                                <th scope="row">Tổng tiền</th>
                                
                              </tr>
                              <tr>
                                <td>{{session('thongtin')->SoNgayTre}}</td>
                                <td>{{session('thongtin')->TienTre}}</td>
                                <td>{{session('thongtin')->TienBoiThuong}}</td>
                                <td>{{session('thongtin')->TienThueSach}}</td>
                                <td>{{session('thongtin')->TongTien}}</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                @endif
                <div class="col-lg-12" style="padding-bottom:120px">
                    <form action="nhanvien/trasach/{{$lend->id}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group  col-lg-3" >
                            <label>ID khách hàng</label>
                            <input id="id-user" class="form-control id-user" type="number" name="id_User" value="{{$lend->user->id}}" readonly/>
                        </div>
                        <div class="form-group col-md-12 col-lg-3">
                            <label>Tên khách hàng</label>
                            <input id="HoTen" type="text" class="form-control" name="HoTen"  value="{{$lend->user->HoTen}}" readonly/>
                        </div>
                        <div class="form-group col-md-12 col-lg-3">
                            <label>Số điện thoại</label>
                            <input id="SoDT" type="text" class="form-control" name="SoDT"  value="{{$lend->user->SoDT}}" readonly/>
                        </div>
                        <div class="form-group col-md-12 col-lg-3">
                            <label>Email</label>
                            <input id="Email" type="email" class="form-control" name="Email"  value="{{$lend->user->email}}" readonly/>
                        </div>
                        <div class="form-group col-md-12 col-lg-3" >
                            <label>Ngày mượn</label>
                            <input class="form-control" name="NgayMuon" type="text" value="{{$lend->NgayMuon}}" readonly/>
                        </div>
                        <div class="form-group col-md-12 col-lg-3">
                            <label>Ngày trả dự kiến</label>
                            <input class="form-control" name="NgayTraDuDinh" type="text" value="{{$lend->NgayTra}}" readonly/>
                        </div>
                        <div class="form-group col-md-12 col-lg-3">
                            <label>Tiền mượn</label>
                            <input class="form-control" name="TongTien" type="text" value="{{$lend->TongTien}}" readonly/>
                        </div>
                        <div class="form-group col-md-12 col-lg-3">
                            <label>Trạng thái</label>
                            <input class="form-control" name="Trạng thái" type="text" value="{{$lend->TrangThai == 1 ? 'Đã trả sách' : 'Chưa trả sách'}}" readonly/>
                        </div>
                        <div class="form-group col-md-12 col-lg-12 text-center">
                            <h2>Danh sách sách mượn</h2>
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr align="center">
                                        <th width="10%">Sách muốn trả</th>
                                        <th>Tên sách</th>
                                        <th>Thể loại</th>
                                        <th>Tác giả</th>
                                        <th>Giá mượn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lend_detail as $item)
                                    <tr class="odd gradeX" align="center">
                                        <td><input type="checkbox" name="{{$item->book->id}}"></td>
                                        <td>{{$item->book->TenSach}}</td>
                                        <td>{{$item->book->theloai->Ten}}</td>
                                        <td>{{$item->book->TacGia}}</td>
                                        <td>5000</td>     
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @if($lend->TrangThai == 0)
                                <button type="submit" class="btn btn-success">Trả sách</button>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

@endsection
