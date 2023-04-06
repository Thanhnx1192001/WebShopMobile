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

<a href="{{route('admin_order.create')}}" class="btn btn-success btn-add">Thêm</a>
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Quản lí đơn hàng</div>
                    </div>
                    <div class="ibox-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Mã đơn hàng</th>
                                        <th>Tên người mua hàng</th>
                                        <th>Phương thức thanh toán</th>
                                        <th>Trạng thái</th>
                                        <th>Ghi chú</th>
                                        <th>Ngày đặt</th>
                                        <th>Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $row)
                                    <tr>
                                        <td>{{$row->id}}</td>
                                        @foreach($orders_users as $row1)
                                        @if($row1->order_id == $row->id)
                                            <td><a target="_blank" href="{{route('admin_order_user.show',$row1->id)}}">{{$row1->name}}</a></td>
                                        @endif
                                        @endforeach

                                        @if($row->payment == 1)
                                            <td>Chuyển khoản</td>
                                        @else
                                            <td>Thanh toán khi nhận hàng</td>
                                        @endif

                                        @switch($row->status)
                                            @case(1)
                                                <td>Chờ xác nhận</td>
                                                @break
                                            @case(2)
                                                <td>Đã xác nhận</td>
                                                @break
                                            @case(3)
                                                <td>Đang giao hàng</td>
                                                @break
                                            @case(4)
                                                <td>Giao hàng thành công</td>
                                                @break
                                        @endswitch
                                        @if (strlen($row->note) > 255)
                                            <td> {{Str::limit($row->note, 50, '...')}} </td>
                                        @else
                                            <td> {{ $row->note }} </td>
                                        @endif
                                        <td>{{ \Carbon\Carbon::parse($row->created_at)->format('d/m/Y') }}</td>
                                        
                                        <td>
                                        <div class="btn-group">
                                            <a href="{{route('admin_order.show',$row->id)}}" class="btn btn-info btn-show">Chi tiết</a></br>
								            <a href="{{route('admin_order.edit',$row->id)}}" class="btn btn-warning btn-edit">Sửa</a>
                                            <form method="POST" action="{{route('admin_order.destroy',$row->id)}}" onsubmit="return ConfirmDelete( this )">
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