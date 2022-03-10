
<table>
@foreach ($categories as $category )
<tr>
    <td> {{$category->id}}</td>
    <td> {{$category->name}}</td>
    <td><a  href="{{route('category.restore', $category->id)}}">Restaurar</a></td>
</tr>

@endforeach
</table>

