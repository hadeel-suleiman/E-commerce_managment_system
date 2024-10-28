<?php

namespace App\Http\Controllers\Api;

use App\Models\Order;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller

{

    public function index()
    {


         $orders = Order::with('product','user')->get();

        return response()->json([
        'status'=>'success',
        'message'=>'Orders have been retrieved successfully',
        'data'=> $orders,
         ],200);


      }

    public function create(){
        $products= Product::all();

        return response()->json([
        'status'=>'success',
        'message'=>'Products have been retrieved successfully',
        'data'=> $products,
        ],200) ;

    }


    public function store(Request $request)
    {
         $validate = Validator::make($request->all(), [
            'user_id' => 'required',
            'product_id' => 'required'
        ]);

        if($validate->fails()){
            return response()->json([
                'status' => 'failed',
                'message' => 'Validation Error!',
                'data' => $validate->errors(),
            ], 403);
        }

        $order = Order::create($request->all());

           return response()->json([
            'status'=>'success',
            'message'=>'Orders have been created successfully',
            'data'=> $order,
           ],201) ;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order= Order::find($id);

        if (is_null($order)){
            return response()->json([
            'status'=>'failed',
            'message'=>'Order is not found',
             ],404) ;
        }
          return response()->json([
          'status'=>'success',
          'message'=>'Order have been retrieved successfully',
          'data'=> $order,
          ],201) ;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $validate = Validator::make($request->all(), [
            'user_id' => 'required',
            'product_id' => 'required'
        ]);

        if($validate->fails()){
            return response()->json([
                'status' => 'failed',
                'message' => 'Validation Error!',
                'data' => $validate->errors(),
            ], 403);
        }

        $order = Order::find($id);

        if (is_null($order)) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Order is not found!',
            ], 404);
        }

        $order->update($request->only(['user_id', 'product_id']));

           return response()->json([
          'status'=>'success',
          'message'=>'Order have been updated successfully',
          'data'=> $order,
           ],201) ;


    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $order = Order::find($id);

        if (is_null($order)) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Order is not found!',
            ], 200);
        }

        Order::destroy($id);
        return response()->json([
            'status' => 'success',
            'message' => 'Order is deleted successfully.'
            ], 200);

    }
}
