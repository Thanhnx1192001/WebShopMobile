@extends('user.index')

@section('link')
    <link href="https://mobileworld.com.vn" rel="canonical">
    <link href="https://mobileworld.com.vn" rel="alternate" media="handheld">
    <link id="ws-main-css" href="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/css/main.css?v=230314" rel="stylesheet" type="text/css">
    <link href="https://mobileworld.com.vn/uploads/favicon.webp?v=230314" rel="icon" type="image/png">
    <link href="https://mobileworld.com.vn/uploads/favicon.webp?v=230314" rel="apple-touch-icon" type="image/png">
@endsection

@section('meta')
    <meta name="theme-color" content="#fcde04">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hệ thống bán lẻ điện thoại, máy tính bảng, Smart watch tại Tp.HCM ✓Uy tín ✓Giá rẻ nhất ✓Trả góp 0% ✓Chính hãng ✓Giao toàn quốc. 0961273979 - 0898399799">
    <meta name="keywords" content="mobileworld, mbw, điện thoại di dộng, máy tính bảng, dien thoai chinh hang, smartphones, điện thoại phổ thông, may tinh xach tay, laptop chinh hang, phu kien laptop, điện thoại, dien thoai di dong, may tinh bang">
    <meta property="og:url" content="https://mobileworld.com.vn">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Mobileworld">
    <meta property="og:title" content="">
    <meta property="og:locale" content="vi_VN">
    <meta property="og:description" content="Hệ thống bán lẻ điện thoại, máy tính bảng, Smart watch tại Tp.HCM ✓Uy tín ✓Giá rẻ nhất ✓Trả góp 0% ✓Chính hãng ✓Giao toàn quốc. 0961273979 - 0898399799">
    <meta property="fb:app_id" content="440100557569103">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="Hệ thống bán lẻ điện thoại, máy tính bảng, Smart watch tại Tp.HCM ✓Uy tín ✓Giá rẻ nhất ✓Trả góp 0% ✓Chính hãng ✓Giao toàn quốc. 0961273979 - 0898399799">
@endsection

@section('css')
  <link href="{{ asset('css/home/home.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('header')
    <title>Mobileworld - Cửa Hàng Điện Thoại Lấy Uy Tín Là Sức Mạnh</title>
@endsection

