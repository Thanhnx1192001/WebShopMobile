@extends('user.index')

@section('header')
    <title>Điện Thoại</title>
@endsection
@section('meta')
    <meta name="theme-color" content="#fcde04">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mua Điện Thoại Iphone Mới, Like New, Quốc Tế Giá Rẻ - Góp 0%. Cửa hàng luôn cập nhật mẫu iphone mới nhất ✓Đa dạng ✓Uy Tín ✓Giá Iphone Rẻ Nhất ✓Quà Hấp Dẫn">
    <meta name="keywords" content="Điện thoại iPhone">
    <meta property="og:url" content="https://mobileworld.com.vn/dien-thoai-iphone.html">
    <meta property="og:type" content="object">
    <meta property="og:site_name" content="Mobileworld">
    <meta property="og:title" content="Điện Thoại Iphone Mới Nhất, Iphone Like New, Quốc Tế Giá Rẻ">
    <meta property="og:description" content="Mua Điện Thoại Iphone Mới, Like New, Quốc Tế Giá Rẻ - Góp 0%. Cửa hàng luôn cập nhật mẫu iphone mới nhất ✓Đa dạng ✓Uy Tín ✓Giá Iphone Rẻ Nhất ✓Quà Hấp Dẫn">
    <meta property="og:locale" content="vi_VN">
    <meta property="og:image" content="https://mobileworld.com.vn/uploads/product/brand/apple.png">
    <meta property="fb:app_id" content="440100557569103">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Điện Thoại Iphone Mới Nhất, Iphone Like New, Quốc Tế Giá Rẻ">
    <meta name="twitter:description" content="Mua Điện Thoại Iphone Mới, Like New, Quốc Tế Giá Rẻ - Góp 0%. Cửa hàng luôn cập nhật mẫu iphone mới nhất ✓Đa dạng ✓Uy Tín ✓Giá Iphone Rẻ Nhất ✓Quà Hấp Dẫn">
@endsection

@section('link')
    <link href="https://mobileworld.com.vn/dien-thoai-iphone.html" rel="canonical">
    <link href="https://mobileworld.com.vn/dien-thoai-iphone.html" rel="alternate" media="handheld">
    <link id="ws-product-css" href="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/css/product.css?v=230314" rel="stylesheet" type="text/css">
    <link id="ws-slick-css" href="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/js/slick/css/slick.css?v=230314" rel="stylesheet" type="text/css">
    <link id="ws-comment-css" href="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/js/comment/comment.css?v=230314" rel="stylesheet" type="text/css">
    <link id="ws-single-css" href="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/css/detail.css?v=230314" rel="stylesheet" type="text/css">
    <link href="https://mobileworld.com.vn/uploads/favicon.webp?v=230314" rel="icon" type="image/png">
    <link href="https://mobileworld.com.vn/uploads/favicon.webp?v=230314" rel="apple-touch-icon" type="image/png">
@endsection

@section('css')
    <link id="ws-global-css" type="text/css" href="{{ asset('css/product/product.css') }}" rel="stylesheet" />
@endsection



