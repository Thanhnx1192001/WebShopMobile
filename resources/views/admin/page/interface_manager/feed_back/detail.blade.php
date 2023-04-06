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
                                <label class="col-sm-2 col-form-label">Số thứ tự :</label>
                                <div class="col-sm-10">
                                    <h3>{{$feed_back -> id}}</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tên sản phẩm :</label>
                                <div class="col-sm-10">
                                    <h3>{{$products -> title}}</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tên người bình luận :</label>
                                <div class="col-sm-10">
                                    <h3>{{$feed_back -> name}}</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email :</label>
                                <div class="col-sm-10">
                                    <h3>{{$feed_back -> email}}</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Số điện thoại :</label>
                                <div class="col-sm-10">
                                    <h3>{{$feed_back -> phone_number}}</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nội dung :</label>
                                <div class="col-sm-10">
                                    <h3>{{$feed_back -> content}}</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Đánh giá :</label>
                                <div class="col-sm-10">
                                    <h3>{{$feed_back -> star}} Star</h3>
                                </div>
                            </div>
							<div class="form-group row">
                                <label class="col-sm-2 col-form-label">Ngày tạo :</label>
                                <div class="col-sm-10">
                                    <h3>{{ \Carbon\Carbon::parse($feed_back->created_at)->format('d/m/Y') }}</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 ml-sm-auto">
                                    <a href="{{route('admin_feed_back.index')}}" class="btn btn-info">Quay lại</a>
                                </div>
                            </div>
                    </div>
                </div>
@endsection





