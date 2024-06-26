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
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('assets/media/logo3.png') }}" class="img-fluid" alt="" />
                </a>
                <!-- Navbar nav -->
                <ul class="navbar-nav flex-column" id="sideNavbar">
                  {{-- <li class="nav-item ms-5" > <h5 class="fw-bold text-white">Main</h5> </li> --}}
                    <li class="nav-item">
                        <a class="nav-link " href="/admin/overview">
                            <i class="nav-icon fe fe-home me-2"></i> Account Overview
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link " href="/admin/manage_client">
                            <i class="nav-icon fe fe-users me-2"></i>Manage Client
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="/admin/client_orders">
                            <i class="nav-icon fe fe-shopping-bag me-2"></i>Client Orders
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link " href="/admin/portfolio">
                            <i class="nav-icon fe fe-shopping-bag me-2"></i>Portfolio
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link " href="/logout">
                            <i class="nav-icon fe fe-power me-2"></i>Exit Account
                        </a>
                    </li>

                </ul>
                <!-- Card -->
                <div class="card bg-dark-primary shadow-none text-center mx-4 my-8">
                    <div class="card-body py-6">
                        <img src="{{ asset('admin/images/background/giftbox.png') }}" alt="" />
                        <div class="mt-4">
                            <h5 class="text-white">Welcome Admin</h5>
                            <p class="text-white-50 fs-6">
                             Your central command center for managing projects, and users. Let's make creativity happen!
                            </p>
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

    <script type="text/javascript" src="{{ asset('assets/toast.js') }}"></script>
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


    @stack('scripts')
</body>

</html>
