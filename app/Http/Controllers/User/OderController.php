<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\orders;
use App\Models\orders_details;
use App\Models\orders_users;
use App\Models\products;
use Illuminate\Support\Facades\Auth;



class OderController extends Controller
{
    public function AddOder(Request $request)
    {
        $request->validate(
            [
                'payment' => 'required',
                'name' => 'required|max:255',
                'email' => 'required|email',
                'phone_number' => 'required|regex:/^0\d{9}$/',
                'address' => 'required',
            ],
            [
                'name.required' => 'Tên không được để trống',
                'name.max' => 'Tên không được vượt quá 255 kí tự',
                'email.required' => 'Email không được để trống',
                'email.email' => 'email phải đúng định dạng',
                'phone_number.required' => 'Số điện thoại không được trống',
                'phone_number.regex' => 'Số điện thoại phải đúng định dạng',
                'address.required' => 'Địa chỉ không được để trống',
            ]
        );

        $orders = new orders();
        $orders->note = $request->note;
        if ($request->payment == "cash") {
            $orders->payment = '2';
        } else {
            $orders->payment = '1';
        }
        $orders->status = '1';
        $orders->save();

        if (session()->has('Cart') != null) {
            foreach (session('Cart')->products as $item) {
                $orders_details = new orders_details();
                $orders_details->order_id = orders::latest('id')->first()->id;
                $orders_details->product_id = $item['productInfo']->id;
                $orders_details->num = $item['quanty'];
                $orders_details->save();
            }
        } else {
            return "giỏ hàng đang rỗng";
        }
        $orders_users = new orders_users();
        if (Auth::check()) {
            $orders_users->user_id = Auth::id();
        }
        $orders_users->order_id = orders::latest('id')->first()->id;
        $orders_users->name = $request->name;
        $orders_users->email = $request->email;
        $orders_users->phone_number = $request->phone_number;
        $orders_users->address = $request->address;
        $orders_users->save();

        $NewOrderId = orders::latest('id')->first()->id;
        $NewOrder = orders::find($NewOrderId);
        $NewOrderDetail = orders_details::where('order_id', $NewOrderId)->get();
        $NewOrderUser = orders_users::where('order_id', $NewOrderId)->first();
        $products = products::all();
        $totalPayment = session('Cart')->totalPrice;
        $formattedDate = date('Ymd', strtotime(orders::find($NewOrderId)->created_at));
        $orderCode = $formattedDate . '-' . $NewOrderId;
        session()->forget('Cart');
        return view('user.page.cart.cart_complete', [
            'NewOrder' => $NewOrder,
            'NewOrderId' => $NewOrderId,
            'NewOrderDetail' => $NewOrderDetail,
            'NewOrderUser' => $NewOrderUser,
            'orderCode' => $orderCode,
            'totalPayment' => $totalPayment,
            'products' => $products,
        ]);
    }
}
