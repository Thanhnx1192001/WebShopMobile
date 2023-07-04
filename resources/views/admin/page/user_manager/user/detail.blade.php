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
                                <label class="col-sm-2 col-form-label">ID :</label>
                                <div class="col-sm-10">
                                    <h3>{{$users -> id}}</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Quyền :</label>
                                <div class="col-sm-10">
                                    @if($users -> role == '0')
                                        <h3>User</h3>
                                    @else
                                        <h3>Admin</h3>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tên người dùng :</label>
                                <div class="col-sm-10">
                                    <h3>{{$users -> name}}</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email :</label>
                                <div class="col-sm-10">
                                    <h3>{{$users -> email}}</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mật khẩu :</label>
                                <div class="col-sm-10">
                                    <h3>{{$users -> password}}</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Số điện thoại :</label>
                                <div class="col-sm-10">
                                    <h3>{{$users -> phone_number}}</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"> Địa chỉ :</label>
                                <div class="col-sm-10">
                                    <h3>{{$users -> address}}</h3>
                                </div>
                            </div>
							<div class="form-group row">
                                <label class="col-sm-2 col-form-label">Ngày tạo :</label>
                                <div class="col-sm-10">
                                    <h3>{{ \Carbon\Carbon::parse($users->created_at)->format('d/m/Y') }}</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 ml-sm-auto">
                                    <a href="{{route('admin_user.index')}}" class="btn btn-info">Quay lại</a>
                                </div>
                            </div>
                    </div>
                </div>
@endsection





