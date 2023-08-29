<?php

namespace App\Http\Controllers\Backend\product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products= Product::get();
        return view('Backend.product.index', ['products'=>$products]);
    }

    public function create(){
        return view('Backend.product.create');
    }

    // public function store(){
    //     return view('Backend.product.create');
    // }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'price' => 'required',

        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');

        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('Backend/product/images'), $filename);

        $product->image = $filename;

        $product->save();

        return redirect('/product');
    // return back()->withSuccess('Successfully Created');
    }

    public function edit($id){
        $product= Product::where('id',$id)->first();
        return view('Backend.product.edit', ['product'=>$product]);

    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'price' => 'required',

        ]);
        $product= Product::where('id', $id)->first();

        if (isset($request->image)){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('Backend/product/images'), $filename);
            $product->image = $filename;
        }
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');

        $product->save();

        return redirect('/product');
    }

    public function destroy($id){
        $product= Product::where('id', $id)->first();
        $product->delete();
        return back();
    }

}
