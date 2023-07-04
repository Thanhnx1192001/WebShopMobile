<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\blogs;
use App\Models\users;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs = blogs::orderBy('id','ASC')->paginate(10);
        return view('admin.page.category_manager.blog.blog',[ 
            'blogs' => $blogs,
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
        $users = users::all();
        return view('admin.page.category_manager.blog.add',[ 
            'users' => $users,
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
            'user_id' => 'required',
            'title' => 'required|max:255',
            'img_url' => 'required|file|mimes:jpeg,png,webp|max:2048',
            'content' => 'required',

            ],
            [
            'img_url.mimes'=>'Ảnh phải đúng định dạng',
            'img_url.max'=>'Ảnh không được lớn hơn 2M',
            'title.required'=>'Tên không được để trống',
            'title.max'=>'Tên không được vượt quá 255 kí tự',
            'img_url.required'=>'Link ảnh không được để trống',
            'content.required'=>'Nội dung không được để trống',
            ]
        );
        $path = $request->file('img_url')->store('images', 'public');
        $newPath = 'storage/' .$path;
        $blogs = new blogs();
        $blogs->user_id = $request->user_id;
        $blogs->title = $request->title;
        $blogs->img_url = $newPath;
        $blogs->content = $request->content;
        $blogs->save();
        return redirect('admin_blog')->with('success', 'Thêm bài viết thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogs = blogs::find($id);
        $users = users::find($blogs->user_id);
        return view('admin.page.category_manager.blog.detail',[ 
            'users' => $users,
            'blogs' => $blogs,
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
        //
        $blogs = blogs::find($id);
        $users = users::all();
        return view('admin.page.category_manager.blog.edit',[ 
            'users' => $users,
            'blogs' => $blogs,
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
        //
        $request->validate(
            [
            'user_id' => 'required',
            'title' => 'required|max:255',
            'content' => 'required',

            ],
            [
            'title.required'=>'Tên không được để trống',
            'title.max'=>'Tên không được vượt quá 255 kí tự',
            'content.required'=>'Nội dung không được để trống',
            ]
        );
        $blogs = blogs::find($id);
        if ($request->hasFile('img_url')){
            $path = $request->file('img_url')->store('images', 'public');
            $newPath = 'storage/' .$path;
            $blogs->img_url = $newPath;

        }
        $blogs->user_id = $request->user_id;
        $blogs->title = $request->title;
        $blogs->content = $request->content;
        $blogs->save();
        return redirect('admin_blog')->with('success', 'Sửa bài viết thành công!');
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
            $blogs = blogs::findOrFail($id);
            $blogs->delete();
            return redirect('admin_blog')->with('success', 'Xóa bài viết thành công!');
        } catch (\Exception $e) {
            return redirect('admin_blog')->with('error', 'Không thể xóa danh mục do danh mục này liên kết với bảng khác.');
        }
        
    }
}
