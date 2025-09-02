<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mogitate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <a class="header__logo" href="/">
                    mogitate
                </a>
            </div>
        </div>
        @yield('content')
        <div class="main">
            <a class="header__logo" href="/">
                商品一覧
            </a>
            <nav>
                <ul class="main-nav">
                    <li class="main-nav__item">
                        <a class="main-nav__link" href="/products">+商品を追加
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
    </main>
</body>

</html>