@extends('admin.index')

@section('header')
    <title>Quản lý phản hồi người dùng</title>
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

<a href="{{route('admin_feed_back.create')}}" class="btn btn-success btn-add">Thêm</a>
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Quản lí phản hồi người dùng</div>
                    </div>
                    <div class="ibox-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Tên người bình luận</th>
                                        <th>Email</th>
                                        <th>Số điện thoại</th>
                                        <th>Nội dung</th>
                                        <th>Đánh giá</th>
                                        <th>Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($feed_back as $row)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>@foreach($products as $row2)
                                                @if($row->product_id == $row2->id)
                                                    {{$row2->title}}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->email}}</td>
                                        <td>{{$row->phone_number}}</td>
                                        @if (strlen($row->content) > 50)
                                            <td> {{Str::limit($row->content, 50, '...')}} </td>
                                        @else
                                            <td> {{ $row->content }} </td>
                                        @endif
                                        <td>{{$row->star}}</td>
                                        <td>
                                        <div class="btn-group">
                                            <a href="{{route('admin_feed_back.show',$row->id)}}" class="btn btn-info btn-show">Chi tiết</a></br>
								            <a href="{{route('admin_feed_back.edit',$row->id)}}" class="btn btn-warning btn-edit">Sửa</a>
                                            <form method="POST" action="{{route('admin_feed_back.destroy',$row->id)}}" onsubmit="return ConfirmDelete( this )">
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