@extends('admin.index')

@section('header')
    <title>Sửa danh mục</title>
@endsection

@section('content')
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Sửa danh mục</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form action="{{route('admin_category.update',$category->id)}}" method="post" class="form-horizontal">
							@method('PATCH')
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tên danh mục</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="name" value="{{$category->name}}">
                                </div>
                                @if ($errors->has('name'))
                                    <small class="form-text text-muted">{{ $errors->first('name') }}</small>
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





