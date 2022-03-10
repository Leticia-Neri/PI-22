<form action="{{route('category.edit', $category->id)}}" method="POST">

    @csrf
    @method("PUT")
    Categoria<input type="text" name="name" value="{{$category->name}}">
    <button type="submit">Enviar</button>
</form>
