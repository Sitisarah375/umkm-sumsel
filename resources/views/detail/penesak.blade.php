<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>DPMPTSP - @yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Marcellus:wght@400&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


 <!-- =======================================================
  * Template Name: QuickStart
  * Template URL: https://bootstrapmade.com/quickstart-bootstrap-startup-website-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <div class="logo d-flex align-items-center me-auto">
        <img src="assets/img/logo/logo.png" alt="DPMPTSP">
        <img src="assets/img/logo/name.png" alt="DPMPTSP">
      </div>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">Produk</a></li>
          <li><a href="#features">Tentang</a></li>
          <li><a href="#services">Informasi</a></li>
          <li><a href="#contact">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="hero-bg">
        <img src="assets/img/contact.png" alt="">
      </div>
      <div class="container text-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
          <h1 data-aos="fade-up">Profile UMKM</br><span>Duta Penesak</span></h1>
          <nav class="breadcrumbs">
            <ol>
                <li><a href="/about">About</a></li>
                <li class="current">Detail</li>
            </ol>
          </nav>
          {{-- <p data-aos="fade-up" data-aos-delay="100">Quickly start your project now and set the stage for success<br></p> --}}
          <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="200">
            <a href="#about" class="btn-get-started">Get Started</a>
            <a href="https://www.youtube.com/watch?v=XNJsrQT03WA" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
          {{-- <img src="assets/img/hero-services-img.webp" class="img-fluid hero-img" alt="" data-aos="zoom-out" data-aos-delay="300"> --}}
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section light-background">

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-person"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Nama Pengusaha</a></h4>
                <p class="description">Robbi</p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Berdiri /Lama Usaha</a></h4>
                <p class="description">1990 /33 tahun</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Legalitas</a></h4>
                <p class="description">Ada /legal</p>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-building-fill"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Skala Usaha</a></h4>
                <p class="description">Industri Kecil</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Featured Services Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p class="who-we-are">Produk Duta Penesak</p>
            <h3>Kualitas Rumah Knockdown Kami Mampu
                Bertahan Hingga Tahun</h3>
            <p class="fst-italic">
              Produk Duta Penesak :
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Rumah Lumbung</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Rumah Limas</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Gazebo Minimalis</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Rumah Panggung</span></li>
            </ul>
            <p>
              Pemesanan ke kami bisa
              custon ukuran, bentuk dan
              desain sesuai selera konsumen,
              harga kami kompetitif mulai
              dari 60 hingga 90 juta rupiah.          
            </p>
          </div>

          <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4" style="margin-top:70px">
              <div class="col-lg-6 mt-6">
                <img src="assets/img/penesak/3.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6">
                <div class="row gy-4">
                  <div class="col-lg-12">
                    <img src="assets/img/penesak/4.jpg" class="img-fluid" alt="">
                  </div>
                  {{-- <div class="col-lg-12">
                    <img src="assets/img/penesak/c1.jpg" class="img-fluid" alt="">
                  </div> --}}
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- /About Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tentang Duta Penesak</h2>
        <p>Duta Penesak kerajinan rumah
            bongkar pasang (knockdown) tertua di Sumatera
            Selatan</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row justify-content-between">

          <div class="col-lg-5 d-flex align-items-center">

            <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                  <i class="bi bi-tag"></i>
                  <div>
                    <h4 class="d-none d-lg-block">Unit Usaha</h4>
                    <p>
                        - Terdapat 11 unit usaha yang
                        bergerak dalam sektor
                        peternakan </br>
                        - Terdapat 8 unit usaha yang bergerak
                        dalam Industri Besi dan Baja Dasar</br>
                        - Terdapat 5 unit usaha
                        yang bergerak dalam
                        bidang furniture
                    </p>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                  <i class="bi bi-people-fill"></i>
                  <div>
                    <h4 class="d-none d-lg-block">Mitra</h4>
                    <p>
                        Dapat dimitrakan
                        dengan developer
                        perumahan,real
                        estat, resort
                    </p>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                  <i class="bi bi-bar-chart"></i>
                  <div>
                    <h4 class="d-none d-lg-block">Permodalan</h4>
                    <p>
                        Permodalan masih menjadi kendala dalam proses
                        pengembangan usaha kami, kami berharap kepada
                        pemerintah setempat dan pihak lain /perusahaan swasta
                        untuk dapat menjalin kemitraan bersama kami dalam bentuk
                        Investasi Permodalan (Modal Pembiayaan dan /atau Modal
                        Bahan Baku Utama).
                    </p>
                  </div>
                </a>
              </li>
            </ul><!-- End Tab Nav -->

          </div>

          <div class="col-lg-6">

            <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

              <div class="tab-pane fade active show" id="features-tab-1">
                <img src="assets/img/penesak/1.jpg" alt="" style="margin-top:70px" class="img-fluid">
              </div><!-- End Tab Content Item -->

              <div class="tab-pane fade" id="features-tab-2">
                <img src="assets/img/penesak/2.jpg" alt="" style="margin-top:70px" class="img-fluid">
              </div><!-- End Tab Content Item -->

              <div class="tab-pane fade" id="features-tab-3">
                <img src="assets/img/penesak/3.jpg" alt="" style="margin-top:70px" class="img-fluid">
              </div><!-- End Tab Content Item -->
            </div>

          </div>

        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- Features Details Section -->
    <section id="features-details" class="features-details section">

      <div class="container">

        <div class="row gy-4 justify-content-between features-item">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/penesak/3.jpg" class="img-fluid" alt="" style="max-height : 450px; max-width: 450px">
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Bahan Baku</h3>
              <p>
                Bahan baku kayu yang kami gunakan berkualitas, seperti kayu
                meranti /seru /puspa sebagai kerangkanya, lantai, plafond
                /dinding menggunakan kayu meranti, serta atap menggunakan
                multiroof /jerami, dengan kualitas ketahanan produk 50
                hingga 60 tahun.           
              </p>
              {{-- <a href="#" class="btn more-btn">Learn More</a> --}}
            </div>
          </div>

        </div><!-- Features Item -->

        {{-- <div class="row gy-4 justify-content-between features-item">

          <div class="col-lg-5 d-flex align-items-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">

            <div class="content">
              <h3>Media Sosial</h3>
              <p>
                Sekilas Tentang Usaha Duta Penesak
              </p>
              <ul>
                <li><i class="bi bi-arrow-right-circle-fill"></i> Instagram : @Perkebunanwakuban</li>
                <li><i class="bi bi-arrow-right-circle-fill"></i> Facebook :  Wak uban plantation</li>
              </ul>
              <p></p>
              <a href="#" class="btn more-btn">Learn More</a>
            </div>

          </div>

          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/penesak/c4.jpg" class="img-fluid" alt="">
          </div>

        </div><!-- Features Item --> --}}

      </div>

    </section><!-- /Features Details Section -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Sekilas Informasi</h2>
        <p>Duta Penesak</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row g-5">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative">
              <i class="bi bi-briefcase icon"></i>
              <div>
                <h5>Bidang Usaha</h5>
                <p>Industri Bangunan Prafabrikasi
                    Dari Kayu</p>
                {{-- <a href="#" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a> --}}
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item item-orange position-relative">
              <i class="bi bi-bookmarks icon"></i>
              <div>
                <h5>Jenis Barang / Komoditi</h5>
                <p>(a) Rumah lumbung 4x6 m, (b)
                    rumah limas varian ukuran, (c)
                    Gazebo minimalis, (d) rumah
                    panggung 8x12 m dan 8x6 m</p>
                {{-- <a href="#" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a> --}}
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
              <i class="bi bi-arrow-repeat icon"></i>
              <div>
                <h5>Kapasitas Produksi</h5>
                <p>3 s.d 5 unit/tahun</p>
                {{-- <a href="#" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a> --}}
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item item-red position-relative">
              <i class="bi bi-people-fill icon"></i>
              <div>
                <h5>Informasi Kemitraan</h5>
                <p>Belum bermitra</p>
                {{-- <a href="#" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a> --}}
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item item-indigo position-relative">
              <i class="bi bi-activity icon"></i>
              <div>
                <h5>Omset</h5>
                <p>IDR. 300.000.000,-/tahun</p>
                {{-- <a href="#" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a> --}}
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item item-pink position-relative">
              <i class="bi bi-cash icon"></i>
              <div>
                <h5>Permodalan  / Jumlah Investasi</h5>
                <p>Dari DP konsumen</p>
                {{-- <a href="#" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a> --}}
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item item-pink position-relative">
              <i class="bi bi-chat-square-text icon"></i>
              <div>
                <h5>Permintaan Pasar</h5>
                <p>Lebih tinggi dari produksi</p>
                {{-- <a href="#" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a> --}}
              </div>
            </div>

          </div><!-- End Service Item -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item item-pink position-relative">
              <i class="bi bi-bag-plus-fill icon"></i>
              <div>
                <h5>Pemasaran</h5>
                <p>Dalam dan Luar Negeri</p>
                {{-- <a href="#" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a> --}}
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

   <!-- Contact Section -->
