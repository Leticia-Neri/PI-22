@extends('layouts.app')

@section('content')
<table>
@foreach ($tags as $tag )
<tr>
    <td> {{$tag->id}}</td>
    <td> {{$tag->name}}</td>

    <td><a  href="{{route('tag.restore', $product->id)}}">Restaurar</a></td>
</tr>

@endforeach
</table>
@endsection

