<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\products;
use App\Models\categories;
use App\Models\feed_back;
use App\Models\manufacturers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;



class ProductDetailController extends Controller
{
    public function product_detail($id){
        $product = products::find($id);
        $manufacturer = manufacturers::find($product->manufacturer_id);
        $category = categories::find($manufacturer->category_id);
        $products = products::where('manufacturer_id',$product->manufacturer_id)->get();
        $product_all = products::all();
        $product_feed_back = products::find($id);
        $feed_back_products = DB::table('products')
            ->join('feed_back', 'products.id', '=', 'feed_back.product_id')
            ->select('products.id as id', 'products.title as title', DB::raw('COUNT(products.id) as count'), DB::raw('AVG(feed_back.star) as star',))
            ->groupBy('products.id', 'products.title')
            ->get();

        App::setLocale('vi');

        $feed_back_product = feed_back::where('product_id',$id)->get();
        $currentDate = Carbon::now(); // Lấy thời gian hiện tại

        foreach ($feed_back_product as $feedback) {
            $createdAt = Carbon::parse($feedback->created_at);
            $feedback->time_diff = $createdAt->diffForHumans($currentDate);
        }
        $string = $product->description_summary;
        
        // Xóa dấu nháy đơn ở đầu và cuối chuỗi
        $string = trim($string, "'");
        // Tách các cặp key-value bằng dấu phẩy và khoảng trắng
        $parts = preg_split("/\s*,\s*/", $string);
        
        $data_summary = [];
        foreach ($parts as $part) {
            // Tách key và value bằng dấu ' => '
            $pair = explode(" => ", $part);
            $key = trim(trim($pair[0], "'"));
            $value = trim(trim($pair[1], "'"));
            $data_summary[$key] = $value;
        }
        return view('user.page.product_detail.product_detail',[ 
            'category' => $category,
            'manufacturer' => $manufacturer,
            'product' => $product,
            'products' => $products,
            'product_all' => $product_all,
            'feed_back_products' => $feed_back_products,
            'feed_back_product' => $feed_back_product,
            'product_feed_back' => $product_feed_back,
            'data_summary'=> $data_summary,
        ]);
    }
    public function store(Request $request)
    {
        $request->validate(
            [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone_number' => 'required|regex:/^0\d{9}$/',
            'content' => 'required',
            'star' => 'required',
            'product_id' => 'required',

            ],
            [
            'name.required'=>'Tên không được để trống',
            'name.max'=>'Tên không được vượt quá 255 kí tự',
            'email.required'=>'Email không được để trống',
            'email.email'=>'email phải đúng định dạng',
            'phone_number.required'=>'Số điện thoại không được trống',
            'phone_number.regex'=>'Số điện thoại phải đúng định dạng',
            'content.required'=>'Nội dung không được để trống',
            ]

        );
        $feed_back = new feed_back();
        $feed_back->product_id = $request->input('product_id');
        $feed_back->name = $request->name;
        $feed_back->email = $request->email;
        $feed_back->phone_number = $request->phone_number;
        $feed_back->content = $request->content;
        $feed_back->star = $request->star;
        
        $feed_back->save();

        // Return back to the previous page
        return redirect()->back()->with('success', 'Thêm bình luận thành công!');
    } 
    
}