<section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Kontak</h2>
    <p>Jika Ingin Memesan Bisa Hubungi Kontak Dibawah Ini</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4">
      <div class="col-lg-6">
        <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
          <i class="bi bi-geo-alt"></i>
          <h3>Alamat</h3>
          <p>Desa Tj. Batu Seberang, Kec. Tj.
            Batu, Ogan Ilir Sumatera Selatan</p>
        </div>
      </div><!-- End Info Item -->

      <div class="col-lg-3 col-md-6">
        <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-telephone"></i>
          <h3>Telepon</h3>
          <p>+62 821-8425-2008</p>
        </div>
      </div><!-- End Info Item -->

      <div class="col-lg-3 col-md-6">
        <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-envelope"></i>
          <h3>Email</h3>
          <p>ryandhaagung11@gmail.com</p>
        </div>
      </div><!-- End Info Item -->
    </div>

    <div class="row gy-4 mt-1">
      <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!-- End Google Maps -->
    </div>
  </div>

</section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="logo d-flex align-items-center">
                        {{-- <span class="sitename">AgriCulture</span> --}}
                        <img src="assets/img/logo/logo.png" alt="DPMPTSP">
                        <img src="assets/img/logo/name.png" alt="DPMPTSP">
                    </div>
                    <div class="footer-contact pt-3">
                        <p>Jl. Jenderal Sudirman</p>
                        <p>Km. 4,5 No. 90 Palembang,</p>
                        <p>Sumatera Selatan 30128</p>
                        <p class="mt-3"><strong>Phone: (0711) 411007 - (0711) 411199</strong> <span></span></p>
                        <p><strong>Email: ptsp.dpmptsp.sumselprov@gmail.com</strong> <span></span></p>
                    </div>
                </div>

                {{-- <div class="col-lg-2 col-md-3 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Terms of service</a></li>
          <li><a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><a href="#">Web Design</a></li>
          <li><a href="#">Web Development</a></li>
          <li><a href="#">Product Management</a></li>
          <li><a href="#">Marketing</a></li>
          <li><a href="#">Graphic Design</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Hic solutasetp</h4>
        <ul>
          <li><a href="#">Molestiae accusamus iure</a></li>
          <li><a href="#">Excepturi dignissimos</a></li>
          <li><a href="#">Suscipit distinctio</a></li>
          <li><a href="#">Dilecta</a></li>
          <li><a href="#">Sit quas consectetur</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Nobis illum</h4>
        <ul>
          <li><a href="#">Ipsam</a></li>
          <li><a href="#">Laudantium dolorum</a></li>
          <li><a href="#">Dinera</a></li>
          <li><a href="#">Trodelas</a></li>
          <li><a href="#">Flexo</a></li>
        </ul>
      </div> --}}
                <div class="mt-5"></div>
            </div>
        </div>
    </div>

    <div class="copyright text-center">
        <div
            class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

            <div class="d-flex flex-column align-items-center align-items-lg-start">
                <div>
                    © Copyright <strong><span>Studio88</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
                    {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
                </div>
            </div>

            <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                <a href="mailto:ptsp.dpmptsp.sumselprov@gmail.com"><i class="bi bi-envelope"></i></a>
                <a href="https://dpmptsp.sumselprov.go.id/"><i class="bi bi-globe"></i></a>
                <a href="https://www.instagram.com/dpmptsp.sumsel/"><i class="bi bi-instagram"></i></a>
            </div>

        </div>
    </div>

</footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>