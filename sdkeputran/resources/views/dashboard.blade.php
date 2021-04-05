@extends('layouts.template')
@section('content')
{{-- Banner area --}}
<section class="site-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 site-title">
                <h4 class="title-text">ELEMENTARY SCHOOL</h4>
                <h1 class="title-text text-uppercase">Keputran 06</h1>
                <h4 class="title-text text-uppercase">Best school from city of batik </h4>
                <div class="site-buttons">
                            <div class="d-flex flex-row flex-wrap">
                                <a href="/daftar" type="button" class="btn button primary-button mr-4 text-uppercase"> Daftar</a>
                                {{-- <button type="button" class="btn button primary-button mr-4 text-uppercase">Daftar</button> --}}
                                <a href="/profilesekolah" type="button" class="btn button primary-button mr-4 text-uppercase">Lihat Profile</a>
                                {{-- <button type="button" class="btn button secondary-button text-uppercase">Lihat Profile</button> --}}
                            </div>
            </div>
            </div>

            {{-- <div class="col-lg-6 col-md-12 banner-image">
                <img src="./images/web4.png" alt="banner-img" class="img-fluid">
            </div> --}}
            <div class="col-lg-6 col-md-12 banner-image">
                <div class="fullscreen-bg">
                    <video loop muted autoplay poster="./images/video1.mp4" class="fullscreen-bg__video">
                        <source src="./images/video1.mp4" type="video/mp4">
                    </video>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- About Area -->
<section class="about-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="about-image">
                    <img src="./images/web1.png" alt="about us" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 about-title">
                <h2 class="text-uppercase pt-5">
                    <span>Let me</span>
                    <span>introduce</span>
                    <span>my school</span>
                </h2>
                <div class="paragraph py-4 w-75">
                    <p class="para">
                        SDN Keputran 06 Pekalongan pada awal berdirinya pada tahun 1954 dikenal dengan nama sekolah Kartini.
                        Hal tersebut mungkin disebabkan oleh letak SD yang berada di jalan Kartini, Pekalongan.
                        SDN Keputran 06 Pekalongan merupakan sekolah Dari awal Pendirian sampai saat ini, "tradisi" Kepala Sekolah dijabat oleh seorang wanita masih tetap berjalan.
                    </p>
                    <p class="para">
                        Ketua Komite SDN Keputran 06 Pekalongan saat ini dijabat oleh Alumni yaitu; Bapak BAMBANG SAPTONO, SE, MM.
                        Beliau juga menjabat sebagai Kepala Museum Batik Pekalongan.
                        Sinergi yang baik dan berkualitas antara Komite Sekolah dan SDN Keputran 06 Pekalongan telah melahirkan generasi - generasi yang berkualitas.'
                        Hal tersebut dibuktikan dengan banyaknya penghargaan yang diraih oleh SDN Keputran 06 Pekalongan baik secara Akademik maupun non Akademik.
                    </p>
                </div>
                <button type="button" class="btn button primary-button text-uppercase">Read more</button>
            </div>
        </div>

    </div>

</section>
{{-- =========================================== end About Area ===================================================--}}

{{-- Brand Araa --}}
<section class="brand-area">
    <div class="container-fluid">
        <div class="row">
            <div class="ccol-lg-6 col-md-12">
                <p>sebelah kiri</p>
                {{-- <div class="first-row row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-brand">
                            <img src="/img/brands/logo1.png" alt="Brand-1">
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-brand">
                            <img src="/img/brands/logo2.png" alt="Brand-2">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-brand">
                            <img src="/img/brands/logo3.png" alt="Brand-3">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-brand">
                            <img src="/img/brands/logo4.png" alt="Brand-4">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-brand">
                            <img src="/img/brands/logo5.png" alt="Brand-5">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-brand">
                            <img src="/img/brands/logo6.png" alt="Brand-6">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-brand">
                            <img src="/img/brands/logo7.png" alt="Brand-7">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-brand">
                            <img src="/img/brands/logo8.png" alt="Brand-8">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-brand">
                            <img src="/img/brands/logo9.png" alt="Brand-9">
                        </div>
                    </div> --}}
                {{-- </div> --}}
            </div>
            <div class="col-lg-6 col-md-12">
                <p>testing page</p>
                {{-- <div class="experience-area">
                    <div class="d-flex flex-row years-area">
                        <h2 class="p-3 years">10</h2>
                        <h2>
                            <span>Years</span>
                            <span>Experience</span>
                            <span>Working</span>
                        </h2>
                    </div>
                    <div class="d-flex flex-row flex-wrap call-area">
                        <span><i class="fas fa-phone-alt fa-3x px-3"></i></span>
                        <div class="call-now">
                            <a href="#" class="text-uppercase h4 font-roboto">Call Now</a>
                            <span class="font-roboto py-2">(0285)12345</span>
                        </div>
                    </div>
                    <div class="bg-panel"></div>
                </div> --}}
            </div>
        </div>
    </div>
{{-- </section> --}}
{{-- ================================ end of brand area ========================== --}}





@endsection
