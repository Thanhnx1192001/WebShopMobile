@extends('admin.index')

@section('header')
    <title>Sửa thumbnail</title>
@endsection

@section('content')
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Sửa thumbnail</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form action="{{route('admin_thumbnail.update',$thumbnails->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
							@method('PATCH')
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Id sản phẩm và tên sản phẩm</label>
                                <div class="form-group">
                                        <select class="form-control" name="product_id">
                                            @foreach($products as $row)
                                            <option {{ $row->id == $thumbnails->product_id ? 'selected' : ''}} value="{{$row->id}}">{{$row->id}}: {{$row->title}} , {{$row->color}}</option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tên hình ảnh</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="title" value="{{$thumbnails->title}}">
                                </div>
                                @if ($errors->has('title'))
                                    <small class="form-text text-muted">{{ $errors->first('title') }}</small>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Link ảnh</label>
                                <div class="col-sm-10">
                                    <input type="file" name="thumbnail_url" >
                                </div>
                                @if ($errors->has('thumbnail_url'))
                                    <small class="form-text text-muted">{{ $errors->first('thumbnail_url') }}</small>
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





