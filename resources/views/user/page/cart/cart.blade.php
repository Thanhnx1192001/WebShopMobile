@extends('user.index')

@section('header')
    <title>Giỏ hàng</title>
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
    <meta property="og:image:alt" content="Giỏ hàng">
    <meta property="fb:app_id" content="440100557569103">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Giỏ hàng">
    <meta name="twitter:description" content="Giỏ hàng">
@endsection

@section('link')
    <link href="https://mobileworld.com.vn/gio-hang.html" rel="canonical">
    <link href="https://mobileworld.com.vn/gio-hang.html" rel="alternate" media="handheld">
    <link id="ws-order-css" href="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/css/order.css?v=230314" rel="stylesheet" type="text/css">
    <link href="https://mobileworld.com.vn/uploads/favicon.webp?v=230314" rel="icon" type="image/png">
    <link href="https://mobileworld.com.vn/uploads/favicon.webp?v=230314" rel="apple-touch-icon" type="image/png">
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
                        <li class="breadrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <span itemprop="name">Giỏ hàng</span>
                            <meta itemprop="position" content="1">
                        </li>
                    </ul>
                </div>
            </section>
            <section class="box-title">
                <div class="wrapper">
                    <div class="post-title">
                        <h1>Giỏ hàng</h1>
                    </div>
                </div>
            </section>
            <section class="box-content">
                <div class="wrapper">
                    <form action="https://mobileworld.com.vn/gio-hang.html" id="cart-list" class="cart-inner step1" method="post" accept-charset="utf-8"> <input type="hidden" name="step" value="1">
                        <div class="box box-items">
                            <table class="table">
                                <thead>
                                    <th class="col col-name text-center">Sản phẩm</th>
                                    <th class="col col-price text-center hidden-xs">Giá sản phẩm</th>
                                    <th class="col col-quantity text-center hidden-xs">Số lượng</th>
                                    <th class="col col-subtotal text-center hidden-xs">Thành tiền</th>
                                </thead>
                                <tbody>
                                    <tr id="row-e7b24b112a44fdd9ee93bdf998c6ca0e" class="cart-item">
                                        <td class="col col-name text-center">
                                            <div class="info">
                                                <div class="img"> <a href="/iphone-14-pro-max-128gb-moi-fullbox.html"><img src="https://mobileworld.com.vn/uploads/product/iPhone_14/thumbs/iphone-14-pro-max-spaceblack.webp" width="80" height="80" class="img-cover" alt=""></a>
                                                    <div class="remove"> <button type="button" class="remove-item fa-trash-o"></button> </div>
                                                </div>
                                                <div class="txt"> <a href="">iPhone 14 Pro Max 128GB Mới Fullbox</a>
                                                    <div>Đen </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col col-price text-center hidden-xs"> <strong class="price">25.990.000₫</strong> </td>
                                        <td class="col col-quantity text-center hidden-xs">
                                            <div class="qty"> <button type="button" class="btn-press minus fa-minus"></button> <input type="text" name="quantity[e7b24b112a44fdd9ee93bdf998c6ca0e]" value="1" required="1" minlength="1" class="quantity" onkeypress="return core.isNum(event)"> <button type="button" class="btn-press plus fa-plus"></button> </div>
                                        </td>
                                        <td class="col col-subtotal text-center subtotal hidden-xs">25.990.000₫</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <td colspan="2" class="hidden-xs">
                                        <div class="note-cart"> <i class="fa fa-phone"></i> Thắc mắc vui lòng liên hệ: <a href="tel:0961273979" rel="nofoflow">0961 273 979</a></div>
                                    </td>
                                    <td class="text-center">Tổng cộng:</td>
                                    <td class="col col-subtotal text-center"> <strong id="pricecart" class="total-price">25.990.000₫</strong> </td>
                                </tfoot>
                            </table>
                        </div>
                        <div class="box box-info">
                            <div class="content-left">
                                <div id="box-customer" class="box-login">
                                    <div class="inner">
                                        <div id="field-username" class="form-field field-username required">
                                            <div class="form-label"> <label for="username">Tên đăng nhập</label></div>
                                            <div class="form-input"> <input type="text" value="" id="username" class="form-control"> </div>
                                        </div>
                                        <div id="field-password" class="form-field field-password required">
                                            <div class="form-label"> <label for="password">Mật khẩu</label></div>
                                            <div class="form-input"> <input type="password" value="" id="password" class="form-control"> </div>
                                        </div>
                                        <div id="field-remember" class="form-field field-remember remember">
                                            <div class="form-label"> <input type="checkbox" name="remember" value="1" id="remember"> <label for="remember">Ghi nhớ đăng nhập</label></div>
                                            <div class="form-input"> <a href="/quen-mat-khau.html" class="pull-right">Bạn quên mật khẩu?</a></div>
                                        </div>
                                        <div id="field-buttons" class="form-field field-buttons buttons"> <button type="button" class="button btn-login">Đăng nhập</button> </div>
                                        <div id="field-socials" class="form-field field-socials socials text-center">
                                            <div class="line"> <span>Hoặc đăng nhập bằng</span> </div>
                                            <div class="icon"><img src="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/images/fb-login.png" id="fb-login" class="icon" alt=""><img src="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/images/gg-login.png" id="gg-login" class="icon" alt=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-right">
                                <div id="box-customer" class="box-customer">
                                    <div class="divtitle">
                                        <h4>Khách hàng mới (Mua hàng không cần đăng ký)</h4>
                                        <p>Hãy nhập thông tin của bạn cho việc xác nhận hóa đơn và giao hàng</p>
                                    </div>
                                    <div class="inner">
                                        <div id="field-d_name" class="form-field required">
                                            <div class="form-label"> <label for="d_name">Họ tên</label></div>
                                            <div class="form-input"> <input type="text" name="d_name" value="" required="1" id="d_name" class="form-control"> </div>
                                        </div>
                                        <div id="field-d_phone" class="form-field required">
                                            <div class="form-label"> <label for="d_phone">Điện thoại</label></div>
                                            <div class="form-input"> <input type="text" name="d_phone" value="" required="1" id="d_phone" class="form-control"> </div>
                                        </div>
                                        <div id="field-d_email" class="form-field">
                                            <div class="form-label"> <label for="d_email">Email</label></div>
                                            <div class="form-input"> <input type="email" name="d_email" value="" id="d_email" class="form-control"> </div>
                                        </div>
                                        <div id="field-d_address" class="form-field">
                                            <div class="form-label"> <label for="d_address">Địa chỉ</label></div>
                                            <div class="form-input"> <input type="text" name="d_address" value="" id="d_address" class="form-control"> </div>
                                        </div>
                                        <div id="field-comment" class="form-field last">
                                            <div class="form-label"> <label for="comment">Ghi chú</label></div>
                                            <div class="form-input"> <textarea name="comment" cols="40" rows="4" id="comment" value="" class="form-control"></textarea> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-button text-center"> <button name="do_submit" type="submit" value="1" class="btnCheckout">Tiếp tục thanh toán</button> </div>
                    </form>
                </div>
            </section>
        </main>
@endsection

@section('js')
    <script id="ws-common-js" language="javascript" type="text/javascript" src="{{asset('js/cart/cart_1.js')}}"></script>
    <script src="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/js/member.js?v=230314" language="javascript" type="text/javascript"></script>
    <script id="ws-order-js" src="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/js/order.js?v=230314" language="javascript" type="text/javascript"></script>
@endsection