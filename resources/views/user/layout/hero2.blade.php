    <!-- Hero Section Begin -->
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
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
