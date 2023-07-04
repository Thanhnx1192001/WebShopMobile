<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\orders;
use App\Models\orders_users;
use App\Models\users;
use Illuminate\Http\Request;

class OrderUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders_users = orders_users::all();
        $orders = orders::all();
        $order_user = '';
        return view('admin.page.order_manager.order_user.order_user',[ 
            'orders_users' => $orders_users,
            'orders' => $orders,
            'order_user' => $order_user,

        ]);
    }
    public function admin_order_user_search(Request $request)
    {
        $orders_users = orders_users::all();
        $orders = orders::all();
        $code = $request->code;
        if(!$code){
            return redirect('admin_order_user');
        }
        $pattern = '/^\d{8}-\d+$/';
        if (preg_match($pattern, $code)) {
        }
        else{
            return redirect('admin_order_user')->with('success', 'Đơn hàng không tồn tại!');
        }
        $parts = explode("-", $code);
        $charactersBeforeDash = $parts[0];
        $id = $parts[1];
        $order = orders::find($id);
        $formattedDate = date('Ymd', strtotime($order->created_at));
        if($order and  $formattedDate == $charactersBeforeDash){
            $order_user = orders_users::where('order_id',$order->id)->first(); 
            return view('admin.page.order_manager.order_user.order_user',[
                'orders_users' => $orders_users,
                'orders' => $orders,
                'order_user' => $order_user,
            ]);
        }
        else{
            return redirect('admin_order_user')->with('success', 'Đơn hàng không tồn tại!');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orders = orders::all();
        $users = users::all();

        return view('admin.page.order_manager.order_user.add',[ 
            'orders' => $orders,
            'users' => $users,
        ]);
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
        $orders_users = new orders_users();
        $orders_users->order_id = $request->order_id;
        $orders_users->name = $request->name;
        $orders_users->email = $request->email;
        $orders_users->phone_number = $request->phone_number;
        $orders_users->address = $request->address;
        $orders_users->save();

        return redirect('admin_order_user')->with('success', 'Thêm thông tin người mua hàng thành công!');
    }

    /**
     * Display the specified resource
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders_users = orders_users::find($id);
        return view('admin.page.order_manager.order_user.detail',[ 
            'orders_users' => $orders_users,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orders_users = orders_users::find($id);
        $orders = orders::all();

        return view('admin.page.order_manager.order_user.edit',[ 
            'orders_users' => $orders_users,
            'orders' => $orders,
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
        $orders_users = orders_users::find($id);
        $orders_users->order_id = $request->order_id;
        $orders_users->name = $request->name;
        $orders_users->email = $request->email;
        $orders_users->phone_number = $request->phone_number;
        $orders_users->address = $request->address;
        $orders_users->save();

        return redirect('admin_order_user')->with('success', 'Sửa thông tin người mua hàng thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $orders_users = orders_users::findOrFail($id);
            $orders_users->delete();
            return redirect('admin_order_user')->with('success', 'Xóa thông tin người mua hàng thành công!');
        } catch (\Exception $e) {
            return redirect('admin_order_user')->with('error', 'Không thể xóa đang liên kết với bảng khác.');
        }
    }
}
