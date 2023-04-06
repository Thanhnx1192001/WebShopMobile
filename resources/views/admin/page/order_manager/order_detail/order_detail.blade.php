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

<!-- <a href="{{route('admin_order_detail.create')}}" class="btn btn-success btn-add">Thêm</a> -->
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Chi tiết đơn hàng</div>
                    </div>
                    <div class="ibox-body">
                        <div class="table-responsive">
                        @foreach($orders as $row1)
                            <h3>Mã đơn hàng : <a target="_blank" href="{{route('admin_order.show',$row1->id)}}"> {{$row1->id}} </a></h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Màu sắc</th>
                                        <th>Bộ nhớ</th>
                                        <th>Giá tiền</th>
                                        <th>Số lượng</th>
                                        <!-- <th>Chức năng</th> -->
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
                                        <!-- <td>
                                        <div class="btn-group">
								            <a href="{{route('admin_order_detail.edit',$row->id)}}" class="btn btn-warning btn-edit">Sửa</a>
                                            <form method="POST" action="{{route('admin_order_detail.destroy',$row->id)}}" onsubmit="return ConfirmDelete( this )">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger btn-delete" type="submit">Xóa</button>
                                            </form>
                                        </div>
                                        </td> -->
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>                               
                            </table>
                            @endforeach
                        </div>
                    </div>
                </div>
@endsection