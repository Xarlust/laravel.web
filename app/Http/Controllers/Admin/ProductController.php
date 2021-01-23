<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('admin.products', [
            'products' => $products
        ]);

    }

    public function create(Product $product)
    {
        return view('admin.product_editor',[
            'product'=> $product
        ]);
    }

    public function store(Request $request, Product $product)
    {
        Product::create($request->only([
            'name',
            'price',
            'description'
        ]));

        return view('admin.products',[
        'product' => $product
        ]);
    }

    public function edit(Request $request, Product $product)
    {
        return view('admin.product_editor',[
            'product'=> $product
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->only([
            'name',
            'price',
            'description'
        ]));

        return view('admin.products',[
            'product'=> $product
        ]);
    }

    public function delete(Product $product)
    {
        return view('admin.products');
    }


}
