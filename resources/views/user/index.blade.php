<!DOCTYPE html>
<html lang="vi" class="ws-no-js">

<head>
    @yield('header')
    <meta name="robots" content="index,follow">
     <!-- Google Tag Manager -->
    <script src="{{asset('js/googletagmanager_1.js')}}" type="text/javascript"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120672636-1"></script>
    <script src="{{asset('js/googletagmanager_2.js')}}" type="text/javascript"></script>
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
   
    @yield('js')
</body>

</html>