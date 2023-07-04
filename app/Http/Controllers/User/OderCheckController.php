<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\orders;
use App\Models\orders_details;
use App\Models\orders_users;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class OderCheckController extends Controller
{
    public function OrderCheckDetail(Request $request)
    {
        $code = $request->code;
        $pattern = '/^\d{8}-\d+$/';
        if (preg_match($pattern, $code)) {
        }
        else{
            return redirect('order_check')->with('success', 'Đơn hàng không tồn tại!');
        }
        $parts = explode("-", $code);
        $charactersBeforeDash = $parts[0];
        $id = $parts[1];
        $order = orders::find($id);
        $formattedDate = date('Ymd', strtotime($order->created_at));
        if($order and  $formattedDate == $charactersBeforeDash){
            $orders_details = orders_details::where('order_id',$id)->get();
            $order_user = orders_users::where('order_id',$id)->first();
            $products = products::all();

            $sum_products = DB::table('orders_details')
                        ->join('products', 'products.id', '=', 'orders_details.product_id')
                        ->select('orders_details.order_id', DB::raw('SUM(products.discount * orders_details.num) AS total_discount'))
                        ->groupBy('orders_details.order_id')
                        ->get();
            foreach ($sum_products as $sum_product){
                if($sum_product->order_id == $id){
                    $total_discount = $sum_product->total_discount;
                }
            }
            return view('user.page.order_check.order_check_detail',[
                'total_discount' => $total_discount,
                'products' => $products,
                'code'=> $code,
                'order' => $order,
                'orders_details' => $orders_details,
                'order_user' => $order_user,
            ]);
        }
        else{
            return redirect('order_check')->with('success', 'Đơn hàng không tồn tại!');
        }
    }
    public function OrderCheckDetailUser($code)
    {
        $parts = explode("-", $code);
        $id = $parts[1];
        $order = orders::find($id);
        if($order){
            $orders_details = orders_details::where('order_id',$id)->get();
            $order_user = orders_users::where('order_id',$id)->first();
            $products = products::all();

            $sum_products = DB::table('orders_details')
                        ->join('products', 'products.id', '=', 'orders_details.product_id')
                        ->select('orders_details.order_id', DB::raw('SUM(products.discount * orders_details.num) AS total_discount'))
                        ->groupBy('orders_details.order_id')
                        ->get();
            foreach ($sum_products as $sum_product){
                if($sum_product->order_id == $id){
                    $total_discount = $sum_product->total_discount;
                }
            }
            // dd($order_user->name);
            return view('user.page.order_check.order_check_detail',[
                'total_discount' => $total_discount,
                'products' => $products,
                'code'=> $code,
                'order' => $order,
                'orders_details' => $orders_details,
                'order_user' => $order_user,
            ]);
        }
        else{
            return redirect('order_check')->with('success', 'Đơn hàng không tồn tại!');
        }
    }
}
