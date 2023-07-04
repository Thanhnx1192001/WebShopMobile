@extends('user.index')

@section('header')
    <title>Bài viết</title>
@endsection

@section('meta')
    <meta name="theme-color" content="#fcde04">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog">
    <meta name="keywords" content="Blog">
    <meta property="og:url" content="https://mobileworld.com.vn/blog.html">
    <meta property="og:type" content="object">
    <meta property="og:site_name" content="Mobileworld">
    <meta property="og:title" content="Blog">
    <meta property="og:description" content="Blog">
    <meta property="og:locale" content="vi_VN">
    <meta property="fb:app_id" content="440100557569103">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Blog">
    <meta name="twitter:description" content="Blog">
@endsection

@section('link')
    <link href="https://mobileworld.com.vn/blog.html" rel="canonical">
    <link href="https://mobileworld.com.vn/blog.html" rel="alternate" media="handheld">
    <link id="ws-news-css" href="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/css/news.css?v=230314" rel="stylesheet" type="text/css">
    <link href="https://mobileworld.com.vn/uploads/favicon.webp?v=230314" rel="icon" type="image/png">
    <link href="https://mobileworld.com.vn/uploads/favicon.webp?v=230314" rel="apple-touch-icon" type="image/png">
@endsection

@section('css')
<link href="{{ asset('css/blog/blog.css') }}" rel="stylesheet" id="ws-global-css" type="text/css" />
@endsection

@section('content')
    <main id="ws-content" class="ws-content outer">
            <section class="breadcrumb">
                <div class="wrapper">
                    <ul class="items" itemtype="http://schema.org/BreadcrumbList" itemscope>
                        <li class="breadrumb-home breadrumb-item" itemscope itemprop="itemListElement" itemtype=""> <a href="/home" itemprop="item"><span itemprop="name">Trang chủ</span></a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li class="breadrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <span itemprop="name">Blog</span>
                            <meta itemprop="position" content="1">
                        </li>
                    </ul>
                </div>
            </section>
            <section class="box-title">
                <div class="wrapper">
                    <div class="post-title">
                        <h1>Blog</h1>
                    </div>
                    
                </div>
            </section>
            <section class="box-content">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-md-8 col-xs-12">
                            <div class="posts">
                                @foreach($blogs as $blog)
                                <div class="post news">
                                    <div class="img"> <a href="{{route('blog_detail',$blog->id)}}" > <img src="{{asset($blog->img_url)}}" alt="" width="840" height="470" class="img-cover"></a> </div>
                                    <div class="txt">
                                        <h2><a href="{{route('blog_detail',$blog->id)}}">{{($blog->title)}}</a></h2>
                                        <div class="excerpt">{{($blog->title)}} - {{Str::limit($blog->content, 200, '...')}} </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="col-md-4 hidden-xs">
                            <div id="box-popular" class="widget">
                                <div class="widget-title"> Bài viết đáng chú ý</div>
                                <div class="widget-content">
                                    <ul class=items>
                                    @foreach($blogs as $row)
                                    <li><a href="{{ route('blog_detail',$row->id)}}">{{$row->title}}</a></li>
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
@endsection

@section('js')
    <script id="ws-common-js" language="javascript" type="text/javascript" src="{{asset('js/blog/blog_1.js')}}"></script>
    <script id="ws-news-js" src="https://mobileworld.com.vn/ws-content/themes/mobileworld/assets/js/news.js?v=230314" language="javascript" type="text/javascript"></script>
@endsection