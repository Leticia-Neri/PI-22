@extends('layouts.app')

@section('content')
<form action="{{route('category.store')}}" method="POST">

    @csrf
    Categoria<input type="text" name="name">

    <button type="submit">Enviar</button>
</form>

@endsection
