@extends('admin.index')

@section('header')
    <title>Quản lý bài viết</title>
@endsection

@section('content')
@if(session('success'))
    <div class="alert alert-info">{{ session('success') }}</div>
@endif

<a href="{{route('admin_blog.create')}}" class="btn btn-success btn-add">Thêm danh mục mới</a>

                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Quản lý bài viết</div>
                    </div>
                    <div class="ibox-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên bài viết</th>
                                        <th>Ảnh của bài viết</th>
                                        <th>Nội dung</th>
                                        <th>Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($blogs as $row)
                                    <tr>
                                        <td>{{($loop->iteration)}}</td>
                                        <td>{{$row->title}}</td>
                                        <td><img src="{{ asset($row->img_url)}}" style="max-width: 300px; max-height: 300px;" alt=""></td>
                                        @if (strlen($row->content) > 255)
                                            <td> {{Str::limit($row->content, 50, '...')}} </td>
                                        @else
                                            <td> {{ $row->content }} </td>
                                        @endif
                                       
                                        <td>
                                        <div class="btn-group">
                                            <a href="{{route('admin_blog.show',$row->id)}}" class="btn btn-info btn-show">Chi tiết</a></br>
								            <a href="{{route('admin_blog.edit',$row->id)}}" class="btn btn-warning btn-edit">Sửa</a>
                                            <form method="POST" action="{{route('admin_blog.destroy',$row->id)}}" onsubmit="return ConfirmDelete( this )">
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