<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = categories::orderBy('id','ASC')->paginate(10);
        return view('admin.page.category_manager.category.category',[ 
            'category' => $category,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.page.category_manager.category.add');
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
            ],
            [
            'name.required'=>'Tên không được để trống',
            'name.max'=>'Tên không được vượt quá 255 kí tự'
            ]
        );
        $category = new categories();
        $category->name = $request->name;
        $category->save();

        return redirect('admin_category')->with('success', 'Thêm danh mục thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = categories::find($id);
        return view('admin.page.category_manager.category.edit',[ 
            'category' => $category,
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
            ],
            [
            'name.required'=>'Tên không được để trống',
            'name.max'=>'Tên không được vượt quá 255 kí tự'
            ]
        );
        $category = categories::find($id);
        $category->name = $request->name;
        $category->save();

        return redirect('admin_category')->with('success', 'Sửa danh mục thành công!');
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
        $categories = categories::findOrFail($id);
        $categories->delete();
        return redirect('admin_category')->with('success', 'Xóa danh mục thành công!');
    } catch (\Exception $e) {
        return redirect('admin_category')->with('error', 'Không thể xóa danh mục do danh mục này liên kết với bảng khác.');
    }
    }
}
