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
    <meta property="og:url" content="https://mobileworld.com.vn/gio-hang.html">
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
    <link href="https://mobileworld.com.vn/gio-hang.html" rel="canonical">
    <link href="https://mobileworld.com.vn/gio-hang.html" rel="alternate" media="handheld">
    <link id="ws-order-css" href="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/css/order.css?v=230317" rel="stylesheet" type="text/css">
    <link href="https://mobileworld.com.vn/uploads/favicon.webp?v=230317" rel="icon" type="image/png">
    <link href="https://mobileworld.com.vn/uploads/favicon.webp?v=230317" rel="apple-touch-icon" type="image/png">
@endsection

@section('css')
    <link href="{{ asset('css/cart/cart.css') }}" rel="stylesheet" id="ws-global-css" type="text/css" />
@endsection

@section('content')
        <main id="ws-content" class="ws-content outer">
            <section class="breadcrumb">
                <div class="wrapper">
                    <ul class="items" itemtype="http://schema.org/BreadcrumbList" itemscope>
                        <li class="breadrumb-home breadrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <a href="https://mobileworld.com.vn" itemprop="item"><span itemprop="name">Trang chủ</span></a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li class="breadrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <span itemprop="name">Thông tin đơn hàng</span>
                            <meta itemprop="position" content="1">
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
                    <form action="https://mobileworld.com.vn/gio-hang.html" id="cart-list" class="cart-inner step2" onsubmit="return order.checkout(this)" method="post" accept-charset="utf-8"> <input type="hidden" name="step" value="2"> <input type="hidden" name="s_price" value="0"> <input type="hidden" name="checkout" value="1"> <input type="hidden" name="action" value="checkout_cart">
                        <div class="box box-items">
                            <table class="table">
                                <thead>
                                    <th class="col col-name text-center">Sản phẩm</th>
                                    <th class="col col-price text-center hidden-xs">Giá sản phẩm</th>
                                    <th class="col col-quantity text-center hidden-xs">Số lượng</th>
                                    <th class="col col-subtotal text-center hidden-xs">Thành tiền</th>
                                </thead>
                                <tbody>
                                    <tr id="row-084b6fbb10729ed4da8c3d3f5a3ae7c9" class="cart-item">
                                        <td class="col col-name text-center">
                                            <div class="info">
                                                <div class="img"> <a href="/galaxy-note-20-ultra-5g-moi-99-like-new-2-sim-ban-my-chip-snapdragon-865.html"><img src="https://mobileworld.com.vn/uploads/product/07_2020/thumbs/galaxy-note-20-ultra-5g-moi-99-like-new-2-sim-ban-my-chip-snapdragon-865-trang.webp" width="80" height="80" class="img-cover" alt=""></a>
                                                    <div class="remove"> <button type="button" class="remove-item fa-trash-o"></button> </div>
                                                </div>
                                                <div class="txt"> <a href="/galaxy-note-20-ultra-5g-moi-99-like-new-2-sim-ban-my-chip-snapdragon-865.html">Galaxy Note 20 Ultra 5G 128GB Mới 99% Like new - 2 sim Bản Mỹ ( chip snapdragon 865+)</a>
                                                    <div class="dropdown select-option"><button type="button" data-toggle="dropdown" class="dropdown-toggle">Trắng<span class="caret"></span></button>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <div class="item active" data-id="26"><img src="https://mobileworld.com.vn/uploads/product/07_2020/thumbs/galaxy-note-20-ultra-5g-moi-99-like-new-2-sim-ban-my-chip-snapdragon-865-trang.webp" width="80" alt="Trắng">Trắng</div>
                                                            </li>
                                                            <li>
                                                                <div class="item" data-id="24"><img src="https://mobileworld.com.vn/uploads/product/07_2020/thumbs/galaxy-note-20-ultra-5g-moi-99-like-new-2-sim-ban-my-chip-snapdragon-865-den.webp" width="80" alt="Đen">Đen</div>
                                                            </li>
                                                            <li>
                                                                <div class="item" data-id="44"><img src="https://mobileworld.com.vn/uploads/product/07_2020/thumbs/galaxy-note-20-ultra-5g-moi-99-like-new-2-sim-ban-my-chip-snapdragon-865-dong.webp" width="80" alt="Đồng">Đồng</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col col-price text-center hidden-xs"> <strong class="price">9.990.000₫</strong> </td>
                                        <td class="col col-quantity text-center hidden-xs">
                                            <div class="qty"> <button type="button" class="btn-press minus fa-minus"></button> <input type="text" name="quantity[084b6fbb10729ed4da8c3d3f5a3ae7c9]" value="1" required="1" minlength="1" class="quantity" onkeypress="return core.isNum(event)"> <button type="button" class="btn-press plus fa-plus"></button> </div>
                                        </td>
                                        <td class="col col-subtotal text-center subtotal hidden-xs">9.990.000₫</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <td colspan="2" class="hidden-xs">
                                        <div class="note-cart"> <i class="fa fa-phone"></i> Thắc mắc vui lòng liên hệ: <a href="tel:0961273979" rel="nofoflow">0961 273 979</a></div>
                                    </td>
                                    <td class="text-center">Tổng cộng:</td>
                                    <td class="col col-subtotal text-center"> <strong id="pricecart" class="total-price">9.990.000₫</strong> </td>
                                </tfoot>
                            </table>
                        </div>
                        <div id="box-coupon" class="box box-coupon box-table">
                            <div class="box-head"> <span>Mã khuyến mãi / Quà tặng</span> </div>
                            <div class="box-body">
                                <div class="coupon-form"> <input type="text" name="coupon_code" value="" id="coupon_code" class="form-control" placeholder="Nhập mã Khuyến mãi / Quà tặng"> <button type="button" class="btn btn-coupon">Áp dụng</button> <a href="javascript:global.jAlert({content: 'OK', btnClass: 'btn-red'})" class="btn-link">Chọn mã khuyến mãi</a> </div>
                                <div class="coupon-note"> <span>Có thể áp dụng đồng thời nhiều mã</span> <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="Áp dụng tối đa 1 mã giảm giá và 1 mã freeship"></i> </div>
                            </div>
                        </div>
                        <div class="box box-info">
                            <div class="content-left">
                                <div id="box-dinfo" class="box-dinfo box-customer">
                                    <div class="box-head"> <span>Thông tin thanh toán</span> </div>
                                    <div class="box-body">
                                        <div id="field-d_name" class="form-field field-d_name required">
                                            <div class="form-label"> <label for="d_name">Họ tên</label></div>
                                            <div class="form-input"> <input type="text" name="d_name" value="xuan thanh" required="1" id="d_name" class="form-control"> </div>
                                        </div>
                                        <div id="field-d_phone" class="form-field field-d_phone required">
                                            <div class="form-label"> <label for="d_phone">Điện thoại</label></div>
                                            <div class="form-input"> <input type="text" name="d_phone" value="0855562309" required="1" id="d_phone" class="form-control"> </div>
                                        </div>
                                        <div id="field-d_email" class="form-field field-d_email">
                                            <div class="form-label"> <label for="d_email">Email</label></div>
                                            <div class="form-input"> <input type="email" name="d_email" value="xuanthanh.jvb@gmail.com" id="d_email" class="form-control"> </div>
                                        </div>
                                        <div id="field-d_address" class="form-field field-d_address">
                                            <div class="form-label"> <label for="d_address">Địa chỉ</label></div>
                                            <div class="form-input"> <input type="text" name="d_address" value="" id="d_address" class="form-control"> </div>
                                        </div>
                                        <div id="field-issame" class="form-field field-issame">
                                            <div class="form-label"> </div>
                                            <div class="form-input"> <label class="issame"> <input type="checkbox" name="issame" value="1" id="issame"> <span>Thông tin giao hàng giống thông tin thanh toán</span> </label> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-right">
                                <div id="box-cinfo" class="box-cinfo box-customer">
                                    <div class="box-head"> <span>Thông tin giao hàng</span> </div>
                                    <div class="box-body">
                                        <div id="field-c_name" class="form-field field-c_name required">
                                            <div class="form-label"> <label for="c_name">Họ tên</label></div>
                                            <div class="form-input"> <input type="text" name="c_name" value="" required="1" id="c_name" class="form-control"> </div>
                                        </div>
                                        <div id="field-c_phone" class="form-field field-c_phone required">
                                            <div class="form-label"> <label for="c_phone">Điện thoại</label></div>
                                            <div class="form-input"> <input type="text" name="c_phone" value="" required="1" id="c_phone" class="form-control"> </div>
                                        </div>
                                        <div id="field-c_email" class="form-field field-c_email">
                                            <div class="form-label"> <label for="c_email">Email</label></div>
                                            <div class="form-input"> <input type="email" name="c_email" value="" id="c_email" class="form-control"> </div>
                                        </div>
                                        <div id="field-c_address" class="form-field field-c_address">
                                            <div class="form-label"> <label for="c_address">Địa chỉ</label></div>
                                            <div class="form-input"> <input type="text" name="c_address" value="" id="c_address" class="form-control"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="box-shipping" class="box box-shipping box-table radio">
                            <div class="box-head"> <span>Phương thức giao hàng</span> </div>
                            <div class="box-body">
                                <ul class="items">
                                    <li><label class="item active"><input type="radio" name="shipping_method" value="company" checked="checked">
                                            <div class="box-desc">
                                                <h4>Chính sách giao hàng của công ty. Cước phí vận chuyển sẽ được thông báo trực tiếp đến khách hàng</h4>
                                            </div>
                                        </label></li>
                                    <li><label class="item"><input type="radio" name="shipping_method" value="post_office">
                                            <div class="box-desc">
                                                <h4>Gửi bảo đảm qua bưu điện. Cước phí vận chuyển sẽ được thông báo trực tiếp đến khách hàng</h4>
                                                <div>Chấp nhận tất cả các địa chỉ giao hàng trong phạm vi cả nước (Cước phí tính theo giá Bưu điện).</div>
                                            </div>
                                        </label></li>
                                    <li><label class="item"><input type="radio" name="shipping_method" value="home">
                                            <div class="box-desc">
                                                <h4>Các công ty giao nhận tư nhân trong và ngoài nước</h4>
                                            </div>
                                        </label></li>
                                </ul>
                            </div>
                        </div>
                        <div id="box-payment" class="box box-payment box-table radio">
                            <div class="box-head"> <span>Phương thức thanh toán</span> </div>
                            <div class="box-body">
                                <ul class="items">
                                    <li><label class="item active"><input type="radio" name="payment_method" value="cash" checked="checked">
                                            <div class="box-desc">
                                                <h4>Thanh toán COD</h4>
                                                <div>Khách hàng thanh toán tiền mặt khi nhân viên tới giao hàng (áp dụng giao hàng trong nội thành)</div>
                                            </div>
                                        </label></li>
                                    <li><label class="item"><input type="radio" name="payment_method" value="company">
                                            <div class="box-desc">
                                                <h4>Trực tiếp tại cửa hàng, văn phòng công ty</h4>
                                                <div>
                                                    <p>Thanh toán bằng tiền mặt trực tiếp tại văn phòng:<br /> <strong>HỆ THỐNG CỬA HÀNG MOBILE WORLD</strong><br /> ĐC: 692 Lê Hồng Phong, Phường 10, Quận 10, TP.HCM<br /> ĐT: &nbsp;<a href="tel:0961 27 39 79">0961 27 39 79</a></p>
                                                </div>
                                            </div>
                                        </label></li>
                                    <li><label class="item"><input type="radio" name="payment_method" value="bank_transfer">
                                            <div class="box-desc">
                                                <h4>Thanh toán chuyển khoản</h4>
                                                <div>
                                                    <p>Thanh toán qua ngân hàng, thông tin chuyển khoản:<br /> <strong>HỆ THỐNG CỬA HÀNG MOBILE WORLD</strong><br /> ĐC: 692 Lê Hồng Phong, Phường 10, Quận 10, TP.HCM<br /> ĐT: &nbsp;0961 27 39 79<br /> Mã số thuế: 0301325347<br /> Tên tài khoản: <strong>Phạm Thị Kiều Diễm</strong><br /> Số tài khoản: <strong>19034141898011</strong><br /> Ngân hàng <strong>Techcombank</strong>&nbsp;- Chi nhánh Kỳ Hòa, Quận 1.&nbsp;</p>
                                                </div>
                                            </div>
                                        </label></li>
                                </ul>
                                <ul class="items icon">
                                    <li><label class="item"><input type="radio" name="payment_method" value="zalopay">
                                            <div class="box-desc">
                                                <h4><img src="https://mobileworld.com.vn/uploads/thumbs/50__zalopay.png" width="50" alt="">Ví ZaloPay</h4>
                                            </div>
                                        </label></li>
                                    <li><label class="item"><input type="radio" name="payment_method" value="momo">
                                            <div class="box-desc">
                                                <h4><img src="https://mobileworld.com.vn/uploads/thumbs/50__momo.png" width="50" alt="">Ví MoMo</h4>
                                            </div>
                                        </label></li>
                                    <li><label class="item"><input type="radio" name="payment_method" value="visa">
                                            <div class="box-desc">
                                                <h4><img src="https://mobileworld.com.vn/uploads/thumbs/50__visa.png" width="50" alt="">Visa / Master / JCB</h4>
                                            </div>
                                        </label></li>
                                    <li><label class="item"><input type="radio" name="payment_method" value="atm">
                                            <div class="box-desc">
                                                <h4><img src="https://mobileworld.com.vn/uploads/thumbs/50__atm.png" width="50" alt="">ATM / Internet Banking</h4>
                                            </div>
                                        </label></li>
                                </ul>
                            </div>
                        </div>
                        <div id="box-comment" class="box box-comment box-table">
                            <div class="box-head"> <span>Thông tin khác</span> </div>
                            <div class="box-body">
                                <ul class="items">
                                    <li class=""> <input type="checkbox" name="show_comment" value="1" id="show_comment">
                                        <div class="box-desc"> <label for="show_comment">Ghi chú</label>
                                            <div class="inner"> <textarea name="comment" cols="40" rows="1" id="comment" class="form-control"></textarea> </div>
                                        </div>
                                    </li>
                                    <li class=""> <input type="checkbox" name="invoice" value="1" id="invoice">
                                        <div class="box-desc"> <label for="invoice">Xuất hóa đơn GTGT</label>
                                            <div class="inner">
                                                <p class="note">* Lưu ý: Công ty không giải quyết xuất lại hoá đơn cho các trường hợp Quý khách không đăng ký thông tin.</p>
                                                <div id="field-invoice_name" class="field-invoice_name form-field">
                                                    <div class="form-label"> </div>
                                                    <div class="form-input"> <input type="text" name="invoice[name]" value="" class="form-control" placeholder="Nhập họ tên người mua hàng"> </div>
                                                </div>
                                                <div id="field-invoice_company" class="field-invoice_company form-field">
                                                    <div class="form-label"> </div>
                                                    <div class="form-input"> <input type="text" name="invoice[company]" value="" class="form-control" placeholder="Nhập tên công ty"> </div>
                                                </div>
                                                <div id="field-invoice_address" class="field-invoice_address form-field">
                                                    <div class="form-label"> </div>
                                                    <div class="form-input"> <input type="text" name="invoice[address]" value="" class="form-control" placeholder="Nhập địa chỉ công ty"> </div>
                                                </div>
                                                <div id="field-invoice_masothue" class="field-invoice_masothue form-field">
                                                    <div class="form-label"> </div>
                                                    <div class="form-input"> <input type="text" name="invoice[masothue]" value="" class="form-control" placeholder="Nhập mã số thuế"> </div>
                                                </div>
                                                <div id="field-invoice_email" class="field-invoice_email form-field">
                                                    <div class="form-label"> </div>
                                                    <div class="form-input"> <input type="text" name="invoice[email]" value="" class="form-control" placeholder="Nhập email nhận hóa đơn"> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="box-button text-center"> <button name="do_submit" type="submit" value="1" class="btnCheckout">Hoàn thành</button> </div>
                    </form>
                </div>
            </section>
        </main>
@endsection

@section('js')
    <script id="ws-common-js" language="javascript" type="text/javascript" src="{{asset('js/cart/cart_detail.js')}}"></script>
    <script id="ws-global-js" src="https://mobileworld.com.vn/storage/bundle/mobileworld.min.js?v=230317" language="javascript" type="text/javascript"></script>
    <script src="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/js/member.js?v=230317" language="javascript" type="text/javascript"></script>
    <script id="ws-order-js" src="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/js/order.js?v=230317" language="javascript" type="text/javascript"></script>
@endsection