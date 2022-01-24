<h1>Products Bla bla</h1>

<ul>
    @foreach($products as $product)
        <li>
            {{ $product['id'] }} - {{ $product['name'] }}
            <a href="{{ route('products.delete', $product['id']) }}">Удалить</a>
            <a href="{{ route('products.edit', $product['id']) }}">Правка</a>
        </li>
    @endforeach
</ul>
<form method="post" action="{{ route('products.create') }}">
    {{ csrf_field() }}
    <input type="text" name="name">
    <button type="submit">Создать</button>
</form>
<p><a href="{{ route('products.customSeed') }}">Seed</a></p>
<p><a href="{{ route('products.clear') }}">Clear</a></p>
