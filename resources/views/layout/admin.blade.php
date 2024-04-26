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





    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/theme.min.css') }}">
    <title> {{ env('APP_NAME') }} Admin | @yield('page_title') </title>
</head>

<body>
    <!-- Wrapper -->
    <div id="db-wrapper">
        <!-- navbar vertical -->
        <!-- Sidebar -->
        <nav class="navbar-vertical navbar">
            <div class="nav-scroller">
                <!-- Brand logo -->
                <a class="navbar-brand" href="../../index.html">
                    <img src="{{ asset('admin/images/brand/logo/logo-inverse.svg') }}" alt="" />
                </a>
                <!-- Navbar nav -->
                <ul class="navbar-nav flex-column" id="sideNavbar">
                    <li class="nav-item">
                        <a class="nav-link  " href="#!" data-bs-toggle="collapse" data-bs-target="#navDashboard"
                            aria-expanded="false" aria-controls="navDashboard">
                            <i class="nav-icon fe fe-home me-2"></i> Dashboard
                        </a>
                        <div id="navDashboard" class="collapse  show " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item ">
                                    <a class="nav-link  active " href="admin-dashboard.html">
                                        Overview
                                    </a>
                                </li>
                                <!-- Nav item -->
                                <li class="nav-item ">
                                    <a class="nav-link " href="dashboard-analytics.html">
                                        Analytics

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>
                <!-- Card -->
                <div class="card bg-dark-primary shadow-none text-center mx-4 my-8">
                    <div class="card-body py-6">
                        <img src="{{ asset('admin/images/background/giftbox.png') }}" alt="" />
                        <div class="mt-4">
                            <h5 class="text-white">Unlimited Access</h5>
                            <p class="text-white-50 fs-6">
                                Upgrade your plan from a Free trial, to select ‘Business Plan’. Start Now
                            </p>
                            <a href="#!" class="btn btn-white btn-sm mt-2">Upgrade Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Page Content -->
        <div id="page-content">
            <div class="header">
                <!-- navbar -->
                <nav class="navbar-default navbar navbar-expand-lg">
                    <a id="nav-toggle" href="#">
                        <i class="fe fe-menu"></i>
                    </a>
                    <div class="ms-lg-3 d-none d-md-none d-lg-block">
                        <!-- Form -->
                        <form class="d-flex align-items-center">
                            <span class="position-absolute ps-3 search-icon">
                                <i class="fe fe-search"></i>
                            </span>
                            <input type="search" class="form-control form-control-sm ps-6"
                                placeholder="Search Entire Dashboard" />
                        </form>
                    </div>
                    <!--Navbar nav -->
                    <ul class="navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap">
                        <li class="dropdown ms-2">
                            <a class="rounded-circle" href="#" role="button" id="dropdownUser"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                    <img alt="avatar" src="{{ asset('admin/images/avatar/avatar-1.jpg') }}"
                                        class="rounded-circle" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                                <div class="dropdown-item">
                                    <div class="d-flex">
                                        <div class="avatar avatar-md avatar-indicators avatar-online">
                                            <img alt="avatar" src="{{ asset('admin/images/avatar/avatar-1.jpg') }}"
                                                class="rounded-circle" />
                                        </div>
                                        <div class="ms-3 lh-1">
                                            <h5 class="mb-1">Annette Black</h5>
                                            <p class="mb-0 text-muted">annette@geeksui.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <ul class="list-unstyled">
                                    <li class="dropdown-submenu dropstart-lg">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                            href="#">
                                            <i class="fe fe-circle me-2"></i> Status
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge-dot bg-success me-2"></span> Online
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge-dot bg-secondary me-2"></span> Offline
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge-dot bg-warning me-2"></span> Away
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge-dot bg-danger me-2"></span> Busy
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../profile-edit.html">
                                            <i class="fe fe-user me-2"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../student-subscriptions.html">
                                            <i class="fe fe-star me-2"></i> Subscription
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="fe fe-settings me-2"></i> Settings
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown-divider"></div>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="dropdown-item" href="../../index.html">
                                            <i class="fe fe-power me-2"></i> Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Page Header -->
            <!-- Container fluid -->
            <div class="container-fluid p-4">
                @yield('page_content')
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
</body>

</html>
