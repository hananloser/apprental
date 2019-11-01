<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title></title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Icons -->
    <link href="{{url('assets/vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
    <link href="{{url('/assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Argon CSS -->
    <link type="text/css" href="{{url('/assets/css/argon.css')}}" rel="stylesheet">
</head>

<body>
    <header class="header-global">
        <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom headroom--not-bottom headroom--pinned headroom--top">
            <div class="container">
                <a class="navbar-brand mr-lg-5" href="">
                    <img src="{{url('assets/img/brand/white.png')}}" alt="brand">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbar_global">
                    <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="https://www.facebook.com/creativetim" target="_blank" data-toggle="tooltip" title="" data-original-title="Like us on Facebook">
                                <i class="fa fa-facebook-square"></i>
                                <span class="nav-link-inner--text d-lg-none">Facebook</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial" target="_blank" data-toggle="tooltip" title="" data-original-title="Follow us on Instagram">
                                <i class="fa fa-instagram"></i>
                                <span class="nav-link-inner--text d-lg-none">Instagram</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="position-relative">
            <!-- shape Hero -->
            <section class="section section-lg section-shaped pb-250">
                <div class="shape shape-style-1 shape-default">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="container py-lg-md d-flex">
                    <div class="col px-0">
                        <div class="row">
                            <div class="col-lg-6">
                                <h1 class="display-3  text-white">A beautiful Design System<span>completed with examples</span></h1>
                                <p class="lead  text-white">The design system comes with four pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SVG separator -->
                <div class="separator separator-bottom separator-skew">
                    <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                    </svg>
                </div>
            </section>
            <!-- 1st Hero Variation -->
        </div>
        <section class="section section-lg pt-lg-0 mt--200">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="row row-grid">
                            <div class="col-lg-4">
                                <div class="card card-lift--hover shadow border-0">
                                    <div class="card-body py-5">
                                        <div class="icon icon-shape icon-shape-primary rounded-circle mb-4">
                                            <i class="ni ni-check-bold"></i>
                                        </div>
                                        <h6 class="text-primary text-uppercase">Download Argon</h6>
                                        <p class="description mt-3">Argon is a great free UI package based on Bootstrap 4 that includes the most important components and features.</p>
                                        <div>
                                            <span class="badge badge-pill badge-primary">design</span>
                                            <span class="badge badge-pill badge-primary">system</span>
                                            <span class="badge badge-pill badge-primary">creative</span>
                                        </div>
                                        <a href="#" class="btn btn-primary mt-4">Learn more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-lift--hover shadow border-0">
                                    <div class="card-body py-5">
                                        <div class="icon icon-shape icon-shape-success rounded-circle mb-4">
                                            <i class="ni ni-istanbul"></i>
                                        </div>
                                        <h6 class="text-success text-uppercase">Build Something</h6>
                                        <p class="description mt-3">Argon is a great free UI package based on Bootstrap 4 that includes the most important components and features.</p>
                                        <div>
                                            <span class="badge badge-pill badge-success">business</span>
                                            <span class="badge badge-pill badge-success">vision</span>
                                            <span class="badge badge-pill badge-success">success</span>
                                        </div>
                                        <a href="#" class="btn btn-success mt-4">Learn more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-lift--hover shadow border-0">
                                    <div class="card-body py-5">
                                        <div class="icon icon-shape icon-shape-warning rounded-circle mb-4">
                                            <i class="ni ni-planet"></i>
                                        </div>
                                        <h6 class="text-warning text-uppercase">Prepare Launch</h6>
                                        <p class="description mt-3">Argon is a great free UI package based on Bootstrap 4 that includes the most important components and features.</p>
                                        <div>
                                            <span class="badge badge-pill badge-warning">marketing</span>
                                            <span class="badge badge-pill badge-warning">product</span>
                                            <span class="badge badge-pill badge-warning">launch</span>
                                        </div>
                                        <a href="#" class="btn btn-warning mt-4">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="container">
        @yield('content')
    </div>

    <!-- Core -->
    <script src="{{url('/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('/assets/vendor/popper/popper.min.js')}}"></script>
    <script src="{{url('/assets/vendor/popper/popper.min.js')}}"></script>

    <!-- Optional plugins -->
    <!-- <script src="/assets/vendor/PLUGIN_FOLDER/PLUGIN_SCRIPT.js"></script> -->

    <!-- Theme JS -->
    <script src="{{url('/assets/js/argon.js')}}"></script>
</body>

</html>