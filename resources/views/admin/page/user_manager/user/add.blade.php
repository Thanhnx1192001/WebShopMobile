@extends('admin.index')

@section('header')
    <title>Thêm danh mục</title>
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
                        <form action="{{route('admin_user.store')}}" method="post" class="form-horizontal" id="form-sample-1"  novalidate="novalidate">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Phân quyền</label>
                                <div class="form-group">
                                        <select class="form-control" name="role">
                                            <option value="0">User</option>
                                            <option value="1">Admin</option>
                                        </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tên người dùng</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="name">
                                </div>
                                @if ($errors->has('name'))
                                    <small class="form-text text-muted">{{ $errors->first('name') }}</small>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="email">
                                </div>
                                @if ($errors->has('email'))
                                    <small class="form-text text-muted">{{ $errors->first('email') }}</small>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mật khẩu</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="password">
                                </div>
                                @if ($errors->has('password'))
                                    <small class="form-text text-muted">{{ $errors->first('password') }}</small>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Số điện thoại</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="phone_number">
                                </div>
                                @if ($errors->has('phone_number'))
                                    <small class="form-text text-muted">{{ $errors->first('phone_number') }}</small>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Địa chỉ</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="address">
                                </div>
                                @if ($errors->has('address'))
                                    <small class="form-text text-muted">{{ $errors->first('address') }}</small>
                                @endif
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





