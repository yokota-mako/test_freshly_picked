<h1>{{ $product->name }}</h1>
<img src="{{ asset('img/' . $product->img) }}" alt="{{ $product->name }}">
<p>{{ $product->description }}</p>
<p>価格: ¥{{ number_format($product->price) }}</p>