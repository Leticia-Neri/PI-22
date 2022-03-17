@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <td>Nome do produto</td>
                <td>ID categoria</td>
                <td>Nome da categoria</td>
                <td>Descrição</td>
                <td>Preço</td>
                <td>Estoque</td>
                <td>Editar</td>
                <td>Apagar</td>
            </tr>
        </thead>
    @foreach ($products as $product )
    <tr>
        <td> {{$product->id}}</td>
        <td> {{$product->name}}</td>
        <td> {{$product->Category->id}}</td>
        <td> {{$product->Category->name}}</td>
        <td> {{$product->description}}</td>
        <td> {{$product->price}}</td>
        <td> {{$product->stock}}</td>
        <td><a  href="{{route('product.edit', $product->id)}}">Editar</a></td>
        <td><a  href="{{route('product.destroy', $product->id)}}">Apagar</a></td>
    </tr>

    @endforeach
    </table>
</div>
@endsection

