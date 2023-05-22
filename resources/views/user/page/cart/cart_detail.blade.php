@extends('user.index')

@section('header')
<title>Giỏ hàng chi tiết</title>
@endsection

@section('meta')
<meta name="theme-color" content="#fcde04">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Giỏ hàng">
<meta name="keywords" content="Giỏ hàng">
<meta property="og:type" content="article">
<meta property="og:site_name" content="Mobileworld">
<meta property="og:title" content="Giỏ hàng">
<meta property="og:description" content="Giỏ hàng">
<meta property="og:locale" content="vi_VN">
<meta property="og:image" content="https://mobileworld.com.vn/uploads/">
<meta property="og:image:alt" content="Thông tin đơn hàng">
<meta property="fb:app_id" content="440100557569103">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Giỏ hàng">
<meta name="twitter:description" content="Giỏ hàng">
@endsection

@section('link')
<link href="https://mobileworld.com.vn/uploads/favicon.webp?v=230317" rel="icon" type="image/png">
<link href="https://mobileworld.com.vn/uploads/favicon.webp?v=230317" rel="apple-touch-icon" type="image/png">
@endsection

@section('css')

<link href="{{ asset('css/cart/cart.css') }}" rel="stylesheet" id="ws-global-css" type="text/css" />
<link href="{{ asset('css/cart/order.css') }}" rel="stylesheet" id="ws-global-css" type="text/css" />

@endsection

@section('content')
<main id="ws-content" class="ws-content outer">
    
    @if(session('Cart'))
    <section class="breadcrumb">
        <div class="wrapper">
            <ul class="items" itemtype="http://schema.org/BreadcrumbList" itemscope>
                <li class="breadrumb-home breadrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <a href="{{route('home')}}" itemprop="item"><span itemprop="name">Trang chủ</span></a>
                    <meta itemprop="position" content="1">
                </li>
                <li class="breadrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <span itemprop="name">Thông tin đơn hàng</span>
                    <meta itemprop="position" content="2">
                </li>
            </ul>
        </div>
    </section>
    <section class="box-title">
        <div class="wrapper">
            <div class="post-title">
                <h1>Thông tin đơn hàng</h1>
            </div>
        </div>
    </section>
    <section class="box-content">
        <div class="wrapper">
            <form action="{{route('AddOder')}}" method="post" class="cart-inner step2" accept-charset="utf-8">
                @csrf
                <div class="box box-items" id="list-cart">
                    <table class="table">
                        <thead>
                            <th class="col col-name text-center">Sản phẩm</th>
                            <th class="col col-price text-center hidden-xs">Giá sản phẩm</th>
                            <th class="col col-quantity text-center hidden-xs">Số lượng</th>
                            <th class="col col-subtotal text-center hidden-xs">Thành tiền</th>

                        </thead>
                        <tbody>
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
                    </table>
                </div>
                <div class="box box-info">
                    <div class="content-left">
                        <div id="box-dinfo" class="box-dinfo box-customer">
                            <div class="box-head"> <span>Thông tin thanh toán</span> </div>
                            <div class="box-body">
                                <div id="field-d_name" class="form-field field-d_name ">
                                    <div class="form-label"> <label for="d_name">Họ tên</label></div>
                                    <div class="form-input"> 
                                        <input type="text" name="name" value="{{ Auth::check() ? Auth::user()->name : '' }}" id="name" class="form-control"> 
                                    <small class="form-text text-muted text-danger"><span style="color: red;">{{ $errors->first('name') }}</span></small>
                                    </div>
                                </div>
                                <div id="field-d_phone" class="form-field field-d_phone ">
                                    <div class="form-label"> <label for="d_phone">Điện thoại</label></div>
                                    <div class="form-input"> 
                                        <input type="text" name="phone_number" value="{{ Auth::check() ? Auth::user()->phone_number : '' }}" id="phone_number" class="form-control"> 
                                    <small class="form-text text-muted text-danger"><span style="color: red;">{{ $errors->first('phone_number') }}</span></small>

                                </div>
                                </div>
                                <div id="field-d_email" class="form-field field-d_email">
                                    <div class="form-label"> <label for="d_email">Email</label></div>
                                    <div class="form-input"> 
                                        <input type="email" name="email" value="{{ Auth::check() ? Auth::user()->email : '' }}" id="email" class="form-control"> 
                                        <small class="form-text text-muted text-danger"><span style="color: red;">{{ $errors->first('email') }}</span></small>
                                    </div>

                                </div>
                                <div id="field-d_address" class="form-field field-d_address">
                                    <div class="form-label"> <label for="d_address">Địa chỉ</label></div>
                                    <div class="form-input">
                                        <input type="text" name="address" value="{{ Auth::check() ? Auth::user()->address : '' }}" id="address" class="form-control">
                                        <small class="form-text text-muted text-danger"><span style="color: red;">{{ $errors->first('address') }}</span></small>
                                    </div>
                                    </br>

                                </div>
                                <div id="field-d_address" class="form-field field-d_address">
                                    <div class="form-label"> <label for="d_note">Ghi chú</label></div>
                                    <div class="form-input"> 
                                        <input type="text" name="note" value="" id="note" class="form-control"> 
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="box-payment" class="box box-payment box-table radio">
                    <div class="box-head"> <span>Phương thức thanh toán</span> </div>
                    <div class="box-body">
                        <ul class="items">
                            <li><label class="item"><input type="radio" name="payment" value="cash" checked="checked">
                                    <div class="box-desc">
                                        <h4>Thanh toán COD</h4>
                                        <div>Khách hàng thanh toán tiền mặt khi nhân viên tới giao hàng (áp dụng giao hàng trong nội thành)</div>
                                    </div>
                                </label></li>
                            <li><label class="item"><input type="radio" name="payment" value="transfer">
                                    <div class="box-desc">
                                        <h4>Thanh toán chuyển khoản</h4>
                                        <div>
                                            <p>Thanh toán qua ngân hàng, thông tin chuyển khoản:<br /> <strong>HỆ THỐNG CỬA HÀNG MOBILE WORLD</strong><br /> Tên tài khoản: <strong>Nguyễn Xuân Thành</strong><br /> Số tài khoản: <strong>0855562308</strong><br /> Ngân hàng <strong>Techcombank</strong>&nbsp;- Chi nhánh Thanh Xuân.&nbsp;</p>
                                        </div>
                                    </div>
                                </label></li>
                        </ul>
                    </div>
                </div>
                <div class="box-button text-center"> <button type="submit" class="btnCheckout">Hoàn thành</button> </div>
            </form>
        </div>
    </section>
    @else
    <section class="box-title"> <div class="wrapper"> <div class="post-title"> <h1>Giỏ hàng</h1></div> </div> </section>
    <section class="box-content"> <div class="wrapper"> <div class="cart-empty alert alert-warning no-margin"> <p><strong>Giỏ hàng của bạn đang rỗng.</strong></p> <p>Nếu bạn đã cố gắng thêm sản phảm vào giỏ hàng nhưng giỏ hàng vẫn rỗng, có lẽ do trình duyệt web của bạn đã tắt chức năng lưu Cookies. Vui lòng kiểm tra cấu hình của trình duyệt web để đảm bảo rằng trình duyệt web của bạn hỗ trợ tốt chức năng lưu Cookies.</p></div></div> </section>
    @endif
</main>
@endsection

@section('js')

@endsection