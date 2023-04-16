@extends('frontend.layout.body')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>Travel Details</h2>
                <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Cource Details Section ======= -->
        <section id="course-details" class="course-details">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-8">
                        <img src="{{asset($travel->photo)}}" class="img-fluid" alt="">
                        <h3>{{$travel->name}}</h3>
                        <p>
                            {!! $travel->description !!}
                        </p>
                    </div>
                    <div class="col-lg-4">

                        <div class="course-info d-flex justify-content-between align-items-center">
                            <h5>Trainer</h5>
                            <p><a href="#">{{$travel->trainer_name}}</a></p>
                        </div>

                        <div class="course-info d-flex justify-content-between align-items-center">
                            <h5>Course Fee</h5>
                            <p>Rp. {{number_format($travel->price)}}</p>
                        </div>

                        <div class="course-info d-flex justify-content-between align-items-center">
                            <h5>Available Seats</h5>
                            <p>{{$travel->seat_available}}</p>
                        </div>

                        <div class="course-info d-flex justify-content-between align-items-center d-none">
                            <h5>Schedule</h5>
                            <p>5.00 pm - 7.00 pm</p>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Cource Details Section -->
    </main>
@endsection