@section('content')
<main id="ws-content" class="ws-content outer">
            <section class="breadcrumb">
                <div class="wrapper">
                @yield('breadcrumb')
                </div>
            </section>

            <form action="https://mobileworld.com.vn/san-pham.html" class="form-filter" method="post" accept-charset="utf-8"> <input type="hidden" name="do_submit" value="1"> <input type="hidden" name="show_more" value="0"> <input type="hidden" name="count" value="97"> <input type="hidden" name="show" value="20"> <input type="hidden" name="pagenow" value="product_category_brand"> <input type="hidden" name="sort" value="default"> <input type="hidden" name="cats" value="6"> <input type="hidden" name="tags" value="0"> <input type="hidden" name="brands" value="4"> <input type="hidden" name="status" value="0"> <input type="hidden" name="prices" value="0"> <input type="hidden" name="options" value="0"> <input type="hidden" name="keyword" value=""> <input type="hidden" name="promotion" value="0"> <input type="hidden" name="series_id" value="0"> <input type="hidden" name="action" value="product_load_more"> <input type="hidden" name="redirect" value="https://mobileworld.com.vn/dien-thoai-iphone.html">
                <div class="wrapper">
                    <div class="box-brands">
                        <a href="{{ route('phone_apple')}}" class="brand-item" title="Điện thoại iPhone">
                            <img src="https://mobileworld.com.vn/uploads/product/brand/thumbs/apple.webp" width="100" height="30" alt="Điện thoại iPhone">
                        </a>
                            <a href="{{ route('phone_samsung')}}" class="brand-item" title="Điện thoại Samsung">
                                <img src="https://mobileworld.com.vn/uploads/product/brand/thumbs/samsung.webp" width="100" height="30" alt="Điện thoại Samsung">
                        </a>
                            <a href="{{ route('phone_google')}}" class="brand-item" title="Điện thoại Google">
                                <img src="https://mobileworld.com.vn/uploads/product/brand/thumbs/google.webp" width="100" height="30" alt="Điện thoại Google">
                        </a>
                            <a href="{{ route('phone_xiaomi')}}" class="brand-item" title="Điện thoại Xiaomi">
                                <img src="https://mobileworld.com.vn/uploads/product/brand/thumbs/xiaomi.webp" width="100" height="30" alt="Điện thoại Xiaomi">
                        </a>
                            <a href="{{ route('phone_asus')}}" class="brand-item" title="Điện thoại Asus">
                                <img src="https://mobileworld.com.vn/uploads/product/brand/thumbs/asus.webp" width="100" height="30" alt="Điện thoại Asus">
                        </a>
                    </div>
                    
                    @yield('content_1')
                    
                     <!-- Câu hỏi thường gặp -->
                    <div id="box-faqs" class="box-faqs">
                        <div class="box-faqs-global">
                            <div class="box-title"> Câu hỏi thường gặp</div>
                            <div class="box-content">
                                <div class="panel-group" id="accordion-faqs">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"> <a href="#collapseOne-889" data-toggle="collapse" data-parent="#accordion-faqs" aria-expanded="false">Mobileworld có hỗ trợ giao hàng tận nhà không?</a> </h4>
                                        </div>
                                        <div id="collapseOne-889" class="panel-collapse collapse">
                                            <div class="panel-body entry">
                                                <ul>
                                                    <li>Chúng tôi chấp nhận giao hàng tận nơi đến các tỉnh thành trên toàn quốc. Chi phí vận chuyển sẽ được chúng tôi tính toán theo chi tiết của từng đơn hàng, và sẽ thông báo rõ ràng với bạn ngay khi chúng tôi liên hệ xác nhận đơn hàng của bạn.</li>
                                                    <li>Trong một số trường hợp hàng không có sẵn trong kho, chúng tôi sẽ chủ động thông báo thời gian gửi hàng cho bạn</li>
                                                    <li>Thời gian giao hàng từ 3-7 ngày ngay khi chúng tôi xác nhận hàng đã có sẵn (không tính các ngày nghỉ cuối tuần và lễ tết)</li>
                                                </ul>
                                                <p>Mời bạn xem chi tiết tại đây:&nbsp;<a href="/chinh-sach-thanh-toan-giao-hang.html">https://mobileworld.com.vn/chinh-sach-thanh-toan-giao-hang.html&nbsp;</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

</main>
@endsection

