<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\categories;
use App\Models\manufacturers;
use App\Models\products;
use App\Models\thumbnails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = categories::all();
        $manufacturers = manufacturers::all();
        $products = products::all();     
        $manufacturer_name = '';   
        $category_name = '';
        $title_search = '';
        return view('admin.page.category_manager.product.product',[ 
            'products' => $products,
            'categories' => $categories,
            'manufacturers' => $manufacturers,
            'manufacturer_name' => $manufacturer_name,
            'category_name' => $category_name,
            'title_search' => $title_search,
        ]);
    }
    public function admin_product_search(Request $request)
    {
        $title_search = $request->title;
        $manufacturer_id = $request->option;
        if($title_search and $manufacturer_id){
            $categories = categories::all();
            $manufacturers = manufacturers::all();
            $manufacturer_name = manufacturers::find($manufacturer_id);
            $category_name = categories::find($manufacturer_name->category_id);
            $query = products::query();
            if ($title_search != null) {
                $query->where('title', 'like', '%' . $title_search . '%');
            }
            if ($manufacturer_id != null) {
                $query->where('manufacturer_id', $manufacturer_id);
            }
            $products = $query->get();
    
            return view('admin.page.category_manager.product.product',[ 
                'products' => $products,
                'categories' => $categories,
                'manufacturers' => $manufacturers,
                'manufacturer_name' => $manufacturer_name->name,
                'category_name' => $category_name->name,
                'title_search' => $title_search,
            ]);
        }
        elseif($title_search){
            $categories = categories::all();
            $manufacturers = manufacturers::all();
            $manufacturer_name = '';
            $category_name = '';
            $query = products::query();
            if ($title_search != null) {
                $query->where('title', 'like', '%' . $title_search . '%');
            }
            if ($manufacturer_id != null) {
                $query->where('manufacturer_id', 'like', '%' . $manufacturer_id . '%');
            }
            $products = $query->get();
    
            return view('admin.page.category_manager.product.product',[ 
                'products' => $products,
                'categories' => $categories,
                'manufacturers' => $manufacturers,
                'manufacturer_name' => $manufacturer_name,
                'category_name' => $category_name,
                'title_search' => $title_search,
            ]);
        }
        elseif($manufacturer_id){
            $categories = categories::all();
            $manufacturers = manufacturers::all();
            $manufacturer_name = manufacturers::find($manufacturer_id);
            $category_name = categories::find($manufacturer_name->category_id);
            $query = products::query();
            if ($title_search != null) {
                $query->where('title', 'like', '%' . $title_search . '%');
            }
            if ($manufacturer_id != null) {
                $query->where('manufacturer_id', 'like', '%' . $manufacturer_id . '%');
            }
            $products = $query->get();
    
            return view('admin.page.category_manager.product.product',[ 
                'products' => $products,
                'categories' => $categories,
                'manufacturers' => $manufacturers,
                'manufacturer_name' => $manufacturer_name->name,
                'category_name' => $category_name->name,
                'title_search' => $title_search,
            ]);
        }
        else{
            return redirect('admin_product');
        }
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function create()
    {
        //
        $products = products::orderBy('id','ASC')->paginate(10);
        $manufacturers= manufacturers::all();
        $thumbnails = thumbnails::all();
        $categories = categories::all();
        return view('admin.page.category_manager.product.add',[ 
            'products' => $products,
            'manufacturers' => $manufacturers,
            'thumbnails' => $thumbnails,
            'categories' => $categories,
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
            'manufacturer_id' => 'required',
            'main_img' => 'required',
            'title' => 'required',
            'color' => 'required',
            'memory' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'quantity' => 'required',

            'kich_thuoc' => 'required',
            'do_phan_giai' => 'required',
            'ram' => 'required',
            'he_dieu_hanh' => 'required',
            'cpu' => 'required',
            'bo_nho_trong' => 'required',
            'dung_luong_pin' => 'required',

            'description_detailed' => 'required',
            ],
            [
            'main_img.required'=>'Link ảnh không được để trống',
            'title.required'=>'Tên sản phẩm không được để trống',
            'color.required'=>'Màu sắc không được để trống',
            'memory.required'=>'Bộ nhớ không được để trống',
            'price.required'=>'Giá niêm yết không được để trống',
            'discount.required'=>'Giá giảm không được để trống',
            'quantity.required'=>'Số lượng không được để trống',

            'kich_thuoc.required'=>'Kích thước không được để trống',
            'do_phan_giai.required'=>'Độ phân giải không được để trống',
            'ram.required'=>'Ram không được để trống',
            'he_dieu_hanh.required'=>'Hệ điều hành không được để trống',
            'cpu.required'=>'CPU không được để trống',
            'bo_nho_trong.required'=>'Bộ nhớ trong không được để trống',
            'dung_luong_pin.required'=>'Dung lượng pin không được để trống',

            'description_detailed.required'=>'Mô tả chi tiết không được để trống',
            ]
        );
        $path = $request->file('main_img')->store('images', 'public');
        $newPath = 'storage/' .$path;
        $products = new products();
        $products->manufacturer_id = $request->manufacturer_id;
        $products->main_img = $newPath;
        $products->title = $request->title;
        $products->color = $request->color;
        $products->memory = $request->memory;
        $products->price = $request->price;
        $products->discount = $request->discount;
        $products->quantity = $request->quantity;

        $kich_thuoc = $request->kich_thuoc;
        $do_phan_giai = $request->do_phan_giai;
        $ram = $request->ram;
        $he_dieu_hanh = $request->he_dieu_hanh;
        $cpu = $request->cpu;
        $bo_nho_trong = $request->bo_nho_trong;
        $dung_luong_pin = $request->dung_luong_pin;


        $products->description_summary = "'kich_thuoc' => '$kich_thuoc','do_phan_giai' => '$do_phan_giai','ram' => '$ram','he_dieu_hanh' => '$he_dieu_hanh','cpu' => '$cpu','bo_nho_trong' => '$bo_nho_trong','dung_luong_pin' => '$dung_luong_pin'";
        $products->description_detailed = $request->description_detailed;
        $products->save();

        return redirect('admin_product')->with('success', 'Thêm sản phẩm thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = products::find($id);
        $manufacturers = manufacturers::find($products->manufacturer_id);
        $thumbnails= thumbnails::find($products->thumbnail_id);
        return view('admin.page.category_manager.product.detail',[ 
            'products' => $products,
            'manufacturers' => $manufacturers,
            'thumbnails' => $thumbnails,
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
        $products = products::find($id);
        $manufacturers = manufacturers::all();
        $thumbnails= thumbnails::all();

        $string = $products->description_summary;
        
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
        return view('admin.page.category_manager.product.edit',[ 
            'data_summary' => $data_summary,
            'products' => $products,
            'manufacturers' => $manufacturers,
            'thumbnails' => $thumbnails,
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
            'manufacturer_id' => 'required',
            'main_img' => 'file|mimes:jpeg,png,webp|max:2048',
            'title' => 'required',
            'color' => 'required',
            'memory' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'quantity' => 'required',

            'kich_thuoc' => 'required',
            'do_phan_giai' => 'required',
            'ram' => 'required',
            'he_dieu_hanh' => 'required',
            'cpu' => 'required',
            'bo_nho_trong' => 'required',
            'dung_luong_pin' => 'required',
            'description_detailed' => 'required',
            ],
            [
            'main_img.mimes'=>'Ảnh phải đúng định dạng',
            'main_img.max'=>'Ảnh không được lớn hơn 2M',
            'title.required'=>'Tên sản phẩm không được để trống',
            'color.required'=>'Màu sắc không được để trống',
            'memory.required'=>'Bộ nhớ không được để trống',
            'price.required'=>'Giá niêm yết không được để trống',
            'discount.required'=>'Giá giảm không được để trống',
            'quantity.required'=>'Số lượng không được để trống',

            'kich_thuoc.required'=>'Kích thước không được để trống',
            'do_phan_giai.required'=>'Độ phân giải không được để trống',
            'ram.required'=>'Ram không được để trống',
            'he_dieu_hanh.required'=>'Hệ điều hành không được để trống',
            'cpu.required'=>'CPU không được để trống',
            'bo_nho_trong.required'=>'Bộ nhớ trong không được để trống',
            'dung_luong_pin.required'=>'Dung lượng pin không được để trống',

            'description_detailed.required'=>'Mô tả chi tiết không được để trống',
            ]
        );
        $products = products::find($id);
        if ($request->hasFile('main_img')){
            $path = $request->file('main_img')->store('images', 'public');
            $newPath = 'storage/' .$path;
            $products->main_img = $newPath;
        }
        $products->manufacturer_id = $request->manufacturer_id;
        $products->title = $request->title;
        $products->color = $request->color;
        $products->memory = $request->memory;
        $products->price = $request->price;
        $products->discount = $request->discount;
        $products->quantity = $request->quantity;

        $kich_thuoc = $request->kich_thuoc;
        $do_phan_giai = $request->do_phan_giai;
        $ram = $request->ram;
        $he_dieu_hanh = $request->he_dieu_hanh;
        $cpu = $request->cpu;
        $bo_nho_trong = $request->bo_nho_trong;
        $dung_luong_pin = $request->dung_luong_pin;


        $products->description_summary = "'kich_thuoc' => '$kich_thuoc','do_phan_giai' => '$do_phan_giai','ram' => '$ram','he_dieu_hanh' => '$he_dieu_hanh','cpu' => '$cpu','bo_nho_trong' => '$bo_nho_trong','dung_luong_pin' => '$dung_luong_pin'";

        $products->description_detailed = $request->description_detailed;
        $products->save();

        return redirect('admin_product')->with('success', 'Sửa sản phẩm thành công!');
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
            $products = products::findOrFail($id);
            $products->delete();
            return redirect('admin_product')->with('success', 'Đã xóa sản phẩm thành công.');
        } catch (\Exception $e) {
            return redirect('admin_product')->with('error', 'Không thể xóa ');
        }
    }
}
