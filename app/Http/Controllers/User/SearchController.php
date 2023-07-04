<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;



class SearchController extends Controller
{
    public function searchAjax($search_name)
    {
        $products = products::where('title','like','%' . $search_name . '%')->get();
        return view("user.layout.search",[
            'products' => $products,
        ]);
    }
    public function products_search(Request $request)
    {

        $search_name = $request->search_name;
        $products = products::where('title','like','%' . $search_name . '%')->get();
        $feed_back_products = DB::table('products')
            ->join('feed_back', 'products.id', '=', 'feed_back.product_id')
            ->select('products.id as id', 'products.title as title',DB::raw('COUNT(products.id) as count') ,DB::raw('AVG(feed_back.star) as star'))
            ->groupBy('products.id','products.title')
            ->get();
        return view("user.page.product.products_search",[
            'products' => $products,
            'feed_back_products' => $feed_back_products,

        ]);
    }
    public function products_filter(Request $request)
    {
        $query = products::query();

        $manufacturers = $request->input('manufacturer');
        if ($manufacturers) {
            $query->where('manufacturer', 'like', '%' . $manufacturers . '%');
            Session::put('manufacturer', $manufacturers);
        } else {
            Session::put('manufacturer', '');
        }

        $memory = $request->input('memory');
        if ($memory) {
            $query->where('memory', 'like', '%' . $memory . '%');
            Session::put('memory', $memory);
        } else {
            Session::put('memory', '');
        }

        $min_price = $request->input('min_price', 0);
        $max_price = $request->input('max_price', 999999999);
        if ($min_price and $max_price) {
            $query->whereBetween('discount', [$min_price, $max_price]);
            Session::put('min_price', $min_price);
            Session::put('max_price', $max_price);
        } else {
            Session::put('min_price', '');
            Session::put('max_price', '');
        }

        $sort = $request->input('sort');
        if ($sort) {
            $query->orderBy('discount', $sort);
            Session::put('sort', $sort);
        } else {
            Session::put('sort', '');
        }
        $products = $query->get();


        $categories = categories::where('id', 'like', '%1%')->get();
        $manufacturers = manufacturers::where('category_id', 'like', '%1%')->get();
        $feed_back_products = DB::table('products')
            ->join('feed_back', 'products.id', '=', 'feed_back.product_id')
            ->select('products.id as id', 'products.title as title', DB::raw('COUNT(products.id) as count'), DB::raw('AVG(feed_back.star) as star'))
            ->groupBy('products.id', 'products.title')
            ->get();

        return view('user.page.product.phone', [
            'products' => $products,
            'categories' => $categories,
            'manufacturers' => $manufacturers,
            'feed_back_products' => $feed_back_products,
        ]);
    }
}