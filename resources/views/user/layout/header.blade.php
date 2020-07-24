	<!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li>Chào mừng đến với Librona</li>
                                <li>Thư viện với hàng ngàn cuốn sách thú vị</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="https://www.facebook.com/Yogarona-110133750721813/" title="Chúng tôi"><i class="fa fa-facebook"></i></a>
                            </div>
                            <div class="header__top__right__auth">
                                <a 
                                @if(!isset($thongtindangnhap))
                                    href="login"
                                @endif
                                ><i class="fa fa-user"></i>
                                    @if(isset($thongtindangnhap))
                                        {{$thongtindangnhap->HoTen}}
                                        <div><a href='logout'>Đăng xuất</a></div>
                                    @else
                                        Đăng nhập
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="././"><img src="user/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li @if($active == 'trangchu') class="active" @endif><a href="././">Trang chủ</a></li>
                            <li @if($active == 'thuvien') class="active" @endif ><a href="thuvien">Thư viện</a></li>
                            <li @if($active == 'contact') class="active" @endif><a href="contact">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        @if(isset($thongtindangnhap))
                        <div class="header__cart__price btn btn-outline-success"><a href="muonsach/{{$thongtindangnhap->id}}">Sách đang mượn</a></div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->