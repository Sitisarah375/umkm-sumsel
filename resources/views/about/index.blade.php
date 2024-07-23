@extends('layout.layout')
@section('title', 'About')
@section('content')

<!-- Page Title -->
<div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/contact.png);">
    <div class="container position-relative">
      <img src="assets/img/log.png" alt="Image" class="img-fluid fixed-size-img" width="400px">
        <h1>PROFILE UMKM</h1>
        <p>Kabupaten Ogan Ilir</p>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/daerah">Daerah</a></li>
                <li class="current">About</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<section id="about-3-carousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
      <div class="carousel-item active">
          <div class="container">
              <div class="row gy-4 justify-content-between align-items-center">
                  <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
                      <img src="assets/img/ogan.png" alt="Image" class="img-fluid fixed-size1-img">
                  </div>
                  <div class="col-lg-6 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                      <h2 class="content-title mb-4">Tentang Kabupaten Ogan Ilir</h2>
                      <p class="mb-4">
                          Luas wilayah 266.607 hektar terdiri dari 16 kecamatan yang mencakup 227 desa dan 14 kelurahan,
                          dengan total penduduk sebanyak 431.558 orang, terdiri dari 414.036 laki-laki dan 420.783 perempuan,
                          dengan 68,25% di antaranya berada dalam usia produktif.
                      </p>
                      <ul class="list-unstyled list-check">
                          <h5>Tersebar di seluruh kecamatan</h5>
                          <li>979 UMKM</li>
                          <li>471 Koperasi</li>
                          <li>10 Jasa Perbankan</li>
                          <li>3.205 sarana perdagangan</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <div class="carousel-item">
          <div class="container">
              <div class="row gy-4 justify-content-between align-items-center">
                  <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
                      <img src="assets/img/ogan.png" alt="Another Image" class="img-fluid fixed-size1-img">
                  </div>
                  <div class="col-lg-6 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                      {{-- <h2 class="content-title mb-4">Sejarah Kabupaten Ogan Komering Ulu</h2> --}}
                      <p class="mb-4">
                          Dalam Kabupaten Ogan Ilir, PDRB mencapai 13,26 triliun IDR. Sektor ekonomi utama
                          meliputi: (a) pertanian, kehutanan, dan perikanan dengan kontribusi 2,72 triliun IDR, (b)
                          perdagangan besar dan eceran serta reparasi mobil dan sepeda sebesar 2,69 triliun IDR, (c)
                          konstruksi sebesar 2,25 triliun IDR, (d) industri pengolahan sebesar 1,60 triliun IDR, dan
                          (e) administrasi pemerintahan, pertahanan, dan jaminan sosial sebesar 1,16 triliun IDR.
                      </p>
                      <p>
                          Infrastruktur transportasi di Kabupaten ini mencakup jaringan jalan arteri primer sepanjang
                          69,66 km, jalan kolektor primer sepanjang 195,63 km, jalan lingkungan primer sepanjang
                          2.075,05 km, jalan lokal primer sepanjang 677,29 km, jalan tol sepanjang 92,64 km, serta
                          jalur kereta sepanjang 178,69 km. Terdapat juga 2 unit pelabuhan sungai dan danau utama, 3
                          unit stasiun kereta, dan 1 unit terminal penumpang.
                      </p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#about-3-carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#about-3-carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
  </button>
</section>


