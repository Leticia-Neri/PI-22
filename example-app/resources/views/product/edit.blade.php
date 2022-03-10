<form action="{{route('product.edit', $product->id)}}" method="POST">

    @csrf
    @method("PUT")
    Nome do produto<input type="text" name="name" value="{{$product->name}}">
    Decrição:<input type="text" name="description" value="{{$product->description}}">
    Preço:<input type="number" step=".01" name="price" value="{{$product->price}}">
    Estoque:<input type="number" step=".01" name="stock" value="{{$product->stock}}">
    Selecione uma categoria:
    <select name="category_id">
        @foreach($categories as $category)
        <option value="{{$category->id}}" {{$product->category_id == $category->id ? 'selected' : ''}}>
            {{$category->name}}</option>
        @endforeach
    </select>
    <button type="submit">Enviar</button>
</form>