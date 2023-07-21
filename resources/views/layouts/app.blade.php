<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/templatemo-hexashop.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/lightbox.css') }}">
    <title>@yield('title', 'Sneakers.Id')</title>
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home.index') }}">Sneakers.Id</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="{{ route('home.index') }}">Home</a>
                    <a class="nav-link active" href="{{ route('product.index') }}">Products</a>
                    <a class="nav-link active" href="{{ route('cart.index') }}">Keranjang</a>
                    <a class="nav-link active" href="{{ route('home.about') }}">About</a>
                    <div class="vr bg-white mx-2 d-none d-lg-block"></div>
                    @guest
                    <a class="nav-link active" href="{{ route('login') }}">Login</a>
                    <a class="nav-link active" href="{{ route('register') }}">Register</a>
                    @else
                    <a class="nav-link active" href="{{ route('myaccount.orders') }}"><ion-icon class="transaksi" name="file-tray-full"></ion-icon></a>
                    <form id="logout" action="{{ route('logout') }}" method="POST">
                        <a role="button" class="nav-link active" onclick="document.getElementById('logout').submit();"><ion-icon class="exit" name="exit"></ion-icon></a>
                        @csrf
                    </form>
                    @endguest
                </div>
            </div>
        </div>
    </nav>

    <div class="">
        @yield('content')
    </div>

    <!-- footer -->
    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>
                Copyright © - <a class="text-reset fw-bold text-decoration-none" target="_blank" href="https://instagram.com/widigda_mkt_?igshid=YmMyMTA2M2Y=">
                    Sneakers.Id
                </a>
            </small>
        </div>
    </div>
    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>

</html>