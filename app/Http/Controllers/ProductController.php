<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
        return view('products.index',compact('products'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate the input
        $request->validate([
            'name'=>'required',
            'detail'=>'required'
        ]);

        //create a new product
        product::create($request->all());
        // echo "Requested";
        
        //redirect the user and send friendly message
        return redirect()->route('products.index')->with('success','Product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        $product = Product::findOrFail($product);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        $request->validate([
            'name'=>'required|string',
            'detail'=>'required|string',
        ]);

        $product->update([
            'name'=>$request->input('name'),
            'detail'=>$request->input('detail'),
        ]);

        return redirect()->route('products.show',$product->id)->with('success','product Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success','product Deleted Successfully');
    }
}
