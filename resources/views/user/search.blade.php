@extends('user.layout.index')

@section('content')
    @include('user.layout.hero2')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="user/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Thư viện Librona</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Thể Loại</h4>
                            <ul>
                                @foreach ($theloai as $item)
                                <li><a href="thuvien?id_TheLoai={{$item->id}}">{{$item->Ten}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="row">
                    	@foreach($sach as $item)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="images/{{$item->Hinh}}">
                                    <ul class="product__item__pic__hover">
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <a href="thongtin?id_Sach={{$item->id}}"><h6><b>{{$item->TenSach}}</b></h6>
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <th class="product__details__price" scope="row">Trị giá</th>
                                                <td>{{$item->TriGia}} VNĐ</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Số lượng</th>
                                                <td>@if($item->SoLuong == 0) Hết sách @else {{$item->SoLuong}} @endif</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div style="text-align: center">{{$sach->links()}} {{--phan trang--}}</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
@endsection