<h1>Редактировать</h1>

<form method="post" action="{{ route('products.edit', $product['id']) }}">
    {{ csrf_field() }}
    <input type="text" name="name" value="{{$product['name']}}">
    <button type="submit">Сохранить</button>
</form>
