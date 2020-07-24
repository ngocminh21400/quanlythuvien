@extends('user.layout.index')

@section('php')
    <?php session_start(); ?>
@endsection

@section('content')
    @include('user.layout.hero')
    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    @foreach ($theloai as $item)
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="images/{{$item->Hinh}}">
                            <h5><a href="thuvien?id_TheLoai={{$item->id}}">{{$item->Ten}}</a></h5>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sách được mượn nhiều nhất</h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
            	@foreach ($topsach as $item)
               	<div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="images/{{$item->Hinh}}">
                        </div>
                        <div class="featured__item__text">
                            <a href="thongtin?id_Sach={{$item->id_Sach}}"><h6><b>{{$item->TenSach}}</b></h6>
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
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sách mới nhất</h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
            	@foreach ($sachmoi as $item)
               	<div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="images/{{$item->Hinh}}">
                        </div>
                        <div class="featured__item__text">
                            <a href="thongtin?id_Sach={{$item->id}}"><h6><b>{{$item->TenSach}}</h6></b>
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
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Quy định mượn sách</h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
            	<table class="table">
                    <tbody>
                      @foreach($quydinh as $chitiet)
                      <tr>
                        <td>{{$chitiet->NoiDung}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

@endsection