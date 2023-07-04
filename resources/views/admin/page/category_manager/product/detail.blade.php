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
                                    <h3>{{$products -> id}}</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tên nhà sản xuất :</label>
                                <div class="col-sm-10">
                                    <h3>{{$manufacturers -> name}}</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Hình ảnh :</label>
                                <div class="col-sm-10">
                                    <h3><img src="{{ asset($products->main_img)}}" alt="Ảnh hiện thị chính"></h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tên sản phẩm :</label>
                                <div class="col-sm-10">
                                    <h3>{{$products -> title}}</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Màu sắc :</label>
                                <div class="col-sm-10">
                                    <h3>{{$products -> color}}</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Bộ nhớ :</label>
                                <div class="col-sm-10">
                                    <h3>{{$products -> memory}}</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Giá niêm yết :</label>
                                <div class="col-sm-10">
                                    <h3>{{number_format($products -> price,0,'.','.') }} đ</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Giá giảm :</label>
                                <div class="col-sm-10">
                                    <h3>{{number_format($products -> discount,0,'.','.') }} đ</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Số lượng:</label>
                                <div class="col-sm-10">
                                    <h3>{{$products -> quantity}}</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mô tả tóm tắt :</label>
                                <div class="col-sm-10">
                                    <h3>{{$products -> description_summary}}</h3>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mô tả chi tiết :</label>
                                <div class="col-sm-10">
                                    <h3>{{$products -> description_detailed}}</h3>
                                </div>
                            </div>
							<div class="form-group row">
                                <label class="col-sm-2 col-form-label">Ngày thêm :</label>
                                <div class="col-sm-10">
                                    <h3>{{ \Carbon\Carbon::parse($products->created_at)->format('d/m/Y') }}</h3>
                                    
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 ml-sm-auto">
                                    <a href="{{route('admin_product.index')}}" class="btn btn-info">Quay lại</a>
                                </div>
                            </div>
                    </div>
                </div>
@endsection





