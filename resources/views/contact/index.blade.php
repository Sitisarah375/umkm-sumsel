@extends('layout.layout')
@section('title', 'Contact')
@section('content')

<!-- Page Title -->
<div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/contact.png);">
    <div class="container position-relative">
        <h1>Contact</h1>
        <p>

        </p>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/">Home</a></li>
                <li class="current">Contact</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<!-- Contact Section -->
<section id="contact" class="contact section">

    <div class="mb-5">
        <iframe style="width: 100%; height: 400px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127607.8650383138!2d104.7159083!3d-2.9527851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b760add4ceb7f%3A0x1a894a3de39ec2cf!2sJl.%20Jend.%20Sudirman%2C%20Kota%20Palembang%2C%20Sumatera%20Selatan!5e0!3m2!1sen!2sid!4v1689634567890!5m2!1sen!2sid"
            frameborder="0" allowfullscreen="">
        </iframe>
    </div><!-- End Google Maps -->    

    <div class="container" data-aos="fade">

        <div class="row gy-5 gx-lg-5">

            <div class="col-lg-4">

                <div class="info">
                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h4>Location:</h4>
                            <p>Jalan Jenderal Sudirman Km. 4,5 No. 90 Palembang, Sumatera Selatan 30128</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4>Email:</h4>
                            <p>ptsp.dpmptsp.sumselprov@gmail.com</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4>Call:</h4>
                            <p>(0711) 411007 - (0711) 411199</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

            </div>

            <div class="col-lg-8">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                required="">
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                required="">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" placeholder="Message" required=""></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div><!-- End Contact Form -->

        </div>

    </div>

</section><!-- /Contact Section -->

@endsection
