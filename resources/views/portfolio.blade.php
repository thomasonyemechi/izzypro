@extends('layout.app')

@section('page_content')


<div class="breadcrum-area breadcrumb-banner">
    <div class="container">
        <div class="section-heading heading-left sal-animate" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
            <h1 class="title h2">Our projects</h1>
            <p>A quick view of industry specific problems solved with design by the awesome team at Abstrak.</p>
        </div>
        <div class="banner-thumbnail sal-animate" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
            <img class="paralax-image" src="assets/media/banner/banner-thumb-1.png" alt="Illustration" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg);">
        </div>
    </div>
    <ul class="shape-group-8 list-unstyled">
        <li class="shape shape-1 sal-animate" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
            <img src="assets/media/others/bubble-9.png" alt="Bubble">
        </li>
        <li class="shape shape-2 sal-animate" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
            <img src="assets/media/others/bubble-20.png" alt="Bubble">
        </li>
        <li class="shape shape-3 sal-animate" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
            <img src="assets/media/others/line-4.png" alt="Line">
        </li>
    </ul>
</div>





<section class="section section-padding-equal pt--200 pt_md--80 pt_sm--60">
    <div class="container">
        <div class="section-heading heading-left">
            <span class="subtitle">Our Project</span>
            <h2 class="title">Some of our finest <br> work.</h2>
        </div>
        <div class="axil-isotope-wrapper">
            <div class="isotope-button isotope-project-btn">
                <button data-filter="*" class="is-checked"><span class="filter-text">All Works</span></button>
                <button data-filter=".branding"><span class="filter-text">Branding</span></button>
                <button data-filter=".mobile"><span class="filter-text">Mobile</span></button>
            </div>
            <div class="row row-35 isotope-list" style="position: relative; height: 1957.17px;">
                <div class="col-md-6 project branding" style="position: absolute; left: 0%; top: 0px;">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="assets/media/project/project-1.png" alt="project">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">Creative Agency</a></h4>
                            <span class="subtitle">Full Branding, Website, App</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 project mobile" style="position: absolute; left: 50%; top: 0px;">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="assets/media/project/project-2.png" alt="project">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">Digital Marketing</a></h4>
                            <span class="subtitle">Logo, Website &amp; Mobile App</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 project branding" style="position: absolute; left: 0%; top: 652.391px;">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="assets/media/project/project-3.png" alt="project">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">Digital Agency</a></h4>
                            <span class="subtitle">Website, UI/UX</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 project mobile" style="position: absolute; left: 50%; top: 652.391px;">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="assets/media/project/project-4.png" alt="project">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">Plan Management</a></h4>
                            <span class="subtitle">Branding, Website, IOS App</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 project branding" style="position: absolute; left: 0%; top: 1304.78px;">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="assets/media/project/project-5.png" alt="project">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">Social Engagement</a></h4>
                            <span class="subtitle">Design, Development</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 project mobile" style="position: absolute; left: 50%; top: 1304.78px;">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="assets/media/project/project-6.png" alt="project">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">Technical SEO</a></h4>
                            <span class="subtitle">Logo, Webapp, App</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="more-project-btn">
                <a href="#" class="axil-btn btn-fill-primary">Discover More Projects</a>
            </div>
        </div>
    </div>
    <ul class="shape-group-7 list-unstyled">
        <li class="shape shape-1"><img src="assets/media/others/circle-2.png" alt="circle"></li>
        <li class="shape shape-2"><img src="assets/media/others/bubble-2.png" alt="Line"></li>
        <li class="shape shape-3"><img src="assets/media/others/bubble-1.png" alt="Line"></li>
    </ul>
</section>




<section class="section call-to-action-area">
    <div class="container">
        <div class="call-to-action">
            <div class="section-heading heading-light">
                <span class="subtitle">Let's Work Together</span>
                <h2 class="title">Empowering Brands to Shine Brighter</h2>
                <a href="/" class="axil-btn btn-large btn-fill-white">Post a project</a>
            </div>
            <div class="thumbnail">
                <div class="larg-thumb" data-sal="zoom-in" data-sal-duration="600" data-sal-delay="100">
                    <img class="paralax-image" src="assets/media/others/chat-group.png" alt="Chat">
                </div>
                <ul class="list-unstyled small-thumb">
                    <li class="shape shape-1" data-sal="slide-right" data-sal-duration="800" data-sal-delay="400">
                        <img class="paralax-image" src="assets/media/others/laptop-poses.png" alt="Laptop">
                    </li>
                    <li class="shape shape-2" data-sal="slide-left" data-sal-duration="800" data-sal-delay="300">
                        <img class="paralax-image" src="assets/media/others/bill-pay.png" alt="Bill">
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <ul class="list-unstyled shape-group-9">
        <li class="shape shape-1"><img src="assets/media/others/bubble-12.png" alt="Comments"></li>
        <li class="shape shape-2"><img src="assets/media/others/bubble-16.png" alt="Comments"></li>
        <li class="shape shape-3"><img src="assets/media/others/bubble-13.png" alt="Comments"></li>
        <li class="shape shape-4"><img src="assets/media/others/bubble-14.png" alt="Comments"></li>
        <li class="shape shape-5"><img src="assets/media/others/bubble-16.png" alt="Comments"></li>
        <li class="shape shape-6"><img src="assets/media/others/bubble-15.png" alt="Comments"></li>
        <li class="shape shape-7"><img src="assets/media/others/bubble-16.png" alt="Comments"></li>
    </ul>
</section>



@endsection
