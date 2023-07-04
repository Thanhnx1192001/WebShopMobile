<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\orders;
use App\Models\orders_details;
use App\Models\orders_users;
use App\Models\products;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = orders::all();
        $products = products::all();
        $orders_details = orders_details::all();
        $orders_users = orders_users::all();
        $order ='';
        return view('admin.page.order_manager.order_detail.order_detail',[ 
            'order' => $order,
            'orders_details' => $orders_details,
            'orders_users' => $orders_users,
            'orders' => $orders,
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_order_detail_search(Request $request)
    {
        $orders = orders::all();
        $products = products::all();
        $orders_details = orders_details::all();
        $orders_users = orders_users::all();
        $code = $request->code;
        $pattern = '/^\d{8}-\d+$/';
        if (preg_match($pattern, $code)) {
        }
        else{
            return redirect('admin_order_detail')->with('success', 'Đơn hàng không tồn tại!');
        }
        $parts = explode("-", $code);
        $charactersBeforeDash = $parts[0];
        $id = $parts[1];
        $order = orders::find($id);
        $formattedDate = date('Ymd', strtotime($order->created_at));
        if($order and  $formattedDate == $charactersBeforeDash){
            return view('admin.page.order_manager.order_detail.order_detail',[
                'order' => $order,
                'orders_details' => $orders_details,
                'orders_users' => $orders_users,
                'orders' => $orders,
                'products' => $products,
            ]);
        }
        else{
            return redirect('admin_order_detail')->with('success', 'Đơn hàng không tồn tại!');
        }
    }
    public function create()
    {
        $orders_details = orders_details::all();
        $orders = orders::all();
        $products = products::all();
        return view('admin.page.order_manager.order_detail.add',[ 
            'orders_details' => $orders_details,
            'orders' => $orders,
            'products' => $products,
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
            'num' => 'required',
            ]
            ,[
            'num.required' => 'Số lượng không được trống'
            ]
        );
        $orders_details = new orders_details();
        $orders_details->order_id = $request->order_id;
        $orders_details->product_id = $request->product_id;
        $orders_details->num = $request->num;
        $orders_details->save();
        return redirect('admin_order_detail')->with('success', 'Thêm đơn hàng chi tiết thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders_details = orders_details::find($id);
        return view('admin.page.order_manager.order_detail.detail',[ 
            'orders_details' => $orders_details,
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
        $orders_details = orders_details::find($id);
        $orders = orders::all();
        $products = products::all();
        return view('admin.page.order_manager.order_detail.edit',[ 
            'orders_details' => $orders_details,
            'orders' => $orders,
            'products' => $products,
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
            'num' => 'required',
            ]
            ,[
            'num.required' => 'Số lượng không được trống'
            ]
        );
        $orders_details = orders_details::find($id);
        $orders_details->order_id = $request->order_id;
        $orders_details->product_id = $request->product_id;
        $orders_details->num = $request->num;
        $orders_details->save();
        return redirect('admin_order_detail')->with('success', 'Sửa đơn hàng chi tiết thành công!');
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
            $orders_details = orders_details::findOrFail($id);
            $orders_details->delete();
            return redirect('admin_order_detail')->with('success', 'Xóa đơn hàng chi tiết thành công!');
        } catch (\Exception $e) {
            return redirect('admin_order_detail')->with('error', 'Không thể xóa đang liên kết với bảng khác.');
        }
    }
}
