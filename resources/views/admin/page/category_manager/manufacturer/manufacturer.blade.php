@extends('admin.index')

@section('header')
    <title>Quản lý nhà sản xuất</title>
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

<a href="{{route('admin_manufacturer.create')}}" class="btn btn-success btn-add">Thêm</a>
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Quản lí nhà sản xuất</div>
                    </div>
                    <div class="ibox-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên nhà sản xuất</th>
                                        <th>Tên danh mục</th>
                                        <th>Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($manufacturers as $row)
                                    <tr>
                                        <td>{{($loop->iteration)}}</td>
                                        <td>{{$row->name}}</td>
                                        @foreach($categories as $row2)
                                            @if($row->category_id == $row2->id) 
                                            <td>{{$row2->name}}</td>
                                            @endif
                                        @endforeach
                                        <td>
                                        <div class="btn-group">
								            <a href="{{route('admin_manufacturer.edit',$row->id)}}" class="btn btn-warning btn-edit ">Sửa</a>
                                            <form method="POST" action="{{route('admin_manufacturer.destroy',$row->id)}}" onsubmit="return ConfirmDelete( this )">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger btn-delete " type="submit">Xóa</button>
                                            </form>
                                        </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $manufacturers->links() }}
                    </div>
                </div>
@endsection