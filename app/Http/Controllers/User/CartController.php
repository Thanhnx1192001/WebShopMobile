<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\products;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function AddCart(Request $request, $id)
    {
        $product = products::find($id);
        if ($product != null) {
            $oldCart = session('Cart') ? session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product, $id);

            $request->session()->put('Cart', $newCart);
        }
        return view('user.layout.cart');
    }

    public function DeleteItemCart(Request $request, $id)
    {
        $oldCart = session('Cart') ? session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);
        
        if (count($newCart->products) > 0) {
            $request->session()->put('Cart', $newCart);
        } else {
            $request->session()->forget('Cart');
        }
        // if(session()->has('Cart') == null){
        //     session()->flush('Cart');
        // } 
        return view('user.layout.cart');
    }

    public function showCart()
    {
        
        return view('user.page.cart.cart_detail');
    }

    public function DeleteItemListCart(Request $request, $id)
    {
        $oldCart = session('Cart') ? session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);
        
        if (count($newCart->products) > 0) {
            $request->session()->put('Cart', $newCart);
        } else {
            $request->session()->forget('Cart');
        }
        return view('user.page.cart.list_cart');
    }
    

    public function AddItemCart(Request $request, $id)
    {
        $product = products::find($id);
        if ($product != null) {
            $oldCart = session('Cart') ? session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product, $id);

            $request->session()->put('Cart', $newCart);
        }
        return view('user.page.cart.list_cart');
    }
    public function MinusItemCart(Request $request, $id)
    {
        $oldCart = session('Cart') ? session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCartOne($id);
        
        if (count($newCart->products) > 0) {
            $request->session()->put('Cart', $newCart);
        } else {
            $request->session()->forget('Cart');
        }
        return view('user.page.cart.list_cart');
    }

}
