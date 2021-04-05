<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- css bawaan --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    {{-- css custom --}}
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    {{-- responsive css --}}
    <link href="{{ asset('css/responsive.css')}}" rel="stylesheet">
    <title>Index</title>
</head>

<body>
    {{-- Start Header Area --------------------------------------------------------------------------------------------------------------------------------------------}}
    <header class="header_area">
        <div class="main-menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img src="./img/logo.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">about</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/loginsiswa">Loginsiswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">contact</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </header>
    {{-- end Header area ------------------------------------------------------------------------------------- --}}

    {{-- Start main area --}}
    {{-- start Banner area--------------------------------------------------------------------------------- --}}
    <section class="site-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 site-title">
                    <h3 class="title-text">Hey</h3>
                    <h1 class="title-text text-uppercase">I am Herya</h1>
                    <h4 class="title-text text-uppercase">Senior Programming Java Developer :D </h4>
                </div>
                <div class="col-lg-6 col-md-12 banner-image">
                    <img src="./img/banner/banner-image.png" alt="banner-img" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    {{-- End Banner area ---------------------------------------------------------------------------------- --}}

    <!-- <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.3.4.1.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script> -->
</body>

</html>
