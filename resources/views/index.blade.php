@extends('layout.app')

@section('page_content')
    <section class="banner banner-style-1">
        <div class="container">
            <div class="row align-items-end align-items-xl-start">
                <div class="col-lg-6">
                    <div class="banner-content" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                        <h1 class="title">Quality Video and Graphic Design</h1>
                        <span class="subtitle">Create live segments and target the right people for messages based on their
                            behaviors.</span>
                        <a href="/post-project" class="axil-btn btn-fill-primary btn-large">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-thumbnail">
                        <div class="large-thumb" data-sal="zoom-in" data-sal-duration="800" data-sal-delay="300">
                            <img src="assets/media/banner/window.png" alt="Laptop">
                        </div>
                        <div class="large-thumb-2" data-sal="slide-left" data-sal-duration="800" data-sal-delay="800">
                            <img src="assets/media/banner/laptop-poses.png" alt="Laptop">
                        </div>
                        <ul class="list-unstyled shape-group">
                            <li class="shape shape-1" data-sal="slide-left" data-sal-duration="500" data-sal-delay="800">
                                <img src="assets/media/banner/chat-group.png" alt="chat">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <ul class="list-unstyled shape-group-21">
            <li class="shape shape-1" data-sal="slide-down" data-sal-duration="500" data-sal-delay="100">
                <img src="assets/media/others/bubble-39.png" alt="Bubble">
            </li>
            <li class="shape shape-2" data-sal="zoom-in" data-sal-duration="800" data-sal-delay="500">
                <img src="assets/media/others/bubble-38.png" alt="Bubble">
            </li>
            <li class="shape shape-3" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                <img src="assets/media/others/bubble-14.png" alt="Bubble">
            </li>
            <li class="shape shape-4" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                <img src="assets/media/others/bubble-14.png" alt="Bubble">
            </li>
            <li class="shape shape-5" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                <img src="assets/media/others/bubble-14.png" alt="Bubble">
            </li>
            <li class="shape shape-6" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                <img src="assets/media/others/bubble-40.png" alt="Bubble">
            </li>
            <li class="shape shape-7" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                <img src="assets/media/others/bubble-41.png" alt="Bubble">
            </li>
        </ul>
    </section>




    <!--=====================================-->
    <!--=        Service Area Start         =-->
    <!--=====================================-->
    <section class="section section-padding-2 bg-color-dark">
        <div class="container">
            <div class="section-heading heading-light-left">
                <span class="subtitle">What We Can Do For You</span>
                <h2 class="title">Services we can help you with</h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                    <div class="services-grid active">
                        <div class="thumbnail">
                            <img src="assets/media/icon/icon-1.png" alt="icon">
                        </div>
                        <div class="content">
                            <h5 class="title"> <a href="#">Design</a></h5>
                            <p>
                                Unleash Your Brand's Potential with Creative Brilliance! with out graphic design pakcages
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                    <div class="services-grid">
                        <div class="thumbnail">
                            <img src="assets/media/icon/icon-5.png" alt="icon">
                        </div>
                        <div class="content">
                            <h5 class="title"> <a href="#">Technology</a></h5>
                            <p>
                                Merge Creativity with Cutting-Edge Technology. Elevate Your Brand to New Digital Heights!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="services-grid">
                        <div class="thumbnail">
                            <img src="assets/media/icon/icon-6.png" alt="icon">
                        </div>
                        <div class="content">
                            <h5 class="title"> <a href="#">Content strategy</a></h5>
                            <p>
                                Transform Your Footage into Masterpieces. Let Our Expert Video Editors Bring Your Vision to
                                Life!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="list-unstyled shape-group-10">
            <li class="shape shape-1"><img src="assets/media/others/line-9.png" alt="Circle"></li>
            <li class="shape shape-2"><img src="assets/media/others/bubble-42.png" alt="Circle"></li>
            <li class="shape shape-3"><img src="assets/media/others/bubble-43.png" alt="Circle"></li>
        </ul>
    </section>


    <section class="section section-padding-equal pt--200 pt_md--80 pt_sm--60">
        <div class="container">
            <div class="section-heading heading-left">
                <span class="subtitle">Our Project</span>
                <h2 class="title">Some of our finest <br> work.</h2>
            </div>


            @php
                $cats = [];
                $portfolios = App\Models\Portfolio::limit(4)->inrandomorder()->get();
                foreach ($portfolios as $ca) {
                    $cats[] = $ca->category;
                }

                $cats = array_unique($cats);
            @endphp
            <div class="axil-isotope-wrapper">
                <div class="isotope-button isotope-project-btn">
                    <button data-filter="*" class="is-checked"><span class="filter-text">All Works</span></button>
                    @foreach ($cats as $cat)
                        <button data-filter=".{{ str_replace(' ', '-' ,$cat) }}"><span
                                class="filter-text">{{ $cat }}</span></button>
                    @endforeach
                </div>
                <div class="row row-35 isotope-list" style="position: relative; height: 1957.17px;">

                    @foreach ($portfolios as $port)
                        <div class="col-md-6 project {{ str_replace(' ', '-' ,$port->category) }}"
                            style="position: absolute; left: 0%; top: 0px;">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="/portfolio?portfolio={{ $port->id }}">
                                        <img src="{{ asset($port->image) }}" alt="project" class="rounded"
                                            style="width: 700px; height: 400px; object-fit: cover;" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="/portfolio?portfolio={{ $port->id }}">
                                            {{ $port->title }} </a></h4>
                                    <span class="subtitle"> {{ $port->tags }} </span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="more-project-btn">
                    <a href="/portfolio" class="axil-btn btn-fill-primary">Discover More Projects</a>
                </div>
            </div>
        </div>
        <ul class="shape-group-7 list-unstyled">
            <li class="shape shape-1"><img src="assets/media/others/circle-2.png" alt="circle"></li>
            <li class="shape shape-2"><img src="assets/media/others/bubble-2.png" alt="Line"></li>
            <li class="shape shape-3"><img src="assets/media/others/bubble-1.png" alt="Line"></li>
        </ul>
    </section>


    <section class="section section-padding-equal bg-color-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-sal="slide-up" data-sal-duration="800">
                    <div class="about-us">
                        <div class="section-heading heading-left mb-0">
                            <span class="subtitle">About Us</span>
                            <h2 class="title mb--40">where design transforms businesses and elevates brands</h2>
                            <p>
                                As a leading graphics design company, we specialize in crafting visually stunning and
                                strategically impactful solutions tailored to your needs. we're here to bring your vision to
                                life and help you stand out in today's competitive marketplace
                            </p>
                            <p>Let's embark on a creative journey together and unlock the full potential of your brand</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1" data-sal="slide-up" data-sal-duration="800"
                    data-sal-delay="100">
                    <div class="contact-form-box">
                        <h3 class="title">Tell us what you need</h3>
                        <form method="get" action="/contact">@csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" placeholder="John Smith">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email"
                                    placeholder="example@mail.com">
                            </div>
                            <div class="form-group mb--40">
                                <label>Phone</label>
                                <input type="tel" class="form-control" name="phone"
                                    placeholder="+123456789">
                            </div>
                            <div class="form-group">
                                <button  class="axil-btn btn-fill-primary btn-fluid btn-primary"
                                    name="submit-btn">Get Free Quote</button>
                            </div>
                            <input type="hidden" class="form-control" name="contact-message" value="Null">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group-6 list-unstyled">
            <li class="shape shape-1"><img src="assets/media/others/bubble-7.png" alt="Bubble"></li>
            <li class="shape shape-2"><img src="assets/media/others/line-4.png" alt="line"></li>
            <li class="shape shape-3"><img src="assets/media/others/line-5.png" alt="line"></li>
        </ul>
    </section>


    <!--=====================================-->
    <!--=        Testimonial Area Start      =-->
    <!--=====================================-->
    <section class="section section-padding">
        <div class="container">
            <div class="section-heading heading-left">
                <span class="subtitle">Testimonial</span>
                <h2 class="title">From getting started</h2>
                <p>
                    we pride ourselves on delivering exceptional creative solutions tailored to our clients' unique needs.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                    <div class="testimonial-grid active">
                        <p>
                            Hire Izzypro! He designed my book cover and did an amazing job. I am very meticulous and a
                            perfectionist. We had some back and forth and I made changes as we worked together through this project.
                            He's very responsive and moves pretty fast that he may miss minor details. He's patient and takes pride
                            in his work, striving for excellent customer satisfaction. I will hire him again and again. Thank you
                            Izzypro!!
                        </p>
                        <div class="author-info">
                            <div class="content">
                                <span class="name">
                                    Tracy Lance</span>
                                <span class="designation"> From USA</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="200">
                    <div class="testimonial-grid">
                        <p>
                            In Izzy, I discoVered more than just a logo designer, I found an artist with an unparalleled gift for storytelling through design. From the outset, approached my project with genuine enthusiasm and dedication, translating my vision into a logo that surpassed all expectations.
                            Throughout the process, Izzy exhibited a rare blend of creativity, professionalism, and integrity.
                            He attentively listened to my needs, communicated transparently, and iterated tirelessly until every aspect of the logo reflected the essence of my brand.
                            
                        </p>
                        <div class="author-info">
                            <div class="content">
                                <span class="name"> Rebecca Charles </span>
                                <span class="designation">Barbados</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300">
                    <div class="testimonial-grid">
                        <p>
                            Izzypro did a great job for me. He was very responsive, patient and helpful. I highly recommend using him and I will as well the next time. Thanks again Izzypro.

                        </p>
                        <div class="author-info">
                            <div class="content">
                                <span class="name">Karen Johnson</span>
                                <span class="designation">United States</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group-4 list-unstyled">
            <li class="shape-1"><img src="assets/media/others/bubble-1.png" alt="Bubble"></li>
        </ul>
    </section>

    <section class="section section-padding bg-color-dark">
        <div class="container">
            <div class="section-heading heading-light-left">
                <span class="subtitle">Top Clients</span>
                <h2 class="title">We’ve built solutions for...</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500">
                    <div class="brand-grid active">
                        <img src="assets/media/brand/brand-1.png" alt="Brand">
                    </div>
                </div>
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100">
                    <div class="brand-grid">
                        <img src="assets/media/brand/brand-2.png" alt="Brand">
                    </div>
                </div>
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="200">
                    <div class="brand-grid">
                        <img src="assets/media/brand/brand-3.png" alt="Brand">
                    </div>
                </div>
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                    <div class="brand-grid">
                        <img src="assets/media/brand/brand-4.png" alt="Brand">
                    </div>
                </div>

            </div>
        </div>
        <ul class="list-unstyled shape-group-10">
            <li class="shape shape-1"><img src="assets/media/others/line-9.png" alt="Circle"></li>
        </ul>
    </section>

    <section class="section call-to-action-area">
        <div class="container">
            <div class="call-to-action">
                <div class="section-heading heading-light">
                    <span class="subtitle">Let's Work Together</span>
                    <h2 class="title">Empowering Brands to Shine Brighter</h2>
                    <a href="/post-project" class="axil-btn btn-large btn-fill-white">Post a project</a>
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
