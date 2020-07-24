@extends('nhanvien.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Quy định mượn sách
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12" style="padding-bottom:120px">
                <table class="table">
                    <tbody>
                      <tr>
                        <th class="product__details__price" scope="row">Nội dung</th>
                      </tr>
                      @foreach($quydinh as $chitiet)
                      <tr>
                        <td>{{$chitiet->NoiDung}}</td>
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