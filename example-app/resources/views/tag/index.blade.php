@extends('layouts.app')


@section('content')
<a class="btn btn-lg btn-success float-end me-5"href="{{route('category.create')}}">Criar Categoria</a>

<div class="container mt-3">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <td>Nome da Tag</td>
                <th>Quantidade de Produtos</th>
                <td>Editar</td>
                <td>Apagar</td>
            </tr>
        </thead>
    @foreach ($tags as $tag )
    <tr>
        <td> {{$tag->id}}</td>
        <td> {{$tag->name}}</td>
        <td>{{$tag->Products->count()}}</td>
        <td><a  href="">Editar</a></td>
        <td><a  href="">Apagar</a></td>

    </tr>

    @endforeach
    </table>
</div>
@endsection

