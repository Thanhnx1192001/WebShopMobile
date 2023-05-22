@extends('admin.index')

@section('header')
    <title>Thêm sản phẩm mới</title>
@endsection

@section('content')
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Thêm sản phẩm mới</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form action="{{route('admin_product.store')}}" method="POST" class="form-horizontal" id="form-sample-1"  novalidate="novalidate" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tên nhà sản xuất</label>
                                <div class="form-group">
                                        <select class="form-control" name="manufacturer_id">
                                            @foreach($manufacturers as $row)
                                            <option value="{{$row->id}}">{{$row->name}} - 
                                            @foreach($categories as $row1)
                                            @if($row->category_id == $row1->id)
                                            {{$row1->name}} 
                                            @endif 
                                            @endforeach
                                            </option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tên sản phẩm</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="title">
                                </div>
                                @if ($errors->has('title'))
                                    <small class="form-text text-muted">{{ $errors->first('title') }}</small>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Link ảnh chính</label>
                                <div class="col-sm-10">
                                    <input type="file" name="main_img" >
                                </div>
                                @if ($errors->has('main_img'))
                                    <small class="form-text text-muted">{{ $errors->first('main_img') }}</small>
                                @endif
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Màu sắc</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="color">
                                </div>
                                @if ($errors->has('color'))
                                    <small class="form-text text-muted">{{ $errors->first('color') }}</small>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Bộ nhớ</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="memory">
                                </div>
                                @if ($errors->has('memory'))
                                    <small class="form-text text-muted">{{ $errors->first('memory') }}</small>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Giá giảm</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="discount">
                                </div>
                                @if ($errors->has('discount'))
                                    <small class="form-text text-muted">{{ $errors->first('discount') }}</small>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Giá niêm yết</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="price">
                                </div>
                                @if ($errors->has('price'))
                                    <small class="form-text text-muted">{{ $errors->first('price') }}</small>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Số lượng</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="quantity">
                                </div>
                                @if ($errors->has('quantity'))
                                    <small class="form-text text-muted">{{ $errors->first('quantity') }}</small>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mô tả ngắn gọn</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="kich_thuoc" placeholder="Kích thước">
                                    <input class="form-control" type="text" name="do_phan_giai" placeholder="Độ phân giải">
                                    <input class="form-control" type="text" name="ram" placeholder="ram">
                                    <input class="form-control" type="text" name="he_dieu_hanh" placeholder="Hệ điều hành">
                                    <input class="form-control" type="text" name="cpu" placeholder="CPU">
                                    <input class="form-control" type="text" name="bo_nho_trong" placeholder="Bộ nhớ trong">
                                    <input class="form-control" type="text" name="dung_luong_pin" placeholder="Dung lượng pin">

                                </div>
                                @if ($errors->has('kich_thuoc'))
                                    <small class="form-text text-muted">{{ $errors->first('kich_thuoc') }}</small>
                                @endif
                                @if ($errors->has('do_phan_giai'))
                                    <small class="form-text text-muted">{{ $errors->first('do_phan_giai') }}</small>
                                @endif
                                @if ($errors->has('ram'))
                                    <small class="form-text text-muted">{{ $errors->first('ram') }}</small>
                                @endif
                                @if ($errors->has('he_dieu_hanh'))
                                    <small class="form-text text-muted">{{ $errors->first('he_dieu_hanh') }}</small>
                                @endif
                                @if ($errors->has('cpu'))
                                    <small class="form-text text-muted">{{ $errors->first('cpu') }}</small>
                                @endif
                                @if ($errors->has('bo_nho_trong'))
                                    <small class="form-text text-muted">{{ $errors->first('bo_nho_trong') }}</small>
                                @endif
                                @if ($errors->has('dung_luong_pin'))
                                    <small class="form-text text-muted">{{ $errors->first('dung_luong_pin') }}</small>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mô tả chi tiết</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="description_detailed">
                                </div>
                                @if ($errors->has('description_detailed'))
                                    <small class="form-text text-muted">{{ $errors->first('description_detailed') }}</small>
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





