@extends('admin.index')

@section('header')
    <title>Quản lý đơn hàng</title>
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
                                    @foreach($orders_users as $row)
                                    <tr>
                                        <td>{{$row->id}}</td>  
                                        <td><a target="_blank" href="{{route('admin_order.show',$row->order_id)}}">{{$row->order_id}}</a></td> 
                                                                                                                
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
                               
                            </table>
                        </div>
                    </div>
                </div>
@endsection