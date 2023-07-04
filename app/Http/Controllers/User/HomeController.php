<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\banners;
use App\Models\blogs;
use App\Models\categories;
use App\Models\feed_back;
use App\Models\manufacturers;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feed_back= feed_back::all();
        $products = products::all();
        $categories = categories::all();
        $blogs = blogs::all();
        $manufacturers = manufacturers::all();
        $banner_main = banners::where('type', 1)->get();
        $banner_minor = banners::where('type', 0)->get();

        $feed_back_products = DB::table('products')
            ->join('feed_back', 'products.id', '=', 'feed_back.product_id')
            ->select('products.id as id', 'products.title as title',DB::raw('COUNT(products.id) as count') ,DB::raw('AVG(feed_back.star) as star'), DB::raw('MAX(products.created_at) as created_at'))
            ->groupBy('products.id','products.title')
            ->orderBy('count' ,'DESC' )
            ->orderBy('star', 'DESC')
            ->orderBy('created_at', 'ASC')
            ->get();

        return view('user.page.home.home',[
            'feed_back' => $feed_back,
            'products' => $products,
            'categories' => $categories,
            'manufacturers' => $manufacturers,
            'banner_main' => $banner_main,
            'banner_minor' => $banner_minor,
            'blogs' => $blogs,
            'feed_back_products' => $feed_back_products,
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
