<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function create(){
        return view('product.create')->with('categories', Category::all());
    }

    public function store(Request $request){

        $product = Product::create($request->all());
        session()->flash('success', 'O produto foi criado com sucesso');
        return redirect(route('product.index'));

    }

    public function edit(Product $product){
        //dd($product);
        return view('product.edit')->with(['product'=> $product, 'categories'=> Category::all()]);
    }


    public function update(Product $product, Request $request){

        $product->update($request->all());
        session()->flash('success', 'O produto foi alterado com sucesso');
        return redirect(route('product.index', $product->id));
                                               //pra onde ta voltando
    }

    public function index(){
        return view('product.index')->with('products', Product::all());
    }

    public function destroy(Product $product){
        $product->delete();
        session()->flash('success', 'O produto apagado com sucesso');
        return redirect(route('product.index'));
    }

    public function trash(){
        return view('product.trash')->with('products', Product::onlyTrashed()->get());
    }

    public function restore($product_id){

        $product = Product::onlyTrashed('id',$product_id)->first();
        $product->restore();
        session()->flash('success', 'O produto foi restaurado com sucesso');
        return redirect(route('product.index'));
    }
}