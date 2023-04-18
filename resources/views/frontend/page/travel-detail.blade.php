@extends('frontend.layout.body')
@section('content')
    @if(session()->has('msg_type') == 'success')
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Transaksi berhasil</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{session()->get('msg')}}
                    </div>
                </div>
            </div>
        </div>
        @push('bottom')
            <script type="text/javascript">
                window.onload = () => {
                    $('#staticBackdrop').modal('show');
                }
            </script>
        @endpush
    @endif
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>Travel Details</h2>
                <p>Mari mengenal lebih dekat tour seru kita!</p>
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

                        <div class="course-info d-flex justify-content-between align-items-center">
                            <button class="btn btn-outline-success btn-block" data-backdrop="static" data-keyboard="false" data-bs-toggle="modal" data-bs-target="#modalBook">Book Now</button>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Cource Details Section -->
    </main>

    <div class="modal fade" id="modalBook" tabindex="-1" aria-labelledby="modalBookLabel" aria-hidden="true" data-bs-keyboard="false" data-bs-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalBookLabel"><b>Create Order</b></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{url('create-order')}}" method="POST">
                    <div class="modal-body">
                        <p><small>Masukan data diri anda dengan benar agar dapat kita hubungi.</small></p>
                        <input type="hidden" name="travel_id" value="{{$travel->id}}">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <div class="form-floating">
                                    <input type="text" name="name" class="form-control" id="floatingName" placeholder="Your Name" required="">
                                    <label for="floatingName">Name</label>
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" id="floatingEmail" placeholder="Your Email" required="">
                                    <label for="floatingEmail">Email address</label>
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="form-floating">
                                    <input type="number" class="form-control" name="no_phone" id="floatingNumber" placeholder="Your Phone Number (WhatsApp)" required="">
                                    <label for="floatingNumber">Your Phone Number (WhatsApp)</label>
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="form-floating">
                                    <input type="number" class="form-control" value="1" min="1" name="ticket_qty" id="floatingQty" placeholder="Quantity Order" required="">
                                    <label for="floatingQty">Quantity Order</label>
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="form-floating">
                                    <input type="text" name="date_booking" class="form-control datepicker" id="floatingDate" placeholder="Date Order" required="">
                                    <label for="floatingDate">Date Order</label>
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="form-floating">
                                    <select name="session" class="form-control" id="floatingSelect" aria-label="Floating Sesi" required>
                                        <option value="">Pilih Sesi</option>
                                        <option value="08.00 - 10.00">08.00 - 10.00</option>
                                        <option value="10.00 - 12.00">10.00 - 12.00</option>
                                        <option value="13.00 - 15.00">13.00 - 15.00</option>
                                        <option value="15.00 - 17.00">15.00 - 17.00</option>
                                    </select>
                                    <label for="floatingSelect">Works with selects</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm">Save Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @push('bottom')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
            $(".datepicker").flatpickr({
                altInput: true,
                altFormat: "F j, Y",
                dateFormat: "Y-m-d",
                minDate: new Date().fp_incr(2)
            });
        </script>
    @endpush
@endsection
