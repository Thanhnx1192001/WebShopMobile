@extends('admin.index')

@section('header')
    <title>Sửa nhà sản xuất</title>
@endsection

@section('content')
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Sửa nhà sản xuất</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form action="{{route('admin_manufacturer.show',$manufacturers->id)}}" method="post" class="form-horizontal">
							@method('PATCH')
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tên danh mục</label>
                                <div class="form-group">
                                        <select class="form-control" name="category_id">
                                            @foreach($category as $row)
                                            <option {{ $row->id == $manufacturers->category_id ? 'selected' : ''}}  value="{{$row->id}}"> {{$row->name}}</option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tên nhà sản xuất</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="name" value="{{$manufacturers->name}}" >
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





