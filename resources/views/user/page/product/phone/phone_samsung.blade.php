@extends('user.page.product.tpl_phone')
@section('breadcrumb')
                    <ul class="items" itemtype="http://schema.org/BreadcrumbList" itemscope>
                        <li class="breadrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <a href="{{ route('home')}}" itemprop="item"><span itemprop="name">Trang chủ</span></a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li class="breadrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <a href="{{ route('phone')}}" itemprop="item"><span itemprop="name">Điện thoại</span></a>
                            <meta itemprop="position" content="2">
                        </li>
                        <li class="breadrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <span itemprop="name">Điện thoại samsung</span>
                            <meta itemprop="position" content="3">
                        </li>
                    </ul>
@endsection
@section('content_1')
<!-- Lọc danh sách -->
<ul id="filters" class="filters">
    <li>Lọc danh sách</li>
    <li class="nav-item dropdown">
        <div id="box-filter-brands" class="dropdown filter-brands filter-radio">
            <button class="dropdown-toggle" data-toggle="dropdown">
                <div class="active">Điện thoại</div>
            </button>
            <ul class="items dropdown-menu">
                <li><a href="{{ route('phone')}}" class="active">Điện Thoại</a></li>
                <li><a href="{{ route('tablet')}}" class="">Máy tính bảng</a></li>
            </ul>
        </div>
    </li>
    <li>
        <div id="box-filter-brands" class="dropdown filter-brands filter-radio">
            <button class="dropdown-toggle" data-toggle="dropdown">
                <div class="active"><i>Thương hiệu:</i>Samsung</div>
            </button>
            <ul class="items dropdown-menu">
                <li><a href="{{ route('phone')}}" class="">Tất cả</a></li>
                <li><a href="{{ route('phone_apple')}}" class="">Apple</a></li>
                <li><a href="{{ route('phone_samsung')}}" class="active">Samsung</a></li>
                <li><a href="{{ route('phone_xiaomi')}}" class="">Xiaomi</a></li>
                <li><a href="{{ route('phone_google')}}" class="">Google</a></li>
                <li><a href="{{ route('phone_asus')}}" class="">ASUS</a></li>
            </ul>
        </div>
    </li>
    <li>
        <div id="box-filter-options" class="dropdown filter-options filter-radio">
            <button class="dropdown-toggle" data-toggle="dropdown">
                <div class="active"><i>Dung lượng: </i>
                    @if(Session::get('memory'))
                    @if(Session::get('memory')== 1024)
                    1TB
                    @else
                    {{ Session::get('memory') }}GB
                    @endif
                    @else
                    Tất cả
                    @endif
                </div>
            </button>

            <ul class="items dropdown-menu">
                <li><a href="{{ route('phone_samsung')}}" class="{{ request('memory') == '' ? 'active' : '' }}">Tất cả</a></li>
                <li><a href="{{ route('phone_samsung',['memory'=>64,'min_price' => Session::get('min_price'),'max_price' => Session::get('max_price'),'sort' => Session::get('sort')])}}" class="{{ request('memory') == 64 ? 'active' : '' }}">64GB</a></li>
                <li><a href="{{ route('phone_samsung',['memory'=>128,'min_price' => Session::get('min_price'),'max_price' => Session::get('max_price'),'sort' => Session::get('sort')])}}" class="{{ request('memory') == 128 ? 'active' : '' }}">128GB</a></li>
                <li><a href="{{ route('phone_samsung',['memory'=>256,'min_price' => Session::get('min_price'),'max_price' => Session::get('max_price'),'sort' => Session::get('sort')])}}" class="{{ request('memory') == 256 ? 'active' : '' }}">256GB</a></li>
                <li><a href="{{ route('phone_samsung',['memory'=>512,'min_price' => Session::get('min_price'),'max_price' => Session::get('max_price'),'sort' => Session::get('sort')])}}" class="{{ request('memory') == 512 ? 'active' : '' }}">512GB</a></li>
                <li><a href="{{ route('phone_samsung',['memory'=>1024,'min_price' => Session::get('min_price'),'max_price' => Session::get('max_price'),'sort' => Session::get('sort')])}}" class="{{ request('memory') == 1024 ? 'active' : '' }}">1TB</a></li>
            </ul>
        </div>
    </li>
    <li>
        <div id="box-filter-prices" class="dropdown filter-prices filter-radio"> <button class="dropdown-toggle" data-toggle="dropdown">
                <div class="active"><i>Mức giá: </i>
                    @if(Session::get('min_price') and Session::get('max_price'))
                    @if( Session::get('min_price') == 1 and Session::get('max_price')==2000000 )
                    Dưới 2 triệu
                    @elseif(Session::get('min_price') == 20000000 and Session::get('max_price')==99999999 )
                    Trên 20 Triệu
                    @else
                    {{ Session::get('min_price')/1000000 }} - {{ Session::get('max_price')/1000000 }} Triệu
                    @endif
                    @else
                    Tất cả
                    @endif
                </div>
            </button>
            <ul class="items dropdown-menu">
                <li><a href="{{ route('phone_samsung',['memory' => Session::get('memory'), 'min_price' => '', 'max_price' => '','sort' => Session::get('sort')])}}" class="{{( request('min_price') == '' and request('max_price') == '') ? 'active' : '' }}">Tất cả</a></li>
                <li><a href="{{ route('phone_samsung',['memory' => Session::get('memory'),'min_price' => 1, 'max_price' => 2000000,'sort' => Session::get('sort')])}}" class="{{( request('min_price') == 0 and request('max_price') == 2000000) ? 'active' : '' }}">Dưới 2 triệu</a></li>
                <li><a href="{{ route('phone_samsung',['memory' => Session::get('memory'),'min_price' => 2000000, 'max_price' => 4000000,'sort' => Session::get('sort')])}}" class="{{( request('min_price') == 2000000 and request('max_price') == 4000000) ? 'active' : '' }}">Từ 2-4 triệu</a></li>
                <li><a href="{{ route('phone_samsung',['memory' => Session::get('memory'),'min_price' => 4000000, 'max_price' => 7000000,'sort' => Session::get('sort')])}}" class="{{( request('min_price') == 4000000 and request('max_price') == 7000000) ? 'active' : '' }}">Từ 4-7 triệu</a></li>
                <li><a href="{{ route('phone_samsung',['memory' => Session::get('memory'),'min_price' => 7000000, 'max_price' => 13000000,'sort' => Session::get('sort')])}}" class="{{( request('min_price') == 7000000 and request('max_price') == 13000000) ? 'active' : '' }}">Từ 7-13 triệu</a></li>
                <li><a href="{{ route('phone_samsung',['memory' => Session::get('memory'),'min_price' => 13000000, 'max_price' => 20000000,'sort' => Session::get('sort')])}}" class="{{( request('min_price') == 13000000 and request('max_price') == 20000000) ? 'active' : '' }}">Từ 13-20 triệu</a></li>
                <li><a href="{{ route('phone_samsung',['memory' => Session::get('memory'),'min_price' => 20000000, 'max_price' => 99999999,'sort' => Session::get('sort')])}}" class="{{( request('min_price') == 20000000 and request('max_price') == 99999999) ? 'active' : '' }}">trên 20 triệu</a></li>
            </ul>
        </div>
    </li>
    <li>
        <div id="box-filter-sort" class="dropdown filter-sort filter-radio"> <button class="dropdown-toggle" data-toggle="dropdown">
                <div class="active"><i>Xếp theo:</i>
                    @if(Session::get('sort')=='asc')
                    Giá thấp đến cao
                    @elseif((Session::get('sort')=='desc'))
                    Giá cao đến thấp
                    @else
                    Tất cả
                    @endif
                </div>
            </button>
            <ul class="items dropdown-menu">
                <li><a href="{{ route('phone_samsung',['memory' => Session::get('memory'),'min_price' => Session::get('min_price'),'max_price' => Session::get('max_price'),'sort'=>''])}}" class="{{ request('sort') == ''  ? 'active' : '' }}">Mới nhất</a></li>
                <li><a href="{{ route('phone_samsung',['memory' => Session::get('memory'),'min_price' => Session::get('min_price'),'max_price' => Session::get('max_price'),'sort'=>'asc'])}}" class="{{ request('sort') == 'asc'  ? 'active' : '' }}">Giá thấp đến cao</a></li>
                <li><a href="{{ route('phone_samsung',['memory' => Session::get('memory'),'min_price' => Session::get('min_price'),'max_price' => Session::get('max_price'),'sort'=>'desc'])}}" class="{{ request('sort') == 'desc'  ? 'active' : '' }}">Giá cao đến thấp</a></li>
            </ul>
        </div>
    </li>