@section('content')
<main id="ws-content" class="ws-content outer">
            <section class="breadcrumb">
                <div class="wrapper">
                    <ul class="items" itemtype="http://schema.org/BreadcrumbList" itemscope>
                        <li class="breadrumb-home breadrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <a href="https://mobileworld.com.vn" itemprop="item"><span itemprop="name">Trang chủ</span></a>
                            <meta itemprop="position" content="1">
                        </li>
                    </ul>
                </div>
            </section>

            <!-- banner -->
            <section id="box-banner" class="box-banner box" data-layout="boxed">
                <div class="wrapper">
                    <section id="sync-large">
                        @for ($i = 0; $i < config('constants.SHOW_BANNER_MAIN'); $i++)
                        <a href="{{$banner_main[$i]->link}}" title="{{$banner_main[$i]->title}}" target="_self" class="advertise-item advertise-160 advertise-item-slider advertise">
                            <img src="{{asset($banner_main[$i]->img_url)}}" alt="{{$banner_main[$i]->title}}" title="{{$banner_main[$i]->title}}" width="1280" height="400" class="advertise-img img-cover" data-pos="slider">
                        </a>
                        @endfor
                    </section>
                    <section id="sync-small">
                        @for ($i = 0; $i < config('constants.SHOW_BANNER_MAIN'); $i++)
                            <div class="item"><span>{{$banner_main[$i]->title}}</span></div>
                        @endfor
                    </section>
                </div>
            </section>

            <!-- banner con  -->
            <section id="box-slider-bottom" class="banner-slider-bottom outer" data-layout="boxed">
                <div class="wrapper">
                    <section class="slider-bottom">
                        @for ($i = 0; $i < config('constants.SHOW_BANNER_MINOR'); $i++)
                        <a href="{{$banner_minor[$i]->link}}" title="{{$banner_minor[$i]->title}}" target="_self" class="advertise-item advertise-161 advertise-item-slider-bottom advertise">
                            <img src="{{$banner_minor[$i]->img_url}}" alt="{{$banner_minor[$i]->title}}" title="{{$banner_minor[$i]->title}}" width="400" height="150" class="advertise-img img-cover" data-id="161" data-pos="slider-bottom">
                        </a>
                        @endfor
                        </section>
                </div>
            </section>

            <!-- Sản phẩm nổi bật -->
            <section id="box-product_focus" class="box-product_focus box-table">
                <div class="wrapper">
                    <div class="box-inner">
                        <div class="box-head">
                            <div class="ws-name">Sản phẩm nổi bật</div>
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
                                            <a href="" title="">
                                                <img alt="" title="" width="220" height="220" class="lazyload" src="{{$featured_products->main_img}}">
                                            </a>
                                        </div>
                                        <div class="txt">
                                            <h2 class=pname>
                                                <a href="">{{$featured_products->title}} {{$featured_products->memory}}</a>
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
                        <div class="box-foot"><a href="/san-pham.html?qr=Zm9jdXM9MQ==" class="ws-btn">Xem tất cả 30 Sản phẩm nổi bật</a></div>
                    </div>
                </div>
            </section>
            <!-- sản phẩm -->
            @foreach($manufacturers as $manufacturer)
                <section id="box-product_brand-4" class="outer box-table">
                    <div class="wrapper">
                        <div class="box-inner">
                            <div class="box-head">
                                <h3>
                                    <a href="" class="ws-name">
                                        @foreach($categories as $category)
                                            @if($category->id == $manufacturer->category_id )
                                                {{$category->name}}
                                            @endif
                                        @endforeach
                                        {{$manufacturer->name}}
                                    </a>
                                </h3>
                            </div>                                              
                            <div class="box-body">
                                <div class="products">
                                    @php
                                    $list_product = [];
                                    foreach($products as $product){
                                        if ($product->manufacturer_id == $manufacturer->id){
                                            $list_product[]=$product;
                                        } 
                                    }
                                    @endphp
                                    @for ($product = 0; $product < count($list_product); $product++)
                                        @if ($list_product[$product]->manufacturer_id == $manufacturer->id) 
                                            <div class="product" data-product_id="360">
                                                <!-- Hình ảnh  -->
                                                <div class="img img-center"> 
                                                    <a href="" title="">
                                                        <img width="220" height="220" class="lazyload" src="{{asset($list_product[$product]->main_img)}}">
                                                    </a>
                                                </div>
                                                <!-- Tên và giá tiền -->
                                                <div class="txt">
                                                    <!-- tên -->
                                                    <h2 class=pname>
                                                        <a href=""> {{$list_product[$product]->title}} {{$list_product[$product]->memory}}</a>
                                                    </h2>
                                                    <!-- giá -->
                                                    <ul class="price-text price-html" data-stock="1">
                                                        <li class="price"> {{number_format($list_product[$product]->discount,0,'.','.') }}₫</li>
                                                    </ul>
                                                    @php
                                                    $feed_back = null;
                                                    foreach($feed_back_products as $row){
                                                        if($row->id == $list_product[$product]->id){
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
                            <div class="box-foot">
                                <a href="" class="ws-btn">Xem tất cả 
                                    {{count($list_product)}} 
                                    @foreach($categories as $category)
                                        @if($category->id == $manufacturer->category_id)
                                                {{$category->name}}
                                        @endif
                                    @endforeach
                                    {{$manufacturer->name}}
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            @endforeach


            <!-- Sản phẩm mới -->
            <section id="box-product_new" class="box-product_new box-table">
                <div class="wrapper">
                    <div class="box-inner">
                        <div class="box-head">
                            <div class="ws-name">Sản phẩm mới</div>
                        </div>
                        <div class="box-body">
                            <div class="products">
                                @for($product = count($products)-1 ; $product > count($products)-config('constants.SHOW_PRODUCT')-1; $product--)
                                <div class="product" data-product_id="720">
                                    <div class="img img-center"> 
                                        <a href="" title="">
                                        <img alt="" title="" width="220" height="220" class="lazyload"  src="{{$products[$product]->main_img}}">
                                    </a>
                                    </div>
                                                <div class="txt">
                                                    <!-- tên -->
                                                    <h2 class=pname>
                                                        <a href=""> {{$products[$product]->title}} {{$products[$product]->memory}}</a>
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
                                                        <b>{{round($feed_back->star,1)}}</b>/5 
                                                        <i class="fa fa-star"></i>
                                                        <div class="numvote">{{$feed_back->count}} đánh giá</div>
                                                    </div>
                                                    @else
                                                    <div class="star-wrap"><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div>
                                                    @endif
                                                </div>
                                </div>
                                @endfor
                            </div>
                        </div>
                        <div class="box-foot"><a href="/san-pham.html" class="ws-btn">Xem tất cả {{count($products)}} Sản phẩm</a></div>
                    </div>
                </div>
            </section>

            <!-- Cửa hàng điện thoại Mobileworld -->
            <section id="box-about" class="box box-about">
                <div class="wrapper">
                    <div class="box-title">
                        <h1 class="ws-name">Cửa hàng điện thoại Mobileworld</h1>
                    </div>
                    <div class="box-content">
                        <div class="entry">
                            <p>Hệ thống bán lẻ&nbsp;<strong>MobileWorld</strong>&nbsp;là một trong những điểm đến tin cậy của người tiêu dùng thông thái bắt nguồn từ diễn đàn mua bán www.tinhte.vn - diễn đàn công nghệ lớn nhất Việt Nam.</p>
                            <p><strong>Link topic bán thiết bị di động:</strong>&nbsp;<a href="https://nhattao.com/threads/mobileworld-htcm9-5tr9-note-5-4-g4-g3-3tr9-sony-z3new-8tr5-bh-12-thang-ca-nguon-man-hinh-cam-ung.3238131/">TOPIC MOBILEWORLD TINHTE</a>&nbsp;</p>
                            <ul>
                                <li>Được sự ủng hộ của sân chơi công nghệ tinh tế.&nbsp;</li>
                                <li>Được cộng đồng tinhte.vn đánh giá cao về bán hàng uy tín, tin cậy, hỗ trợ kĩ thuật nhiệt tình.</li>
                            </ul>
                            <p>Bắt nguồn từ một topic bán hàng của Huanbg9x lấy tên ban đầu là MobileWorld, người dùng biết đến chúng tôi với kim chỉ nam:</p>
                            <p><em><strong>"Bảo hành nguồn, màn hình, cảm ứng. Uy tín là sức mạnh"</strong></em>&nbsp;</p>
                            <p>Với tinh thần bán hàng trung thực, hài hước, lấy 4 đối tượng sản phẩm, khách hàng, chất lượng dịch vụ, nhân sự&nbsp; làm trọng tâm, chúng tôi cực kì chú trọng đến xây dựng quy trình cung cấp dịch vụ chuẩn, không ngừng nâng cấp để:</p>
                            <ul>
                                <li>Luôn nhập được hàng tốt với giá đầu vào tốt, các sản phẩm được kiểm tra kĩ càng bởi đội ngũ kiểm tra chất lượng chuẩn trước khi bán ra.</li>
                                <li>Luôn làm hài lòng khách hàng về giá bán, thời gian phục vụ nhanh chóng, và giải quyết thỏa đáng các vấn đề trong bảo hành.</li>
                            </ul>
                            <p><em><strong>Dưới đây là các hạng mục sản phẩm mà hệ thống MobileWorld cung cấp:</strong></em>&nbsp;</p>
                            <p>- Các sản phẩm của Apple: iPhone, iPad&nbsp;</p>
                            <p>- Các sản phẩm Android quốc tế: HTC, Sony, SamSung, LG, Motorola.&nbsp;</p>
                            <p>- Các sản phẩm SKY nội địa Hàn Quốc.&nbsp;</p>
                            <p>- Các phụ kiện cao cấp cho smartphone&nbsp;</p>
                            <p>- Các dịch vụ sửa chữa, bảo hành, bảo trì điện thoại đời cao.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog -->
            <section id="box-news" class="box-news box">
                <div class="wrapper">
                    <div class="box-title">
                        <div class="ws-name">Tin công nghệ</div>
                    </div>
                    <div class="box-content">
                        <div class="posts">
                            @for($i=0 ; $i < config('constants.SHOW_BLOG') ; $i++)
                            <div class="post news">
                                <div class="img"> 
                                    <a href="" title="{{$blogs[$i]->title}}"> 
                                    <img src="{{$blogs[$i]->img_url}}" alt="{{$blogs[$i]->title}}" width="290" height="170" class="img-cover">
                                </a> 
                                </div>
                                <div class="txt">
                                    <h2>
                                        <a href="">{{$blogs[$i]->title}}</a>
                                    </h2>
                                </div>
                            </div>
                            @endfor

                        </div>
                    </div>
                    <div class="box-foot"><a href="/blog.html" class="ws-btn viewall">Xem tất cả</a></div>
                </div>
            </section>

            <!-- Danh mục và nhãn hàng yêu thích -->
            <section id="box-tags" class="box-tags box">
                <div class="wrapper">
                    <div class="box-title">
                        <div class="ws-name">Danh mục và nhãn hàng yêu thích</div>
                    </div>
                    <div class="box-content">
                        <div class="menu menu-tags">
                            <ul class="items">
                                <li><a href="/dien-thoai-iphone.html" class="menu-item menu-237 menu-item-tags">iPhone Giá Rẻ</a></li>
                                <li><a href="/iphone-11-pro-11-pro-max.html" class="menu-item menu-238 menu-item-tags" target="_blank"> iPhone 11 Pro Max</a></li>
                                <li><a href="/iphone-11.html" class="menu-item menu-239 menu-item-tags" target="_blank"> iPhone 11</a></li>
                                <li><a href="/dien-thoai-xiaomi.html" class="menu-item menu-240 menu-item-tags">Điện thoại Xiaomi</a></li>
                                <li><a href="/pixel-3-3xl.html" class="menu-item menu-241 menu-item-tags">Google pixel 3 XL</a></li>
                                <li><a href="/iphone-8-8-plus.html" class="menu-item menu-242 menu-item-tags">iPhone 8/ 8 Plus</a></li>
                                <li><a href="/dien-thoai-samsung.html" class="menu-item menu-243 menu-item-tags">Điện thoại Samsung</a></li>
                                <li><a href="/galaxy-note-10-note-10-plus.html" class="menu-item menu-244 menu-item-tags">Galaxy Note 10</a></li>
                                <li><a href="/apple-watch-series-5.html" class="menu-item menu-245 menu-item-tags">Apple Watch Series 5</a></li>
                                <li><a href="/nubia-red-magic-5s.html" class="menu-item menu-246 menu-item-tags">ZTE nubia Red magic 5S</a></li>
                                <li><a href="/iphone-12-pro-12-pro-max.html" class="menu-item menu-247 menu-item-tags">IPhone 12 Pro</a></li>
                                <li><a href="/apple-watch-series-6.html" class="menu-item menu-248 menu-item-tags">Apple Watch Series 6</a></li>
                                <li><a href="/gaming-phone-lenovo.html" class="menu-item menu-249 menu-item-tags">Lenovo Legion Phone Pro</a></li>
                                <li><a href="/gaming-phone-asus-rog-3-series.html" class="menu-item menu-250 menu-item-tags">ASUS Rog Phone 3</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- icon  -->
            <section id="box-policy" class="box-policy box hidden-xs" data-layout="boxed">
                <div class="wrapper">
                    <section class="advertise-policy">
                        <div class="policy-item"><img src="https://mobileworld.com.vn/uploads/weblink/thumbs/logo-giaohangnhanh.webp" alt="Giao hàng nhanh" width="88" height="48">
                            <div class="txt">Giao hàng nhanh</div>
                        </div>
                        <div class="policy-item"><img src="https://mobileworld.com.vn/uploads/weblink/thumbs/logo-tvcn.webp" alt="Tư vấn chuyên nghiệp" width="56" height="64">
                            <div class="txt">Tư vấn chuyên nghiệp</div>
                        </div>
                        <div class="policy-item"><img src="https://mobileworld.com.vn/uploads/weblink/thumbs/logo-chinhhang.webp" alt="100% chính hãng" width="60" height="60">
                            <div class="txt">100% chính hãng</div>
                        </div>
                        <div class="policy-item"><img src="https://mobileworld.com.vn/uploads/weblink/thumbs/logo-ttlh.webp" alt="Thanh toán linh hoạt" width="65" height="65">
                            <div class="txt">Thanh toán linh hoạt</div>
                        </div>
                    </section>
                </div>
            </section>
        </main>
@endsection

@section('js')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "Cửa Hàng Điện Thoại Mobile World",
            "image": "https://mobileworld.com.vn/uploads/cua-hang.jpg",
            "@id": "",
            "url": "https://mobileworld.com.vn",
            "telephone": "096 127 39 79",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "692 Lê Hồng Phong, Phường 10, Quận 10, Thành phố Hồ Chí Minh",
                "addressLocality": "Hồ Chí Minh City",
                "postalCode": "70000",
                "addressCountry": "VN"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 10.7707648,
                "longitude": 106.6733486
            },
            "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
                "opens": "09:00",
                "closes": "21:00"
            },
            "sameAs": ["https://www.facebook.com/Mobileworld.com.vn", "https://www.youtube.com/channel/UCL7U7KO64BWuziYyUNI7ZMQ/featured"]
        }
    </script>

    <!-- thêm js -->
    <script id="ws-common-js" language="javascript" type="text/javascript" src="{{asset('js/home/home_1.js')}}"></script>

    <script id="ws-global-js" src="https://mobileworld.com.vn/storage/bundle/mobileworld.min.js?v=230314" language="javascript" type="text/javascript"></script>
    <script id="ws-main-js" src="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/js/main.js?v=230314" language="javascript" type="text/javascript"></script>
@endsection