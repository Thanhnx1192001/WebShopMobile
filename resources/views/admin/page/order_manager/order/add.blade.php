@extends('admin.index')

@section('header')
    <title>Thêm đơn hàng</title>
@endsection

@section('content')
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Thêm đơn hàng mới</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form action="{{route('admin_order.store')}}" method="post" class="form-horizontal" id="form-sample-1"  novalidate="novalidate">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Ghi chú</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="note">
                                </div>
                                @if ($errors->has('note'))
                                    <small class="form-text text-muted">{{ $errors->first('note') }}</small>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Hình thức thanh toán</label>
                                <div class="form-group">
                                        <select class="form-control" name="payment">
                                            <option value="1">Chuyển khoản</option>
                                            <option value="2">Thanh toán khi nhận hàng</option>
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





