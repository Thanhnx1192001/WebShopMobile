@extends('admin.index')

@section('header')
    <title>Quản lý sản phẩm</title>
@endsection

@section('content')
@if(session('success'))
    <div class="alert alert-info">{{ session('success') }}</div>
@endif
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<a href="{{route('admin_product.create')}}" class="btn btn-success btn-add">Thêm</a>
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Quản lí sản phẩm</div>
                    </div>
                    <div class="ibox-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Hình ảnh</th>
                                        <th>Màu sắc</th>
                                        <th>Bộ nhớ</th>
                                        <th>Giá tiền</th>
                                        <th>Giá giảm</th>
                                        <th>Số lượng</th>
                                        <th>Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $row)
                                    <tr>
                                        <td>{{($loop->iteration)}}</td>
                                        <td>{{$row->title}}</td>
                                        <td><img style="max-width: 300px; max-height: 300px;" src="{{asset($row->main_img)}}"></td>
                                        <td>{{$row->color}}</td>
                                        <td>{{$row->memory}}</td>
                                        <td>{{number_format($row->price,0,'.','.') }} đ</td>
                                        <td>{{number_format($row->discount,0,'.','.') }} đ</td>
                                        <td>{{$row->quantity}}</td>
                                        <td>
                                        <div class="btn-group">
                                            <a href="{{route('admin_product.show',$row->id)}}" class="btn btn-info btn-show">Chi tiết</a></br>
								            <a href="{{route('admin_product.edit',$row->id)}}" class="btn btn-warning btn-edit">Sửa</a>
                                            <form method="POST" action="{{route('admin_product.destroy',$row->id)}}" onsubmit="return ConfirmDelete( this )">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger btn-delete" type="submit">Xóa</button>
                                            </form>
                                        </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
@endsection