@extends('admin.index')

@section('header')
    <title>Thêm phản hồi mới</title>
@endsection

@section('content')
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Thêm phản hồi mới</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form action="{{route('admin_feed_back.store')}}" method="post" class="form-horizontal" id="form-sample-1"  novalidate="novalidate">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tên sản phẩm</label>
                                <div class="form-group">
                                        <select class="form-control" name="product_id">
                                            @foreach($products as $row)
                                            <option value="{{$row->id}}">{{$row->title}}</option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tên người phản hồi</label>
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
                                <label class="col-sm-2 col-form-label">Số điện thoại</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="phone_number">
                                </div>
                                @if ($errors->has('phone_number'))
                                    <small class="form-text text-muted">{{ $errors->first('phone_number') }}</small>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nội dung phản hồi</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="content">
                                </div>
                                @if ($errors->has('content'))
                                    <small class="form-text text-muted">{{ $errors->first('content') }}</small>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Đánh giá</label>
                                <div class="form-group">
                                        <select class="form-control" name="star">
                                            <option value="1">1 star</option>
                                            <option value="2">2 star</option>
                                            <option value="3">3 star</option>
                                            <option value="4">4 star</option>
                                            <option selected value="5">5 star</option>
                                        </select>
                                </div>
                                @if ($errors->has('star'))
                                    <small class="form-text text-muted">{{ $errors->first('star') }}</small>
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





