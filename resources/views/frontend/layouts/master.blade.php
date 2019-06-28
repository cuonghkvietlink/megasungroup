<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MegaSun Group</title>

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}"/>
</head>
<body>
<header>
    <div class="container">
        <a href="/">
            <img src="/storage/{{ setting('site.logo') }}" alt="Logo"/>
        </a>
    </div>
</header>
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto menu">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Trang chủ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/company">Tập đoàn chúng tôi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/brand">Công ty thành viên</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Liên hệ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')

<footer>
    @yield('brands')
    <div class="global-footer">
        <p>{{ setting('site.footer_text') }}</p>
    </div>
</footer>
<script src="{{ mix('/js/app.js') }}"></script>
@stack('js-stack')
</body>
</html>