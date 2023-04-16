<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layout.head')
</head>

<body>

  <!-- ======= Header ======= -->
  @include('frontend.layout.header')
  <!-- End Header -->

  @yield('content')

  <!-- ======= Footer ======= -->
  @include('frontend.layout.footer')
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  @include('frontend.layout.js')
</body>

</html>
