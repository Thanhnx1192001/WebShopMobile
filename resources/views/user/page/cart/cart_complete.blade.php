@extends('user.index')

@section('header')
    <title>Đặt hàng thành công</title>
@endsection

@section('meta')
    <meta name="theme-color" content="#fcde04">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Giỏ hàng">
    <meta name="keywords" content="Giỏ hàng">
    <meta property="og:url" content="https://mobileworld.com.vn/gio-hang.html">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="Mobileworld">
    <meta property="og:title" content="Giỏ hàng">
    <meta property="og:description" content="Giỏ hàng">
    <meta property="og:locale" content="vi_VN">
    <meta property="og:image" content="https://mobileworld.com.vn/uploads/">
    <meta property="og:image:alt" content="Hoàn thành">
    <meta property="fb:app_id" content="440100557569103">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Giỏ hàng">
    <meta name="twitter:description" content="Giỏ hàng">
@endsection

@section('link')
    <link href="https://mobileworld.com.vn/gio-hang.html" rel="canonical">
    <link href="https://mobileworld.com.vn/gio-hang.html" rel="alternate" media="handheld">
    <link id="ws-order-css" href="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/css/order.css?v=230317" rel="stylesheet" type="text/css">
    <link href="https://mobileworld.com.vn/uploads/favicon.webp?v=230317" rel="icon" type="image/png">
    <link href="https://mobileworld.com.vn/uploads/favicon.webp?v=230317" rel="apple-touch-icon" type="image/png">
@endsection

@section('css')
    <link href="{{ asset('css/cart/cart.css') }}" rel="stylesheet" id="ws-global-css" type="text/css" />
@endsection

@section('content')
        <main id="ws-content" class="ws-content outer">
            <section class="breadcrumb">
                <div class="wrapper">
                    <ul class="items" itemtype="http://schema.org/BreadcrumbList" itemscope>
                        <li class="breadrumb-home breadrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <a href="https://mobileworld.com.vn" itemprop="item"><span itemprop="name">Trang chủ</span></a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li class="breadrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <span itemprop="name">Hoàn thành</span>
                            <meta itemprop="position" content="1">
                        </li>
                    </ul>
                </div>
            </section>
            <section class="box-title">
                <div class="wrapper">
                    <div class="post-title">
                        <h1>Hoàn thành</h1>
                    </div>
                </div>
            </section>
            <section class="box-content">
                <div class="wrapper">
                    <div class="cart-finished">
                        <div class="sd-mess">
                            <div class="txtTitle">
                                <h2>Đặt hàng thành công !</h2>
                                <h3>Mã đơn hàng: <span class="madonhang">2686-20230322</span></h3>
                            </div>
                            <div class="txtContent">Cảm ơn bạn đã đặt hàng tại <span style="color:#e20212;"><strong>mobileworld.com.vn</strong></span>, chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất !</div>
                            <div class="btn-continue"> <a href="/san-pham.html">Tiếp tục mua hàng</a></div>
                        </div>
                        <div class="cart-detail">
                            <div class="box-table box-left">
                                <div class="box-head">Thông tin sản phẩm của bạn</div>
                                <div class="box-body">
                                    <ul class="items">
                                        <li>
                                            <div class="row-item">
                                                <div class="img"><a href="/iphone-14-pro-max-128gb-moi-fullbox.html?code=24" title="iPhone 14 Pro Max 128GB Mới Fullbox - Đen"><img src="https://mobileworld.com.vn/uploads/product/iPhone_14/thumbs/iphone-14-pro-max-spaceblack.webp" alt="iPhone 14 Pro Max 128GB Mới Fullbox - Đen"></a></div>
                                                <div class="txt"><a href="/iphone-14-pro-max-128gb-moi-fullbox.html?code=24">iPhone 14 Pro Max 128GB Mới Fullbox - Đen</a>
                                                    <div class="product-price">Giá sản phẩm: <b>25.990.000₫</b></div>
                                                    <div class="product-qty">Số lượng: 1</div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="box-total">
                                        <ul class="money">
                                            <li class="total-cart"> <span class="row0">Tổng giỏ hàng:</span> <strong class="row1">25.990.000₫</strong> </li>
                                            <li class="total-price"> <span class="row0">Tổng cộng:</span> <span class="row1">25.990.000₫</span> </li>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                            <div class="box-table box-right">
                                <div class="box-head">Thông tin đặt hàng của bạn</div>
                                <div class="box-body">
                                    <ul class="items">
                                        <li class="customer-dinfo">
                                            <h4>Thông tin thanh toán</h4>
                                            <div>Họ tên: duyet</div>
                                            <div>Điện thoại: 0858562309</div>
                                            <div>Email: xuanvb@gmail.com</div>
                                        </li>
                                        <li class="customer-cinfo">
                                            <h4>Thông tin giao hàng</h4>
                                            <div>Họ tên: duyet</div>
                                            <div>Điện thoại: 0858562309</div>
                                            <div>Email: xuanvb@gmail.com</div>
                                        </li>
                                        <li class="payment-info">
                                            <h4>Phương thức thanh toán</h4>
                                            <div>Thanh toán COD</div>
                                        </li>
                                        <li class="shipping-info">
                                            <h4>Phương thức giao hàng</h4>
                                            <div>Gửi bảo đảm qua bưu điện. Cước phí vận chuyển sẽ được thông báo trực tiếp đến khách hàng</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
@endsection

@section('js')
    <script id="ws-common-js" language="javascript" type="text/javascript" src="{{asset('js/cart/cart_complete.js')}}"></script>
    <script id="ws-global-js" src="https://mobileworld.com.vn/storage/bundle/mobileworld.min.js?v=230317" language="javascript" type="text/javascript"></script>
    <script src="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/js/member.js?v=230317" language="javascript" type="text/javascript"></script>
    <script id="ws-order-js" src="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/js/order.js?v=230317" language="javascript" type="text/javascript"></script>
@endsection