<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductsCollection;
use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    
    public function index(Request $request)
    {
        $products = Product::paginate(15);
        
        if ($request->wantsJson()) {
            return new ProductsCollection($products);
        }

        return view('products.index', compact('products'));
    }

    public function create()
    {
        $product = new Product;
        return view('products.create', compact('product'));
    }

    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect('/productos');
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        Product::find($id)->update($request->all());
        return redirect('/productos');
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('/productos');
    }
}
