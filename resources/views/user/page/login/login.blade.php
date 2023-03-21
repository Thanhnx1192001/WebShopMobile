@extends('user.index')

@section('header')
    <title>Đăng nhập</title>
@endsection

@section('meta')
    <meta name="theme-color" content="#fcde04">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Đăng nhập">
    <meta name="keywords" content="Đăng nhập">
    <meta property="og:url" content="https://mobileworld.com.vn/dang-nhap.html">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="Mobileworld">
    <meta property="og:title" content="Đăng nhập">
    <meta property="og:description" content="Đăng nhập">
    <meta property="og:locale" content="vi_VN">
    <meta property="og:image" content="https://mobileworld.com.vn/uploads/">
    <meta property="og:image:alt" content="Đăng nhập">
    <meta property="fb:app_id" content="440100557569103">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Đăng nhập">
    <meta name="twitter:description" content="Đăng nhập">
@endsection

@section('link')
<link href="https://mobileworld.com.vn/dang-nhap.html" rel="canonical">
    <link href="https://mobileworld.com.vn/dang-nhap.html" rel="alternate" media="handheld">
    <link href="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/css/member.css?v=230317" rel="stylesheet" type="text/css">
    <link href="https://mobileworld.com.vn/uploads/favicon.webp?v=230317" rel="icon" type="image/png">
    <link href="https://mobileworld.com.vn/uploads/favicon.webp?v=230317" rel="apple-touch-icon" type="image/png">
@endsection

@section('css')
    <link href="{{ asset('css/login/login.css') }}" rel="stylesheet" id="ws-global-css" type="text/css" />
@endsection


@section('content')
    <main id="ws-content" class="ws-content outer">
            <section class="breadcrumb">
                <div class="wrapper">
                    <ul class="items" itemtype="http://schema.org/BreadcrumbList" itemscope>
                        <li class="breadrumb-home breadrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <a href="https://mobileworld.com.vn" itemprop="item"><span itemprop="name">Trang chủ</span></a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li class="breadrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <span itemprop="name">Đăng nhập</span>
                            <meta itemprop="position" content="1">
                        </li>
                    </ul>
                </div>
            </section>
            <section class="box-title">
                <div class="wrapper">
                    <div class="post-title">
                        <h1>Đăng nhập</h1>
                    </div>
                </div>
            </section>
            <section class="box-content">
                <div class="wrapper">
                    <form action="https://mobileworld.com.vn/dang-nhap.html" id="login-form" method="post" accept-charset="utf-8"> <input type="hidden" name="action" value="member_login">
                        <div id="box-login" class="box box-info box-login">
                            <div class="content-left">
                                <div id="field-username" class="form-field field-username required">
                                    <div class="form-label"> <label for="username">Tên đăng nhập</label></div>
                                    <div class="form-input"> <input type="text" name="username" value="" required="1" autofocus="1" minlength="4" id="username" class="form-control"> </div>
                                </div>
                                <div id="field-password" class="form-field field-password required">
                                    <div class="form-label"> <label for="password">Mật khẩu</label></div>
                                    <div class="form-input"> <input type="password" name="password" value="" required="1" minlength="4" id="password" class="form-control"> </div>
                                </div>
                                <div id="field-remember" class="form-field field-remember rememberme">
                                    <div class="form-label"> <input type="checkbox" name="remember" value="1" id="remember"> <label for="remember">Ghi nhớ đăng nhập</label></div>
                                    <div class="form-input"> <a href="/quen-mat-khau.html" class="pull-right">Bạn quên mật khẩu?</a></div>
                                </div>
                                <div id="field-button" class="form-field field-button buttons"> <button type="submit">Đăng nhập</button> </div>
                                <div id="field-solcial" class="form-field field-solcial socials text-center hide">
                                    <div class="line"><span>Hoặc đăng nhập bằng</span></div>
                                    <div class="icon"><img src="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/images/fb-login.png" id="fb-login" class="icon" alt="Facebook Login">
                                        <div id="gg-login"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-right">
                                <div class="box-note">
                                    <div class="entry">
                                        <h3>Nếu bạn chưa là thành viên? Đăng ký ngay để:</h3>
                                        <ul>
                                            <li>Được hưởng đầy đủ các ưu đãi mua hàng</li>
                                            <li>Cập nhật thông tin sản phẩm mới, tin tức ngành, tin khuyến mại</li>
                                            <li>Cập nhật giá sản phẩm, báo giá hàng ngày</li>
                                            <li>Theo dõi quản lý đơn hàng, điểm thưởng mua hàng</li>
                                            <li>Ưu đã bảo hành, giảm giá mua hàng và phí dịch vụ</li>
                                        </ul>
                                    </div>
                                    <div class="btn-link"> <a href="/dang-ky.html">Đăng ký ngay</a></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </main>
@endsection

@section('js')
    <script id="ws-common-js" language="javascript" type="text/javascript" src="{{asset('js/login/login_1.js')}}"></script>
    <script id="ws-global-js" src="https://mobileworld.com.vn/storage/bundle/mobileworld.min.js?v=230317" language="javascript" type="text/javascript"></script>
    <script src="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/js/member.js?v=230317" language="javascript" type="text/javascript"></script>
@endsection