<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/images/favicon/favicon.ico') }}">

    <link href="{{ asset('admin/fonts/feather/feather.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/libs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/libs/dragula/dist/dragula.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/libs/%40mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/libs/prismjs/themes/prism.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/libs/dropzone/dist/dropzone.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/libs/magnific-popup/dist/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/libs/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/libs/%40yaireo/tagify/dist/tagify.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/libs/tiny-slider/dist/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/libs/tippy.js/dist/tippy.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/toast.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/theme.min.css') }}">
    <title> {{ env('APP_NAME') }} - @yield('page_title') </title>

    @php
        $user = auth()->user();
    @endphp
</head>

<body>
    <!-- Wrapper -->
    <nav class="navbar navbar-expand-lg navbar-default">
        <div class="container-fluid px-0">
            <a class="navbar-brand" href="/"><img src="{{ asset('assets/media/logo2.png') }}" alt=""></a>
            <!-- Mobile view nav wrap -->
            <ul class="navbar-nav navbar-right-wrap ms-auto d-lg-none d-flex nav-top-wrap">

                <li class="dropdown ms-2">
                    <a class="rounded-circle" href="#" role="button" data-bs-toggle="dropdown">
                        <div class="avatar avatar-md avatar-indicators avatar-online">
                            <img alt="avatar" src="{{ Avatar::create($user->name ?? $user->email)->toBase64() }}"
                                class="rounded-circle">
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end shadow">
                        <div class="dropdown-item">
                            <div class="d-flex">
                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                    <img alt="avatar"
                                        src="{{ Avatar::create($user->name ?? $user->email)->toBase64() }}"
                                        class="rounded-circle">
                                </div>
                                <div class="ms-3 lh-1">
                                    <h5 class="mb-1"> </h5>
                                    <p class="mb-0 text-muted"> {{ $user->email }} </p>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <ul class="list-unstyled">
                            <li>
                                <a class="dropdown-item" href="/client/profile">
                                    <i class="fe fe-user me-2"></i>Account
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="/client/security">
                                    <i class="fe fe-user me-2"></i>Change Password
                                </a>
                            </li>
                        </ul>
                        <div class="dropdown-divider"></div>
                        <ul class="list-unstyled">
                            <li>
                                <a class="dropdown-item" href="/logout">
                                    <i class="fe fe-power me-2"></i>Exit Account
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <!-- Button -->
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="icon-bar top-bar mt-0"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbar-default">
                <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link " href="/post-project">
                            Post a Project
                        </a>
                    </li>


                </ul>
                <ul class="navbar-nav navbar-right-wrap ms-auto d-none d-lg-block">

                    <li class="dropdown ms-2 d-inline-block">
                        <a class="rounded-circle" href="#" data-bs-toggle="dropdown" data-bs-display="static"
                            aria-expanded="false">
                            <div class="avatar avatar-md avatar-indicators avatar-online">
                                <img alt="avatar"
                                    src="{{ Avatar::create($user->name ?? $user->email)->toBase64() }}"
                                    class="rounded-circle">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="dropdown-item">
                                <div class="d-flex">
                                    <div class="avatar avatar-md avatar-indicators avatar-online">
                                        <img alt="avatar"
                                            src="{{ Avatar::create($user->name ?? $user->email)->toBase64() }}"
                                            class="rounded-circle">
                                    </div>
                                    <div class="ms-3 lh-1">
                                        <h5 class="mb-1"> {{ $user->name ?? $user->phone }} </h5>
                                        <p class="mb-0 text-muted"> {{ $user->email }} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="dropdown-item" href="/client/profile">
                                        <i class="fe fe-user me-2"></i>Account
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/client/security">
                                        <i class="fe fe-user me-2"></i>Change Password
                                    </a>
                                </li>
                            </ul>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="dropdown-item" href="/logout">
                                        <i class="fe fe-power me-2"></i>Exit Account
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>




    <div class="pt-5 pb-5">
        <div class="container">
            <!-- User info -->
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <!-- Bg -->
                    <div class="pt-16 rounded-top-md"
                        style="
								background: url({{ asset('admin/images/background/profile-bg.jpg') }}) no-repeat;
								background-size: cover;
							">
                    </div>
                    <div
                        class="d-flex align-items-end justify-content-between bg-white px-4 pt-2 pb-4 rounded-none rounded-bottom-md shadow-sm">
                        <div class="d-flex align-items-center">
                            <div class="me-2 position-relative d-flex justify-content-end align-items-end mt-n5">
                                <img src="{{ Avatar::create($user->name ?? $user->email)->toBase64() }}"
                                    class="avatar-xl rounded-circle border border-4 border-white position-relative"
                                    alt="">
                                <a href="#" class="position-absolute top-0 end-0" data-bs-toggle="tooltip"
                                    data-placement="top" title="" data-original-title="Verified"
                                    data-bs-original-title="">
                                    <img src="{{ asset('/admin/images/svg/checked-mark.svg') }}" alt=""
                                        height="30" width="30">
                                </a>
                            </div>
                            <div class="lh-1">
                                <h2 class="mb-0"> {{ $user->name ?? $user->phone }} </h2>
                                <p class="mb-0 d-block"> {{ $user->email }} </p>
                            </div>
                        </div>
                        <div>
                            <a href="/post-project" class="btn btn-primary btn-sm d-none d-md-block">Post Project</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content -->

            <div class="row mt-0 mt-md-4">
                <div class="col-lg-3 col-md-4 col-12">
                    <!-- User profile -->
                    <nav class="navbar navbar-expand-md navbar-light shadow-sm mb-4 mb-lg-0 sidenav">
                        <!-- Menu -->
                        <a class="d-xl-none d-lg-none d-md-none text-inherit fw-bold" href="#">Menu</a>
                        <!-- Button -->
                        <button class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary text-light"
                            type="button" data-bs-toggle="collapse" data-bs-target="#sidenav"
                            aria-controls="sidenav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fe fe-menu"></span>
                        </button>
                        <!-- Collapse -->
                        <div class="collapse navbar-collapse" id="sidenav">
                            <div class="navbar-nav flex-column">
                                <span class="navbar-header">Dashboard</span>
                                <ul class="list-unstyled ms-n2 mb-4">
                                    <!-- Nav item -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="/client/account"><i
                                                class="fe fe-home nav-icon"></i>My Dashboard </a>
                                    </li>
                                    {{-- 
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i
                                                class="fe fe-shopping-bag nav-icon"></i>My Projects </a>
                                    </li> --}}

                                </ul>
                                <!-- Navbar header -->
                                <span class="navbar-header">Account Settings</span>
                                <ul class="list-unstyled ms-n2 mb-0">
                                    <!-- Nav item -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="/client/profile"><i
                                                class="fe fe-user nav-icon"></i>Profile</a>
                                    </li>


                                    <li class="nav-item">
                                        <a class="nav-link" href="/client/security"><i
                                                class="fe fe-settings nav-icon"></i>Security</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="/logout"><i class="fe fe-power nav-icon"></i>Exit
                                            Account</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    @yield('page_content')
                </div>
            </div>
        </div>
    </div>
    <!-- Script -->
    <!-- Libs JS -->
    <script src="{{ asset('admin/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/libs/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('admin/libs/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('admin/libs/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('admin/libs/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('admin/libs/flatpickr/dist/flatpickr.min.js') }}"></script>
    <script src="{{ asset('admin/libs/inputmask/dist/jquery.inputmask.min.js') }}"></script>
    <script src="{{ asset('admin/libs/dragula/dist/dragula.min.js') }}"></script>
    <script src="{{ asset('admin/libs/jQuery.print/jQuery.print.js') }}"></script>

    {{-- <script src="../../../../cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script> --}}
    <script src="{{ asset('admin/js/theme.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/toast.js') }}"></script>
    @stack('scripts')
    @if (session('error'))
        <script>
            Toastify({
                text: "<?= session('error') ?>",
                duration: 5000,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "linear-gradient(to right, #b04300, #ff0000)",
                },
            }).showToast();
        </script>
    @endif

    @if (session('success'))
        <script>
            Toastify({
                text: "<?= session('success') ?>",
                duration: 5000,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "linear-gradient(to right, #00b09b, #01ff01)",
                },
            }).showToast();
        </script>
    @endif

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6633646d1ec1082f04ea25ca/1hssc0jt9';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>