</ul>
<!-- Dưới lọc danh sách -->
<ul id="series" class="series">
    <li><a href="{{ route('phone_samsung',['title'=>'Galaxy S23'])}}" class="{{ request('title') == 'Galaxy S23'  ? 'active' : '' }}" id="series-176">Galaxy S23 Series</a></li>
    <li><a href="{{ route('phone_samsung',['title'=>'Galaxy Z Fold4'])}}"class="{{ request('title') == 'Galaxy Z Fold4'  ? 'active' : '' }}" id="series-160">Galaxy Z Fold4</a></li>
    <li><a href="{{ route('phone_samsung',['title'=>'Galaxy S22'])}}"class="{{ request('title') == 'Galaxy S22'  ? 'active' : '' }}" id="series-86">Galaxy S22 Series</a></li>
    <li><a href="{{ route('phone_samsung',['title'=>'Galaxy S21'])}}"class="{{ request('title') == 'Galaxy S21'  ? 'active' : '' }}" id="series-87">Galaxy S21 Series</a></li>
    <li><a href="{{ route('phone_samsung',['title'=>'Galaxy Note 20'])}}"class="{{ request('title') == 'Galaxy Note 20'  ? 'active' : '' }}" id="series-88">Galaxy Note 20 Series</a></li>
    <li><a href="{{ route('phone_samsung',['title'=>'Galaxy S20'])}}"class="{{ request('title') == 'Galaxy S20'  ? 'active' : '' }}" id="series-90">Galaxy S20 Series</a></li>
    <li><a href="{{ route('phone_samsung',['title'=>'Galaxy Note 10'])}}"class="{{ request('title') == 'Galaxy Note 10'  ? 'active' : '' }}" id="series-89">Galaxy Note 10 Series</a></li>
    <li><a href="{{ route('phone_samsung',['title'=>'Galaxy S10'])}}"class="{{ request('title') == 'Galaxy S10'  ? 'active' : '' }}" id="series-91">Galaxy S10 Plus | S10 5G</a></li>
    <li><a href="{{ route('phone_samsung',['title'=>'Galaxy Z Fold3'])}}"class="{{ request('title') == 'Galaxy Z Folde3'  ? 'active' : '' }}" id="series-95">Galaxy Z Fold3</a></li>
