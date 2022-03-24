<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{

    public function index(){
        return view('tag.index')->with('tags', Tag::all());
    }

    public function create(){
        return view('tag.create');
    }

    public function store(Request $request){

        Tag::create($request->all());
        session()->flash('success', 'A Tag foi criado com sucesso');
        return redirect(route('tag.index'));
    }

    public function edit(Tag $tag){
        //dd($product);
        return view('tag.edit')->with(['tag'=> $tag, 'tags'=> Tag::all()]);
    }

    public function update(Tag $tag, Request $request){

        $tag->update($request->all());
        session()->flash('success', 'O produto foi alterado com sucesso');
        return redirect(route('tag.index', $tag->id));
                                               //pra onde ta voltando
    }

}
