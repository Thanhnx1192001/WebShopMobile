@extends('user.index')

@section('header')
<title>Quản lý đơn hàng</title>
@endsection

@section('meta')
<meta name="robots" content="noindex,nofollow"> <!-- Google Tag Manager -->
<meta name="theme-color" content="#fcde04">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Quản lý đơn hàng">
<meta name="keywords" content="Quản lý đơn hàng">
<meta property="og:url" content="https://mobileworld.com.vn/quan-ly-don-hang.html">
<meta property="og:type" content="article">
<meta property="og:site_name" content="Mobileworld">
<meta property="og:title" content="Quản lý đơn hàng">
<meta property="og:description" content="Quản lý đơn hàng">
<meta property="og:locale" content="vi_VN">
<meta property="og:image" content="https://mobileworld.com.vn/uploads/">
<meta property="og:image:alt" content="Quản lý đơn hàng">
<meta property="fb:app_id" content="440100557569103">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Quản lý đơn hàng">
<meta name="twitter:description" content="Quản lý đơn hàng">
@endsection

@section('link')
<link href="https://mobileworld.com.vn/quan-ly-don-hang.html" rel="canonical">
<link href="https://mobileworld.com.vn/quan-ly-don-hang.html" rel="alternate" media="handheld">
<link href="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/css/member.css?v=230508" rel="stylesheet" type="text/css">
<link href="https://mobileworld.com.vn/uploads/favicon.webp?v=230508" rel="icon" type="image/png">
<link href="https://mobileworld.com.vn/uploads/favicon.webp?v=230508" rel="apple-touch-icon" type="image/png">
@endsection

@section('css')
<link href="{{ asset('css/account/order_management.css') }}" rel="stylesheet" id="ws-global-css" type="text/css" />
@endsection


@section('content')
<main id="ws-content" class="ws-content outer">
    <section class="breadcrumb">
        <div class="wrapper">
            <ul class="items" itemtype="http://schema.org/BreadcrumbList" itemscope>
                <li class="breadrumb-home breadrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <a href="https://mobileworld.com.vn" itemprop="item"><span itemprop="name">Trang chủ</span></a>
                    <meta itemprop="position" content="1">
                </li>
                <li class="breadrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <span itemprop="name">Quản lý đơn hàng</span>
                    <meta itemprop="position" content="2">
                </li>
            </ul>
        </div>
    </section>
    <section class="box-title">
        <div class="wrapper">
            <ul class="nav-step step-by-step">
                <li><a href="{{route('acc')}}" class="icon-account">Thông tin tài khoản</a></li>
                <li><a href="{{route('order_management')}}" class="icon-userorder active">Quản lý đơn hàng</a></li>
                <li><a href="{{route('change_password')}}" class="icon-changepass">Đổi mật khẩu</a></li>
                <li><a class="icon-logout fa-sign-out" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                        {{ __('Đăng xuất') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </section>
    <section class="box-content">
        <div class="wrapper">
            <form action="https://mobileworld.com.vn/quan-ly-don-hang.html" id="userorder-form" class="userorder-form" method="post" accept-charset="utf-8"> <input type="hidden" name="order_id" value="0"> <input type="hidden" name="action" value="member_userorder">
                <div class="form-wrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="column order_code">Mã đơn hàng</th>
                                <th class="column order_date hidden-xs">Ngày đặt</th>
                                <th class="column order_status">Phương thức thanh toán</th>
                                <th class="column order_status">Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if($orders)
                        @foreach($orders as $row)
                            @php
                            $formattedDate = date('Ymd', strtotime($row->created_at));
                            $orderCode = $formattedDate. '-' . $row->id;
                            @endphp
                            <tr id="row-3115" class="row-item">
                                <td class="column order_code">
                                    <div class="text-center"><a href="{{route('order_check_detail_user',$orderCode)}}">{{$orderCode}}</a></div>
                                </td>
                                <td class="column order_date hidden-xs">
                                    <div class="text-center">{{ \Carbon\Carbon::parse($row->created_at)->format('d/m/Y') }}</div>
                                </td>   
                                <td class="column order_date hidden-xs">
                                    @if($row->payment == 1)
                                    <div class="text-center" style="color:#000000">Chuyển khoản</div>
                                    @else
                                    <div class="text-center" style="color:#000000">COD</div>                    
                                    @endif
                                </td>                                                          
                                <td class="column order_status tx-bold">
                                    @if($row->status == 1)
                                    <div class="text-center" style="color:#000000">Chờ xác nhận</div>
                                    @elseif($row->status == 2)
                                    <div class="text-center" style="color:#000000">Đã xác nhận</div>
                                    @elseif($row->status == 3)
                                    <div class="text-center" style="color:blue">Đang giao hàng</div>
                                    @elseif($row->status == 4)
                                    <div class="text-center" style="color:green">Giao hàng thành công</div>
                                    @else
                                    <div class="text-center" style="color:red">Đơn hàng bị hủy</div>
                                    @endif
                                </td>                                
                            </tr>
                        @endforeach
                        @else
                            <tr class="row-item row-noitem">
                                <td class="column" colspan="7"> Chưa có đơn hàng nào</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </section>
</main>
@endsection

@section('js')
<script async src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"></script>
<script id="ws-common-js" language="javascript" type="text/javascript">
    var lang = 'vi',
        pagenow = 'page',
        typenow = 'index',
        seourl = 'https://mobileworld.com.vn/quan-ly-don-hang.html',
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
            "noitem": "Kh\u00f4ng c\u00f3 s\u1ea3n ph\u1ea9m n\u00e0o.",
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
            "page": "Trang"
        };
</script>
<script id="ws-global-js" src="https://mobileworld.com.vn/storage/bundle/mobileworld.min.js?v=230508" language="javascript" type="text/javascript"></script>
<script src="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/js/member.js?v=230508" language="javascript" type="text/javascript"></script>
@endsection