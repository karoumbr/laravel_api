<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProduct()
    {
        return response()->json(Product::all(), 200);
    }

    public function getProductById($id)
    {
        $product = Product::find($id);
        if (is_null($product)) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        return response()->json($product, 200);
    }
    public function addProduct(Request $request)
    {
        $product = Product::create($request->all());
        return response($product, 201);
    }

    public function updateProduct(Request $request, $id)
    {
        $product = Product::find($id);
        if (is_null($product)) {
            return response()->json(['message' => 'Product not fond'], 404);
        }
        $product->update($request->all());
        return response($product, 200);
    }
    public function deleteProduct(Request $request, $id)
    {
        $product = Product::find($id);
        if (is_null($product)) {
            return response()->json(['message' => 'Product not fond'], 404);
        }
        $product->delete();
        return response()->json(null, 204);
    }
}
