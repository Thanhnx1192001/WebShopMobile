@extends('admin.index')

@section('header')
    <title>Quản lý phản hồi người dùng</title>
@endsection

@section('content')
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Quản lí phản hồi người dùng</div>
                    </div>
                    <div class="ibox-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th width="50px"></th>
                                        <th>ID</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Tên người bình luận</th>
                                        <th>Email</th>
                                        <th>Số điện thoại</th>
                                        <th>Nội dung</th>
                                        <th>Đánh giá</th>
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
                                        <td>Duyệt</td>
                                        <td>duyet@gmail.com</td>
                                        <td>0123345667</td>
                                        <td>Máy rất đẹp</td>
                                        <td>5</td>
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