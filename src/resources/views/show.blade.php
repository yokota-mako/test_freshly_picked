
<img src="{{ asset(path: 'storage/' . $product->image) }}" alt="{{ $product->name }}">
<p>商品名:</p><input type="text" name="name" value="{{ $product->name }}" }>
<p>値段:¥</p><input type="text" name="price" value="{{ $product->price }}">
@if ($product->season)
        @php
        $seasons = json_decode($product->season);
        @endphp
    <p>季節:</p>
    <ul>{{ $product->season }}
    <p>商品説明:</p><input type="text" name="description" value="{{ $product->description }}">
@endif
</ul>