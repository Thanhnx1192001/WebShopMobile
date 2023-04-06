@extends('admin.index')

@section('header')
    <title>Quản lý hình ảnh</title>
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

<a href="{{route('admin_thumbnail.create')}}" class="btn btn-success btn-add">Thêm</a>
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Quản lí hình ảnh sản phẩm</div>
                    </div>
                    <div class="ibox-body">
                        <div class="table-responsive">
                        @foreach($products as $row1)
                            <h3>Sản phẩm : {{$row1->id}} - {{$row1->title}} , {{$row1->color}}</h3>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên ảnh</th>
                                        <th>Ảnh</th>
                                        <th>Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $count = 0
                                    @endphp
                                    @foreach($thumbnails as $row)
                                    @if($row->product_id == $row1->id)
                                    @php
                                    $count++ 
                                    @endphp
                                    <tr>
                                        <td>{{$count}}</td>
                                        
                                        <td>{{$row->title}}</td>
                                        <td><img style="max-width: 300px; max-height: 300px;" src="{{asset($row->thumbnail_url)}}"></td>
                                        <td>
                                        <div class="btn-group">
								            <a href="{{route('admin_thumbnail.edit',$row->id)}}" class="btn btn-warning btn-edit">Sửa</a>
                                            <form method="POST" action="{{route('admin_thumbnail.destroy',$row->id)}}" onsubmit="return ConfirmDelete( this )">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger btn-delete" type="submit">Xóa</button>
                                            </form>
                                        </div>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        @endforeach
                        </div>
                    </div>
                </div>
@endsection