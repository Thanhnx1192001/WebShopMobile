<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = users::orderBy('id','ASC')->paginate(10);
        return view('admin.page.user_manager.user.user',[ 
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.user_manager.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'role' => 'required',
            'phone_number' => 'required|regex:/^0\d{9}$/',
            'address' => 'required',
            ],
            [
            'name.required'=>'Tên không được để trống',
            'name.max'=>'Tên không được vượt quá 255 kí tự',
            'email.required'=>'Email không được để trống',
            'email.email'=>'email phải đúng định dạng',
            'phone_number.required'=>'Số điện thoại không được trống',
            'phone_number.regex'=>'Số điện thoại phải đúng định dạng',
            'address.required'=>'Địa chỉ không được để trống',
            ]

        );
        $users = new users();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->phone_number = $request->phone_number;
        $users->role = $request->role;
        $users->address = $request->address;
        
        $users->save();

        return redirect('admin_user')->with('success', 'Thêm người dùng thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $users = users::findOrFail($id);
            $users->delete();
            return redirect('admin_user')->with('success', 'Đã xóa người dùng thành công.');
        } catch (\Exception $e) {
            return redirect('admin_user')->with('error', 'Không thể xóa đang liên kết với bảng khác.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = users::find($id);
        return view('admin.page.user_manager.user.edit',[ 
            'users' => $users,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'role' => 'required',
            'phone_number' => 'required|regex:/^0\d{9}$/',
            'address' => 'required',
            ],
            [
            'name.required'=>'Tên không được để trống',
            'name.max'=>'Tên không được vượt quá 255 kí tự',
            'email.required'=>'Email không được để trống',
            'email.email'=>'email phải đúng định dạng',
            'phone_number.required'=>'Số điện thoại không được trống',
            'phone_number.regex'=>'Số điện thoại phải đúng định dạng',
            'address.required'=>'Địa chỉ không được để trống',
            ]

        );
        $users = users::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->phone_number = $request->phone_number;
        $users->role = $request->role;
        $users->address = $request->address;
        
        $users->save();

        return redirect('admin_user')->with('success', 'Sửa thông tin người dùng thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = users::findOrFail($id);
        $users->delete();
        return redirect('admin_user')->with('success', 'Xóa người dùng thành công!');
    }
}
