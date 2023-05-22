@foreach($products as $product)
    <a href="phone/{{$product->id}}" class="product" data-id="736">
        <span class="img">
            <img src="{{asset($product->main_img)}}" alt="" width="50" height="50" class="img-cover">
        </span>
        <span class="txt">
            {{$product->title}}
            <ul class="price-text">
                <li class="price">
                    <ins>{{number_format($product->discount,0,'.','.') }}₫</ins>
                </li>
            </ul>
        </span>
    </a>
@endforeach
