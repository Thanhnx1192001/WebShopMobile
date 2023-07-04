@extends('user.index')

@section('header')
    <title>Chi tiết bài viết</title>
@endsection

@section('meta')
    <meta name="robots" content="index,follow"> <!-- Google Tag Manager -->
    <meta name="theme-color" content="#fcde04">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nếu bạn đang mong chờ từng ngày Google cho ra mắt dòng Pixel 7a - một giải pháp thay thế cho dòng Pixel 7, thì rất có thể bạn sẽ sớm nhận được đền đáp xứng đáng sau nhiều ngày chờ đợi.Google chưa xác nhận1">
    <meta name="keywords" content="Pixel 7a: Cấu hình, Thiết kế & Giá - Những gì bạn cần biết">
    <meta property="og:url" content="https://mobileworld.com.vn/pixel-7a-cau-hinh-thiet-ke-gia-nhung-gi-ban-can-biet.html">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="Mobileworld">
    <meta property="og:title" content="Pixel 7a: Cấu hình, Thiết kế & Giá - Những gì bạn cần biết">
    <meta property="og:description" content="Nếu bạn đang mong chờ từng ngày Google cho ra mắt dòng Pixel 7a - một giải pháp thay thế cho dòng Pixel 7, thì rất có thể bạn sẽ sớm nhận được đền đáp xứng đáng sau nhiều ngày chờ đợi.Google chưa xác nhận1">
    <meta property="og:locale" content="vi_VN">
    <meta property="og:image" content="https://mobileworld.com.vn/uploads/news/05_2023/maxresdefault%20(5).jpg">
    <meta property="og:image:alt" content="Pixel 7a: Cấu hình, Thiết kế & Giá - Những gì bạn cần biết">
    <meta property="fb:app_id" content="440100557569103">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Pixel 7a: Cấu hình, Thiết kế & Giá - Những gì bạn cần biết">
    <meta name="twitter:description" content="Nếu bạn đang mong chờ từng ngày Google cho ra mắt dòng Pixel 7a - một giải pháp thay thế cho dòng Pixel 7, thì rất có thể bạn sẽ sớm nhận được đền đáp xứng đáng sau nhiều ngày chờ đợi.Google chưa xác nhận1">
@endsection

@section('link')
<link id="ws-comment-css" href="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/js/comment/comment.css?v=230508" rel="stylesheet" type="text/css">
    <link id="ws-news-css" href="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/css/news.css?v=230508" rel="stylesheet" type="text/css">
    <link href="https://mobileworld.com.vn/uploads/favicon.webp?v=230508" rel="icon" type="image/png">
    <link href="https://mobileworld.com.vn/uploads/favicon.webp?v=230508" rel="apple-touch-icon" type="image/png">
@endsection

@section('css')
<link href="{{ asset('css/blog/blog.css') }}" rel="stylesheet" id="ws-global-css" type="text/css" />
@endsection

