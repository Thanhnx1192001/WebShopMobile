@if(session()->has('Cart') != null)
<div class="mini-cart-list">
    <div class="inner">
        @foreach(session('Cart')->products as $item)
        <div class="mini-cart-item cart-item">
            <div class="inner">
                <div class="thumb"> <a href="{{route('product_detail',$item['productInfo']->id)}}" class="img-popup" rel="gallery" title=""><img src="{{asset($item['productInfo']->main_img)}}"></a></div>
                <div class="text"> <a href="{{route('product_detail',$item['productInfo']->id)}}">{{$item['productInfo']->title}}</a>
                    <div class="item-price"> {{number_format(($item['productInfo']->discount)*$item['quanty'],0,'.','.') }}₫</div>
                </div>
                <div class="delcart">
                    <div class="item-qty">x {{$item['quanty']}}</div> <a href="javascript:" data-id="{{$item['productInfo']->id}}" class="delete-item-cart">Xóa</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="mini-cart-total"> <span>Tổng cộng:</span> <span class="total">{{number_format(session('Cart')->totalPrice,0,'.','.') }}₫</span> <a href="/gio-hang.html" class="ws-btn">Thanh toán</a></div>
    <input hidden id="total-quanty-cart" type="number" value="{{session('Cart')->totalQuanty}}">
</div>
@else
<div class="mini-cart-list">
    <input hidden id="total-quanty-cart" type="number" value="0">
    <div class="mini-cart-empty"> Giỏ hàng của bạn đang rỗng<a href="{{route('showCart')}}">Mua ngay</a></div>
</div>
@endif