@section('js')
    
    <script id="ws-common-js" language="javascript" type="text/javascript" src="{{asset('js/product/product_1.js')}}"></script>

  
    <script id="ws-common-js" language="javascript" type="text/javascript" src="{{asset('js/product/product_2.js')}}"></script>

    <script id="ws-elevatezoom-js" src="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/js/elevatezoom/elevatezoom.js?v=230314" language="javascript" type="text/javascript"></script>
    <script id="ws-comment-js" src="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/js/comment/comment.js?v=230314" language="javascript" type="text/javascript"></script>
    <script id="ws-slick-js" src="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/js/slick/js/slick.js?v=230314" language="javascript" type="text/javascript"></script>
    <script id="ws-product-js" src="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/js/product.js?v=230314" language="javascript" type="text/javascript"></script>
    <script id="ws-product-json" type="application/ld+json">
        {
            "@context": "https:\/\/schema.org",
            "@type": "Product",
            "name": "iPhone 8 64GB M\u1edbi 99% Like new - Qu\u1ed1c t\u1ebf",
            "image": "https:\/\/mobileworld.com.vn\/uploads\/product\/11_2020\/iphone-8-64gb-moi-99-like-new-quoc-te.jpg",
            "description": "Mua \u0111i\u1ec7n tho\u1ea1i iPhone 8 64GB M\u1edbi 99% Like new \u2705 Ch\u00ednh h\u00e3ng \u2705Uy t\u00edn \u2705Gi\u00e1 r\u1ebb nh\u1ea5t \u2705Tr\u1ea3 G\u00f3p 0% \u2705Qu\u00e0 t\u1eb7ng h\u1ea5p d\u1eabn. Xem ngay",
            "sku": "1028979232",
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
                "datePublished": "11:41, 13\/11\/2020"
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": 4,
                "reviewCount": 22
            },
            "offers": {
                "@type": "Offer",
                "url": "https:\/\/mobileworld.com.vn\/iphone-8-64gb-moi-99-like-new-quoc-te.html",
                "priceCurrency": "VND",
                "price": "4490000",
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
    <script id="ws-product_category_brand-json" type="application/ld+json">
        {
            "@context": "https:\/\/schema.org",
            "@type": "FAQPage",
            "@id": "https:\/\/mobileworld.com.vn\/dien-thoai-iphone.html#total_comment",
            "url": "https:\/\/mobileworld.com.vn\/dien-thoai-iphone.html",
            "mainEntity": [{
                "@type": "Question",
                "name": "Mobileworld c\u00f3 h\u1ed7 tr\u1ee3 giao h\u00e0ng t\u1eadn nh\u00e0 kh\u00f4ng?",
                "acceptedAnswer": [{
                    "@type": "Answer",
                    "text": "Ch\u00fang t\u00f4i ch\u1ea5p nh\u1eadn giao h\u00e0ng t\u1eadn n\u01a1i \u0111\u1ebfn c\u00e1c t\u1ec9nh th\u00e0nh tr\u00ean to\u00e0n qu\u1ed1c. Chi ph\u00ed v\u1eadn chuy\u1ec3n s\u1ebd \u0111\u01b0\u1ee3c ch\u00fang t\u00f4i t\u00ednh to\u00e1n theo chi ti\u1ebft c\u1ee7a t\u1eebng \u0111\u01a1n h\u00e0ng, v\u00e0 s\u1ebd th\u00f4ng b\u00e1o r\u00f5 r\u00e0ng v\u1edbi b\u1ea1n ngay khi ch\u00fang t\u00f4i li\u00ean h\u1ec7 x\u00e1c nh\u1eadn \u0111\u01a1n h\u00e0ng c\u1ee7a b\u1ea1n.\tTrong m\u1ed9t s\u1ed1 tr\u01b0\u1eddng h\u1ee3p h\u00e0ng kh\u00f4ng c\u00f3 s\u1eb5n trong kho, ch\u00fang t\u00f4i s\u1ebd ch\u1ee7 \u0111\u1ed9ng th\u00f4ng b\u00e1o th\u1eddi gian g\u1eedi h\u00e0ng cho b\u1ea1n\tTh\u1eddi gian giao h\u00e0ng t\u1eeb 3-7 ng\u00e0y ngay khi ch\u00fang t\u00f4i x\u00e1c nh\u1eadn h\u00e0ng \u0111\u00e3 c\u00f3 s\u1eb5n (kh\u00f4ng t\u00ednh c\u00e1c ng\u00e0y ngh\u1ec9 cu\u1ed1i tu\u1ea7n v\u00e0 l\u1ec5 t\u1ebft)M\u1eddi b\u1ea1n xem chi ti\u1ebft t\u1ea1i \u0111\u00e2y:&nbsp;https:\/\/mobileworld.com.vn\/chinh-sach-thanh-toan-giao-hang.html&nbsp;"
                }]
            }]
        }
    </script>
@endsection