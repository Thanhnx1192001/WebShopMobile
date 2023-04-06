@extends('admin.index')

@section('header')
    <title>Thêm </title>
@endsection

@section('content')
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Thêm bài viết</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form action="{{route('admin_blog.store')}}" method="post" class="form-horizontal" id="form-sample-1"  novalidate="novalidate" enctype="multipart/form-data" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tên người tạo</label>
                                <div class="form-group">
                                        <select class="form-control" name="user_id">
                                            @foreach($users as $row)
                                            <option value="{{$row->id}}">{{$row->name}}</option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tên bài viết</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="title">
                                </div>
                                @if ($errors->has('title'))
                                    <small class="form-text text-muted">{{ $errors->first('title') }}</small>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Link ảnh</label>
                                <div class="col-sm-10">
                                    <input type="file" name="img_url">
                                </div>
                                @if ($errors->has('img_url'))
                                    <small class="form-text text-muted">{{ $errors->first('img_url') }}</small>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nội dung</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="content">
                                </div>
                                @if ($errors->has('content'))
                                    <small class="form-text text-muted">{{ $errors->first('content') }}</small>
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





