@extends('admin.index')

@section('header')
    <title>Sửa thông tin người mua hàng</title>
@endsection

@section('content')
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Thêm người dùng mới</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form action="{{route('admin_order_user.update',$orders_users->id)}}" method="post" class="form-horizontal" id="form-sample-1"  novalidate="novalidate">
                            @method('PATCH')
                            @csrf    
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Id đơn hàng</label>
                                <div class="form-group">
                                        <select class="form-control" name="order_id">
                                            @foreach($orders as $row)
                                            <option {{ $row->id == $orders_users->order_id  ? 'selected' : ''}}  value="{{$row->id}}">{{$row->id}}</option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tên người dùng</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="name" value="{{$orders_users->name}}">
                                </div>
                                @if ($errors->has('name'))
                                    <small class="form-text text-muted">{{ $errors->first('name') }}</small>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="email" value="{{$orders_users->email}}">
                                </div>
                                @if ($errors->has('email'))
                                    <small class="form-text text-muted">{{ $errors->first('email') }}</small>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Số điện thoại</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="phone_number" value="{{$orders_users -> phone_number}}" >
                                </div>
                                @if ($errors->has('phone_number'))
                                    <small class="form-text text-muted">{{ $errors->first('phone_number')}}</small>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Địa chỉ</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="address" value="{{$orders_users -> address}}">
                                </div>
                                @if ($errors->has('address'))
                                    <small class="form-text text-muted">{{ $errors->first('address') }}</small>
                                @endif
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 ml-sm-auto">
                                    <a href="{{route('admin_order_user.index')}}"  class="btn btn-warning">Quay lại</a>
                                    <button class="btn btn-info" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
@endsection





