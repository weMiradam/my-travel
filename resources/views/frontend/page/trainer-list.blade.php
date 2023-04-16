@extends('frontend.layout.body')
@section('content')
    <main id="main" data-aos="fade-in">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="container">
                <h2>Trainers</h2>
                <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Trainers Section ======= -->
        <section id="trainers" class="trainers">
            <div class="container" data-aos="fade-up">

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

    </main>
@endsection
