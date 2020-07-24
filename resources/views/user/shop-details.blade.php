@extends('user.layout.index')

@section('content')
    @include('user.layout.hero2')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="user/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>{{$sach->TenSach}}</h2>
                        <div class="breadcrumb__option">
                            <a href="././">Trang chủ </a>
                            <a href="./thuvien">Thư viện </a>
                            <span> {{$sach->TenSach}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="images/{{$sach->Hinh}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>{{$sach->TenSach}} </h3>
                        <div class="product__details__rating">
                            <span>(Số lượng: @if($sach->SoLuong == 0) Hết sách @else {{$sach->SoLuong}} @endif)</span>
                        </div>
                        <table class="table">
                            <tbody>
                              <tr>
                                <th class="product__details__price" scope="row">Trị giá</th>
                                <td>{{$sach->TriGia}} VNĐ</td>
                              </tr>
                              <tr>
                                <th scope="row">Tác giả</th>
                                <td>{{$sach->TacGia}}</td>
                              </tr>
                              <tr>
                                <th scope="row">Thể loại</th>
                                <td>{{$theloai->Ten}}</td>
                              </tr>
                              <tr>
                                <th scope="row">Nhà xuất bản</th>
                                <td>{{$sach->NhaXuatBan}}</td>
                              </tr>
                              <tr>
                                <th scope="row">Năm xuất bản</th>
                                <td>{{$sach->NamXuatBan}}</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->
@endsection