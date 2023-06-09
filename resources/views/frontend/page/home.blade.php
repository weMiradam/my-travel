@extends('frontend.layout.body')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center" style="background-image: url('assets/img/home.jpg')">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h1>Can I, <b><i>Walk</i></b> With You ?</h1>
            <h2>Saatnya ngajak kamu main sambil menyebar seluk-beluk dari segala sisi di Bandung.</h2>
            <a href="" class="btn-get-started">Get Started</a>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-12 content">
                        <h3>LET'S WALK TOGETHER!</h3>
                        <p class="fst-italic">
                            Kamu bebas pilih mau jalan, sepedahan, atau mendaki. Kita main menelusuri seluk beluk Bandung, berinteraksi dengan orang lokal sekitar, yang tentunya menambah kesanmu tentang Bandung.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts section-bg">
            <div class="container">

                <div class="row counters">

                    <div class="col-lg-4 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="23" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Route</p>
                    </div>

                    <div class="col-lg-4 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="147" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Events</p>
                    </div>

                    <div class="col-lg-4 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Storyteller</p>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Why Choose Storeies</h3> 
                            <p>
                            Mengikuti guided tour, meskipun berjalan kaki, kamu tidak perlu risau akan merencanakan rute destinasimu, dan juga menghilangkan resiko tersesat. Pada akhirnya, berpergian secara berkelompok berarti memberi keamanan serta kenyamanan dalam berwisata.
                            </p>
                            <div class="text-center">
                                <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-receipt"></i>
                                        <h4>Menemui Kultur Tersembunyi </h4>
                                        <p>Tiap kota memiliki banyak campuran budaya yang tidak akan bisa kita lihat hanya dengan duduk diam di rumah saja</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-cube-alt"></i>
                                        <h4>Menyajikan Sejarah yang Kaya</h4>
                                        <p>Walking tour tak hanya merupakan cara terbaik untuk membenamkan diri dalam suasana kota. Namun juga tiap history nya</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-images"></i>
                                        <h4>Waktu tepat mengabadikan foto</h4>
                                        <p>Dengan background foto Instagrammable, pasti mengundang banyak sanjungan teman-teman online</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Features Section ======= -->
        <!-- <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-lg-3 col-md-4">
                        <div class="icon-box">
                            <i class="ri-store-line" style="color: #ffbb2c;"></i>
                            <h3><a href="">Lorem Ipsum</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                            <h3><a href="">Dolor Sitema</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                            <h3><a href="">Sed perspiciatis</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                            <h3><a href="">Magni Dolores</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-database-2-line" style="color: #47aeff;"></i>
                            <h3><a href="">Nemo Enim</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
                            <h3><a href="">Eiusmod Tempor</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                            <h3><a href="">Midela Teren</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
                            <h3><a href="">Pira Neve</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-anchor-line" style="color: #b2904f;"></i>
                            <h3><a href="">Dirada Pack</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-disc-line" style="color: #b20969;"></i>
                            <h3><a href="">Moton Ideal</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-base-station-line" style="color: #ff5828;"></i>
                            <h3><a href="">Verdo Park</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
                            <h3><a href="">Flavor Nivelanda</a></h3>
                        </div>
                    </div>
                </div>

            </div>
        </section> -->
        
        <!-- End Features Section -->

        <!-- ======= Popular Courses Section ======= -->
        <section id="popular-courses" class="courses">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>TOUR</h2>
                    <p>Popular Tour</p>
                </div>

                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    @foreach($travel as $row)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="course-item">
                            <div class="img-guide">
                                <img src="{{asset($row->photo)}}" class="img-fluid" alt="...">
                            </div>
                            <div class="course-content">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 style="visibility: hidden">{{$row->name}}</h4>
                                    <p class="price">Rp. {{number_format($row->price)}}</p>
                                </div>

                                <h3><a href="course-details.html">{{$row->name}}</a></h3>
                                <p> {{Str::limit(strip_tags($row->description),100)}}</p>
                                <div class="trainer d-flex justify-content-between align-items-center">
                                    <a href="{{url('travel/'.$row->slug)}}" class="btn btn-outline-success btn-block">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-lg-12 text-end mt-4">
                        <a href="{{url('travel')}}" class="more-btn">Load More <i class="bx bx-chevron-right"></i></a>
                    </div>
                </div>

            </div>
        </section><!-- End Popular Courses Section -->

        <!-- ======= Trainers Section ======= -->
        <section id="trainers" class="trainers">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Storyteller</h2>
                    <p>Popular Storyteller</p>
                </div>
                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    @foreach($trainer as $row)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="member">
                                <img src="{{asset($row->photo)}}" class="img-fluid" alt="">
                                <div class="member-content">
                                    <h4>{{$row->name}}</h4>
                                    <span>{{$row->info_name}}</span>
                                    <p>
                                        {{Str::limit(strip_tags($row->description),100)}}
                                    </p>
                                    <div class="social">
                                        <a href="{{$row->twitter}}"><i class="bi bi-twitter"></i></a>
                                        <a href="{{$row->facebook}}"><i class="bi bi-facebook"></i></a>
                                        <a href="{{$row->instagram}}"><i class="bi bi-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Trainers Section -->

    </main><!-- End #main -->
@endsection
