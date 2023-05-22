@extends('admin.index')

@section('header')
<title>Quản lý chi tiết đơn hàng</title>
@endsection

@section('content')
@if(session('success'))
<div class="alert alert-info">{{ session('success') }}</div>
@endif
@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<div class="ibox">
    <div class="ibox-head">
        <div class="ibox-title">Chi tiết đơn hàng</div>
    </div>
    <form action="{{route('admin_order_detail_search')}}" method="post">
        @csrf
        <label for="lang-select">Tìm kiếm mã đơn hàng :</label>
        <input type="text" name="code">
        <button type="submit">Tìm</button>
    </form>
    <div class="ibox-body">
        <div class="table-responsive">
            @if($order == '')
            @foreach($orders as $row1)
            <h3>Mã đơn hàng : <a target="_blank" href="{{route('admin_order.show',$row1->id)}}">
                    @php
                    $formattedDate = date('Ymd', strtotime($row1->created_at));
                    $orderCode = $formattedDate . '-' . $row1->id;
                    @endphp
                    {{$orderCode}}</a>
            </h3>
            @foreach($orders_users as $order_user)
            @if($order_user->order_id == $row1->id)
            <h4> Người mua hàng: <a target="_blank" href="{{ route('admin_order_user.show', $order_user->id) }}">{{ $order_user->name }}</a></h4>
            @endif
            @endforeach

            <table class="table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Màu sắc</th>
                        <th>Bộ nhớ</th>
                        <th>Giá tiền</th>
                        <th>Số lượng</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $count = 0
                    @endphp
                    @foreach($orders_details as $row)
                    @if($row->order_id == $row1->id)
                    @php
                    $count++
                    @endphp
                    <tr>
                        <td>{{($count)}}</td>
                        @foreach($products as $row2)
                        @if($row->product_id == $row2->id)
                        <td><a target="_blank" href="{{route('admin_product.show',$row->product_id)}}">{{$row2->title}}</a></td>
                        <td>{{$row2->color}}</td>
                        <td>{{$row2->memory}}</td>
                        <td>
                            {{number_format($row2->discount,0,'.','.') }} đ
                        </td>
                        @endif
                        @endforeach
                        <td>{{$row->num}}</td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
            @endforeach
            @else
            <h3>Mã đơn hàng : <a target="_blank" href="{{route('admin_order.show',$order->id)}}">
                    @php
                    $formattedDate = date('Ymd', strtotime($order->created_at));
                    $orderCode = $formattedDate . '-' . $order->id;
                    @endphp
                    {{$orderCode}}</a>
            </h3>
            @foreach($orders_users as $order_user)
            @if($order_user->order_id == $order->id)
            <h4> Người mua hàng: <a target="_blank" href="{{ route('admin_order_user.show', $order_user->id) }}">{{ $order_user->name }}</a></h4>
            @endif
            @endforeach

            <table class="table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Màu sắc</th>
                        <th>Bộ nhớ</th>
                        <th>Giá tiền</th>
                        <th>Số lượng</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $count = 0
                    @endphp
                    @foreach($orders_details as $row)
                    @if($row->order_id == $order->id)
                    @php
                    $count++
                    @endphp
                    <tr>
                        <td>{{($count)}}</td>
                        @foreach($products as $row2)
                        @if($row->product_id == $row2->id)
                        <td><a target="_blank" href="{{route('admin_product.show',$row->product_id)}}">{{$row2->title}}</a></td>
                        <td>{{$row2->color}}</td>
                        <td>{{$row2->memory}}</td>
                        <td>
                            {{number_format($row2->discount,0,'.','.') }} đ
                        </td>
                        @endif
                        @endforeach
                        <td>{{$row->num}}</td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
</div>
@endsection