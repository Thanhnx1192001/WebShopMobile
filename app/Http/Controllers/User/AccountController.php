<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\orders;
use App\Models\orders_details;
use App\Models\orders_users;
use App\Models\products;
use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;


class AccountController extends Controller
{
    public function acc()
    {
        $user = Auth::user();
        return view('user.page.account.acc',[
            'user' => $user,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
            'name' => 'required|max:255',
            'email' => 'required|email',
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
        $users->phone_number = $request->phone_number;
        $users->address = $request->address;
        $users->save();

        return redirect('account')->with('success', 'Thêm người dùng thành công!');
    }

    public function change_password()
    {
        $user = Auth::user();
        return view('user.page.account.change_password',[
            'user' => $user,
        ]);
    }
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:6|confirmed',
        ],[
            'new_password.confirmed' => 'Xác nhận mật khẩu mới không khớp.',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            throw ValidationException::withMessages([
                'current_password' => 'Mật khẩu hiện tại không chính xác.',
            ]);
        }

        $user->password = Hash::make($request->new_password);
        $users = users::find($user->id);
        $users->password = $user->password;
        $users->save();

        return redirect('change_password')->with('success', 'Mật khẩu đã được cập nhật thành công.');
    }
    public function order_management()
    {
        $userId = Auth::id();
        $orders = orders::select('orders.id AS id', 'orders.payment AS payment', 'orders.status AS status', 'orders.created_at AS created_at', 'orders_users.user_id AS user_id')
            ->join('orders_users', 'orders.id', '=', 'orders_users.order_id')
            ->where('orders_users.user_id', $userId)
            ->get();

        return view('user.page.account.order_management',[
            'orders'=>$orders,
        ]);
    }
}
