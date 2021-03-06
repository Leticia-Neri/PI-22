@extends('layouts.app')


@section('content')
<a class="btn btn-lg btn-success float-end me-5"href="{{route('category.create')}}">Criar Categoria</a>

<div class="container mt-3">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <td>Nome da Categoria</td>
                <td>Editar</td>
                <td>Apagar</td>
            </tr>
        </thead>
    @foreach ($categories as $category )
    <tr>
        <td> {{$category->id}}</td>
        <td> {{$category->name}}</td>
        <td><a  href="{{route('category.edit', $category->id)}}">Editar</a></td>
        <td><a  href="{{route('category.destroy', $category->id)}}">Apagar</a></td>

    </tr>

    @endforeach
    </table>
</div>
@endsection

