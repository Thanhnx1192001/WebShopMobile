<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\manufacturers;
use App\Models\products;
use App\Models\thumbnails;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = products::orderBy('id','ASC')->paginate(10);
        return view('admin.page.category_manager.product.product',[ 
            'products' => $products,
        ]);
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
        return view('admin.page.category_manager.product.add',[ 
            'products' => $products,
            'manufacturers' => $manufacturers,
            'thumbnails' => $thumbnails,
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
            'description_summary' => 'required',
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
            'description_summary.required'=>'Mô tả ngắn gọn không được để trống',
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
        $products->description_summary = $request->description_summary;
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
        return view('admin.page.category_manager.product.edit',[ 
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
            'main_img' => 'required|file|mimes:jpeg,png,webp|max:2048',
            'title' => 'required',
            'color' => 'required',
            'memory' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'quantity' => 'required',
            'description_summary' => 'required',
            'description_detailed' => 'required',
            ],
            [
            'main_img.mimes'=>'Ảnh phải đúng định dạng',
            'main_img.max'=>'Ảnh không được lớn hơn 2M',
            'main_img.required'=>'Link ảnh không được để trống',
            'title.required'=>'Tên sản phẩm không được để trống',
            'color.required'=>'Màu sắc không được để trống',
            'memory.required'=>'Bộ nhớ không được để trống',
            'price.required'=>'Giá niêm yết không được để trống',
            'discount.required'=>'Giá giảm không được để trống',
            'quantity.required'=>'Số lượng không được để trống',
            'description_summary.required'=>'Mô tả ngắn gọn không được để trống',
            'description_detailed.required'=>'Mô tả chi tiết không được để trống',
            ]
        );
        $path = $request->file('main_img')->store('images', 'public');
        $newPath = 'storage/' .$path;
        $products = products::find($id);
        $products->manufacturer_id = $request->manufacturer_id;
        $products->main_img = $newPath;
        $products->title = $request->title;
        $products->color = $request->color;
        $products->memory = $request->memory;
        $products->price = $request->price;
        $products->discount = $request->discount;
        $products->quantity = $request->quantity;
        $products->description_summary = $request->description_summary;
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
