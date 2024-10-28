<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $products = Product::all();
        $categories = Category::all();
        // $products = Product::orderBy('created_at' ,'DESC')->withTrashed()->get();
        // $categories = Category::orderBy('created_at' ,'DESC')->withTrashed()->get();
        return view('admin.products.index',compact('products','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $product=Product::create($request->all());
        $product->categories()->sync($request->categories_ids);
        return redirect()->route('products.index')->with('Success', 'Product created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    
        $product=Product::findOrFail($id);
        $category = Category::findOrFail($id);
        return view('admin.products.show', compact('product','category'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $product=Product::findOrFail($id);
         $categories= Category::all();
         return view('admin.products.edit', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product=Product::findOrFail($id);


            $product->update($request->all());
            if($request->has('category_id')){
              $product->categories()->sync($request->category_id);
               return redirect()->route('products.index')->with('Success', 'Product updated successfully');

            }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product=Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('Success', 'Product deleted successfully');

    }
          public function restore(string $id){
      $product =Product::withTrashed()->where('id', $id)->first();
      $product->restore();
      return redirect()->route('products.index');
  }


           public function forceDelete($id)
       {
        $product = Product::withTrashed()->find($id);
        $product->forceDelete();
        return redirect()->route('products.index')->with('success', 'Product permanently deleted.');
       }



}
