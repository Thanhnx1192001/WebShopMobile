@extends('user.index')

@section('header')
<title>{{$product->title}}</title>
@endsection

@section('meta')
<meta name="theme-color" content="#fcde04">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="iPhone 14 Pro Max 128GB Mới Fullbox">
<meta name="keywords" content="iPhone 14 Pro Max 128GB Mới Fullbox">
<meta property="og:url" content="https://mobileworld.com.vn/iphone-14-pro-max-128gb-moi-fullbox.html">
<meta property="og:type" content="article">
<meta property="og:site_name" content="Mobileworld">
<meta property="og:title" content="iPhone 14 Pro Max 128GB Mới Fullbox">
<meta property="og:description" content="iPhone 14 Pro Max 128GB Mới Fullbox">
<meta property="og:locale" content="vi_VN">
<meta property="og:image" content="https://mobileworld.com.vn/uploads/product/iPhone_14/iphone-14-pro-max-deeppurple.jpg">
<meta property="og:image:alt" content="iPhone 14 Pro Max 128GB Mới Fullbox">
<meta property="fb:app_id" content="440100557569103">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="iPhone 14 Pro Max 128GB Mới Fullbox">
@endsection

@section('link')
<link href="https://mobileworld.com.vn/iphone-14-pro-max-128gb-moi-fullbox.html" rel="canonical">
<link href="https://mobileworld.com.vn/iphone-14-pro-max-128gb-moi-fullbox.html" rel="alternate" media="handheld">
<link id="ws-product-css" href="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/css/product.css?v=230314" rel="stylesheet" type="text/css">
<link id="ws-slick-css" href="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/js/slick/css/slick.css?v=230314" rel="stylesheet" type="text/css">
<link id="ws-comment-css" href="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/js/comment/comment.css?v=230314" rel="stylesheet" type="text/css">
<link id="ws-single-css" href="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/css/detail.css?v=230314" rel="stylesheet" type="text/css">
<link href="https://mobileworld.com.vn/uploads/favicon.webp?v=230314" rel="icon" type="image/png">
<link href="https://mobileworld.com.vn/uploads/favicon.webp?v=230314" rel="apple-touch-icon" type="image/png">
@endsection

@section('css')
<link id="ws-globxal-css" type="text/css" href="{{ asset('css/product_detail/product_detail.css') }}" rel="stylesheet" />
<style>
    .custom-modal .modal-dialog {
        max-width: 800px;
        /* Kích thước tối đa của modal */
        width: 50%;
        /* Kích thước chiều rộng của modal */
    }

    .modal-header {
        position: relative;
    }

    .close {
        position: absolute;
        top: 10px;
        right: 10px;
        width: 20px;
        height: 20px;
        font-size: 20px;
        font-weight: bold;
        line-height: 1;
        color: #000;
        opacity: 0.5;
        cursor: pointer;
        padding: 0;
        border: none;
        background: transparent;
        outline: none;
    }

    .close:hover {
        opacity: 1;
    }
</style>
@endsection


