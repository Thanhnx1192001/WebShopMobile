<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\products;
use App\Models\thumbnails;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ThumbnailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thumbnails = thumbnails::orderBy('id','ASC')->paginate(10);
        $products = products::all();
        return view('admin.page.interface_manager.thumbnail.thumbnail',[ 
            'thumbnails' => $thumbnails,
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
        $products = products::all();
        return view('admin.page.interface_manager.thumbnail.add',[ 
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
        try {
            $request->validate(
                [
                'title' => 'required|max:255',
                'thumbnail_url' => 'required|file|mimes:jpeg,png,webp|max:2048',
                'product_id' => 'required',
    
                ],
                [
                'thumbnail_url.mimes'=>'Ảnh phải đúng định dạng',
                'thumbnail_url.max'=>'Ảnh không được lớn hơn 2M',
                'title.required'=>'Tên không được để trống',
                'title.max'=>'Tên không được vượt quá 255 kí tự',
                'thumbnail_url.required'=>'Không được rỗng',
                'thumbnail_url.image'=>'phải là ảnh',
                ]
            );
    
            $path = $request->file('thumbnail_url')->store('images', 'public');
            $newPath = 'storage/' .$path;

            $thumbnails = new thumbnails();
            $thumbnails->product_id = $request->product_id;
            $thumbnails->title = $request->title;
            $thumbnails->thumbnail_url = $newPath;
            $thumbnails->save();
            return redirect('admin_thumbnail')->with('success', 'thêm hình ảnh thành công!');
        } catch (Exception $e) {
            dd($e-> getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $thumbnails = thumbnails::find($id);
        return view('admin.page.interface_manager.thumbnail.detail',[ 
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
        $thumbnails = thumbnails::find($id);
        $products = products::all();
        return view('admin.page.interface_manager.thumbnail.edit',[ 
            'thumbnails' => $thumbnails,
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
        try {
            $request->validate(
                [
                'title' => 'required|max:255',
                'thumbnail_url' => 'required|image',
                'product_id' => 'required',
    
                ],
                [
                'title.required'=>'Tên không được để trống',
                'title.max'=>'Tên không được vượt quá 255 kí tự',
                'thumbnail_url.required'=>'Không được rỗng',
                'thumbnail_url.image'=>'phải là ảnh',
                ]
            );
    
            $path = $request->file('thumbnail_url')->store('images', 'public');
            $newPath = 'storage/' .$path;

            $thumbnails = thumbnails::find($id);
            $thumbnails->product_id = $request->product_id;
            $thumbnails->title = $request->title;
            $thumbnails->thumbnail_url = $newPath;
            $thumbnails->save();
            return redirect('admin_thumbnail')->with('success', 'Sửa hình ảnh thành công!');
        } catch (Exception $e) {
            dd($e-> getMessage());
        }
        
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
            $thumbnails = thumbnails::findOrFail($id);
            $thumbnails->delete();
            return redirect('admin_thumbnail')->with('success', 'Xóa hình ảnh thành công!');
        } catch (\Exception $e) {
            return redirect('admin_thumbnail')->with('error', 'Không thể xóa!');
        }
    }
}
