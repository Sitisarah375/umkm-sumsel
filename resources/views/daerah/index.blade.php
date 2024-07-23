@extends('layout.layout')
@section('title', 'Daerah')
@section('content')

<!-- Page Title -->
<div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/contact.png);">
    <div class="container position-relative">
        <h1>Daerah</h1>
        <p>

        </p>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/">Home</a></li>
                <li class="current">Daerah</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<!-- Section Title -->
<div class="container section-title mt-5" data-aos="fade-up">
    <h2><b>Sumatera Selatan</b></h2>
    <div class="dropdown mb-3">
        <button class="btn btn-secondary dropdown-toggle custom-btn" type="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <b>Kabupaten</b>
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Kab. Banyuasin</a></li>
            <li><a class="dropdown-item" href="#">Kab. Empat Lawang</a></li>
            <li><a class="dropdown-item" href="#">Kab. Lahat</a></li>
            <li><a class="dropdown-item" href="#">Kab. Musi Banyuasin</a></li>
            <li><a class="dropdown-item" href="#">Kab. Musi Rawas</a></li>
            <li><a class="dropdown-item" href="#">Kab. Musi Rawas Utara</a></li>
            <li><a class="dropdown-item" href="#">Kab. Muara Enim</a></li>
            <li><a class="dropdown-item" href="/about">Kab. Ogan Ilir</a></li>
            <li><a class="dropdown-item" href="#">Kab. Ogan Komering Ilir</a></li>
            <li><a class="dropdown-item" href="#">Kab. Ogan Komering Ulu</a></li>
            <li><a class="dropdown-item" href="#">Kab. Ogan Komering Ulu Selatan</a></li>
            <li><a class="dropdown-item" href="#">Kab. Ogan Komering Ulu Timur</a></li>
            <li><a class="dropdown-item" href="#">Kab. Penukal Abab Lematang Ilir</a></li>
        </ul>
    </div>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle custom-btn" type="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <b>Kota</b>
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Kota Lubuk Linggau</a></li>
            <li><a class="dropdown-item" href="#">Kota Pagar Alam</a></li>
            <li><a class="dropdown-item" href="#">Kota Palembang</a></li>
            <li><a class="dropdown-item" href="#">Kota Prabumulih</a></li>
        </ul>
    </div>
</div><!-- End Section Title -->

<img src="assets/img/sumsel.png" alt="Lokasi Sumatra Selatan Kota Palembang" class="img-sumsel">

