<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::get();
        return ProductResource::collection($products);
    }
    public function show($id)
    {
        $product = Product::find($id);
        return new ProductResource($product);
    }
    public function store(ProductRequest $request)
    {
        $product = Product::create($request->all());
        return response()->json(['product' => $product]);
    }
    public function update($id, ProductRequest $request)
    {
        $product = Product::find($id)->update($request->all());
        return response()->json(['product' => $product]);
    }
}
