@extends('layout.app')

@section('page_content')
    <style>
        footer {
            display: none
        }



        .fs-5 {
            font-family: Macan, Helvetica Neue, Helvetica, Arial, sans-serif !important;
            font: 550 16px / 24px Macan, Helvetica Neue, Helvetica, Arial, sans-serif !important;
        }

        .brief_section h5 {
            font-size: 17px !important;
            font-weight: 600;
            margin-bottom: 7px;
        }

        .brief_section span {
            font-size: 17px !important;
            color: rgb(199, 190, 190);
            font-weight: 400;
        }

        .brief_section h4 {
            font-size: 27px !important;
        }
    </style>




    <section class="section section-padding-equal bg-color-light">

        <form method="POST" id="post_project" action="/post_project">
            @csrf
            <div class="container">
                <div class="row align-items-center" id="form_1">
                    <div class="col-lg-5 sal-animate" data-sal="slide-up" data-sal-duration="800">
                        <div class="about-us">
                            <div class="section-heading heading-left mb-0">
                                <span class="subtitle">Post a Project</span>
                                <h2 class="title mb--40">Let the matching begin...
                                </h2>
                                <p>
                                    This is where you fill us in on the big picture.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7 offset-xl-1 sal-animate" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100">
                        <div class="contact-form-box">
                            <div class="form-group">
                                <label class="fw-bold mb-0 fs-5">Give your project short a title</label><br>
                                <span class="text-muted mb-2 small">Keep it short and simple</span>
                                <input type="text" class="form-control" name="project_name"
                                    placeholder="Example: Create a logo for my company">
                            </div>


                            <div class="form-group">
                                <label class="fw-bold mb-0 fs-5">What are you looking to get done?</label><br>
                                <span class="text-muted mb-2 small">This will help get your brief to the fullest. Specifics
                                    help here.</span>
                                <textarea name="description" placeholder="I need ... " class="form-control" rows="5"></textarea>
                            </div>

                            {{-- 
                            <div class="form-group">
                                <button class="btn btn-light btn-large"> <i class="ms-1 fa fa-link"></i> Attach
                                    Files</button>

                                <div class="border-2 mt-3 p-2 shadow"
                                    style="border: 0.5px solid rgb(230, 227, 227) !important;border-radius: 7px ">
                                    <div class="alert alert-warning mb-0">
                                        Your attached files will be displayed here
                                    </div>
                                </div>

                            </div> --}}


                            <div class="form-group">
                                <label class="fw-bold mb-0 fs-5">Which category best fits your project?</label>
                                <input type="text" name="category" class="form-control">
                            </div>


                        </div>
                    </div>


                    <div class="fixed-bottom">
                        <div class=" p-3 d-flex justify-content-end ">
                            <button class="axil-btn btn-fill-primary continue  " type="button"> Continue <i
                                    class="ms-1 fa fa-arrow-right"></i></button>
                        </div>
                    </div>


                </div>



                <div class="row align-items-center" id="form_3" style="display:none">
                    <div class="col-lg-5 sal-animate" data-sal="slide-up" data-sal-duration="800">
                        <div class="about-us">
                            <div class="section-heading heading-left mb-0">
                                <h2 class="title mb--40">Now let's talk
                                    budget and timing
                                </h2>
                                <p>
                                    You're not committing to anything final here.
                                    This just helps us find you the most relevant
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7 offset-xl-1 sal-animate" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100">
                        <div class="contact-form-box">
                            <div class="form-group">
                                <label class="fw-bold mb-0 fs-5">I'm looking to spend...</label><br>
                                <input type="number" class="form-control" name="budget" placeholder="Up to">
                                <span class="text-muted small"> Average range for this service
                                    {{ money(2000) . ' - ' . money(40000) }} </span>
                            </div>
                            {{-- 
                            <div class="form-group">
                                <label for="budget_flex" class="d-flex justify-content-start">
                                    <input class="form-check- me-2" type="checkbox" id="budget_flex" value=""
                                        name="budget_flex" style="width: 20px; height: 20px;!important">
                                    <span class="fw-bold"> My budget is flexible</span>
                                </label>

                            </div> --}}

                            <div class="form-group">
                                <label class="fw-bold mb-0 fs-5">Let’s talk timing</label><br>
                                <input type="date" name="date" class="form-control" placeholder="Ideal delivery date "
                                    id="">
                                <span class="text-muted mb-2 small">To help us deliver within date</span>

                            </div>
                        </div>
                    </div>



                    <div class="fixed-bottom ">
                        <div class=" p-3 d-flex justify-content-between ">
                            <button class="axil-btn btn-fill-primary back " type="button"> <i class="fa fa-arrow-left"></i> Back</button>
                            <button class="axil-btn btn-fill-primary review_brief  " type="button"> Review Your Brief <i
                                    class="ms-1 fa fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>



                <div class="row align-items-center" id="form_2" style="display: none;">
                    <div class="col-lg-5 sal-animate" data-sal="slide-up" data-sal-duration="800">
                        <div class="about-us">
                            <div class="section-heading heading-left mb-0">
                                <h2 class="title mb--40">Ready to review
                                    your brief? </h2>
                                <p>
                                    We'll user your brief to make them best project you can imagine
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7 offset-xl-1 sal-animate" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100">
                        <div class="contact-form-box">

                            <div class="row brief_section">

                                <h4>Summary</h4>
                                <div class="col-md-12">
                                    <h5>Project Title</h5>
                                    <span class="project_title"></span>
                                </div>

                                <div class="col-md-6">
                                    <h5>Industry</h5>
                                    <span class="industry"></span>
                                </div>

                                <div class="col-md-6">
                                    <h5>Service</h5>
                                    <span class="service"></span>
                                </div>

                                <div class="col-md-12">
                                    <h5>Description</h5>
                                    <span class="description"></span>
                                </div>
                            </div>
                            <hr>

                            <div class="row brief_section">
                                <h4>Budget & timeline</h4>
                                <div class="col-md-6">
                                    <h5>Budget</h5>
                                    <span class="budget"></span>
                                </div>

                                <div class="col-md-6">
                                    <h5>Deliver by</h5>
                                    <span class="date"></span>
                                </div>
                            </div>

                        </div>


                        <div class="contact-form-box mt-3">
                            <h5  style="font-size: 17px !important" >Enter your contact information to complete this process</h5>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="fw-bold mb-0 fs-5">Email Address</label><br>
                                        <input type="email" class="form-control" name="email" placeholder="i.e gideon@gmail.com">
                                    </div>

                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="fw-bold mb-0 fs-5">Phone Number</label><br>
                                        <input type="tel" name="phone" class="form-control"
                                            placeholder="Enter your contact info " id="">

                                    </div>
                                </div>

                            </div>



                        </div>


                    </div>


                    <div class="fixed-bottom">
                        <div class=" p-3 d-flex justify-content-between ">
                            <button class="axil-btn btn-fill-primary back_from_review " type="button"> <i class="fa fa-arrow-left"></i>
                                Back</button>
                            <button class="axil-btn btn-fill-primary  submitandpay " type="button"> Submit and make payment <i
                                    class="ms-1 fa fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group-6 list-unstyled">
                <li class="shape shape-1"><img src="assets/media/others/bubble-7.png" alt="Bubble"></li>
                <li class="shape shape-2"><img src="assets/media/others/line-4.png" alt="line"></li>
                <li class="shape shape-3"><img src="assets/media/others/line-5.png" alt="line"></li>
            </ul>

        </form>
    </section>
@endsection


@push('scripts')
    <script>
        $(function() {
            // $('#form_1').slideToggle(2000);


            $('.continue').on('click', function() {
                $('#form_1').hide(1000);
                $('#form_3').show(1000);
            })



            $('.back').on('click', function() {
                $('#form_3').hide(1000);
                $('#form_1').show(1000);
            })


            $('.back_from_review').on('click', function() {
                $('#form_2').hide(1000);
                $('#form_3').show(1000);
            })



            $('.submitandpay').on('click', function () {
                form = $('#post_project');
                form.submit();
            })

            $('.review_brief').on('click', function() {

                $('#form_3').hide(1000);
                $('#form_2').show(1000);

                form = $('#post_project');

                title = $(form).find('input[name="project_name"]').val();
                $('.project_title').html(title);
                category = $(form).find('input[name="category"]').val();
                $('.industry').html(category);
                budget = $(form).find('input[name="budget"]').val();
                $('.budget').html(budget);
                date = $(form).find('input[name="date"]').val();
                $('.date').html(date);
                description = $(form).find('textarea[name="description"]').val();
                $('.description').html(description);
            })
        })
    </script>
@endpush
