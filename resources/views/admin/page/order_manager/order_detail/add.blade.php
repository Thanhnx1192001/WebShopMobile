@extends('admin.index')

@section('header')
    <title>Thêm danh mụ</title>
@endsection

@section('content')
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Thêm chi tiết đơn hàng mới</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form action="{{route('admin_order_detail.store')}}" method="post" class="form-horizontal" id="form-sample-1"  novalidate="novalidate">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Id đơn hàng</label>
                                <div class="form-group">
                                        <select class="form-control" name="order_id">
                                            @foreach($orders as $row)
                                            <option value="{{$row->id}}">{{$row->id}}</option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Id sản phẩm</label>
                                <div class="form-group">
                                        <select class="form-control" name="product_id">
                                            @foreach($products as $row)
                                            <option value="{{$row->id}}">{{$row->id}}</option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Số lượng</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="num">
                                </div>
                                @if ($errors->has('num'))
                                    <small class="form-text text-muted">{{ $errors->first('num') }}</small>
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





