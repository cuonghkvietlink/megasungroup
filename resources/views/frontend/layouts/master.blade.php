<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}"/>
</head>
<body>
<header>
    <div class="container">
        <a href="/">
            <img src="http://www.vitalifesciences.com/assets/img/logo.svg" alt="Logo"/>
        </a>
    </div>
</header>
<nav>
    <div class="container">
        <ul class="menu">

            <li class="">

                <a href="/company/" class="">Our Company</a>

            </li>


            <li class="">

                <a href="/brand/" class="">Our Brands</a>

            </li>


            <li class="">

                <a href="/investors/" class="">Investor Centre</a>

            </li>


            <li class="">

                <a href="/contact/" class="">Contact Us</a>

            </li>


        </ul>
    </div>
</nav>
@yield('content')

<footer>
    <div class="container brands">
        <h3>OUR BRANDS</h3>
        <ul class="brands__list">
            <li>
                <a href="/brand"><img src="http://www.vitalifesciences.com/assets/img/logo-herbs-01b.png" alt="Herbs of Gold"></a>
            </li>
            <li>
                <a href="/brand"><img src="http://www.vitalifesciences.com/assets/img/logo-vs-02.png" alt="Brand two"></a>
            </li>
            <li>
                <a href="/brand"><img src="http://www.vitalifesciences.com/assets/img/logo-vl-03.png" alt="Brand three"></a>
            </li>
            <li>
                <a href="/brand"><img src="http://www.vitalifesciences.com/assets/img/logo-vh-04.png" alt="Brand three"></a>
            </li>
        </ul>
    </div>
    <div class="global-footer">
        <p>Vita Life Sciences</p>
    </div>
</footer>
<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>