<!DOCTYPE html>
<html lang="vi" class="ws-no-js">

<head>
    @yield('header')
    <meta name="robots" content="index,follow">
    <!-- Google Tag Manager -->
    <script src="{{asset('js/googletagmanager_1.js')}}" type="text/javascript"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120672636-1"></script>
    <script src="{{asset('js/googletagmanager_2.js')}}" type="text/javascript"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield('meta')
    @yield('link')
    @yield('css')
</head>

<body class="home page-template-home ws-custom-logo ws-body-vi desktop">
    <section id="ws-app" class="ws-store">
        @include('user.layout.header')
        @include('user.layout.nav')
        @yield('content')
        @include('user.layout.footer')
        <div class="maker"></div>
    </section> <!-- Google Tag Manager (noscript) --> <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KR3JKWP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> <!-- End Google Tag Manager (noscript) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
    @yield('js')
    <script>
        function AddCart(id) {
            $.ajax({
                url: 'AddCart/' + id,
                type: 'GET',
            }).done(function(response) {
                $("#change-item-cart").empty();
                $("#change-item-cart").html(response);
                $('#total-quanty-show').text($('#total-quanty-cart').val());
                alertify.success('Đã thêm thành công vào giỏ hàng');
            })
        }
        function AddCartNow(id) {
            $.ajax({
                url: 'AddCart/' + id,
                type: 'GET',
            }).done(function(response) {
                window.location.href = "{{ route('showCart')}}";
            })
        }
        $("#change-item-cart").on('click', '.delete-item-cart', function() {
            $.ajax({
                url: 'DeleteItemCart/' + $(this).data('id'),
                type: 'GET',
            }).done(function(response) {
                $("#change-item-cart").empty();
                $("#change-item-cart").html(response);
                $('#total-quanty-show').text($('#total-quanty-cart').val());
                alertify.success('Đã xóa thành công');
            });
        });
        function DeleteListItemCart(id) {
            $.ajax({
                url: 'DeleteItemListCart/' + id,
                type: 'GET',
            }).done(function(response) {
                $("#list-cart").empty();
                $("#list-cart").html(response);
                location.reload();
                alertify.success('Đã xóa thành công');

            });
        }

        function AddItemCart(id) {
            $.ajax({
                url: 'AddItemCart/' + id,
                type: 'GET',
            }).done(function(response) {
                location.reload();
                $("#list-cart").empty();
                $("#list-cart").html(response);
                alertify.success('Đã thêm thành công');
            })
        }

        function MinusItemCart(id) {
            $.ajax({
                url: 'MinusItemCart/' + id,
                type: 'GET',
            }).done(function(response) {
                location.reload();
                $("#list-cart").empty();
                $("#list-cart").html(response);
                alertify.success('Đã giảm thành công');
            })
        }

        $(document).ready(function() {
            $("#search_name").keyup(function() {
                var search_name = $("#search_name").val();
                if (search_name != '') {
                    $.ajax({
                        url: "{{ route('searchAjax', ':search_name') }}".replace(':search_name', search_name),
                        type: 'GET',
                        data: {
                            search_name: search_name
                        },
                    }).done(function(response) {
                        $("#list-product-search").empty();
                        $("#list-product-search").html(response);
                    })
                } else {
                    $("#list-product-search").empty();
                }

            });
        });
    </script>

    <script id="ws-global-js" src="https://mobileworld.com.vn/storage/bundle/mobileworld.min.js?v=230314" language="javascript" type="text/javascript"></script>

</body>

</html>