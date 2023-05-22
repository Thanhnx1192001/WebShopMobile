@extends('user.index')

@section('header')
<title>Kiểm tra đơn hàng</title>
@endsection

@section('meta')
<meta name="theme-color" content="#fcde04">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Kiểm tra đơn hàng">
<meta name="keywords" content="Kiểm tra đơn hàng">
<meta property="og:url" content="https://mobileworld.com.vn/kiem-tra-don-hang.html">
<meta property="og:type" content="article">
<meta property="og:site_name" content="Mobileworld">
<meta property="og:title" content="Kiểm tra đơn hàng">
<meta property="og:description" content="Kiểm tra đơn hàng">
<meta property="og:locale" content="vi_VN">
<meta property="og:image" content="https://mobileworld.com.vn/uploads/">
<meta property="og:image:alt" content="Kiểm tra đơn hàng">
<meta property="fb:app_id" content="440100557569103">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Kiểm tra đơn hàng">
<meta name="twitter:description" content="Kiểm tra đơn hàng">
@endsection

@section('link')
<link href="https://mobileworld.com.vn/kiem-tra-don-hang.html" rel="canonical">
<link href="https://mobileworld.com.vn/kiem-tra-don-hang.html" rel="alternate" media="handheld">
<link id="ws-ordercheck-css" href="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/css/ordercheck.css?v=230317" rel="stylesheet" type="text/css">
<link href="https://mobileworld.com.vn/uploads/favicon.webp?v=230317" rel="icon" type="image/png">
<link href="https://mobileworld.com.vn/uploads/favicon.webp?v=230317" rel="apple-touch-icon" type="image/png">
@endsection

@section('css')
<link href="{{ asset('css/order_check/order_check.css') }}" rel="stylesheet" id="ws-global-css" type="text/css" />
@endsection


@section('content')
<main id="ws-content" class="ws-content outer">
    <section class="breadcrumb">
        <div class="wrapper">
            <ul class="items" itemtype="http://schema.org/BreadcrumbList" itemscope>
                <li class="breadrumb-home breadrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <a href="https://mobileworld.com.vn" itemprop="item"><span itemprop="name">Trang chủ</span></a>
                    <meta itemprop="position" content="1">
                </li>
                <li class="breadrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <span itemprop="name">Kiểm tra đơn hàng</span>
                    <meta itemprop="position" content="1">
                </li>
            </ul>
        </div>
    </section>
    <section class="box-title">
        <div class="wrapper">
            <div class="post-title">
                <h1>Kiểm tra đơn hàng</h1>
            </div>
        </div>
    </section>
    <section class="box-content">
        <div class="wrapper">
            <div class="entry"> Nhập mã đơn hàng hoặc số điện thoại để kiểm tra đơn hàng của bạn.</div>
            <div class="entry-form">
                <form action="{{route('order_check_detail')}}" method="post" class="form-wrap" accept-charset="utf-8">
                    @csrf
                    <div class="form-field required last">
                        <div class="form-label hidden-xs hide"> <label for="code">Mã đơn hàng</label></div>
                        <div class="form-input"> <input type="text" name="code" value="" id="code" required="1" autofocus="1" class="form-control" placeholder="Vui lòng nhập mã đơn hàng *"> </div>
                        @if(session('success'))
                        <div class="alert alert-info">{{ session('success') }}</div>
                        @endif

                        <div class="form-submit"> <input type="submit" value="Kiểm tra" class="button btn-icon btn-primary"> </div>
                    </div>
                </form>
                <div class="order-empty hide"> </div>
            </div>
        </div>
    </section>
</main>
@endsection

@section('js')
<script id="ws-common-js" language="javascript" type="text/javascript" src="{{asset('js/order_check/order_check_1.js')}}"></script>
<script id="ws-global-js" src="https://mobileworld.com.vn/storage/bundle/mobileworld.min.js?v=230317" language="javascript" type="text/javascript"></script>
<script src="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/js/member.js?v=230317" language="javascript" type="text/javascript"></script>
<script id="ws-ordercheck-js" src="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/js/ordercheck.js?v=230317" language="javascript" type="text/javascript"></script>
@endsection