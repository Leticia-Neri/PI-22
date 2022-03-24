@extends('layouts.app')

@section('content')

<form action="{{route('tag.edit', $tag->id)}}" method="POST">

    @csrf
    @method("PUT")
    Nome<input type="text" name="name" value="{{$tag->name}}">

    <button type="submit">Enviar</button>
</form>

@endsection
