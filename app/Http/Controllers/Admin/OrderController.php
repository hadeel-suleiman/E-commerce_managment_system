<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
     {
         // Admin can view all orders.
         // You might want to paginate this.
         // Optionally include user and product relationships.
         $orders = Order::all();
         $users=User::all();
         $products= Product::all();
         return view('admin.orders.index', compact('orders','users','products'));
     }

     public function show(string $id)
     {
         // Admin can see order details.
         $order= Order::findOrFail($id);
         return view('admin.orders.show', compact('order'));
     }


      public function destroy(string $id)
        {
            $order=Order::findOrFail($id);
            $order->delete();
            return redirect()->route('admin.orders.index')->with('Success', 'Product deleted successfully');
        }



    }







