<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductInShoppingCart;

class ProductInShoppingCartsController extends Controller
{
    public function __construct()
    {
        $this->middleware('shopping_cart');
    }

    public function store(Request $request)
    {
        $in_shopping_cart = ProductInShoppingCart::create([
            'shopping_cart_id' => $request->shopping_cart->id,
            'product_id' => $request->product_id
        ]);

        if ($in_shopping_cart) {
            return redirect()->back();
        }

        return redirect()->back()->withErros(['product' => 'No se agredo el producto']);
    }

    public function destroy($id)
    {

    }
}
