<table class="table">
    <thead>
        <th class="col col-name text-center">Sản phẩm</th>
        <th class="col col-price text-center hidden-xs">Giá sản phẩm</th>
        <th class="col col-quantity text-center hidden-xs">Số lượng</th>
        <th class="col col-subtotal text-center hidden-xs">Thành tiền</th>

    </thead>
    <tbody>
        @if(session()->has('Cart') != null)
        @foreach(session('Cart')->products as $item)
        <tr class="cart-item">
            <td class="col col-name text-center">
                <div class="info">
                    <div class="img"> <a href="{{route('product_detail',$item['productInfo']->id)}}"><img src="{{asset($item['productInfo']->main_img)}}" width="80" height="80" class="img-cover" alt=""></a>
                        <div class="remove"> <a href="javascript:" onclick="DeleteListItemCart({{$item['productInfo']->id}})" class="remove-item fa-trash-o"></a> </div>
                    </div>
                    <div class="txt"> <a href="{{route('product_detail',$item['productInfo']->id)}}">{{$item['productInfo']->title}} - {{$item['productInfo']->memory}}</a>
                        <div class="dropdown select-option"> Màu sắc : {{$item['productInfo']->color}}</div>
                    </div>
                </div>
            </td>
            <td class="col col-price text-center hidden-xs"> <strong class="price">{{number_format($item['productInfo']->discount,0,'.','.') }}₫</strong> </td>
            <td class="col col-quantity text-center hidden-xs">
                <div class="qty">
                    <a onclick="MinusItemCart({{$item['productInfo']->id}})" class="btn-press minus fa-minus"></a>
                    <input type="text" value="{{$item['quanty']}}" required="1" minlength="1" class="quantity">
                    <a onclick="AddItemCart({{$item['productInfo']->id}})" class="btn-press plus fa-plus"></a>
                </div>
            </td>
            <td class="col col-subtotal text-center subtotal hidden-xs">{{number_format(($item['productInfo']->discount)*$item['quanty'],0,'.','.') }}₫</td>
        </tr>
        @endforeach
        
    </tbody>
    <tfoot>
        <td colspan="2" class="hidden-xs">
        </td>
        <td class="text-center">Tổng cộng:</td>
        <td class="col col-subtotal text-center"> <strong id="pricecart" class="total-price">{{number_format(session('Cart')->totalPrice,0,'.','.') }}₫</strong> </td>
    </tfoot>
    @endif
</table>
