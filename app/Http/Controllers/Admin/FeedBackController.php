<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\feed_back;
use App\Models\products;
use Illuminate\Http\Request;

class FeedBackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = products::all();
        $feed_back = feed_back::orderBy('id','ASC')->paginate(10);
        return view('admin.page.interface_manager.feed_back.feed_back',[ 
            'feed_back' => $feed_back,
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
        return view('admin.page.interface_manager.feed_back.add',[ 
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
        $feed_back->product_id = $request->product_id;
        $feed_back->name = $request->name;
        $feed_back->email = $request->email;
        $feed_back->phone_number = $request->phone_number;
        $feed_back->content = $request->content;
        $feed_back->star = $request->star;
        
        $feed_back->save();

        return redirect('admin_feed_back')->with('success', 'Thêm phản hồi thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feed_back = feed_back::find($id);
        $products = products::find($feed_back->product_id);
        return view('admin.page.interface_manager.feed_back.detail',[ 
            'feed_back' => $feed_back,
            'products' => $products,
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
        $products = products::all();
        $feed_back = feed_back::find($id);
        return view('admin.page.interface_manager.feed_back.edit',[ 
            'feed_back' => $feed_back,
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
        $feed_back = feed_back::find($id);
        $feed_back->product_id = $request->product_id;
        $feed_back->name = $request->name;
        $feed_back->email = $request->email;
        $feed_back->phone_number = $request->phone_number;
        $feed_back->content = $request->content;
        $feed_back->star = $request->star;
        
        $feed_back->save();

        return redirect('admin_feed_back')->with('success', 'Sửa phản hồi thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feed_back = feed_back::findOrFail($id);
        $feed_back->delete();
        return redirect('admin_feed_back')->with('success', 'Xóa phản hồi thành công!');
    }
}
