@extends('layout.app')

@section('page_content')
    <div class="breadcrum-area breadcrumb-banner">
        <div class="container">
            <div class="section-heading heading-left sal-animate" data-sal="slide-right" data-sal-duration="1000"
                data-sal-delay="300">
                <h1 class="title h2">Best solutions for your business</h1>
                <p>Give your business a unique logo to stand out from crowd. We’ll create logo specifically for your
                    company.</p>
            </div>
            <div class="banner-thumbnail sal-animate" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
                <img class="paralax-image" src="assets/media/banner/banner-thumb-4.png" alt="Illustration"
                    style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg);">
            </div>
        </div>
        <ul class="shape-group-8 list-unstyled">
            <li class="shape shape-1 sal-animate" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                <img src="assets/media/others/bubble-9.png" alt="Bubble">
            </li>
            <li class="shape shape-2 sal-animate" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                <img src="assets/media/others/bubble-21.png" alt="Bubble">
            </li>
            <li class="shape shape-3 sal-animate" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                <img src="assets/media/others/line-4.png" alt="Line">
            </li>
        </ul>
    </div>



    <div class="service-scroll-navigation-area">
        <!-- Service Nav -->
        <nav id="onepagenav" class="service-scroll-nav navbar onepagefixed">
            <div class="container">
                <ul class="nav nav-pills">
                    <li class="nav-item current">
                        <a class="nav-link" href="#section1">Design</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section5">Technology</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section6">Motion Graphics</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Design Service -->
        <div class="section section-padding" id="section1">
            <div class="container">
                <div class="section-heading heading-left">
                    <span class="subtitle">Service</span>
                    <h2 class="title">Design</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="assets/media/icon/icon-29.png" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="#">Logo &amp; Branding</a></h5>
                                <p>We design professional looking yet simple Logo. Our designs are search engine and user friendly.</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="services-grid service-style-2 active">
                            <div class="thumbnail">
                                <img src="assets/media/icon/icon-27.png" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="#">Website Design</a></h5>
                                <p>We design professional looking yet simple websites. Our designs are search engine and user friendly.</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="assets/media/icon/icon-28.png" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="#">Mobile app design</a></h5>
                                <p>We design professional looking yet Mobile Apps. Our designs are search engine
                                    and user friendly. </p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="assets/media/icon/icon-4.png" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="#">Graphic/print design</a></h5>
                                <p>From simple Content Management System to complex eCommerce developer, we cover it all.</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="assets/media/icon/icon-30.png" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="#">Video production</a></h5>
                                <p>From simple Content Management System to complex eCommerce developer, we cover it all.</p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


{{-- 
        <div class="section section-padding" id="section5">
            <div class="container">
                <div class="section-heading heading-left">
                    <span class="subtitle">Service</span>
                    <h2 class="title">Technology</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="assets/media/icon/icon-43.png" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="#">Hosting</a></h5>
                                <p>We design professional looking yet simple Logo. Our designs are search engine and user friendly.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="assets/media/icon/icon-44.png" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="#">Big data analysis</a></h5>
                                <p>We design professional looking yet simple websites. Our designs are search engine and user friendly.</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}



        <!-- Content strategy Service -->
        <div class="section section-padding bg-color-light" id="section6">
            <div class="container">
                <div class="section-heading heading-left">
                    <span class="subtitle">Service</span>
                    <h2 class="title">Motion Graphics</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="assets/media/icon/icon-45.png" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="#">Motion Graphics</a></h5>
                                <p>From simple Content Management System to complex eCommerce</p>
                                
                            </div>
                        </div>
                    </div>
               
                </div>
            </div>
        </div>
    </div>


@endsection
