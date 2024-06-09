<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ env('APP_NAME') }} | Creative Agency</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/media/favicon.png">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendor/sal.css">
    <link rel="stylesheet" href="assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/vendor/green-audio-player.min.css">
    <link rel="stylesheet" href="assets/css/vendor/odometer-theme-default.css">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="assets/css/app.css">

    <style>
        [type=checkbox]:checked {
            outline: 2px solid #f00;
            background-color: #fc0
        }
    </style>
</head>

<body>

    @include('layout.header')



    <div id="main-wrapper" class="main-wrapper">

        <section class="error-page onepage-screen-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="content sal-animate" data-sal="slide-up" data-sal-duration="800"
                            data-sal-delay="400">
                            <h2 class="title">Access Account</h2>
                            <p>Enter your login information to access you {{ env('APP_NAME') }} account </p>

                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="contact-form-box mt-3">
                            <h5 style="font-size: 17px !important">
                            </h5>
                            <form action="/access-account" method="POST">
                                @csrf
                                <div class="row">

                                    <div class="col-md-12">
                                        @isset($_GET['error'])
                                            <div class="alert alert-danger">
                                                {{ $_GET['error'] }}
                                            </div>
                                        @endisset
                                        @session('error')
                                            <div class="alert alert-danger">
                                                {{ session('error') }}
                                            </div>
                                        @endsession

                                        @session('success')
                                            <div class="alert alert-danger">
                                                {{ session('success') }}
                                            </div>
                                        @endsession

                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="fw-bold text-left mb-0">Email Address</label><br>
                                            <input type="email" class="form-control" name="email"
                                                placeholder="i.e gideon@gmail.com">
                                            @error('email')
                                                <i class="text-danger small">{{ $message }} </i>
                                            @enderror
                                        </div>

                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="fw-bold text-left mb-0">Password</label><br>
                                            <input type="password" name="password" class="form-control"
                                                placeholder="******** " id="">

                                            @error('password')
                                                <i class="text-danger small">{{ $message }} </i>
                                            @enderror

                                            <div class="d-flex justify-content-end">
                                                <a href="javascript:;">Forgot Password?</a>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="col-md-12">


                                        <button class="axil-btn btn-fill-primary btn-block   " type="submit"
                                            style="width: 100%"> Access your account <i
                                                class="ms-1 fa fa-arrow-right"></i></button>
                                    </div>



                                </div>


                            </form>

                        </div>

                    </div>
                </div>
            </div>
            <ul class="shape-group-8 list-unstyled">
                <li class="shape shape-1 sal-animate" data-sal="slide-right" data-sal-duration="500"
                    data-sal-delay="100">
                    <img src="assets/media/others/bubble-9.png" alt="Bubble">
                </li>
                <li class="shape shape-2 sal-animate" data-sal="slide-left" data-sal-duration="500"
                    data-sal-delay="200">
                    <img src="assets/media/others/bubble-27.png" alt="Bubble">
                </li>
                <li class="shape shape-3 sal-animate" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                    <img src="assets/media/others/line-4.png" alt="Line">
                </li>
            </ul>
        </section>

    </div>




    
    <!-- Jquery Js -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/isotope.pkgd.min.js"></script>
    <script src="assets/js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/vendor/odometer.min.js"></script>
    <script src="assets/js/vendor/jquery-appear.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/sal.js"></script>
    <script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/vendor/js.cookie.js"></script>
    <script src="assets/js/vendor/jquery.style.switcher.js"></script>
    <script src="assets/js/vendor/jquery.countdown.min.js"></script>
    <script src="assets/js/vendor/tilt.js"></script>
    <script src="assets/js/vendor/green-audio-player.min.js"></script>
    <script src="assets/js/vendor/jquery.nav.js"></script>

</body>



</html>
