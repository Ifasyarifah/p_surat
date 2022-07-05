<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Komisi Informasi</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('') }}landingpage/assets/img/favicon.png" rel="icon">
    <link href="{{ asset('') }}landingpage/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('') }}landingpage/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('') }}landingpage/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('') }}landingpage/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('') }}landingpage/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('') }}landingpage/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('') }}landingpage/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('') }}landingpage/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Appland - v4.7.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top  header-transparent ">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="index.html">Komisi Informasi</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="{{ asset('') }}landingpage/assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#features">Anggota Komisioner</a></li>
                    <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
                    {{-- <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li> --}}
                    <li><a class="nav-link scrollto" href="#testimonials">Visi Misi</a></li>
                    {{-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> --}}
                    <li><a class="getstarted scrollto" href="{{ route('login') }}">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up">
                    <div>
                        <h1>Komisi Informasi Kab.sumenep</h1>
                        <h2>berfungsi menjalankan Undang-Undang Keterbukaan Informasi Publik dan peraturan
                            Pelaksanaannya, menetapkan petunjuk teknis standar layanan Informasi Publik dan
                            menyelesaikan Sengketa Informasi Publik melalui Mediasi dan/atau Ajudikasi nonlitigasi</p>
                        </h2>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img"
                    data-aos="fade-up">
                    <img src="{{ asset('') }}landingpage/assets/img/logo.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= App Features Section ======= -->
        <section id="features" class="features">
            <div class="container">

                <div class="section-title">
                    <h2>Komisioner KI Periode 2019-2023</h2>
                </div>

                <div class="row no-gutters">
                    <div class="col-xl-7 d-flex align-items-stretch order-3 order-lg-1">
                        <div class="content d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-md-6 icon-box" data-aos="fade-up">
                                    <h4><img class="img-circle" width="90px" class="align-center"
                                            style="margin-left:10px;"
                                            src="{{ asset('') }}landingpage/assets/img/badrol.png"><br>Badrul
                                        Akhmadi, S.Pd</h4>
                                    <p>Ketua Komisioner</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <h4><img class="img-circle" width="90px" class="align-center"
                                            style="margin-left:10px;"
                                            src="{{ asset('') }}landingpage/assets/img/adnan.png"><br>Adnan, S.Sos
                                    </h4>
                                    <p>Wakil Komisioner</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-left">
                                    <h4><img class="img-circle" width="90px" class="align-center"
                                            style="margin-left:10px;"
                                            src="{{ asset('') }}landingpage/assets/img/rifaie.png"><br>Achmad
                                        Rifa’i, S.Ag</h4>
                                    <p>Anggota Komisioner</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <h4><img class="img-circle" width="90px" class="align-center"
                                            style="margin-left:10px;"
                                            src="{{ asset('') }}landingpage/assets/img/rudi.png"><br>Rudi Hartono,
                                        SH. MH</h4>
                                    <p>Anggota Komisioner</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                    <h4><img class="img-circle" width="90px" class="align-center"
                                            style="margin-left:10px;"
                                            src="{{ asset('') }}landingpage/assets/img/acik.png"><br>Mohammad
                                        Rasyid, M.Pd.I.</h4>
                                    <p>Anggota Komisioner</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2"
                        data-aos="fade-left:60px;" data-aos-delay="200">
                        <img src="{{ asset('') }}landingpage/assets/img/ki_logo.png" class="img-circle"
                            alt="">
                    </div>
                </div>

            </div>
        </section><!-- End App Features Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Gallery</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

            </div>

            <div class="container-fluid" data-aos="fade-up">
                <div class="gallery-slider swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><a
                                href="{{ asset('') }}landingpage/assets/img/gallery/gallery-1.png"
                                class="gallery-lightbox" data-gall="gallery-carousel"><img
                                    src="{{ asset('') }}landingpage/assets/img/gallery/gallery-1.png"
                                    class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a
                                href="{{ asset('') }}landingpage/assets/img/gallery/gallery-2.png"
                                class="gallery-lightbox" data-gall="gallery-carousel"><img
                                    src="{{ asset('') }}landingpage/assets/img/gallery/gallery-2.png"
                                    class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a
                                href="{{ asset('') }}landingpage/assets/img/gallery/gallery-3.png"
                                class="gallery-lightbox" data-gall="gallery-carousel"><img
                                    src="{{ asset('') }}landingpage/assets/img/gallery/gallery-3.png"
                                    class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a
                                href="{{ asset('') }}landingpage/assets/img/gallery/gallery-4.png"
                                class="gallery-lightbox" data-gall="gallery-carousel"><img
                                    src="{{ asset('') }}landingpage/assets/img/gallery/gallery-4.png"
                                    class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a
                                href="{{ asset('') }}landingpage/assets/img/gallery/gallery-5.png"
                                class="gallery-lightbox" data-gall="gallery-carousel"><img
                                    src="{{ asset('') }}landingpage/assets/img/gallery/gallery-5.png"
                                    class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a
                                href="{{ asset('') }}landingpage/assets/img/gallery/gallery-6.png"
                                class="gallery-lightbox" data-gall="gallery-carousel"><img
                                    src="{{ asset('') }}landingpage/assets/img/gallery/gallery-6.png"
                                    class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a
                                href="{{ asset('') }}landingpage/assets/img/gallery/gallery-7.png"
                                class="gallery-lightbox" data-gall="gallery-carousel"><img
                                    src="{{ asset('') }}landingpage/assets/img/gallery/gallery-7.png"
                                    class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a
                                href="{{ asset('') }}landingpage/assets/img/gallery/gallery-8.png"
                                class="gallery-lightbox" data-gall="gallery-carousel"><img
                                    src="{{ asset('') }}landingpage/assets/img/gallery/gallery-8.png"
                                    class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a
                                href="{{ asset('') }}landingpage/assets/img/gallery/gallery-9.png"
                                class="gallery-lightbox" data-gall="gallery-carousel"><img
                                    src="{{ asset('') }}landingpage/assets/img/gallery/gallery-9.png"
                                    class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a
                                href="{{ asset('') }}landingpage/assets/img/gallery/gallery-10.png"
                                class="gallery-lightbox" data-gall="gallery-carousel"><img
                                    src="{{ asset('') }}landingpage/assets/img/gallery/gallery-10.png"
                                    class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a
                                href="{{ asset('') }}landingpage/assets/img/gallery/gallery-11.png"
                                class="gallery-lightbox" data-gall="gallery-carousel"><img
                                    src="{{ asset('') }}landingpage/assets/img/gallery/gallery-11.png"
                                    class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a
                                href="{{ asset('') }}landingpage/assets/img/gallery/gallery-12.png"
                                class="gallery-lightbox" data-gall="gallery-carousel"><img
                                    src="{{ asset('') }}landingpage/assets/img/gallery/gallery-12.png"
                                    class="img-fluid" alt=""></a></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Gallery Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Visi Dan Misi Komisi Informasi</h2>

                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('') }}landingpage/assets/img/ki_logo.png"
                                    class="testimonial-img" alt="">
                                <h3>Visi Komisi Informasi</h3>
                                {{-- <h4>Ceo &amp; Founder</h4> --}}
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Terwujudnya Masyarakat Informasi yang Maju, Partisipatif, dan Berkepribadian Bangsa
                                    melalui Komisi Informasi yang Mandiri dan Berkeadilan menuju Indonesia Cerdas dan
                                    Sejahtera
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('') }}landingpage/assets/img/ki_logo.png"
                                    class="testimonial-img" alt="">
                                <h3>Misi Komisi Informasi</h3>
                                {{-- <h4></h4> --}}
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                <p>
                                    1. Meningkatkan kesadaran kritis masyarakat agar mampu mengakses dan menggunakan
                                    informasi secara bertanggungjawab dan aktif berpartisipasi dalam proses pembuatan
                                    serta pelaksanaan kebijakan publik dengan mengoptimalkan pemanfaatan teknologi
                                    informasi. </p>
                                <p>
                                    2. Menguatkan kelembagaan Komisi Infomasi melalui konsolidasi, publikasi dan
                                    pendalaman wawasan, kompetensi serta distribusi tanggungjawab sesuai prinsip
                                    kesetaraan dan keadilan. </p>
                                <p>
                                    3. Mengoptimalkan kualitas kebijakan dan penyelesaian sengketa informasi publik
                                    dengan mengedepankan prinsip cepat, tepat waktu, biaya ringan dan sederhana. </p>
                                <p>
                                    4. Membangun kemitraan dengan stakeholders demi mengakselerasi masyarakat informasi
                                    menuju Indonesia cerdas dan sejahtera. </p>
                                <p>
                                    5. Meningkatkan kapasitas dan peran badan publik agar lebih proaktif dalam
                                    memberikan pelayanan informasi publik. </p>

                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        {{-- <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('') }}landingpage/assets/img/testimonials/testimonials-3.jpg"
                                    class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                    minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div> --}}

                        {{-- <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('') }}landingpage/assets/img/testimonials/testimonials-4.jpg"
                                    class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                    dolore labore illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div> --}}

                        {{-- <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('') }}landingpage/assets/img/testimonials/testimonials-5.jpg"
                                    class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div> --}}

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        {{-- <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container">

                <div class="section-title">
                    <h2>Pricing</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row no-gutters">

                    <div class="col-lg-4 box" data-aos="fade-right">
                        <h3>Free</h3>
                        <h4>$0<span>per month</span></h4>
                        <ul>
                            <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                            <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                            <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                            <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span>
                            </li>
                            <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span>
                            </li>
                        </ul>
                        <a href="#" class="get-started-btn">Get Started</a>
                    </div>

                    <div class="col-lg-4 box featured" data-aos="fade-up">
                        <h3>Business</h3>
                        <h4>$29<span>per month</span></h4>
                        <ul>
                            <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                            <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                            <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                            <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                            <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                        </ul>
                        <a href="#" class="get-started-btn">Get Started</a>
                    </div>

                    <div class="col-lg-4 box" data-aos="fade-left">
                        <h3>Developer</h3>
                        <h4>$49<span>per month</span></h4>
                        <ul>
                            <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                            <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                            <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                            <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                            <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                        </ul>
                        <a href="#" class="get-started-btn">Get Started</a>
                    </div>

                </div>

            </div>
        </section><!-- End Pricing Section --> --}}

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">

                    <h2>Visi Dan Misi Komisi Informasi</h2>
                </div>

                <div class="accordion-list">
                    <ul>
                        <li data-aos="fade-up">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                data-bs-target="#accordion-list-1">Visi Komisi Informasi<i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                <p>
                                    Terwujudnya Masyarakat Informasi yang Maju, Partisipatif, dan Berkepribadian Bangsa
                                    melalui Komisi Informasi yang Mandiri dan Berkeadilan menuju Indonesia Cerdas dan
                                    Sejahtera</p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#accordion-list-2" class="collapsed">Misi Komisi Informasi<i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                    1. Meningkatkan kesadaran kritis masyarakat agar mampu mengakses dan menggunakan
                                    informasi secara bertanggungjawab dan aktif berpartisipasi dalam proses pembuatan
                                    serta pelaksanaan kebijakan publik dengan mengoptimalkan pemanfaatan teknologi
                                    informasi. </p>
                                <p>
                                    2. Menguatkan kelembagaan Komisi Infomasi melalui konsolidasi, publikasi dan
                                    pendalaman wawasan, kompetensi serta distribusi tanggungjawab sesuai prinsip
                                    kesetaraan dan keadilan. </p>
                                <p>
                                    3. Mengoptimalkan kualitas kebijakan dan penyelesaian sengketa informasi publik
                                    dengan mengedepankan prinsip cepat, tepat waktu, biaya ringan dan sederhana. </p>
                                <p>
                                    4. Membangun kemitraan dengan stakeholders demi mengakselerasi masyarakat informasi
                                    menuju Indonesia cerdas dan sejahtera. </p>
                                <p>
                                    5. Meningkatkan kapasitas dan peran badan publik agar lebih proaktif dalam
                                    memberikan pelayanan informasi publik. </p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->
        {{-- <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6 info">
                                <i class="bx bx-map"></i>
                                <h4>Address</h4>
                                <p>A108 Adam Street,<br>New York, NY 535022</p>
                            </div>
                            <div class="col-lg-6 info">
                                <i class="bx bx-phone"></i>
                                <h4>Call Us</h4>
                                <p>+1 5589 55488 55<br>+1 5589 22548 64</p>
                            </div>
                            <div class="col-lg-6 info">
                                <i class="bx bx-envelope"></i>
                                <h4>Email Us</h4>
                                <p>contact@example.com<br>info@example.com</p>
                            </div>
                            <div class="col-lg-6 info">
                                <i class="bx bx-time-five"></i>
                                <h4>Working Hours</h4>
                                <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        {{-- <h3>Appland</h3> --}}
        {{-- <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p> --}}
        {{-- </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        {{-- <h4>Useful Links</h4> --}}
        {{-- <ul> --}}
        {{-- <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> --}}
        {{-- </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        {{-- <h4>Our Services</h4> --}}
        {{-- <ul>
                            {{-- <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li> --}}
        {{-- </ul>
                    </div> --}}

        {{-- <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div> --}}

        {{-- </div>
            </div>
        </div> --}}

        {{-- <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Appland</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div> --}}
        {{-- </footer><!-- End Footer --> --}}

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('') }}landingpage/assets/vendor/aos/aos.js"></script>
        <script src="{{ asset('') }}landingpage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('') }}landingpage/assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="{{ asset('') }}landingpage/assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="{{ asset('') }}landingpage/assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('') }}landingpage/assets/js/main.js"></script>

</body>

</html>
