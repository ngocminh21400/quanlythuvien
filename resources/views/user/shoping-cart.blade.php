@extends('user.layout.index')

@section('content')
    @include('user.layout.hero2')
   

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="user/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Sách Đang Mượn</h2>
                        <div class="breadcrumb__option">
                            <a href="././">Trang chủ</a>
                            <span>Sách Đang Mượn</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                @if(isset($chitietmuonsach))
                    <div class="col-lg-12">
                        <div class="shoping__cart__table">
                            <table class="table">
                                <tbody>
                                  <tr>
                                    <th class="product__details__price" scope="row">Sách</th>
                                    <th scope="row">Thể loại</th>
                                  </tr>
                                  @foreach($chitietmuonsach as $chitiet)
                                  <tr>
                                    <td>{{$chitiet->sach->TenSach}}</td>
                                    <td>{{$chitiet->sach->theloai->Ten}}</td>
                                  </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                        <hr width="50%"><br>
                        <div class="shoping__cart__table">
                            <table class="table">
                                <tbody>
                                  <tr>
                                    <th class="product__details__price" scope="row">Tổng tiền thanh toán</th>
                                    <td>{{$chitietmuonsach[0]->muonsach->TongTien}} VNĐ</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Ngày trả</th>
                                    <td>{{$chitietmuonsach[0]->muonsach->NgayTra}}</td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                @else
                    Bạn không có sách nào đang mượn
                @endif
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->
@endsection