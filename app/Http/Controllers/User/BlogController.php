<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\blogs;
use App\Models\products;
use App\Models\users;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function showblog()
    {   
        $blogs = blogs::orderBy('id','ASC')->paginate(10);
        return view('user.page.blog.blog',[
            'blogs' => $blogs,
        ]);
    }
    public function blog_detail($id)
    {   
        $blog = blogs::find($id);
        $user = users::find($blog->user_id);
        $feed_back_products = DB::table('products')
        ->join('feed_back', 'products.id', '=', 'feed_back.product_id')
        ->select('products.id as id', 'products.title as title',DB::raw('COUNT(products.id) as count') ,DB::raw('AVG(feed_back.star) as star'))
        ->groupBy('products.id','products.title')
        ->get();
        $products = products::all();
        $blogs = blogs::orderBy('id','ASC')->paginate(10);
        return view('user.page.blog.blog_detail',[
            'blog' => $blog,
            'user' => $user,
            'products' => $products,
            'blogs' => $blogs,
            'feed_back_products' => $feed_back_products,
        ]);
    }
}
