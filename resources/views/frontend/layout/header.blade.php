<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto">
            <a href="">
                <img src="{{asset('assets/img/logo.png')}}" alt="" />
            </a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a {!! ($active == 'home'?'class="active"':'') !!} href="{{url('/')}}">Home</a></li>
                <li><a {!! ($active == 'about'?'class="active"':'') !!} href="{{url('about')}}">About</a></li>
                <li><a {!! ($active == 'travel'?'class="active"':'') !!} href="{{url('travel')}}">Tour List</a></li>
                <li><a {!! ($active == 'trainer'?'class="active"':'') !!} href="{{url('trainer')}}">Our Storyteller</a></li>
                <li><a {!! ($active == 'content'?'class="active"':'') !!} href="{{url('contact')}}">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="travel-list.html" class="get-started-btn">Get Started</a>

    </div>
</header>
