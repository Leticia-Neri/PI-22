<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function index(){
        return view('category.index')->with('categories', Category::all());
    }

    public function create(){
        return view('category.create');
    }


    public function store(Request $request){

        $category = Category::create($request->all());
        session()->flash('success', 'A categoria foi criado com sucesso');
        return redirect(route('category.index'));
    }

    public function destroy(Category $category){
        $category->delete();
        session()->flash('success', 'A categoria foi apagada com sucesso');
        return redirect(route('category.index'));
    }

    public function edit(Category $category){
        //dd($product);
        return view('category.edit')->with('category', $category);
    }


    public function update(Category $category, Request $request){

        $category->update($request->all());
        session()->flash('success', 'A categoria foi alterada com sucesso');
        return redirect(route('category.index', $category->id));
                                               //pra onde ta voltando
    }

    public function trash(){
        return view('category.trash')->with('categories', Category::onlyTrashed()->get());
    }

    public function restore($category_id){

        $category = Category::onlyTrashed('id',$category_id)->first();
        $category->restore();
        session()->flash('success', 'O categoria foi restaurado com sucesso');
        return redirect(route('category.index'));
    }
}
