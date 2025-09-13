@extends('layouts.app')
 @section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
    <div class="test_freshly_picked__alert">
        @if (session('message'))
            <div class="__alert--success">{{ session('message') }}</div>
        @endif @if ($errors->any())
            <div class="test_freshly_picked__alert--danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="test_freshly_picked__content">
        <div class="section__title">
            <h2>商品一覧</h2>
        </div>
        <form class="create-form" action="/" method="post">
            @csrf
            <div class="create-form__item">
                <input class="create-form__item-input" type="text" name="content" + value="{{ old('content') }}" />
            </div>
            <div class="create-form__button">
                <button class="create-form__button-submit" type="submit">検索</button>
            </div>
        </form>
        <div class="section__title">
            <h2>価格順で表示</h2>
        </div>
        <form class="search-form">
            <div class="search-form__item">
                <input class="search-form__item-input" type="text" />
                <select class="search-form__item-select">
                    <option value="high">高い順に表示</option>
                    <option value="low">低い順に表示</option>
                </select>
            </div>
        </form>
        <form action="/" method="post" enctype='multipart/form-data'>
        <input type="file" name="thumbnail" />
            <div class="product-grid">
                @foreach ($products as $product)
                    <div class="product-card">
                        <a href="{{ route('show', ['id' => $product->id]) }}">
                            <div class="card__img">
                            <img  src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                            </div>
                            <div class="card__detail">
                                <p>{{ $product->name }}</p>
                                <p>¥{{ number_format($product->price) }}</p>
                            </div>

                        </a>
                    </div>
                @endforeach
            </div>
        </form>
    </div>
@endsection