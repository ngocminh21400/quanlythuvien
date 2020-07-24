    <!-- Hero Section Begin -->
    <section class="hero">
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
                        <div class="hero__search__form">
                            <form action="search" method="get">
                                <input type="text" name="search" id="search" placeholder="Tìm kiếm sách...">
                                <button type="submit" class="site-btn">Tìm kiếm</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+0847603779</h5>
                                <span>Đường dây hỗ trợ</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="user/img/hero/banner.jpg">
                        <div class="hero__text">
                            <span style="color:#FFF; font-size:25px; text-shadow:-1px -1px 0 #000000,1px -1px 0 #000000,-1px 1px 0 #000000,1px 1px 0 #000000,-2px 0 0 #000000,2px 0 0 #000000,0 2px 0 #000000,0 -2px 0 #000000">Librona</span>
                            <h2 style=" color:#74F57A; text-shadow:-1px -1px 0 #000000,1px -1px 0 #000000,-1px 1px 0 #000000,1px 1px 0 #000000,-2px 0 0 #000000,2px 0 0 #000000,0 2px 0 #000000,0 -2px 0 #000000">Trung Tâm<br>Quản Lý Thư Viện</h2>
                            <p style="color:#FFF; font-size:20px; text-shadow:-1px -1px 0 #000000,1px -1px 0 #000000,-1px 1px 0 #000000,1px 1px 0 #000000,-2px 0 0 #000000,2px 0 0 #000000,0 2px 0 #000000,0 -2px 0 #000000">Sách là kho tàn của tri thức</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->