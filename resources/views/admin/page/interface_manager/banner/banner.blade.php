@extends('admin.index')

@section('header')
    <title>Quản lý banner</title>
@endsection

@section('content')
@if(session('success'))
    <div class="alert alert-info">{{ session('success') }}</div>
@endif

<a href="{{route('admin_banner.create')}}" class="btn btn-success btn-add">Thêm</a>
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Quản lí banner</div>
                    </div>
                    <div class="ibox-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Kiểu banner</th>
                                        <th>Tên banner</th>
                                        <th>Ảnh</th>
                                        <th>Link</th>
                                        <th>Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($banners as $row)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        @if($row ->type == 1)
                                            <td>Banner chính</td>
                                        @else
                                            <td>Banner phụ</td>
                                        @endif
                                        <td>{{$row ->title}}</td>
                                        <td><img style="max-width: 300px; max-height: 300px;" src="{{asset($row->img_url)}}"></td>
                                        <td><a href="{{$row ->link}}">Link</a></td>
                                        <td>
                                        <div class="btn-group">
								            <a href="{{route('admin_banner.edit',$row->id)}}" class="btn btn-warning btn-edit">Sửa</a>
                                            <form method="POST" action="{{route('admin_banner.destroy',$row->id)}}" onsubmit="return ConfirmDelete( this )">
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