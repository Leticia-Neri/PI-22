@extends('layouts.app')

@section('content')
<form action="{{route('product.store')}}" method="POST">

    <!--alterei para store estava create-->

    @csrf
    Nome do produto<input type="text" name="name">
    Decrição:<input type="text" name="description">
    Preço:<input type="number" step=".01" name="price">
    Estoque:<input type="number" step=".01" name="stock">
    Selecione uma categoria:
    <select name="category_id">
        @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>

    Selecione uma tag:
    <select multiple name="tags[]">
        @foreach($tags as $tag)
        <option  value="{{$tag->id}}">{{$tag->name}}</option>
        @endforeach
    </select>


    <button type="submit">Enviar</button>
</form>
@endsection
