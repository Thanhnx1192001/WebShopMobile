<header id="ws-header" class="ws-header outer">
            <section class="header">
                <div class="wrapper">
                    <div class="header-inner">
                        <div id="site-logo" class="logo"><a href="{{route('home')}}" title="Mobileworld - Cửa Hàng Điện Thoại Lấy Uy Tín Là Sức Mạnh"><img src="https://mobileworld.com.vn/uploads/logo.webp" alt="Mobileworld - Cửa Hàng Điện Thoại Lấy Uy Tín Là Sức Mạnh" width="211" height="56"></a></div>
                        <form action="https://mobileworld.com.vn/san-pham.html" name="formsearch" id="formsearch" class="formsearch dropdown" method="post" accept-charset="utf-8"> <input type="hidden" name="do_submit" value="1"> <input type="hidden" name="showposts" value="5"> <input type="hidden" name="post_type" value="product"> <input type="hidden" name="redirect" value="https://mobileworld.com.vn/san-pham.html"> <input type="hidden" name="action" value="product_suggest">
                            <div class="inner"><input type="text" name="keyword" value="" id="keyword" class="text-search form-control" placeholder="Bạn cần tìm gì?"> <button type="submit" class="btn-search" aria-label="Bạn cần tìm gì?"><i class="fa fa-search"></i></button> </div>
                            <div id="results" class="results dropdown-menu"></div>
                        </form>
                        <ul class="header-icon">
                            <li class="hidden-sm hidden-xs"> <a href="tel:0961 273 979" class="icon-hotline"> <small>Gọi mua hàng</small> <b>0961 273 979</b> </a> </li>
                            <!-- <li class="menu-member hidden-sm hidden-xs"> <a href="{{route('login')}}" class="icon-user">Đăng nhập</a></li> -->

                               
                            @guest
                            @if (Route::has('login'))
                                <li class="menu-member hidden-sm hidden-xs">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Đăng nhập') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="menu-member hidden-sm hidden-xs">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Đăng kí') }}</a>
                                </li>
                            @endif
                            @else
                                <li class="menu-member hidden-sm hidden-xs"> <a href="/tai-khoan.html" class="icon-user">Thành viên</a>
                                    <div class="member-widget-wrap">
                                        <ul class="member-widget">
                                            <li class="avatar-thumb"> <span class="img"><img src="https://mobileworld.com.vn/uploads/noavatar.png" alt="{{ Auth::user()->name }}"></span> <span class="username">{{ Auth::user()->name }}</span> </li>
                                            <li class="item"><a href="">Thông tin tài khoản</a></li>
                                            <li class="item"><a href="">Quản lý đơn hàng</a></li>
                                            <li class="item"><a href="">Đổi mật khẩu</a></li>
                                            <li class="item ">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Đăng xuất') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf 
                                                </form> 
                                            </li>
                                        </ul>
                                    </div>
                                </li> 
                            @endguest    

                            <li class="hidden-md hidden-sm hidden-xs"> <a href="{{route('order_check')}}" class="icon-order">KT đơn hàng</a></li>
                            <li id="order-widget" class="mini-cart-box box-order-widget"> <a href="{{route('cart')}}" class="icon-cart"> <span class="hidden-xs">Giỏ hàng</span> <span class="total-items">0</span> </a>
                                <div class="box-mini-cart hidden-xs">
                                    <div class="mini-cart-list">
                                        <div class="mini-cart-empty"> Giỏ hàng của bạn đang rỗng<a href="{{route('cart')}}">Mua ngay</a></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </header>