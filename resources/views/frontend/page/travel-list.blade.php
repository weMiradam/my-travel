@extends('frontend.layout.body')
@section('content')
    <main id="main" data-aos="fade-in">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="container">
                <h2>Courses</h2>
                <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Courses Section ======= -->
        <section id="courses" class="courses">
            <div class="container" data-aos="fade-up">

                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    @foreach($travel as $row)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mb-4 mt-md-0">
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
                    </div> <!-- End Course Item-->
                    @endforeach
                </div>

            </div>
        </section><!-- End Courses Section -->

    </main>
@endsection
