<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.products.index')->with([
            'products' => Product::all(),
            // 'products' => collect([]),
        ]);
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());

        return redirect()->route('products.index')
            ->withSuccess("El producto {$product->title} se creó con éxito");
    }
}
