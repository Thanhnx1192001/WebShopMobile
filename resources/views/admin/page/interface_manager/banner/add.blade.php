@extends('admin.index')

@section('header')
    <title>Thêm banner</title>
@endsection

@section('content')
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Thêm banner mới</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form action="{{route('admin_banner.store')}}" method="post" class="form-horizontal" id="form-sample-1"  novalidate="novalidate" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tên banner</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="title">
                                    @if ($errors->has('title'))
                                    <small class="form-text text-muted">{{ $errors->first('title') }}</small>
                                @endif
                                </div>
                                
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kiểu banner</label>
                                <div class="form-group">
                                    <select class="form-control" name="type">
                                        <option value="0">Banner phụ</option>
                                        <option value="1">Banner chính</option>
                                    </select>
                                </div>
                                @if ($errors->has('type'))
                                    <small class="form-text text-muted">{{ $errors->first('type') }}</small>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Link banner</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="link">
                                    @if ($errors->has('link'))
                                    <small class="form-text text-muted">{{ $errors->first('link') }}</small>
                                @endif
                                </div>
                                
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Link ảnh</label>
                                <div class="col-sm-10">
                                    <input type="file" name="img_url">
                                    @if ($errors->has('img_url'))
                                    <small class="form-text text-muted">{{ $errors->first('img_url') }}</small>
                                @endif
                                </div>
                                
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





