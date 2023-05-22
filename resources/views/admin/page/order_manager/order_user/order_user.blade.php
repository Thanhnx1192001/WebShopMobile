@extends('admin.index')

@section('header')
    <title>Quản lý người mua hàng</title>
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

<a href="{{route('admin_order_user.create')}}" class="btn btn-success btn-add">Thêm</a>
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Quản lí thông tin người mua hàng</div>
                    </div>
                    <form action="{{route('admin_order_user_search')}}" method="post">
                        @csrf
                        <label for="lang-select">Tìm kiếm mã đơn hàng :</label>
                        <input type="text" name="code">
                        <button type="submit">Tìm</button>
                    </form>
                    <div class="ibox-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Mã đơn hàng</th>
                                        <th>Tên người mua</th>
                                        <th>Email</th>
                                        <th>Số điện thoại</th>
                                        <th>Địa chỉ</th>
                                        <th>Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($order_user == '')
                                    @foreach($orders_users as $row)
                                    <tr>
                                    @php
                                    foreach($orders as $order){
                                        if($order->id == $row->order_id){
                                            $formattedDate = date('Ymd', strtotime($order->created_at));
                                            $orderCode = $formattedDate . '-' . $order->id;
                                        }
                                    }
                                    @endphp
                                        <td>{{$row->id}}</td>  
                                        <td><a target="_blank" href="{{route('admin_order.show',$row->order_id)}}">{{$orderCode}}</a></td> 
                                                                                                                
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->email}}</td>
                                        <td>{{$row->phone_number}}</td>
                                        @if (strlen($row->address) > 255)
                                            <td> {{Str::limit($row->address, 50, '...')}} </td>
                                        @else
                                            <td> {{ $row->address }} </td>
                                        @endif
                                        <td>
                                        <div class="btn-group">
                                            <a href="{{route('admin_order_user.show',$row->id)}}" class="btn btn-info btn-show">Chi tiết</a></br>
								            <a href="{{route('admin_order_user.edit',$row->id)}}" class="btn btn-warning btn-edit">Sửa</a>
                                            <form method="POST" action="{{route('admin_order_user.destroy',$row->id)}}" onsubmit="return ConfirmDelete( this )">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger btn-delete" type="submit">Xóa</button>
                                            </form>
                                        </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                @else
                                <tr>
                                    @php
                                    foreach($orders as $order){
                                        if($order->id == $order_user->order_id){
                                            $formattedDate = date('Ymd', strtotime($order->created_at));
                                            $orderCode = $formattedDate . '-' . $order->id;
                                        }
                                    }
                                    @endphp
                                        <td>{{$order_user->id}}</td>  
                                        <td><a target="_blank" href="{{route('admin_order.show',$order_user->order_id)}}">{{$orderCode}}</a></td> 
                                                                                                                
                                        <td>{{$order_user->name}}</td>
                                        <td>{{$order_user->email}}</td>
                                        <td>{{$order_user->phone_number}}</td>
                                        @if (strlen($order_user->address) > 255)
                                            <td> {{Str::limit($order_user->address, 50, '...')}} </td>
                                        @else
                                            <td> {{ $order_user->address }} </td>
                                        @endif
                                        <td>
                                        <div class="btn-group">
                                            <a href="{{route('admin_order_user.show',$order_user->id)}}" class="btn btn-info btn-show">Chi tiết</a></br>
								            <a href="{{route('admin_order_user.edit',$order_user->id)}}" class="btn btn-warning btn-edit">Sửa</a>
                                            <form method="POST" action="{{route('admin_order_user.destroy',$order_user->id)}}" onsubmit="return ConfirmDelete( this )">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger btn-delete" type="submit">Xóa</button>
                                            </form>
                                        </div>
                                        </td>
                                    </tr>
                                @endif
                               
                            </table>
                        </div>
                    </div>
                </div>
@endsection