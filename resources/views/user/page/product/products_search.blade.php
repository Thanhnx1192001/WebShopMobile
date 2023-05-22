@extends('user.page.product.tpl_phone')
@section('breadcrumb')
<ul class="items" itemtype="http://schema.org/BreadcrumbList" itemscope>
    <li class="breadrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <a href="{{ route('home')}}" itemprop="item"><span itemprop="name">Trang chủ</span></a>
        <meta itemprop="position" content="1">
    </li>
    <li class="breadrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <span itemprop="name">Sản phẩm</span>
        <meta itemprop="position" content="2">
    </li>
</ul>
@endsection

@section('content_1')
<!-- Dưới lọc danh sách -->
<!-- sản phẩm -->
<section id="box-product_new" class="box-product_new box-table">
    <div class="wrapper">
        <div class="box-inner">
            <div class="box-head">
                <div class="ws-name">{{count($products)}} Sản phẩm </div>
            </div>
            <div class="box-body">
                <div class="products">
                    @foreach($products as $product)
                    <div class="product" data-product_id="720">
                        <div class="img img-center">
                            <a href="{{ route('product_detail',$product->id)}}" title="">
                                <img alt="{{ route('product_detail',$product->id)}}" title="" width="220" height="220" class="lazyload" src="{{$product->main_img}}">
                            </a>
                        </div>
                        <div class="txt">
                            <!-- tên -->
                            <h2 class=pname>
                                <a href="{{ route('product_detail',$product->id)}}"> {{$product->title}} {{$product->memory}}</a>
                            </h2>
                            <!-- giá -->
                            <ul class="price-text price-html" data-stock="1">
                                <li class="price"> {{number_format($product->discount,0,'.','.') }}₫</li>
                            </ul>
                            @php
                            $feed_back = null;
                            foreach($feed_back_products as $row){
                            if($row->id == $product->id){
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
                    @endforeach
                </div>
            </div>
            <!-- <div class="box-foot"><a href="/san-pham.html" class="ws-btn">Xem tất cả {{count($products)}} Sản phẩm</a></div> -->
        </div>
    </div>
</section>


@endsection