<!-- Recent Posts Section -->
<section id="recent-posts" class="recent-posts section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Sumatera Selatan</h2>
        <p><b>UMKM READY TO PARTNER</b></p>
    </div><!-- End Section Title -->

    <div class="container">
        <h3>Kabupaten</h3>
        <div class="row gy-5 mt-2">

            <div class="col-xl-3 col-md-6">
                <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="assets/img/sumsel/banyuasin.png" class="img-fluid" alt="">
                        {{-- <span class="post-date">2</span> --}}
                    </div>

                    <div class="post-content d-flex flex-column">
                        <h3 class="post-title">Kab. Banyuasin</h3>
                        <hr>
                        <a href="" class="readmore stretched-link d-flex align-items-center justify-content-center">
                            <span>Read More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div><!-- End post item -->
            
            <div class="col-xl-3 col-md-6">
                <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="assets/img/sumsel/4lawang.png" class="img-fluid" alt="">
                        {{-- <span class="post-date">2</span> --}}
                    </div>

                    <div class="post-content d-flex flex-column">
                        <h3 class="post-title">Kab. Empat Lawang</h3>
                        <hr>
                        <a href="" class="readmore stretched-link d-flex align-items-center justify-content-center">
                            <span>Read More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div><!-- End post item -->

            <div class="col-xl-3 col-md-6">
                <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="assets/img/sumsel/lahat.png" class="img-fluid" alt="">
                        {{-- <span class="post-date">2</span> --}}
                    </div>

                    <div class="post-content d-flex flex-column">
                        <h3 class="post-title">Kab. Lahat</h3>
                        <hr>
                        <a href="" class="readmore stretched-link d-flex align-items-center justify-content-center">
                            <span>Read More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div><!-- End post item -->

            <div class="col-xl-3 col-md-6">
                <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="assets/img/sumsel/musibanyuasin.png" class="img-fluid" alt="">
                        {{-- <span class="post-date">2</span> --}}
                    </div>

                    <div class="post-content d-flex flex-column">
                        <h3 class="post-title">Kab. Musi Banyuasin</h3>
                        <hr>
                        <a href="" class="readmore stretched-link d-flex align-items-center justify-content-center">
                            <span>Read More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div><!-- End post item -->

            <div class="col-xl-3 col-md-6">
                <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="assets/img/sumsel/rawas.png" class="img-fluid" alt="">
                        {{-- <span class="post-date">2</span> --}}
                    </div>

                    <div class="post-content d-flex flex-column">
                        <h3 class="post-title">Kab. Musi Rawas</h3>
                        <hr>
                        <a href="" class="readmore stretched-link d-flex align-items-center justify-content-center">
                            <span>Read More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div><!-- End post item -->

            <div class="col-xl-3 col-md-6">
                <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="assets/img/sumsel/rawasutara.png" class="img-fluid" alt="">
                        {{-- <span class="post-date">2</span> --}}
                    </div>

                    <div class="post-content d-flex flex-column">
                        <h3 class="post-title">Kab. Musi Rawas Utara</h3>
                        <hr>
                        <a href="" class="readmore stretched-link d-flex align-items-center justify-content-center">
                            <span>Read More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div><!-- End post item -->

            <div class="col-xl-3 col-md-6">
                <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="assets/img/sumsel/enim.png" class="img-fluid" alt="">
                        {{-- <span class="post-date">2</span> --}}
                    </div>

                    <div class="post-content d-flex flex-column">
                        <h3 class="post-title">Kab. Muara Enim</h3>
                        <hr>
                        <a href="" class="readmore stretched-link d-flex align-items-center justify-content-center">
                            <span>Read More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div><!-- End post item -->

            <div class="col-xl-3 col-md-6">
                <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

                    <div class="post-img position-relative overflow-hidden">
                        <a href="/about"><img src="assets/img/sumsel/ilir.png" class="img-fluid" alt=""></a>
                        {{-- <span class="post-date">2</span> --}}
                    </div>

                    <div class="post-content d-flex flex-column">
                        <h3 class="post-title">Kab. Ogan Ilir</h3>
                        <hr>
                        <a href="/about" class="readmore stretched-link d-flex align-items-center justify-content-center">
                            <span>Read More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div><!-- End post item -->

            <div class="col-xl-3 col-md-6">
                <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="assets/img/sumsel/komeringilir.png" class="img-fluid" alt="">
                        {{-- <span class="post-date">2</span> --}}
                    </div>

                    <div class="post-content d-flex flex-column">
                        <h3 class="post-title">Kab. Ogan Komering Ilir</h3>
                        <hr>
                        <a href="" class="readmore stretched-link d-flex align-items-center justify-content-center">
                            <span>Read More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div><!-- End post item -->

            <div class="col-xl-3 col-md-6">
                <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="assets/img/sumsel/ulu.png" class="img-fluid" alt="">
                        {{-- <span class="post-date">2</span> --}}
                    </div>

                    <div class="post-content d-flex flex-column">
                        <h3 class="post-title">Kab. Ogan Komering Ulu</h3>
                        <hr>
                        <a href="" class="readmore stretc
                        ed-link d-flex align-items-center justify-content-center">
                            <span>Read More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div><!-- End post item -->

            <div class="col-xl-3 col-md-6">
                <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="assets/img/sumsel/uluselatan.png" class="img-fluid" alt="">
                        {{-- <span class="post-date">2</span> --}}
                    </div>

                    <div class="post-content d-flex flex-column">
                        <h3 class="post-title">Kab. Ogan Komering Ulu Selatan</h3>
                        <hr>
                        <a href="" class="readmore stretched-link d-flex align-items-center justify-content-center">
                            <span>Read More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div><!-- End post item -->

            <div class="col-xl-3 col-md-6">
                <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="assets/img/sumsel/ulutimur.png" class="img-fluid" alt="">
                        {{-- <span class="post-date">2</span> --}}
                    </div>

                    <div class="post-content d-flex flex-column">
                        <h3 class="post-title">Kab. Ogan Komering Ulu Timur</h3>
                        <hr>
                        <a href="" class="readmore stretched-link d-flex align-items-center justify-content-center">
                            <span>Read More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div><!-- End post item -->

            <div class="col-xl-3 col-md-6">
                <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="assets/img/sumsel/pali.png" class="img-fluid" alt="">
                        {{-- <span class="post-date">2</span> --}}
                    </div>

                    <div class="post-content d-flex flex-column">
                        <h3 class="post-title">kab. Penukal Abab Lematang Ilir</h3>
                        <hr>
                        <a href="" class="readmore stretched-link d-flex align-items-center justify-content-center">
                            <span>Read More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div><!-- End post item -->

        </div>

        <h3 class="mt-5">Kota</h3>
        <div class="row gy-5 mt-2">
            <div class="col-xl-3 col-md-6">
                <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="assets/img/sumsel/lubuklinggau.png" class="img-fluid" alt="">
                        {{-- <span class="post-date">2</span> --}}
                    </div>

                    <div class="post-content d-flex flex-column">
                        <h3 class="post-title">Kota Lubuk Linggau</h3>
                        <hr>
                        <a href="" class="readmore stretched-link d-flex align-items-center justify-content-center">
                            <span>Read More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div><!-- End post item -->

            <div class="col-xl-3 col-md-6">
                <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="assets/img/sumsel/pagaralam.png" class="img-fluid" alt="">
                        {{-- <span class="post-date">2</span> --}}
                    </div>

                    <div class="post-content d-flex flex-column">
                        <h3 class="post-title">Kota Pagar Alam</h3>
                        <hr>
                        <a href="" class="readmore stretched-link d-flex align-items-center justify-content-center">
                            <span>Read More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div><!-- End post item -->

            <div class="col-xl-3 col-md-6">
                <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="assets/img/sumsel/palembang.png" class="img-fluid" alt="">
                        {{-- <span class="post-date">2</span> --}}
                    </div>

                    <div class="post-content d-flex flex-column">
                        <h3 class="post-title">Kota Palembang</h3>
                        <hr>
                        <a href="" class="readmore stretched-link d-flex align-items-center justify-content-center">
                            <span>Read More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div><!-- End post item -->

            <div class="col-xl-3 col-md-6">
                <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="assets/img/sumsel/prabumulih.png" class="img-fluid" alt="">
                        {{-- <span class="post-date">2</span> --}}
                    </div>

                    <div class="post-content d-flex flex-column">
                        <h3 class="post-title">Kota Prabumulih</h3>
                        <hr>
                        <a href="" class="readmore stretched-link d-flex align-items-center justify-content-center">
                            <span>Read More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div><!-- End post item -->
        </div>
        </div>
    </div>
</section><!-- /Recent Posts Section -->

@endsection