@section('content')
<main id="ws-content" class="ws-content outer">
        <section class="breadcrumb">
            <div class="wrapper">
                <ul class="items" itemtype="http://schema.org/BreadcrumbList" itemscope>
                    <li class="breadrumb-home breadrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <a href="/home" itemprop="item"><span itemprop="name">Trang chủ</span></a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li class="breadrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <a href="/blog" itemprop="item"><span itemprop="name">Blog</span></a>
                        <meta itemprop="position" content="2">
                    </li>
                    <li class="breadrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <span itemprop="name">{{($blog->title)}}</span>
                        <meta itemprop="position" content="3">
                    </li>
                </ul>
            </div>
        </section>
        <section class="box-title">
            <div class="wrapper">
                <div class="post-title">
                    <h1>{{$blog->title}}</h1>
                </div>
            </div>
        </section>
        <section class="box-content">
            <div class="wrapper">
                <div class="row">
                    <div class="col-md-8 col-xs-12">
                        <ul class="post-meta">
                            <li class="post-meta-author"> {{$user->name}}</a> </li>
                            <li class="post-meta-date hidden-xs">{{ \Carbon\Carbon::parse($blog->created_at)->format('d/m/Y') }}</li>
                        </ul>
                        <div class="post-entry">
                            <div class="entry">
                                <p dir="ltr" style="text-align: center;"><img alt="" src="{{asset($blog->img_url)}}" style="width: 800px; height: 450px;"></p>
                                <p dir="ltr">{{$blog->content}}</p>

                                <p dir="ltr"><strong>Hệ thống cửa hàng MobileWorld:</strong></p>
                                <p dir="ltr"><strong>Trụ Sở: </strong></p>
                                <ul>
                                    <li aria-level="1" dir="ltr">
                                        <p dir="ltr" role="presentation">692 Lê Hồng Phong, Phường 10, Quận 10, TP. HCM</p>
                                    </li>
                                    <li aria-level="1" dir="ltr">
                                        <p dir="ltr" role="presentation">Hotline: 0961.273.979</p>
                                    </li>
                                    <li aria-level="1" dir="ltr">
                                        <p dir="ltr" role="presentation">support@mobileworld.com.vn</p>
                                    </li>
                                </ul>
                                <p dir="ltr"><strong>Chi Nhánh Thủ Đức: </strong></p>
                                <ul>
                                    <li aria-level="1" dir="ltr">
                                        <p dir="ltr" role="presentation">318 Võ Văn Ngân, phường Bình Thọ, TP. Thủ Đức </p>
                                    </li>
                                    <li aria-level="1" dir="ltr">
                                        <p dir="ltr" role="presentation">Hotline: 0909538468</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="post-shared">
                                <ul class="fb-shared">
                                    <li class="wrap-fb-like">
                                        <div class="fb-like" data-href="https://mobileworld.com.vn/pixel-7a-cau-hinh-thiet-ke-gia-nhung-gi-ban-can-biet.html" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
                                    </li>
                                    <li class="wrap-fb-share last">
                                        <div class="fb-share-button" data-href="https://mobileworld.com.vn/pixel-7a-cau-hinh-thiet-ke-gia-nhung-gi-ban-can-biet.html" data-layout="button_count" data-size="small" data-mobile-iframe="true"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-xs">
                        <div id="box-popular" class="widget">
                            <div class="widget-title"> Bài viết đáng chú ý</div>
                            <div class="widget-content">
                                <ul class=items>
                                    @foreach($blogs as $row)
                                    <li><a href="{{ route('blog_detail',$row->id)}}">{{$row->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section id="box-product_focus" class="box-product_focus box-table">
                <div class="wrapper">
                    <div class="box-inner">
                        <div class="box-head">
                            <div class="ws-name">Có thể bạn sẽ thích</div>
                        </div>
                        <div class="box-body">
                            <div class="products">
                                @for($i = 0; $i < count($feed_back_products) ; $i++)
                                    @if( ($feed_back_products[$i]->count > config('constants.COUNT_FEED_BACK')) AND ($feed_back_products[$i]->star > config('constants.COUNT_STAR')))
                                    @php
                                    $featured_products = null;
                                    foreach($products as $product){
                                        if ($feed_back_products[$i]->id == $product->id){
                                            $featured_products = $product;
                                        } 
                                    }
                                    @endphp
                                    <div class="product" data-product_id="322">
                                        <div class="img img-center"> 
                                            <a href="{{ route('product_detail',$featured_products->id)}}" title="">
                                                <img alt="" title="" width="220" height="220" class="lazyload" src="{{asset($featured_products->main_img)}}">
                                            </a>
                                        </div>
                                        <div class="txt">
                                            <h2 class=pname>
                                                <a href="{{ route('product_detail',$featured_products->id)}}">{{$featured_products->title}} {{$featured_products->memory}}</a>
                                            </h2>
                                            <ul class="price-text price-html" data-stock="1">
                                                <li class="price">{{number_format($featured_products->discount,0,'.','.') }}₫</li>
                                            </ul>
                                            <div class="star-wrap"><b>{{round($feed_back_products[$i]->star,1)}}</b>/5 <i class="fa fa-star"></i>
                                                <div class="numvote">{{$feed_back_products[$i]->count}} đánh giá</div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>
@endsection

@section('js')
<script async src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"></script>
    <div id="fb-root"></div>
    <script id="ws-facebook-js" language="javascript" type="text/javascript">
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                cookie: true,
                appId: "440100557569103",
                version: "v14.0"
            });
        };
        var fbAppId = "440100557569103",
            fbAppVer = "v14.0",
            fbAppLang = "vi_VN";
    </script>
    <script id="ws-common-js" language="javascript" type="text/javascript">
        var lang = 'vi',
            pagenow = 'post',
            typenow = 'index',
            seourl = 'https://mobileworld.com.vn/pixel-7a-cau-hinh-thiet-ke-gia-nhung-gi-ban-can-biet.html',
            rooturl = 'https://mobileworld.com.vn/',
            ajaxurl = 'https://mobileworld.com.vn/ajax',
            popup = 0,
            jslang = {
                "pagination_first_link": "&lsaquo; First",
                "pagination_next_link": "&gt;",
                "pagination_prev_link": "&lt;",
                "pagination_last_link": "Last &rsaquo;",
                "sitename": "Mobileworld",
                "home": "Trang ch\u1ee7",
                "anounce": "Th\u00f4ng b\u00e1o",
                "error": "B\u00e1o l\u1ed7i!",
                "hotline": "Hotline",
                "sunday": "Ch\u1ee7 nh\u1eadt",
                "monday": "Th\u1ee9 hai",
                "tuesday": "Th\u1ee9 ba",
                "wednesday": "Th\u1ee9 t\u01b0",
                "thursday": "Th\u1ee9 n\u0103m",
                "friday": "Th\u1ee9 s\u00e1u",
                "saturday": "Th\u1ee9 b\u1ea3y",
                "search": "T\u00ecm ki\u1ebfm",
                "search_all": "Hi\u1ec3n th\u1ecb k\u1ebft qu\u1ea3 cho %s",
                "search_text": "B\u1ea1n c\u1ea7n t\u00ecm g\u00ec?",
                "no_price": "Li\u00ean h\u1ec7",
                "viewall": "Xem t\u1ea5t c\u1ea3",
                "close": "\u0110\u00f3ng",
                "order_check": "KT \u0111\u01a1n h\u00e0ng",
                "buynow_call": "G\u1ecdi mua h\u00e0ng",
                "footer_contact_label": "Li\u00ean h\u1ec7 v\u1edbi ch\u00fang t\u00f4i",
                "footer_social_label": "K\u1ebft n\u1ed1i v\u1edbi ch\u00fang t\u00f4i",
                "footer_open_label": "Th\u1eddi gian l\u00e0m vi\u1ec7c: 09h00 - 21h00",
                "footer_payment_label": "H\u00ecnh th\u1ee9c thanh to\u00e1n",
                "product": "S\u1ea3n ph\u1ea9m",
                "product_tag": "T\u1eeb kh\u00f3a",
                "product_cat": "Danh m\u1ee5c",
                "product_brand": "Th\u01b0\u01a1ng hi\u1ec7u",
                "product_status": "Tr\u1ea1ng th\u00e1i",
                "product_count": "%s s\u1ea3n ph\u1ea9m",
                "product_maso": "M\u00e3 s\u1ea3n ph\u1ea9m",
                "product_price": "Gi\u00e1 b\u00e1n",
                "product_quantity": "S\u1ed1 l\u01b0\u1ee3ng",
                "product_flashsale": "Flash sale",
                "product_new": "S\u1ea3n ph\u1ea9m m\u1edbi",
                "product_focus": "S\u1ea3n ph\u1ea9m n\u1ed5i b\u1eadt",
                "product_btn_buynow": "Mua ngay",
                "product_btn_buynow_note": "Giao t\u1eadn nh\u00e0 (COD) ho\u1eb7c Nh\u1eadn t\u1ea1i c\u1eeda h\u00e0ng",
                "product_btn_tragop": "Mua tr\u1ea3 g\u00f3p",
                "product_btn_tragop_note": "C.Ty T\u00e0i ch\u00ednh, Th\u1ebb t\u00edn d\u1ee5ng",
                "product_btn_contact": "Li\u00ean h\u1ec7",
                "product_btn_contact_note": "Hotline: 0961 273 979",
                "product_num_votes": "%s \u0111\u00e1nh gi\u00e1",
                "product_review_title": "\u0110\u00e1nh gi\u00e1 %s",
                "product_review_button": "\u0110\u00e1nh gi\u00e1 s\u1ea3n ph\u1ea9m",
                "product_num_views": "%s l\u01b0\u1ee3t xem",
                "product_vat": "\u0110\u00e3 bao g\u1ed3m VAT",
                "product_stock_1": "Li\u00ean h\u1ec7",
                "product_stock_2": "H\u1ebft h\u00e0ng",
                "product_stock_3": "T\u1ea1m h\u1ebft h\u00e0ng",
                "product_stock_4": "Li\u00ean h\u1ec7",
                "product_btn_cart": "Th\u00eam v\u00e0o gi\u1ecf h\u00e0ng",
                "product_faqs": "C\u00e2u h\u1ecfi th\u01b0\u1eddng g\u1eb7p",
                "product_faqs_label": "H\u1ecfi v\u00e0 \u0111\u00e1p",
                "product_bestseller": "Phi\u00ean b\u1ea3n %s Gi\u00e1 r\u1ebb nh\u1ea5t",
                "product_short": "Th\u00f4ng tin s\u1ea3n ph\u1ea9m",
                "product_description": "M\u00f4 t\u1ea3 s\u1ea3n ph\u1ea9m",
                "product_address": "Xem c\u1eeda h\u00e0ng g\u1ea7n b\u1ea1n",
                "product_digital": "Th\u00f4ng s\u1ed1 k\u1ef9 thu\u1eadt",
                "product_digitals": "Th\u00f4ng s\u1ed1 k\u1ef9 thu\u1eadt %s",
                "product_cheapest_price": "Gi\u00e1 r\u1ebb nh\u1ea5t",
                "product_attrs": "C\u1ea5u h\u00ecnh chi ti\u1ebft",
                "product_promotion": "Khuy\u1ebfn m\u00e3i",
                "product_review": "B\u00ecnh lu\u1eadn v\u1ec1 %s",
                "product_viewed": "G\u1ee3i \u00fd d\u00e0nh cho b\u1ea1n",
                "product_viewall": "Xem t\u1ea5t c\u1ea3 %s %s",
                "product_viewmore": "Xem th\u00eam %s %s",
                "product_compare": "So s\u00e1nh s\u1ea3n ph\u1ea9m t\u01b0\u01a1ng t\u1ef1",
                "product_compare_input": "Nh\u1eadp t\u00ean s\u1ea3n ph\u1ea9m c\u1ea7n so s\u00e1nh",
                "product_btn_show": "Xem th\u00eam",
                "product_btn_hide": "Thu g\u1ecdn",
                "product_discount": "Gi\u1ea3m %u",
                "flashsale_end": "K\u1ebft th\u00fac sau",
                "flashsale_sold": "B\u00e1n %u \/ %u",
                "flashsale_day": "ng\u00e0y",
                "flashsale_hour": "gi\u1edd",
                "flashsale_minute": "ph\u00fat",
                "flashsale_second": "gi\u00e2y",
                "filter_label": "L\u1ecdc danh s\u00e1ch",
                "filter_prices": "M\u1ee9c gi\u00e1",
                "filter_prices_min": "D\u01b0\u1edbi %u tri\u1ec7u",
                "filter_prices_range": "T\u1eeb %u - %u tri\u1ec7u",
                "filter_prices_max": "Tr\u00ean %u tri\u1ec7u",
                "filter_options": "Lo\u1ea1i s\u1ea3n ph\u1ea9m",
                "filter_sort": "X\u1ebfp theo",
                "filter_sort_default": "M\u1edbi nh\u1ea5t",
                "filter_sort_focus": "N\u1ed5i b\u1eadt",
                "filter_sort_price_asc": "Gi\u00e1 th\u1ea5p \u0111\u1ebfn cao",
                "filter_sort_price_desc": "Gi\u00e1 cao \u0111\u1ebfn th\u1ea5p",
                "noitem": "Kh\u00f4ng c\u00f3 b\u00e0i vi\u1ebft n\u00e0o.",
                "member": "Th\u00e0nh vi\u00ean",
                "member_logout": "Tho\u00e1t",
                "member_login": "\u0110\u0103ng nh\u1eadp",
                "member_username": "T\u00ean \u0111\u0103ng nh\u1eadp",
                "member_remember": "Ghi nh\u1edb \u0111\u0103ng nh\u1eadp",
                "member_lostpass": "B\u1ea1n qu\u00ean m\u1eadt kh\u1ea9u?",
                "member_login_or": "Ho\u1eb7c \u0111\u0103ng nh\u1eadp b\u1eb1ng",
                "member_register": "\u0110\u0103ng k\u00fd",
                "member_register_now": "\u0110\u0103ng k\u00fd ngay",
                "member_password": "M\u1eadt kh\u1ea9u",
                "member_password_re": "Nh\u1eadp l\u1ea1i m\u1eadt kh\u1ea9u",
                "member_password_old": "M\u1eadt kh\u1ea9u hi\u1ec7n t\u1ea1i",
                "member_password_new": "Nh\u1eadp m\u1eadt kh\u1ea9u m\u1edbi",
                "member_email": "Email",
                "member_phone": "\u0110i\u1ec7n tho\u1ea1i",
                "member_display_name": "H\u1ecd t\u00ean",
                "member_gender": "Gi\u1edbi t\u00ednh",
                "member_gender_male": "Nam",
                "member_gender_female": "N\u1eef",
                "member_birthday": "Ng\u00e0y sinh",
                "member_company": "T\u00ean c\u00f4ng ty",
                "member_address": "\u0110\u1ecba ch\u1ec9",
                "member_agree": "T\u00f4i \u0111\u00e3 \u0111\u1ecdc v\u00e0 \u0111\u1ed3ng \u00fd v\u1edbi n\u1ed9i quy, ch\u00ednh s\u00e1ch b\u1ea3o m\u1eadt c\u1ee7a c\u00f4ng ty.",
                "member_account": "Th\u00f4ng tin t\u00e0i kho\u1ea3n",
                "member_changepass": "\u0110\u1ed5i m\u1eadt kh\u1ea9u",
                "member_order": "Qu\u1ea3n l\u00fd \u0111\u01a1n h\u00e0ng",
                "member_avatar_upload": "T\u1ea3i \u1ea3nh l\u00ean",
                "member_btn_reset": "Nh\u1eadp l\u1ea1i",
                "member_btn_save": "L\u01b0u thay \u0111\u1ed5i",
                "cart": "Gi\u1ecf h\u00e0ng",
                "cart_product_title": "S\u1ea3n ph\u1ea9m",
                "cart_product_price": "Gi\u00e1 s\u1ea3n ph\u1ea9m",
                "cart_product_quantity": "S\u1ed1 l\u01b0\u1ee3ng",
                "cart_product_subtotal": "Th\u00e0nh ti\u1ec1n",
                "cart_total_price": "T\u1ed5ng c\u1ed9ng",
                "cart_customer_info": "Kh\u00e1ch h\u00e0ng m\u1edbi (Mua h\u00e0ng kh\u00f4ng c\u1ea7n \u0111\u0103ng k\u00fd)",
                "cart_customer_info_note": "H\u00e3y nh\u1eadp th\u00f4ng tin c\u1ee7a b\u1ea1n cho vi\u1ec7c x\u00e1c nh\u1eadn h\u00f3a \u0111\u01a1n v\u00e0 giao h\u00e0ng",
                "cart_customer_name": "H\u1ecd t\u00ean",
                "cart_customer_phone": "\u0110i\u1ec7n tho\u1ea1i",
                "cart_customer_address": "\u0110\u1ecba ch\u1ec9",
                "cart_customer_email": "Email",
                "cart_customer_comment": "Ghi ch\u00fa",
                "cart_checkout": "Ho\u00e0n th\u00e0nh",
                "cart_total": "T\u1ed5ng gi\u1ecf h\u00e0ng",
                "cart_note": "Th\u1eafc m\u1eafc vui l\u00f2ng li\u00ean h\u1ec7: %s",
                "cart_order_subject_email": "\u0110\u01a1n \u0111\u1eb7t h\u00e0ng t\u1ea1i: %s",
                "cart_empty": "Gi\u1ecf h\u00e0ng c\u1ee7a b\u1ea1n \u0111ang r\u1ed7ng",
                "order_code": "M\u00e3 \u0111\u01a1n h\u00e0ng",
                "order_date": "Ng\u00e0y \u0111\u1eb7t",
                "order_date_ship": "Ng\u00e0y giao",
                "order_product": "S\u1ea3n ph\u1ea9m",
                "order_price": "T\u1ed5ng ti\u1ec1n",
                "order_status": "Tr\u1ea1ng th\u00e1i",
                "order_empty": "Ch\u01b0a c\u00f3 \u0111\u01a1n h\u00e0ng n\u00e0o",
                "order_cancel": "H\u1ee7y \u0111\u01a1n h\u00e0ng: \"%s\"",
                "buynow": "Mua ngay",
                "continue_shopping": "Ti\u1ebfp t\u1ee5c mua h\u00e0ng",
                "continue_checkout": "Ti\u1ebfp t\u1ee5c thanh to\u00e1n",
                "cart_customer_payment": "Th\u00f4ng tin thanh to\u00e1n",
                "cart_customer_shipping": "Th\u00f4ng tin giao h\u00e0ng",
                "cart_customer_issame": "Th\u00f4ng tin giao h\u00e0ng gi\u1ed1ng th\u00f4ng tin thanh to\u00e1n",
                "cart_shipping_method": "Ph\u01b0\u01a1ng th\u1ee9c giao h\u00e0ng",
                "cart_payment_method": "Ph\u01b0\u01a1ng th\u1ee9c thanh to\u00e1n",
                "cart_other_info": "Th\u00f4ng tin kh\u00e1c",
                "cart_invoice": "Xu\u1ea5t h\u00f3a \u0111\u01a1n GTGT",
                "cart_invoice_note": "* L\u01b0u \u00fd: C\u00f4ng ty kh\u00f4ng gi\u1ea3i quy\u1ebft xu\u1ea5t l\u1ea1i ho\u00e1 \u0111\u01a1n cho c\u00e1c tr\u01b0\u1eddng h\u1ee3p Qu\u00fd kh\u00e1ch kh\u00f4ng \u0111\u0103ng k\u00fd th\u00f4ng tin.",
                "cart_invoice_name": "Nh\u1eadp h\u1ecd t\u00ean ng\u01b0\u1eddi mua h\u00e0ng",
                "cart_invoice_company": "Nh\u1eadp t\u00ean c\u00f4ng ty",
                "cart_invoice_address": "Nh\u1eadp \u0111\u1ecba ch\u1ec9 c\u00f4ng ty",
                "cart_invoice_masothue": "Nh\u1eadp m\u00e3 s\u1ed1 thu\u1ebf",
                "cart_invoice_email": "Nh\u1eadp email nh\u1eadn h\u00f3a \u0111\u01a1n",
                "cart_order_info": "Th\u00f4ng tin \u0111\u1eb7t h\u00e0ng c\u1ee7a b\u1ea1n",
                "cart_product_info": "Th\u00f4ng tin s\u1ea3n ph\u1ea9m c\u1ee7a b\u1ea1n",
                "news": "Blog",
                "news_tag": "Tags",
                "views": "%s l\u01b0\u1ee3t xem",
                "news_views": "B\u00e0i vi\u1ebft \u0111\u00e1ng ch\u00fa \u00fd",
                "news_related": "B\u00e0i vi\u1ebft li\u00ean quan",
                "product_favorite": "C\u00f3 th\u1ec3 b\u1ea1n s\u1ebd th\u00edch",
                "comment": "B\u00ecnh lu\u1eadn",
                "comment_guest": "Kh\u00e1ch v\u00e3ng lai",
                "comment_url": "X\u1ebfp h\u1ea1ng URL: %s",
                "comment_numvotes": "T\u1ed5ng: %s",
                "comment_avgvotes": "Trung b\u00ecnh: %s",
                "comment_save_comment": "C\u1ea3m \u01a1n qu\u00fd kh\u00e1ch \u0111\u00e3 g\u1eedi c\u00e2u h\u1ecfi v\u1ec1 s\u1ea3n ph\u1ea9m n\u00e0y.",
                "comment_save_reviews": "C\u1ea3m \u01a1n qu\u00fd kh\u00e1ch \u0111\u00e3 g\u1eedi \u0111\u00e1nh gi\u00e1 s\u1ea3n ph\u1ea9m n\u00e0y.",
                "comment_qtv": "Qu\u1ea3n tr\u1ecb vi\u00ean",
                "comment_totals": "%s b\u00ecnh lu\u1eadn",
                "comment_totals_reviews": "%s \u0111\u00e1nh gi\u00e1",
                "comment_search": "T\u00ecm b\u00ecnh lu\u1eadn...",
                "comment_satisfied": "H\u00e0i l\u00f2ng",
                "comment_unsatisfied": "Kh\u00f4ng h\u00e0i l\u00f2ng",
                "comment_like": "Th\u00edch",
                "comment_unlike": "Kh\u00f4ng th\u00edch",
                "comment_reply": "Tr\u1ea3 l\u1eddi",
                "comment_text_place": "Nh\u1eadp n\u1ed9i dung b\u00ecnh lu\u1eadn",
                "comment_gender_male": "Anh",
                "comment_gender_female": "Ch\u1ecb",
                "comment_name": "H\u1ecd t\u00ean",
                "comment_phone": "\u0110i\u1ec7n tho\u1ea1i",
                "comment_email": "Email",
                "comment_button_send": "G\u1eedi b\u00ecnh lu\u1eadn",
                "comment_vote_title": "\u0110i\u1ec3m \u0111\u00e1nh gi\u00e1 c\u1ee7a b\u1ea1n v\u1ec1 s\u1ea3n ph\u1ea9m n\u00e0y:",
                "comment_vote_label_1": "R\u1ea5t t\u1ec7",
                "comment_vote_label_2": "T\u1ec7",
                "comment_vote_label_3": "B\u00ecnh th\u01b0\u1eddng",
                "comment_vote_label_4": "T\u1ed1t",
                "comment_vote_label_5": "R\u1ea5t t\u1ed1t",
                "comment_unsatisfied_send": "G\u1eedi",
                "comment_unsatisfied_note": "%s r\u1ea5t ti\u1ebfc \u0111\u00e3 l\u00e0m b\u1ea1n ch\u01b0a h\u00e0i l\u00f2ng. M\u1eddi b\u1ea1n g\u00f3p \u00fd \u0111\u1ec3 %s ph\u1ee5c v\u1ee5 t\u1ed1t h\u01a1n:",
                "comment_unsatisfied_place": "Nh\u1eadp n\u1ed9i dung g\u00f3p \u00fd",
                "comment_unsatisfied_text": "H\u00e3y \u0111\u1ec3 l\u1ea1i th\u00f4ng tin \u0111\u1ec3 \u0111\u01b0\u1ee3c h\u1ed7 tr\u1ee3 khi c\u1ea7n thi\u1ebft (kh\u00f4ng b\u1eaft bu\u1ed9c):",
                "comment_add_success": "G\u1eedi y\u00eau c\u1ea7u \u0111\u00e1nh gi\u00e1 th\u00e0nh c\u00f4ng.",
                "comment_satisfied_success": "C\u1ea3m \u01a1n b\u1ea1n \u0111\u00e3 g\u00f3p \u00fd cho QTV"
            };
    </script>
    <script id="ws-global-js" src="https://mobileworld.com.vn/storage/bundle/mobileworld.min.js?v=230508" language="javascript" type="text/javascript"></script>
    <script id="ws-comment-js" src="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/js/comment/comment.js?v=230508" language="javascript" type="text/javascript"></script>
    <script id="ws-comment-ext-js" language="javascript" type="text/javascript">
        var is_vote = 0;
        elCMT = ".extCMT";
        post_id = 1315;
        post_slug = "pixel-7a-cau-hinh-thiet-ke-gia-nhung-gi-ban-can-biet";
        post_type = "news"
    </script>
    <script id="ws-news-js" src="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/js/news.js?v=230508" language="javascript" type="text/javascript"></script>
    <script id="ws-news-json" type="application/ld+json">
        {
            "@context": "https:\/\/schema.org",
            "@type": "NewsArticle",
            "articleBody": "Pixel 7a: C\u1ea5u h\u00ecnh, Thi\u1ebft k\u1ebf & Gi\u00e1 - Nh\u1eefng g\u00ec b\u1ea1n c\u1ea7n bi\u1ebft",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "https:\/\/mobileworld.com.vn\/pixel-7a-cau-hinh-thiet-ke-gia-nhung-gi-ban-can-biet.html"
            },
            "headline": "Pixel 7a: C\u1ea5u h\u00ecnh, Thi\u1ebft k\u1ebf & Gi\u00e1 - Nh\u1eefng g\u00ec b\u1ea1n c\u1ea7n bi\u1ebft",
            "description": "Pixel 7a: C\u1ea5u h\u00ecnh, Thi\u1ebft k\u1ebf & Gi\u00e1 - Nh\u1eefng g\u00ec b\u1ea1n c\u1ea7n bi\u1ebft",
            "image": ["https:\/\/mobileworld.com.vn\/uploads\/news\/05_2023\/maxresdefault%20(5).jpg"],
            "dateCreated": "2023-05-06:08:46:06",
            "datePublished": "2023-05-06:08:30:00",
            "dateModified": "2023-05-06:08:46:06",
            "author": {
                "@type": "Person",
                "name": "Mobileworld",
                "url": "https:\/\/mobileworld.com.vn\/pixel-7a-cau-hinh-thiet-ke-gia-nhung-gi-ban-can-biet.html"
            },
            "publisher": {
                "@type": "Organization",
                "name": "Mobileworld",
                "logo": {
                    "@type": "ImageObject",
                    "url": "https:\/\/mobileworld.com.vn\/uploads\/logo.webp"
                }
            }
        }
    </script>
@endsection