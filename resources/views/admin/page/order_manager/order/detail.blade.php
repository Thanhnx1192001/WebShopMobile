@extends('admin.index')

@section('header')
    <title>Chi tiết</title>
@endsection

@section('content')
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Chi tiết</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
							<div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mã đơn hàng :</label>
                                <div class="col-sm-10">
                                    <h3>{{$orderCode}}</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Ghi chú :</label>
                                <div class="col-sm-10">
                                    <h3>{{$orders -> note}}</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Hình thức thanh toán</label>
                                <div class="col-sm-10">
                                    @if($orders -> payment == 1)
                                    <h3>Chuyển khoản</h3>
                                    @else
                                    <h3>Thanh toán khi nhận hàng</h3>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Trạng thái :</label>
                                <div class="col-sm-10">
                                @switch($orders->status)
                                    @case(1)
                                        <h3>Chờ xác nhận</h3>
                                        @break
                                    @case(2)
                                        <h3>Đã xác nhận</h3>
                                        @break
                                    @case(3)
                                        <h3>Đang giao hàng</h3>
                                        @break
                                    @case(4)
                                        <h3>Giao hàng thành công</h3>
                                        @break
                                @endswitch
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 ml-sm-auto">
                                    <a href="{{route('admin_order.index')}}" class="btn btn-info">Quay lại</a>
                                </div>
                            </div>
                    </div>
                </div>
@endsection





