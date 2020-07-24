@extends('nhanvien.layout.index')

@section('content')
     <!-- Page Content -->
     <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Phiếu mượn
                        <small>Tạo mới</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-12" style="padding-bottom:120px">
                    <form action="{{route('taomoimuon')}}" method="POST" role="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="form-group  col-lg-3" >
                            <label>ID khách hàng</label>
                            <input id="id-user" class="form-control id-user" type="number" name="id_user" placeholder="Vui lòng nhập ID trên thẻ thành viên" required (blur)="MuonSach@searchUser()"/>
                        </div>
                        <div class="form-group col-md-12 col-lg-3">
                            <label>Tên khách hàng</label>
                            <input id="HoTen" disabled type="text" class="form-control" name="HoTen" />
                        </div>
                        <div class="form-group col-md-12 col-lg-3">
                                <label>Số điện thoại</label>
                            <input id="SoDT" disabled type="text" class="form-control" name="SoDT" />
                        </div>
                        <div class="form-group col-md-12 col-lg-3">
                            <label>Email</label>
                            <input id="Email" disabled type="email" class="form-control" name="Email" />
                        </div>
                        <div class="form-group col-md-12 col-lg-6" >
                            <label>Ngày mượn</label>
                            <input id="NgayMuon" class="form-control" name="NgayMuon" type="date" required />
                        </div>
                        <div class="form-group col-md-12 col-lg-6">
                            <label>Ngày trả</label>
                            <input id="NgayTraDuDinh" class="form-control" name="NgayTra" type="date" required />
                        </div>
                        <div class="form-group col-md-12 col-lg-12 text-center">
                            
                            <div class="dropdown-content">
                                <label>Tìm kiếm sách</label>
                                <input type="text" placeholder="Nhập tên sách để tìm kiếm ... " id="searchBook">
                                <div id="myDropdown">
                                    
                                </div>
                            </div>
                            @if (Session::has('cart'))
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr align="center">
                                            <th>Tên sách</th>
                                            <th>Tác giả</th>
                                            <th>Thể loại</th>
                                            <th>Giá mượn</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                            @foreach ($book as $item)
                                            <tr class="odd gradeX" align="left">
                                                <td>{{$item['item']['TenSach']}}</td>
                                                <td>{{$item['item']['TacGia']}}</td>
                                                <td>{{$item['item']['TheLoai']['Ten']}}</td>
                                                <td align="right">5000</td>
                                                <td align="center"><a href="{{route('xoasachmuon', $item['item']['id'])}}"><i class="fa fa-trash fa-fw"></i></a>
                                            </tr>
                                            @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr align="right">
                                            <td align="center"><b>Số lượng: <?php if(Session::has('cart')) echo count($book)?></b></td>
                                            <td colspan="3"><b>Tiền mượn : {{Session::has('cart') ? $totalPrice : 0}}</b></td>   
                                        </tr>
                                    </tfoot>
                                </table>
                            @endif
                        </div>
                        <div class="form-group col-md-12" >
                            <button type="submit" <?php if(Session::has('cart')) {if(count($book) == 0) echo 'disabled';} else echo 'disabled';?> class="btn btn-default">Tạo phiếu</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </div>
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
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
        $('#id-user').val(localStorage.getItem('id-user'));
        $('#HoTen').val(localStorage.getItem('HoTen'));
        $('#SoDT').val(localStorage.getItem('SoDT'));
        $('#Email').val(localStorage.getItem('Email'));
        $('#NgayMuon').val(localStorage.getItem('NgayMuon'));
        $('#NgayTraDuDinh').val(localStorage.getItem('NgayTraDuDinh'));
    });
    $('#id-user').on('blur', function () {
        var id_User = $(this).val();
        if ($(this).val() != '') {
            $.get("nhanvien/ajax/muonsach/user/"+ id_User, function(data){
                if (!data) {
                    localStorage.removeItem('id-user');
                    localStorage.removeItem('HoTen');
                    localStorage.removeItem('SoDT');
                    localStorage.removeItem('Email');
                    $('#id-user').val('');
                    $('#HoTen').val('');
                    $('#SoDT').val('');
                    $('#Email').val('');
                    alert("ID này không tồn tại");
                }else {
                    localStorage.setItem('id-user', id_User)
                    localStorage.setItem("HoTen", data.HoTen);
                    localStorage.setItem("SoDT", data.SoDT);
                    localStorage.setItem("Email", data.email);
                    $('#HoTen').val(data.HoTen);
                    $('#SoDT').val(data.SoDT);
                    $('#Email').val(data.email);
                }
               
            })
       };
    });
    $('#NgayMuon').on('blur', function () {
        localStorage.setItem('NgayMuon', $('#NgayMuon').val());
    });
    $('#NgayTraDuDinh').on('blur', function () {
        localStorage.setItem('NgayTraDuDinh', $('#NgayTraDuDinh').val());
    });
    
   /*  $('#id-user').on('change', function () {
        localStorage.setItem('id-user', $('#id-user').val())
        localStorage.setItem("HoTen", $('#HoTen').val());
        localStorage.setItem("SoDT", $('#SoDT').val());
        localStorage.setItem("Email", $('#Email').val());
    }); */
    $('#searchBook').on('blur', function () {
        $(this).val('');
        setTimeout(() => {
            $('#myDropdown').html('');
        },500);
    });
    $('#searchBook').on('keyup', function () {
        var searchBook = $(this).val();
        if ($(this).val() != '') {
            $.get("nhanvien/ajax/muonsach/book/"+ searchBook, function(data){
                if (data) {
                    $('#myDropdown').html(data)
                }
            })
       } else {
        $('#myDropdown').html('')
       }
    });

    </script>
@endsection
