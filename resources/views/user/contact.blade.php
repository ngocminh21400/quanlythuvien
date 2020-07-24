@extends('user.layout.index')

@section('content')
<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            {{-- <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Danh sách thể loại</span>
                    </div>
                    <ul>
                        @foreach ($theloai as $item)
                               <li><a href="thuvien?id_TheLoai={{$item->id}}">{{$item->Ten}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div> --}}
            <div class="col-lg-12">
                <div class="hero__search">
                    {{-- <div class="hero__search__form">
                        <form action="search" method="get">
                            <input type="text" name="search" id="search" placeholder="Tìm kiếm sách...">
                            <button type="submit" class="site-btn">Tìm kiếm</button>
                        </form>
                    </div> --}}
                    {{-- <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+0847603779</h5>
                            <span>Đường dây hỗ trợ</span>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
    
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="user/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Liên Hệ</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Số điện thoại</h4>
                        <p>+0847603779</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Địa chỉ</h4>
                        <p>KTX Khu A - ĐHQG Tp.HCM</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Thời gian mở cửa</h4>
                        <p>07:30 to 17:30 pm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p>Librona@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Begin -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9610.483945707467!2d106.80250020337952!3d10.877851254533569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x29d5aeb365cee20b!2sKTX%20Khu%20A%20%C4%90HQG%20TP.HCM!5e0!3m2!1svi!2s!4v1591037826077!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- Map End -->
@endsection