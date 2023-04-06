@extends('admin.index')

@section('header')
    <title>Sửa sản phẩm</title>
@endsection

@section('content')
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Sửa sản phẩm</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form action="{{route('admin_product.update',$products->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
							@method('PATCH')
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tên nhà sản xuất</label>
                                <div class="form-group">
                                        <select class="form-control" name="manufacturer_id">
                                            @foreach($manufacturers as $row)
                                            <option {{ $row->id == $products->manufacturer_id ? 'selected' : ''}} value="{{$row->id}}">{{$row->name}}</option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tên sản phẩm</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="title" value="{{$products->title}}" >
                                </div>
                                @if ($errors->has('title'))
                                    <small class="form-text text-muted">{{ $errors->first('title') }}</small>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Link ảnh chính</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" name="main_img">
                                </div>
                                @if ($errors->has('main_img'))
                                    <small class="form-text text-muted">{{ $errors->first('main_img') }}</small>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Màu sắc</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="color" value="{{$products->color}}">
                                </div>
                                @if ($errors->has('color'))
                                    <small class="form-text text-muted">{{ $errors->first('color') }}</small>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Bộ nhớ</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="memory" value="{{$products->memory}}" >
                                </div>
                                @if ($errors->has('memory'))
                                    <small class="form-text text-muted">{{ $errors->first('memory') }}</small>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Giá giảm</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="discount" value="{{$products->discount}}">
                                </div>
                                @if ($errors->has('discount'))
                                    <small class="form-text text-muted">{{ $errors->first('discount') }}</small>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Giá niêm yết</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="price" value="{{$products->price}}">
                                </div>
                                @if ($errors->has('price'))
                                    <small class="form-text text-muted">{{ $errors->first('price') }}</small>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Số lượng</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="quantity" value="{{$products->quantity}}">
                                </div>
                                @if ($errors->has('quantity'))
                                    <small class="form-text text-muted">{{ $errors->first('quantity') }}</small>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mô tả ngắn gọn</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="description_summary" value="{{$products->description_summary}}">
                                </div>
                                @if ($errors->has('description_summary'))
                                    <small class="form-text text-muted">{{ $errors->first('description_summary') }}</small>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mô tả chi tiết</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="description_detailed" value="{{$products->description_detailed}}">
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





