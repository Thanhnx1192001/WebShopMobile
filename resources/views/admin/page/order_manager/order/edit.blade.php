@extends('admin.index')

@section('header')
    <title>Sửa đơn hàng</title>
@endsection

@section('content')
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Sửa đơn hàng</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form action="{{route('admin_order.update',$orders->id)}}" method="post" class="form-horizontal" id="form-sample-1"  novalidate="novalidate">
                            @method('PATCH')
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Ghi chú</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="note" value="{{$orders->note}}" >
                                </div>
                                @if ($errors->has('note'))
                                    <small class="form-text text-muted">{{ $errors->first('note')}}</small>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Hình thức thanh toán</label>
                                <div class="form-group">
                                        <select class="form-control" name="payment">
                                            <option {{ $orders->payment == '1' ? 'selected' : ''}} value="1">Chuyển khoản</option>
                                            <option {{ $orders->payment == '2' ? 'selected' : ''}} value="2">Thanh toán khi nhận hàng</option>
                                        </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Trạng thái</label>
                                <div class="form-group">
                                        <select class="form-control" name="status">
                                            <option {{ $orders->status == '1' ? 'selected' : ''}} value="1">Chờ xác nhận</option>
                                            <option {{ $orders->status == '2' ? 'selected' : ''}} value="2">Đã xác nhận</option>
                                            <option {{ $orders->status == '3' ? 'selected' : ''}} value="3">Đang giao hàng</option>
                                            <option {{ $orders->status == '4' ? 'selected' : ''}} value="4">Giao hàng thành công</option>
                                        </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 ml-sm-auto">
                                    <button class="btn btn-info" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
@endsection





