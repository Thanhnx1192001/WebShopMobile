@extends('admin.index')

@section('header')
    <title>Quản lý danh mục</title>
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

<a href="{{route('admin_category.create')}}" class="btn btn-success btn-add">Thêm</a>

<!-- Thông báo lỗi -->
<div id="error-message" class="alert alert-danger" style="display: none;"></div>
                <div class="alert alert-success" style="display:none;" id='success-message' role="alert"></div>
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Quản lí danh mục</div>
                    </div>
                    <div class="ibox-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên danh mục </th>
                                        <th>Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($category as $row)
                                    <tr>
                                        <td>{{($loop->iteration)}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>
                                        <div class="btn-group">
								            <a href="{{route('admin_category.edit',$row->id)}}" class="btn btn-warning btn-edit">Sửa</a>
                                            <form method="POST" action="{{route('admin_category.destroy',$row->id)}}" onsubmit="return ConfirmDelete( this )">
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
                        {{ $category->links() }}
                    </div>
                </div>
@endsection



