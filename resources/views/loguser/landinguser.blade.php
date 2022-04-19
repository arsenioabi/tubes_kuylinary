<!DOCTYPE html>
<head>
    <title>KUYLINARY!</title>
    <link rel="stylesheet" href="{{asset('css\style_index.css')}}">
    <link rel="script" href="{{asset('js\style.js')}}">
    <link rel="stylesheet" href="css\loggedtourist.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <header class="main-header">
        <div class="header-wrapper">
            <nav class="navbar navbar-expand topbar mb-4">
                <ul class="main-menu">
                    <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="{{route('register')}}">Register</a></li>
                    <li><a href="{{route('login')}}"> Login</a></li>
                    <li><a href="#"><span class="fa fa-shopping-cart"></span></a></li>
                    <li><a href="#"><span class="fa fa-search"></span></a></li>                    
                </ul>
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            
            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Session::get('username');}}</span>
                        <img class="img-profile rounded-circle" src="/img/logoprofile.svg">
                    </a>

                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray 400"></i>
                            Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
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
                        <h1>KUYLINARY!</h1>
                    </div>
                </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://www.visitsingapore.com/editorials/did-you-know-foodies/_jcr_content/par/mobile_21_content_sl/sliderccpar1/editorial_generic_co.thumbnail.overview-image.730.411.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">Lokasi :</p>

                        <a href="" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</body>