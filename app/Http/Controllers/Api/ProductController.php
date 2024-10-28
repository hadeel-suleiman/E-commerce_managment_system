<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{


      public function index()
    {
        $products = Product::all();

        if (is_null($products->first())) {
            return response()->json([
                'status' => 'failed',
                'message' => 'No product found!',
            ], 200);
        }

        $response = [
            'status' => 'success',
            'message' => 'Products are retrieved successfully.',
            'data' => $products,
        ];

        return response()->json($response, 200);
    }



    public function show(string $id)
    {
        $product = Product::find($id);

        if (is_null($product)) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Product is not found!',
            ], 200);
        }

        $response = [
            'status' => 'success',
            'message' => 'Product is retrieved successfully.',
            'data' => $product,
        ];

        return response()->json($response, 200);

    }

}