@section('content')
<main id="ws-content" class="ws-content outer">
    <section class="breadcrumb">
        <div class="wrapper">
            <ul class="items" itemtype="http://schema.org/BreadcrumbList" itemscope>
                <li class="breadrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <a href="{{ route('home')}}" itemprop="item"><span itemprop="name">Trang chủ</span></a>
                    <meta itemprop="position" content="1">
                </li>
                <li class="breadrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <a href="{{ route('phone')}}" itemprop="item"><span itemprop="name">{{$category->name}}</span></a>
                    <meta itemprop="position" content="2">
                </li>
                <li class="breadrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <span itemprop="name">{{$product->title}}</span>
                    <meta itemprop="position" content="3">
                </li>
            </ul>
        </div>
    </section>
    @if(session('success'))
    <div class="alert alert-info">{{ session('success') }}</div>
    @endif
    <div class="box-head">
        <div class="wrapper">
            <div class="box-pname">
                <h1>{{$product->title}}</h1>
                @php
                $feed_back = null;
                foreach($feed_back_products as $row){
                if($row->id == $product->id){
                $feed_back = $row;
                }
                }
                @endphp
                <div class="post-meta">
                    <div class="star-wrap">
                        @if($feed_back)
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        <div class="numvote">{{$feed_back -> count}} đánh giá</div>
                        @else
                        <i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
                        @endif
                    </div>
                    <div class="post-meta-brand"> Thương hiệu: <a href="{{ route('phone_apple')}}">{{$manufacturer->name}}</a></div>
                </div>
            </div>
            <div class="content-primary">
                <div id="box-galleries" class="box-galleries">
                    <div id="slider-for">
                        <div class="slider-for">
                            <img width="460" height="460" alt="{{$product->title}}" class="lazyload" src="{{asset($product->main_img)}}" data-toggle="modal" data-target="#largerImageModal">
                        </div>
                    </div>
                </div>
                <div class="modal fade custom-modal" id="largerImageModal" tabindex="-1" role="dialog" aria-labelledby="largerImageModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">

                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img width="1000" height="1000" src="{{asset($product->main_img)}}" alt="Image" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    $(document).ready(function() {
                        $('#largerImageModal').modal();
                    });
                </script>


                <form action="" id="box-info" class="box-info" method="post" accept-charset="utf-8"> <input type="hidden" name="quantity" value="1"> <input type="hidden" name="add-to-cart" value="360">
                    <div class="box-price-html">
                        <ul class="price-html-ul">
                            <li> <span class="price">{{number_format($product->discount,0,'.','.') }}₫</span> </li>
                        </ul>
                    </div>
                    <div class="box-product-group"> <label>Phiên bản</label>
                        <ul class="items">
                            <li><a href="" class=active><span class="item-name">{{$product->memory}}</span><span class="item-price">{{number_format($product->discount,0,'.','.') }}₫</span></a></li>
                        </ul>
                    </div>
                    <div class="box-product-group flex"><label>Màu</label>
                        <ul class="items">
                            <li><a href="" class="item active" data-pa_id="5" data-code="24"><span class="item-image"><img src="{{asset($product->main_img)}}" width="80" height="80" class="img-cover" alt="iPhone 14 Pro Max 128GB Mới Fullbox - Đen"></span><span class="item-name">{{$product->color}}</span><input type="radio" name="options" value="24" checked="checked" class="hide"> </a></li>
                        </ul>
                    </div>
                    @if($product->quantity > 0)
                    <div class="box-buttons tragop">
                        <div class="button-action button-buynow"> <a type="button" class="button add-to-cart buynow" onclick="AddCartNow({{$product->id}})"> <span class="row0">Mua ngay</span> <small>Giao tận nhà (COD) hoặc Nhận tại cửa hàng</small> </a> </div>
                        <div class="button-action button-addcart"> <a type="button" class="button add-to-cart ajax" onclick="AddCart({{$product->id}})" href="javascript:"> <span>Thêm vào giỏ hàng</span> </a> </div>
                    </div>
                    @else
                    <div class="box-buttons stock-1"> <div class="button-action button-contact widefat"> <a href="tel:xxxx" class="button"> <span class="row0">Liên hệ</span> <small>Hotline: xxxxx</small> </a> </div> </div>
                    @endif

                    <div class="box-promotion widget"> <label>Khuyến mãi</label>
                        <div class="box-gift">
                            <p><em><strong>✔️&nbsp;</strong></em><em><strong>Hỗ trợ thu cũ đổi mới</strong></em></p>
                            <p><em><strong>✔️</strong></em><em><strong> Mua kèm airpods pro chính hãng giá chỉ 4.190.000</strong></em></p>
                            <p><em><strong>✔️</strong></em><em><strong> Mua Apple AirPods 2 chính hãng giá chỉ 2.790.000đ</strong></em></p>
                            <p><em><strong>✔️</strong></em><em><strong> Mua củ sạc 18W chính hãng giá chỉ 350.000đ</strong></em></p>

                        </div>
                    </div>
                </form>
                <div id="box-widgets" class="box-widgets">
                    <div id="box-scroll-fixed" class="box-scroll-fixed">
                        <div id="box-sidebar" class="widget box-sidebar">
                            <div class="widget-title"> Thông số kỹ thuật </div>
                            <div class="widget-content">
                                <div class="thumb img-center"> <img width="250" height="250" alt="iPhone 14 Pro Max 128GB Mới Fullbox" data-src="https://mobileworld.com.vn/uploads/product/iPhone_14/thumbs/iphone-14-pro-max-deeppurple.webp" class="lazyload" src="https://mobileworld.com.vn/storage/images/loading.svg"></div>
                                <div class="options">
                                    <ul class="items">
                                        <li><strong>Kích thước</strong>: <span>{{ $data_summary['kich_thuoc'] }}</span></li>
                                        <li><strong>Độ phân giải</strong>: <span>{{ $data_summary['do_phan_giai'] }}</span></li>
                                        <li><strong>Hệ điều hành</strong>: <span>{{ $data_summary['he_dieu_hanh'] }}</span></li>
                                        <li><strong>CPU</strong>: <span>{{ $data_summary['cpu'] }}</span></li>
                                        <li><strong>Ram</strong>: <span>{{ $data_summary['ram'] }}</span></li>
                                        <li><strong>Bộ nhớ trong</strong>: <span>{{ $data_summary['bo_nho_trong'] }}</span></li>
                                        <li><strong>Dung lượng pin</strong>: <span>{{ $data_summary['dung_luong_pin'] }}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-address widget">
                        <div class="widget-title">Xem cửa hàng gần bạn</div>
                        <div class="widget-content">
                            <ul class="items">
                                <li> <span class="row0">Mộ Lao, Hà Đông, Tp.HN</span> <strong class="row1">Hotline: 0855562308</strong> </li>
                                <li> <strong class="row0">Kho online</strong> <span class="row1">
                                        <p>Giao hàng trong 3h - 3 ngày<br /> <strong>Hotline: <a href="tel:0855562308">0855562308</a></strong></p>
                                    </span> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="box-foot">
        <div class="wrapper">
            <div class="box-compare">
                <div class="compare-search">
                    <label for="s">Sản phẩm tương tự</label>
                    <div class="compare-search-inner dropdown">
                        <div class="results dropdown-menu"></div>
                    </div>
                    </form>
                </div>
                <!-- Sảm phẩm tương tự  -->
                <section id="box-product-compare" class="box-product-compare box-table">
                    <div class="box-body">
                        <div class="products">
                            @for ($product = 0; $product < count($products) ; $product++) @if($product < 5 ) <div class="product" data-product_id="360">

                                <!-- Hình ảnh  -->
                                <div class="img img-center">
                                    <a href="{{ route('product_detail',$products[$product]->id)}}" title="">
                                        <img width="220" height="220" class="lazyload" src="{{asset($products[$product]->main_img)}}">
                                    </a>
                                </div>
                                <!-- Tên và giá tiền -->
                                <div class="txt">
                                    <!-- tên -->
                                    <h2 class=pname>
                                        <a href="{{ route('product_detail',$products[$product]->id)}}"> {{$products[$product]->title}} {{$products[$product]->memory}}</a>
                                    </h2>
                                    <!-- giá -->
                                    <ul class="price-text price-html" data-stock="1">
                                        <li class="price"> {{number_format($products[$product]->discount,0,'.','.') }}₫</li>
                                    </ul>
                                    @php
                                    $feed_back = null;
                                    foreach($feed_back_products as $row){
                                    if($row->id == $products[$product]->id){
                                    $feed_back = $row;
                                    }
                                    }
                                    @endphp
                                    @if($feed_back)
                                    <!-- đánh giá -->
                                    <div class="star-wrap">
                                        <b>
                                            {{round($feed_back -> star,1)}}
                                        </b>/5
                                        <i class="fa fa-star"></i>
                                        <div class="numvote">{{$feed_back -> count}} đánh giá</div>
                                    </div>
                                    @else
                                    <div class="star-wrap"><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div>
                                    @endif
                                </div>

                        </div>
                        @endif
                        @endfor
                    </div>
            </div>
            </section>
        </div>
        <section id="box-product-focus" class="box-product-focus box-table">
            <div class="box-head">
                <h3 class=name>Sản phẩm nổi bật</h3>
            </div>
            <div class="box-body">
                <div class="products">
                    @for($i = 0; $i < 5 ; $i++) @if( ($feed_back_products[$i]->count > config('constants.COUNT_FEED_BACK')) AND ($feed_back_products[$i]->star > config('constants.COUNT_STAR')))
                        @php
                        $featured_products = null;
                        foreach($product_all as $product){
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
        </section>
        <div id="box-reviews" class="widget box-reviews">
            <div class="widget-title"> Bình luận về {{$product_feed_back->title}}</div>
            <div class="widget-content">
                <div class="extCMT">
                    <div id="box-comment" class="box-comment">
                        <div class="comment-title">
                            <span id="cmt-totals" onclick="CMT.scrollTop()">
                                {{count($feed_back_product)}} </span>
                        </div>
                        <div class="inner">
                            <div class="comment-form form-comment">
                                <form action="{{route('product_detail_store',['product_id' => $product_feed_back->id] )}}" method="post" class="cmt-form" id="form-feed-back" accept-charset="utf-8">
                                    @csrf
                                    <textarea name="content" cols="40" rows="5" required="1" id="comment-text" class="form-control" placeholder="Nhập nội dung bình luận *"></textarea>
                                    <div class="comment-hide">
                                        <div class="comment-info-wrap">
                                            <div class="row01">
                                                <div class="comment-name column">
                                                    <input type="text" name="name" value="" required="1" id="comment-name" autocomplete="off" class="form-control" placeholder="Họ tên *">
                                                </div>
                                                @if ($errors->has('name'))
                                                <small class="form-text text-muted">{{ $errors->first('name') }}</small>
                                                @endif
                                                <div class="comment-phone column">
                                                    <input type="text" name="phone_number" value="" id="comment-phone" class="form-control" placeholder="Điện thoại">
                                                </div>
                                                @if ($errors->has('phone_number'))
                                                <small class="form-text text-muted">{{ $errors->first('phone_number') }}</small>
                                                @endif
                                                <div class="comment-phone column">
                                                    <input type="email" name="email" value="" id="comment-email" class="form-control" placeholder="Email">
                                                </div>
                                                @if ($errors->has('email'))
                                                <small class="form-text text-muted">{{ $errors->first('email') }}</small>
                                                @endif
                                                <div class="comment-btn column">
                                                    <button type="submit" class="ws-btn">Gửi bình luận</button>
                                                </div>

                                            </div>
                                            <div class="row02">
                                                <div class="box-comment-vote">
                                                    <ul class="comment-vote">
                                                        <li class="vote-title">Điểm đánh giá của bạn về sản phẩm này:</li>
                                                        <li class="votes">
                                                            <select name="star">
                                                                <option value="">Đánh giá</option>
                                                                @for ($i = 1; $i <= 5; $i++) <option value="{{ $i }}">{{ $i }} Sao
                                                                    </option>
                                                                    @endfor
                                                            </select>
                                                            @if ($errors->has('star'))
                                                            <small class="form-text text-muted">{{ $errors->first('star') }}</small>
                                                            @endif
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="cmt-list" class="box">
                                <div id="list-comment" class="comment-list">
                                    @if($feed_back_product)
                                    @php
                                    $feed_back_product = $feed_back_product->reverse();
                                    @endphp
                                    @foreach($feed_back_product as $row)
                               
                                    <div id="comment-4411" class="comment-item cmt-parent">
                                        <div class="inner">
                                            <div class="commentAvatar guest">
                                                <div class="avatar" style="width:40px; height:40px;"><span class="iconcom-user">{{substr($row->name, 0, 1)}}</span></div>
                                            </div>
                                            <div class="commentBody">
                                                <div class="commentName">
                                                    <span class="name">{{$row->name}}</span>
                                                    <span class="star-wrap">
                                                        @for( $i=1 ; $i <= $row->star; $i++)
                                                            <i class="fa fa-star"></i>
                                                            @endfor
                                                            @for( $j=1 ; $j <= 5- ($row->star) ; $j++)
                                                                <i class="fa fa-star-o"></i>
                                                                @endfor
                                                    </span>
                                                </div>
                                                <div class="commentText">{{$row->content}}</div>
                                                <ul class="commentInfo">
                                                    <li class="commentDate last">
                                                        <span class="commentDate">
                                                            {{$row->time_diff}} </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endsection

@section('js')
<div id="fb-root"></div>
<script id="ws-facebook-js" language="javascript" type="text/javascript" src="{{asset('js/product_detail/product_detail_1.js')}}"></script>
<script id="ws-common-js" language="javascript" type="text/javascript" src="{{asset('js/product_detail/product_detail_2.js')}}"></script>
<script id="ws-comment-ext-js" language="javascript" type="text/javascript" src="{{asset('js/product_detail/product_detail_3.js')}}"></script>
<script id="ws-elevatezoom-js" src="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/js/elevatezoom/elevatezoom.js?v=230314" language="javascript" type="text/javascript"></script>
<script id="ws-comment-js" src="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/js/comment/comment.js?v=230314" language="javascript" type="text/javascript"></script>
<script id="ws-slick-js" src="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/js/slick/js/slick.js?v=230314" language="javascript" type="text/javascript"></script>
<script id="ws-product-js" src="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/js/product.js?v=230314" language="javascript" type="text/javascript"></script>
<script id="ws-product-json" type="application/ld+json">
    {
        "@context": "https:\/\/schema.org",
        "@type": "Product",
        "name": "iPhone 14 Pro Max 128GB M\u1edbi Fullbox",
        "image": "https:\/\/mobileworld.com.vn\/uploads\/product\/iPhone_14\/iphone-14-pro-max-deeppurple.jpg",
        "description": "iPhone 14 Pro Max 128GB M\u1edbi Fullbox",
        "sku": "1038036562",
        "mpn": "925872",
        "brand": {
            "@type": "Brand",
            "name": "Apple"
        },
        "review": {
            "@type": "Review",
            "reviewRating": {
                "@type": "Rating",
                "ratingValue": 5,
                "bestRating": 5
            },
            "author": {
                "@type": "Person",
                "name": "Mobileworld"
            },
            "datePublished": "14:08, 16\/02\/2022"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": 4,
            "reviewCount": 42
        },
        "offers": {
            "@type": "Offer",
            "url": "https:\/\/mobileworld.com.vn\/iphone-14-pro-max-128gb-moi-fullbox.html",
            "priceCurrency": "VND",
            "price": "26790000",
            "priceValidUntil": "2050-12-31",
            "availability": "https:\/\/schema.org\/InStock",
            "itemCondition": "http:\/\/schema.org\/NewCondition"
        },
        "publisher": {
            "@type": "Organization",
            "name": "Mobileworld",
            "logo": {
                "@type": "ImageObject",
                "url": "https:\/\/mobileworld.com.vn\/uploads\/logo.webp",
                "width": 250,
                "height": 50
            }
        }
    }
</script>
@endsection