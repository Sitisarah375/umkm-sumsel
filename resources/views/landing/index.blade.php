@extends('layout.layout')
@section('title', 'Landing')
@section('content')

<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
            <img src="assets/img/carousel/c2.png" alt="">
            <div class="carousel-container">
                {{-- <h2>Farming is the best solution of worlds starvation</h2> --}}
                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> --}}
            </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
            <img src="assets/img/carousel/c1.png" alt="">
            <div class="carousel-container">
                {{-- <h2>Organic vegetables is good for health</h2>
            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p> --}}
            </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
            <img src="assets/img/hero_3.jpg" alt="">
            <div class="carousel-container">
                <h2>Providing Fresh Produce Every Single Day</h2>
                <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                    odit aut fugit.</p>
            </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
            <img src="assets/img/hero_4.jpg" alt="">
            <div class="carousel-container">
                <h2>Farming as a Passione</h2>
                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed
                    quia non numquam eius.</p>
            </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
            <img src="assets/img/hero_5.jpg" alt="">
            <div class="carousel-container">
                <h2>Good Food For All</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.</p>
            </div>
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

    </div>

</section><!-- /Hero Section -->

<!-- About 3 Section -->
<section id="about-3" class="about-3 section">

    <div class="container">
        <div class="row gy-4 justify-content-between align-items-center">
            <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
                <img src="assets/img/sumsel.png" alt="Image" class="img-fluid">
                <a href="https://youtu.be/NhQG83p3hlc?si=-UIhk24ddDUIXsnA" class="glightbox pulsating-play-btn">
                    <span class="play"><i class="bi bi-play-fill"></i></span>
                </a>
            </div>
            <div class="col-lg-5 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                <h2 class="content-title mb-4">Tentang Sumatera Selatan</h2>
                <p class="mb-4">
                    Sumatera Selatan adalah provinsi di Indonesia yang terletak di bagian Selatan pulau Sumatera.
                    Ibu kota Sumatera Selatan berada di kota Palembang, dan pada akhir tahun 2023 penduduk provinsi
                    ini berjumlah 8.889.913 jiwa.
                </p>
                <ul class="list-unstyled list-check">
                    <li>Julukan: Bumi Sriwijaya</li>
                    <li>Negeri Batanghari Sembilan</li>
                    <li>Motto: Bersatu teguh</li>
                </ul>

                <p><a href="/daerah" class="btn-cta">Lihat Daerah</a></p>
            </div>
        </div>
    </div>
</section><!-- /About 3 Section -->

@endsection
