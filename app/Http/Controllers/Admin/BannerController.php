<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\banners;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = banners::orderBy('id','ASC')->paginate(10);
        return view('admin.page.interface_manager.banner.banner',[ 
            'banners' => $banners,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.interface_manager.banner.add');
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
            'title' => 'required|max:255',
            'img_url' => 'required',

            ],
            [
            'title.required'=>'Tên không được để trống',
            'title.max'=>'Tên không được vượt quá 255 kí tự',
            'img_url.required'=>'Link ảnh không được để trống',
            ]
        );
        $path = $request->file('img_url')->store('images', 'public');
        $newPath = 'storage/' .$path;
        $banners = new banners();
        $banners->title = $request->title;
        $banners->img_url = $newPath;
        $banners->save();
        return redirect('admin_banner')->with('success', 'Thêm banner thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banners = banners::find($id);
        return view('admin.page.interface_manager.banner.detail',[ 
            'banners' => $banners,
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
        $banners = banners::find($id);
        return view('admin.page.interface_manager.banner.edit',[ 
            'banners' => $banners,
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
            'title' => 'required|max:255',
            'img_url' => 'required|mimes:jpeg,png,webp|max:2048',

            ],
            [
            'img_url.mimes'=>'Ảnh phải đúng định dạng',
            'img_url.max'=>'Ảnh không được lớn hơn 2M',
            'title.required'=>'Tên không được để trống',
            'title.max'=>'Tên không được vượt quá 255 kí tự',
            'img_url.required'=>'Link ảnh không được để trống',
            ]
        );
        $path = $request->file('img_url')->store('images', 'public');
        $newPath = 'storage/' .$path;
        $banners = banners::find($id);
        $banners->title = $request->title;
        $banners->img_url = $newPath;
        $banners->save();
        return redirect('admin_banner')->with('success', 'Sửa banner thành công!');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banners = banners::findOrFail($id);
        $banners->delete();
        return redirect('admin_banner')->with('success', 'Xóa banner thành công!');
    }
}
