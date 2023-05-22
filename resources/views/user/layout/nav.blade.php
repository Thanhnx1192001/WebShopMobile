<nav id="ws-nav" class="ws-nav hidden-xs">
            <div class="wrapper">
                <div id="box-primary-menu" class="menu-primary-wrap">
                    <ul class="menu-primary">
                        <li class="icon-iphone"><a href="{{ route('phone_apple') }}" class="menu-item menu-188 menu-item-primary icon-iphone">iPhone</a>
                            <ul class="items">
                                <li><a href="{{ route('phone_apple',['title' => 'iphone 14'])}}" class="menu-item menu-314 menu-item-primary">iPhone 14 | 14 Pro | 14 Pro Max</a></li>
                                <li><a href="{{ route('phone_apple',['title' => 'iphone 13'])}}" class="menu-item menu-251 menu-item-primary">iPhone 13 | 13 Pro | 13 Pro Max</a></li>
                                <li><a href="{{ route('phone_apple',['title' => 'iphone 12'])}}" class="menu-item menu-254 menu-item-primary">iPhone 12 | 12 Pro | 12 Pro Max</a></li><br>
                                <li><a href="{{ route('phone_apple',['title' => 'iphone 11'])}}" class="menu-item menu-257 menu-item-primary">iPhone 11 | 11 Pro | 11 Pro Max</a></li>
                            </ul>
                        </li>
                        <li class="icon-samsung"><a href="{{ route('phone_samsung') }}" class="menu-item menu-189 menu-item-primary icon-samsung">Điện thoại Samsung</a>
                            <ul class="items">
                                <li><a href="{{ route('phone_samsung',['title'=>'Galaxy S23'])}}" class="menu-item menu-322 menu-item-primary">Galaxy S23 Series</a></li>
                                <li><a href="{{ route('phone_samsung',['title'=>'Galaxy Z Fold4'])}}" class="menu-item menu-312 menu-item-primary">Galaxy Z Fold4</a></li>
                                <li><a href="{{ route('phone_samsung',['title'=>'Galaxy S22'])}}" class="menu-item menu-262 menu-item-primary">Galaxy S22 Series</a></li>
                                <li><a href="{{ route('phone_samsung',['title'=>'Galaxy S21'])}}" class="menu-item menu-263 menu-item-primary">Galaxy S21 Series</a></li>
                                <li><a href="{{ route('phone_samsung',['title'=>'Galaxy Note 20'])}}" class="menu-item menu-264 menu-item-primary">Galaxy Note 20 Series</a></li>
                                <li><a href="{{ route('phone_samsung',['title'=>'Galaxy S20'])}}" class="menu-item menu-266 menu-item-primary">Galaxy S20 Series</a></li>
                                <li><a href="{{ route('phone_samsung',['title'=>'Galaxy Note 10'])}}" class="menu-item menu-265 menu-item-primary">Galaxy Note 10</a></li>
                                <li><a href="{{ route('phone_samsung',['title'=>'Galaxy S10'])}}" class="menu-item menu-265 menu-item-primary">Galaxy S10 Plus | S10 5G</a></li>
                                <li><a href="{{ route('phone_samsung',['title'=>'Galaxy Z Fold3'])}}" class="menu-item menu-271 menu-item-primary">Galaxy Z Fold3</a></li>
                            </ul>
                        </li>
                        <li class="icon-google"><a href="{{ route('phone_google') }}" class="menu-item menu-190 menu-item-primary icon-google">Điện thoại Google</a>
                            <ul class="items">
                                <li><a href="{{ route('phone_google',['title'=> 'pixel 7'])}}" class="menu-item menu-315 menu-item-primary" target="_self">Pixel 7 Series</a></li>
                                <li><a href="{{ route('phone_google',['title'=> 'pixel 6'])}}" class="menu-item menu-276 menu-item-primary">Pixel 6 Series</a></li>
                                <li><a href="{{ route('phone_google',['title'=> 'pixel 5'])}}" class="menu-item menu-277 menu-item-primary">Pixel 5 5G | 5a 5G</a></li>
                                <li><a href="{{ route('phone_google',['title'=> 'pixel 4'])}}" class="menu-item menu-279 menu-item-primary">Pixel 4a | Pixel 4a 5G</a></li>
                                <li><a href="{{ route('phone_google',['title'=> 'pixel 3'])}}" class="menu-item menu-282 menu-item-primary">Pixel 3 Series</a></li>
                            </ul>
                        </li>
                        <li class="icon-phone-other"><a href="{{ route('phone_xiaomi') }}" class="menu-item menu-285 menu-item-primary icon-phone-other">Điện thoại Xiaomi</a>
                            <ul class="items">
                                <li><a href="{{ route('phone_xiaomi',['title'=> 'mi 13'])}}" class="menu-item menu-317 menu-item-primary" >Xiaomi 13 Series</a></li>
                                <li><a href="{{ route('phone_xiaomi',['title'=> 'mi K60'])}}" class="menu-item menu-318 menu-item-primary" >Redmi K60 Series</a></li>
                                <li><a href="{{ route('phone_xiaomi',['title'=> 'mi 12'])}}" class="menu-item menu-306 menu-item-primary">Xiaomi 12 Series</a></li>
                                <li><a href="{{ route('phone_xiaomi',['title'=> 'mi K50'])}}" class="menu-item menu-307 menu-item-primary">Redmi K50 Series</a></li>
                                <li><a href="{{ route('phone_xiaomi',['title'=> 'mi note'])}}" class="menu-item menu-316 menu-item-primary">Redmi Note 12 Series</a></li>
                                <li><a href="{{ route('phone_xiaomi',['title'=> 'Shark 5'])}}" class="menu-item menu-308 menu-item-primary">Black Shark 5 Series</a></li>
                            </ul>
                        </li>
                        <li class="icon-gaming"><a href="{{ route('phone_asus') }}" class="menu-item menu-289 menu-item-primary icon-gaming">Điện thoại Asus</a>
                            <ul class="items">
                                <li><a href="{{ route('phone_asus',['title'=> 'ROG Phone 7'])}}" class="menu-item menu-302 menu-item-primary">ROG Phone 7 Series</a></li>
                                <li><a href="{{ route('phone_asus',['title'=> 'ROG Phone 6'])}}" class="menu-item menu-302 menu-item-primary">ROG Phone 6 Series</a></li>
                                <li><a href="{{ route('phone_asus',['title'=> 'ROG Phone 5'])}}" class="menu-item menu-302 menu-item-primary">ROG Phone 5 Series</a></li>
                            </ul>
                        </li>
                        <li class="icon-phone-other"><a href="{{ route('tablet') }}" class="menu-item menu-285 menu-item-primary icon-phone-other">Máy tính bảng</a>
                            <ul class="items">
                                <li><a href="{{ route('tablet_xiaomi')}}" class="menu-item menu-317 menu-item-primary" >Máy tính bảng xiaomi</a></li>
                                <li><a href="{{ route('tablet_apple')}}" class="menu-item menu-318 menu-item-primary" >Máy tính bảng apple</a></li>
                            </ul>
                        </li>
                        <li class="icon-news"><a href="{{route('blog')}}" class="menu-item menu-192 menu-item-primary icon-news">Tin tức</a></li>
                    </ul>
                </div>
            </div>
        </nav>