<!-- Team Section -->
<section class="team-15 team section" id="team">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Profile UMKM</h2>
        <p>Kabupaten Ogan Ilir</p>
    </div><!-- End Section Title -->

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="person">
                        <figure>
                            <a href="/wakuban"><img src="assets/img/wakuban/wakuban.jpg" alt="Image" class="img-fluid fixed-size1-img fixed-size1-img"></a>
                            <div class="social">
                                <a href="https://www.facebook.com/wakubanplantation"><span class="bi bi-facebook"></span></a>
                                <a href="https://www.instagram.com/perkebunanwakuban/"><span class="bi bi-instagram"></span></a>
                            </div>
                        </figure>
                        <div class="person-contents">
                            <a href="/wakuban"><span class="position">Gula Aren</span>
                            <h3>Wak Uban</h3></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="person">
                        <figure>
                            <a href="/pandaibesi"><img src="assets/img/pandaibesi/c3.jpg" alt="Image" class="img-fluid fixed-size1-img fixed-size1-img"></a>
                            <div class="social">
                                <a href="#"><span class="bi bi-facebook"></span></a>
                                <a href="#"><span class="bi bi-instagram"></span></a>
                            </div>
                        </figure>
                        <div class="person-contents">
                            <a href="/pandaibesi"><span class="position">Pandai Besi</span>
                            <h3>Bustami Jaya</h3></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="person">
                        <figure>
                            <a href="/monalisa"><img src="assets/img/monalisa/2.png" alt="Image" class="img-fluid fixed-size1-img fixed-size1-img"></a>
                            <div class="social">
                                <a href="#"><span class="bi bi-facebook"></span></a>
                                <a href="#"><span class="bi bi-instagram"></span></a>
                            </div>
                        </figure>
                        <div class="person-contents">
                            <a href="/monalisa"><span class="position">Monalisa</span>
                            <h3>Global Silver</h3></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="person">
                        <figure>
                            <a href="/penesak"><img src="assets/img/penesak/2.jpg" alt="Image" class="img-fluid fixed-size1-img fixed-size1-img"></a>
                            <div class="social">
                                <a href="https://www.facebook.com/profile.php?id=100007468698558"><span class="bi bi-facebook"></span></a>
                                <a href="#"><span class="bi bi-instagram"></span></a>
                            </div>
                        </figure>
                        <div class="person-contents">
                            <a href="/penesak"><span class="position">Duta</span>
                            <h3>Penesak</h3></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="person">
                        <figure>
                            <a href="/aidil"><img src="assets/img/aidil/2.png" alt="Image" class="img-fluid fixed-size1-img"></a>
                            <div class="social">
                                <a href="#"><span class="bi bi-facebook"></span></a>
                                <a href="#"><span class="bi bi-instagram"></span></a>
                            </div>
                        </figure>
                        <div class="person-contents">
                            <a href="/aidil"><span class="position">Aidil</span>
                            <h3>Konveksi</h3></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                  <div class="person">
                      <figure>
                        <a href="/galeri"><img src="assets/img/galeri/4.jpg" alt="Image" class="img-fluid fixed-size1-img"></a>
                          <div class="social">
                              <a href="#"><span class="bi bi-facebook"></span></a>
                              <a href="#"><span class="bi bi-instagram"></span></a>
                          </div>
                      </figure>
                      <div class="person-contents">
                        <a href="/galeri"><span class="position">Galeri</span>
                        <h3>Wahana Alam</h3></a>
                      </div>
                  </div>
              </div>

              <div class="col-lg-3 col-md-6 mb-4">
                <div class="person">
                    <figure>
                        <a href="/faaza"><img src="assets/img/faaza/1.jpg" alt="Image" class="img-fluid fixed-size1-img"></a>
                        <div class="social">
                            <a href="https://www.facebook.com/profile.php?id=100082836906271"><span class="bi bi-facebook"></span></a>
                            <a href="https://www.instagram.com/istri_dan_ibu_empat_anak/"><span class="bi bi-instagram"></span></a>
                        </div>
                    </figure>
                    <div class="person-contents">
                      <a href="/faaza"><span class="position">Faaza</span>
                      <h3>Catering</h3></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="person">
                  <figure>
                    <a href="/sawit"><img src="assets/img/sawit/4.jpg" alt="Image" class="img-fluid fixed-size1-img"></a>
                      <div class="social">
                          <a href="#"><span class="bi bi-facebook"></span></a>
                          <a href="#"><span class="bi bi-instagram"></span></a>
                      </div>
                  </figure>
                  <div class="person-contents">
                    <a href="/sawit"><span class="position">PT. Dewa</span>
                    <h3>Argo Sawit</h3></a>
                  </div>
              </div>
          </div>
            </div>
        </div>
    </div>

</section><!-- /Team Section -->

@endsection