</ul>
<!-- sản phẩm -->

@foreach($manufacturers as $manufacturer)
<section id="box-product_brand-4" class="outer box-table">
    @php
    $list_product = [];
    foreach($products as $product){
    if ($product->manufacturer_id == $manufacturer->id){
    $list_product[]=$product;
    }
    }
    @endphp
    <div class="wrapper">
        <div class="box-inner">
            <div class="box-head">
                <h2 class="name">
                    {{count($list_product)}}
                    {{$categories[0]->name}}
                    Samsung
                </h2>
            </div>
            <div class="box-body">
                <div class="products">
                    @for ($product = 0; $product < count($list_product); $product++) @if ($list_product[$product]->manufacturer_id == $manufacturer->id)
                        <div class="product" data-product_id="360">
                            <!-- Hình ảnh  -->
                            <div class="img img-center">
                                <a href="{{ route('product_detail',$list_product[$product]->id)}}" title="">
                                    <img width="220" height="220" class="lazyload" src="{{asset($list_product[$product]->main_img)}}">
                                </a>
                            </div>
                            <!-- Tên và giá tiền -->
                            <div class="txt">
                                <!-- tên -->
                                <h2 class=pname>
                                    <a href="{{ route('product_detail',$list_product[$product]->id)}}"> {{$list_product[$product]->title}} {{$list_product[$product]->memory}}</a>
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
        </div>
    </div>
</section>
<div id="productPagination"></div>
<div id="productList">


<script>
    var productsPerPage = 5; // Số sản phẩm hiển thị trên mỗi trang
    var currentPage = 1; // Trang hiện tại

    var productList = document.getElementById('productList');
    var productPagination = document.getElementById('productPagination');

    function showProducts(page) {
        var startIndex = (page - 1) * productsPerPage;
        var endIndex = startIndex + productsPerPage;

        var products = document.getElementsByClassName('product');
        for (var i = 0; i < products.length; i++) {
            if (i >= startIndex && i < endIndex) {
                products[i].style.display = 'block';
            } else {
                products[i].style.display = 'none';
            }
        }
    }

    function updatePagination() {
        var totalProducts = document.getElementsByClassName('product').length;
        var totalPages = Math.ceil(totalProducts / productsPerPage);

        productPagination.innerHTML = '';

        var prevButton = document.createElement('button');
        prevButton.innerText = 'Chuyển tiếp';
        prevButton.disabled = currentPage === 1;
        prevButton.addEventListener('click', function () {
            if (currentPage > 1) {
                currentPage--;
                showProducts(currentPage);
                updatePagination();
            }
        });
        productPagination.appendChild(prevButton);

        for (var i = 1; i <= totalPages; i++) {
            var pageButton = document.createElement('button');
            pageButton.innerText = i;
            pageButton.classList.add('page');
            pageButton.addEventListener('click', function () {
                currentPage = parseInt(this.innerText);
                showProducts(currentPage);
                updatePagination();
            });
            if (i === currentPage) {
                pageButton.classList.add('active');
            }
            productPagination.appendChild(pageButton);
        }

        var nextButton = document.createElement('button');
        nextButton.innerText = 'Chuyển tiếp';
        nextButton.disabled = currentPage === totalPages;
        nextButton.addEventListener('click', function () {
            if (currentPage < totalPages) {
                currentPage++;
                showProducts(currentPage);
                updatePagination();
            }
        });
        productPagination.appendChild(nextButton);
    }

    showProducts(currentPage);
    updatePagination();
</script>
@endforeach


@endsection