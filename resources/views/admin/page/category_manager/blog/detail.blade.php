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
                                    <h3>{{$blogs -> id}}</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tên người tạo :</label>
                                <div class="col-sm-10">
                                    <h3>{{$users -> name}}</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tên bài viết :</label>
                                <div class="col-sm-10">
                                    <h3>{{$blogs -> title}}</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Link ảnh :</label>
                                <div class="col-sm-10">
                                    <h3>
                                    <img src="{{asset( $blogs -> img_url)}}" alt="">
                                    </h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nội dung :</label>
                                <div class="col-sm-10">
                                    <h3>{{$blogs -> content}}</h3>
                                </div>
                            </div>

							<div class="form-group row">
                                <label class="col-sm-2 col-form-label">Ngày thêm :</label>
                                <div class="col-sm-10">
                                    <h3>
                                    {{ \Carbon\Carbon::parse($blogs->created_at)->format('d/m/Y') }}
                                    </h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 ml-sm-auto">
                                    <a href="{{route('admin_blog.index')}}" class="btn btn-info">Quay lại</a>
                                </div>
                            </div>
                    </div>
                </div>
@endsection





