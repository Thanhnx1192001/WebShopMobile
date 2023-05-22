<header id="ws-header" class="ws-header outer">
    <section class="header">
        <div class="wrapper">
            <div class="header-inner">
                <div id="site-logo" class="logo"><a href="{{route('home')}}" title="Mobileworld - Cửa Hàng Điện Thoại Lấy Uy Tín Là Sức Mạnh"><img src="https://mobileworld.com.vn/uploads/logo.webp" alt="Mobileworld - Cửa Hàng Điện Thoại Lấy Uy Tín Là Sức Mạnh" width="211" height="56"></a></div>
                <form action="{{route('products_search')}}" class="formsearch dropdown" method="post" accept-charset="utf-8">
                    @csrf
                    <div class="inner">
                        <input type="text" name="search_name" value="" id="search_name" class="text-search form-control" placeholder="Bạn cần tìm gì?">
                        <button type="submit" class="btn-search" aria-label="Bạn cần tìm gì?">
                            <i class="fa fa-search"></i></button>
                    </div>
                    <div id="results" class="results dropdown-menu" style="display: block;">
                        <div class="products">
                            <div id="list-product-search">
                            </div>
                        </div>
                    </div>
                </form>

                <ul class="header-icon">
                    <li class="hidden-sm hidden-xs"> <a href="tel:0961 273 979" class="icon-hotline"> <small>Gọi mua hàng</small> <b>xxxxxxx</b> </a> </li>


                    @guest
                    @if (Route::has('login'))
                    <li class="menu-member hidden-sm hidden-xs">
                        <a class="icon-user" class="nav-link" href="{{ route('login') }}">{{ __('Đăng nhập') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="menu-member hidden-sm hidden-xs"> <a href="{{ route('acc') }}" class="icon-user">Thành viên</a>
                        <div class="member-widget-wrap">
                            <ul class="member-widget">
                                <li class="avatar-thumb"> <span class="img"><img src="https://mobileworld.com.vn/uploads/noavatar.png" alt="{{ Auth::user()->name }}"></span> <span class="username">{{ Auth::user()->name }}</span> </li>
                                <li class="item"><a href="{{ route('acc') }}">Thông tin tài khoản</a></li>
                                <li class="item"><a href="{{ route('order_management') }}">Quản lý đơn hàng</a></li>
                                <li class="item"><a href="{{ route('change_password') }}">Đổi mật khẩu</a></li>
                                <li class="item ">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
                
                    @guest

                    @if (Route::has('login'))
                    <li class="menu-member hidden-sm hidden-xs">
                        <a class="icon-user" class="nav-link" href="{{ route('register') }}">{{ __('Đăng kí') }}</a>
                    </li>
                    @endif
                    
                    @endguest

                    <li class="hidden-md hidden-sm hidden-xs"> <a href="{{route('order_check')}}" class="icon-order">KT đơn hàng</a></li>
                    <li id="order-widget" class="mini-cart-box box-order-widget">
                        <a href="{{route('showCart')}}" class="icon-cart"> <span class="hidden-xs">Giỏ hàng</span>
                            @if(session()->has('Cart') != null)
                            <span id='total-quanty-show' class="total-items">{{session('Cart')->totalQuanty}}</span>
                            @else
                            <span id='total-quanty-show' class="total-items">0</span>
                            @endif
                        </a>
                        <div class="box-mini-cart hidden-xs">
                            <div class="box-mini-cart hidden-xs" id="change-item-cart">
                                @if(session()->has('Cart') != null)
                                <div class="mini-cart-list">
                                    <div class="inner">
                                        @foreach(session('Cart')->products as $item)
                                        <div class="mini-cart-item cart-item">
                                            <div class="inner">
                                                <div class="thumb"> <a href="{{route('product_detail',$item['productInfo']->id)}}" class="img-popup" rel="gallery" title=""><img src="{{asset($item['productInfo']->main_img)}}"></a></div>
                                                <div class="text"> <a href="{{route('product_detail',$item['productInfo']->id)}}">{{$item['productInfo']->title}}</a>
                                                    <div class="item-price"> {{number_format(($item['productInfo']->discount)*$item['quanty'],0,'.','.') }}₫</div>
                                                </div>
                                                <div class="delcart">
                                                    <div class="item-qty">x {{$item['quanty']}}</div> <a href="javascript:" data-id="{{$item['productInfo']->id}}" class="delete-item-cart">Xóa</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="mini-cart-total"> <span>Tổng cộng:</span> <span class="total">{{number_format(session('Cart')->totalPrice,0,'.','.') }}₫</span> <a href="/gio-hang.html" class="ws-btn">Thanh toán</a></div>
                                    <input hidden id="total-quanty-cart" type="number" value="{{session('Cart')->totalQuanty}}">
                                </div>
                                @else
                                <div class="mini-cart-list">
                                    <div class="mini-cart-empty"> Giỏ hàng của bạn đang rỗng<a href="{{route('showCart')}}">Mua ngay</a></div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</header>