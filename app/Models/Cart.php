<?php

namespace App\Models;

class Cart
{
    public $products = null;
    public $totalPrice = 0;
    public $totalQuanty = 0;

    public function __construct($cart)
    {
        if ($cart) {
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuanty = $cart->totalQuanty;
        }
    }

    public function AddCart($product, $id)
    {
        $newProduct = [
            'quanty' => 0,
            'price' => $product->discount,
            'productInfo' => $product
        ];

        if ($this->products) {
            if (array_key_exists($id, $this->products)) {
                $newProduct = $this->products[$id];
            }
        }

        $newProduct['quanty']++;
        $newProduct['price'] = $newProduct['quanty'] * $product->discount;
        $this->products[$id] = $newProduct;
        $this->totalPrice += $product->discount;
        $this->totalQuanty++;
    }
    public function DeleteItemCart($id)
    {
        if ($this->products && array_key_exists($id, $this->products)) {
            $this->totalQuanty -= $this->products[$id]['quanty'];
            $this->totalPrice -= $this->products[$id]['price'];
            unset($this->products[$id]);
        }
    }
    public function DeleteItemCartOne($id)
    {
        if ($this->products[$id]['quanty'] > 1){
            $this->products[$id]['quanty'] = $this->products[$id]['quanty'] - 1;
            $this->products[$id]['price'] = $this->products[$id]['price'] - $this->products[$id]['productInfo']->discount;
            $this->totalQuanty = $this->totalQuanty -1;
            $this->totalPrice = $this->totalPrice - $this->products[$id]['productInfo']->discount;


        }
        else{
            if ($this->products && array_key_exists($id, $this->products)) {
                $this->totalQuanty -= $this->products[$id]['quanty'];
                $this->totalPrice -= $this->products[$id]['price'];
                unset($this->products[$id]);
            }
        }
    }
}
