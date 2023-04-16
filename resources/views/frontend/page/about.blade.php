@extends('frontend.layout.body')
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->

        <!-- End Breadcrumbs -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about mt-5">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="assets/img/pasundan2.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3 class="text-title">SAMPURASUN</h3>
                        <p class="text-intern">
                            Storeies merupakan tempat berbagi cerita. <br />Kami menyediakan beragam pilihan tour diantaranya:<br />
                            walking tour,cycling tour,hiking tour, virtual tour
                        </p>
                        <!-- <ul>
                          <li><i class="bi bi-check-circle"></i></li>
                          <li><i class="bi bi-check-circle"></i></li>
                          <li><i class="bi bi-check-circle"></i></li>
                          <li><i class="bi bi-check-circle"></i></li>
                        </ul> -->
                        <p>Storeies, cerita dari seluk beluk Kota Bandung.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Testimoni</h2>
                    <p>Cerita Mereka</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/farah-01.jpg" class="testimonial-img" alt="" />
                                    <h3>Merlina Farah</h3>
                                    <h4>Mahasiswi &amp; Content Creator</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Acara yg menarik dan inspiratif! Jadi lebih kenal Bandung, ternyata masih banyak sekali tempat keren yang belum pernah dikunjungi, Bakal sering ikutan walking tour lagi!
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/baskoro-01.jpg" class="testimonial-img" alt="" />
                                    <h3>Farhan Baskoro</h3>
                                    <h4>Entrepreneur</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Seru banget, soalnya bisa ketemu dan kenal sama banyak orang baru. Tempat yang diunjungi juga epic bat dah!!
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/mila-01.jpg" class="testimonial-img" alt="" />
                                    <h3>Jena Mila</h3>
                                    <h4>Mahasiswi</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Banyak pilihan tour yang asik-asik banget, jadi bisa nemuin banyak hidden gem, pay as you wish juga terbaik si, bisa buat sarana liburan sesuai kantong
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/adrian-01.jpg" class="testimonial-img" alt="" />
                                    <h3>Adrian</h3>
                                    <h4>Freelancer</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Bisa masuk list kegiatan ngisi waktu luang banget ikut tour ini. Good!!
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/rehan-01.jpg" class="testimonial-img" alt="" />
                                    <h3>Rehan</h3>
                                    <h4>Mahasiswa</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Daripada liburan bingung mau kemana, mending yang jelas muter-muter kota sendiri. Bandung keren, Thanks Storeies
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- End Testimonials Section -->
    </main>
@endsection
