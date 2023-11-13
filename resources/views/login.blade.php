<!doctype html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable" data-theme="default" data-topbar="light" data-bs-theme="light">



<!-- Mirrored from themesbrand.com/steex/layouts/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 04:18:26 GMT -->
<head>

        <meta charset="utf-8">
        <title>Login POPIN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Minimal Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ '/' }}assets/themesbrand.com/steex/layouts/assets/images/popin.png">

        <!-- Fonts css load -->
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link id="fontsLink" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

        <!-- Layout config Js -->
        <script src="{{ '/' }}assets/themesbrand.com/steex/layouts/assets/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="{{ '/' }}assets/themesbrand.com/steex/layouts/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="{{ '/' }}assets/themesbrand.com/steex/layouts/assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="{{ '/' }}assets/themesbrand.com/steex/layouts/assets/css/app.min.css" rel="stylesheet" type="text/css">
        <!-- custom Css-->
        <link href="{{ '/' }}assets/themesbrand.com/steex/layouts/assets/css/custom.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>


        <section class="auth-page-wrapper py-5 position-relative d-flex align-items-center justify-content-center min-vh-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card mb-0">
                            <div class="row g-0 align-items-center">
                                <!--end col-->
                                <div class="col-xxl-6 mx-auto">
                                    <div class="card mb-0 border-0 shadow-none mb-0">
                                        <div class="card-body p-sm-2 m-lg-4">
                                            <div class="text-center">
                                                <img src="{{ '/' }}assets/themesbrand.com/steex/layouts/assets/images/popin.png" alt="" height="50%" style="width: 50%">
                                                <h5 class="fs-3xl fw-bold">Welcome Back</h5>
                                                <p class="text-muted">Sign in to continue to POPIN.</p>
                                            </div>
                                            <div class="p-2 mt-2">
                                                <form action="{{ route('do_login') }}" method="post">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="username" class="form-label">Email <span class="text-danger">*</span></label>
                                                        <div class="position-relative ">
                                                            <input type="text" class="form-control  password-input" name="email"  placeholder="Enter Email">
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="password-input">Password <span class="text-danger">*</span></label>
                                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                                            <input type="password" class="form-control pe-5 password-input " name="password"  placeholder="Enter password" id="password-input">
                                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="mt-4">
                                                        <button class="btn btn-primary w-100" type="submit">Sign In</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>

        <!-- JAVASCRIPT -->
        <script src="{{ '/' }}assets/themesbrand.com/steex/layouts/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ '/' }}assets/themesbrand.com/steex/layouts/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ '/' }}assets/themesbrand.com/steex/layouts/assets/js/plugins.js"></script>
        <script src="{{ '/' }}assets/themesbrand.com/steex/layouts/assets/js/pages/password-addon.init.js"></script>
        <!--Swiper slider js-->
        <script src="{{ '/' }}assets/themesbrand.com/steex/layouts/assets/libs/swiper/swiper-bundle.min.js"></script>
        <!-- swiper.init js -->
        <script src="{{ '/' }}assets/themesbrand.com/steex/layouts/assets/js/pages/swiper.init.js"></script>
    </body>
<!-- Mirrored from themesbrand.com/steex/layouts/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 04:18:27 GMT -->
</html>
