<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\orders;
use App\Models\orders_details;
use App\Models\orders_users;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = orders::all();
        $orders_users = orders_users::all();
        $order = '';
        return view('admin.page.order_manager.order.order',[ 
            'orders' => $orders,
            'order' => $order,
            'orders_users' => $orders_users,
        ]);
    }
    public function admin_order_search(Request $request)
    {
        $orders = orders::all();
        $orders_users = orders_users::all();
        $code = $request->code;
        if(!$code){
            return redirect('admin_order');
        }
        $pattern = '/^\d{8}-\d+$/';
        if (preg_match($pattern, $code)) {
        }
        else{
            return redirect('admin_order')->with('success', 'Đơn hàng không tồn tại!');
        }
        $parts = explode("-", $code);
        $charactersBeforeDash = $parts[0];
        $id = $parts[1];
        $order = orders::find($id);
        $formattedDate = date('Ymd', strtotime($order->created_at));
        if($order and  $formattedDate == $charactersBeforeDash){
            return view('admin.page.order_manager.order.order',[
                'orders' => $orders,
                'order' => $order,
                'orders_users' => $orders_users,
            ]);
        }
        else{
            return redirect('admin_order')->with('success', 'Đơn hàng không tồn tại!');
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.order_manager.order.add');
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
            'payment' => 'required',
            ]
        );
        $orders = new orders();
        $orders->note = $request->note;
        $orders->payment = $request->payment;
        $orders->status = '1';

        $orders->save();
        return redirect('admin_order')->with('success', 'Thêm đơn hàng thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders = orders::find($id);
        $formattedDate = date('Ymd', strtotime($orders->created_at));
        $orderCode = $formattedDate . '-' . $orders->id;
        return view('admin.page.order_manager.order.detail',[ 
            'orders' => $orders,
            'orderCode' =>  $orderCode,
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
        $orders = orders::find($id);
        return view('admin.page.order_manager.order.edit',[ 
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
            'payment' => 'required',
            ]
        );
        $orders = orders::find($id);
        $orders->note = $request->note;
        $orders->payment = $request->payment;
        $orders->status = $request->status;

        $orders->save();
        return redirect('admin_order')->with('success', 'Sửa đơn hàng thành công!');
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
            $orders = orders::findOrFail($id);
            $orders->delete();
            return redirect('admin_order')->with('success', 'Xóa đơn hàng thành công!');
        } catch (\Exception $e) {
            return redirect('admin_order')->with('error', 'Không thể xóa .');
        }
    }
}
