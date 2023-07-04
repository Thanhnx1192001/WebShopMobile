<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\categories;
use App\Models\manufacturers;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manufacturers = manufacturers::orderBy('id','ASC')->paginate(10);
        $categories = categories::all();
        return view('admin.page.category_manager.manufacturer.manufacturer',[ 
            'manufacturers' => $manufacturers,
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = categories::all();
        return view('admin.page.category_manager.manufacturer.add',['category' => $category]);
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
            'category_id' => 'required'
            ],
            [
            'name.required'=>'Tên không được để trống',
            'name.max'=>'Tên không được vượt quá 255 kí tự'
            ]
        );
        $manufacturers = new manufacturers();
        $manufacturers->category_id = $request->category_id;
        $manufacturers->name = $request->name;
        $manufacturers->save();

        return redirect('admin_manufacturer')->with('success', 'Thêm nhà sản xuất thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $manufacturers = manufacturers::find($id);
        $category = categories::find($manufacturers->category_id);
        return view('admin.page.category_manager.manufacturer.detail',[ 
            'manufacturers' => $manufacturers,
            'category' => $category
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
        $manufacturers = manufacturers::find($id);
        $category = categories::all();
        return view('admin.page.category_manager.manufacturer.edit',[ 
            'manufacturers' => $manufacturers,
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
            'category_id' => 'required'
            ],
            [
            'name.required'=>'Tên không được để trống',
            'name.max'=>'Tên không được vượt quá 255 kí tự'
            ]
        );
        $manufacturers = manufacturers::find($id);
        $manufacturers->category_id = $request->category_id;
        $manufacturers->name = $request->name;
        $manufacturers->save();

        return redirect('admin_manufacturer')->with('success', 'Sửa nhà sản xuất thành công!');
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
            $manufacturers = manufacturers::findOrFail($id);
            $manufacturers->delete();
            return redirect('admin_manufacturer')->with('success', 'Xóa nhà sản xuất thành công!');
        } catch (\Exception $e) {
            return redirect('admin_manufacturer')->with('error', 'Không thể xóa !');
        }
    }
}
