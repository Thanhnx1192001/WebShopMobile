@extends('admin.index')

@section('header')
    <title>Quản lý sản phẩm</title>
@endsection

@section('content')
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Quản lí sản phẩm</div>
                    </div>
                    <div class="ibox-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th width="50px"></th>
                                        <th>ID</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Tên nhà sản xuất</th>
                                        <th>Tên danh mục</th>
                                        <th>Màu sắc</th>
                                        <th>Bộ nhớ</th>
                                        <th>Mô tả ngắn gọn</th>
                                        <th>Mô tả chi tiết</th>
                                        <th>Ngày tạo</th>
                                        <th>Ngày sửa</th>
                                        <th>Ngày xóa</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <label class="ui-checkbox">
                                                <input type="checkbox">
                                                <span class="input-span"></span>
                                            </label>
                                        </td>
                                        <td>1</td>
                                        <td>Iphone 11 pro max</td>
                                        <td>Iphone</td>
                                        <td>Điện thoại</td>
                                        <td>Xám</td>
                                        <td>64g</td>
                                        <td>Điện thoại rất đẹp</td>
                                        <td>Điện thoại rất rất đẹp</td>
                                        <td>21/3/2023</td>
                                        <td>21/3/2023</td>
                                        <td>21/3/2023</td>
                                        <td>
                                            <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                            <button class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
@endsection