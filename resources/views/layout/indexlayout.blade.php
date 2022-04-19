<!DOCTYPE html>
<head>
    <title>KUYLINARY!</title>
    <link rel="stylesheet" href="{{asset('css\styleindex.css')}}">
    <link rel="script" href="{{asset('js\style.js')}}">
</head>

<body>
    <header class="main-header">
        <div class="header-wrapper">
            <div class="main-logo">KUYLINARY!</div>
            <nav>
                <ul class="main-menu">
                    <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="{{route('register')}}">Register</a></li>
                    <li><a href="{{route('login')}}"> Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="section-1">
        <div class="content-slider">
            <input type="radio" id="banner1" class="sec-1-input" name="banner" checked>
            <input type="radio" id="banner2" class="sec-1-input" name="banner">
            <input type="radio" id="banner3" class="sec-1-input" name="banner">
            <input type="radio" id="banner4" class="sec-1-input" name="banner">
            <div class="slider">
                <div id="top-banner-1" class="banner">
                    <div class="banner-inner-wrapper">
                        <img src="http://ners.unair.ac.id/site/images/Lihat/fastfood.png" alt="Logo" height="350">
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>