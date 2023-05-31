<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/minible/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Jul 2021 13:45:16 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Login | Minible - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/admin/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body class="authentication-bg">
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <a href="index.html" class="mb-5 d-block auth-logo">
                        <img src="assets/images/logo-dark.png" alt="" height="22" class="logo logo-dark">
                        <img src="assets/images/logo-light.png" alt="" height="22" class="logo logo-light">
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card">

                    <div class="card-body p-4">
                        <div class="text-center mt-2">
                            <h5 class="text-primary">Welcome Back !</h5>
                            <p class="text-muted">Sign in to continue to @My Blog</p>
                        </div>
                        <div class="p-2 mt-4">
                            <form action="action.php" method="post" enctype="">

                                <div class="mb-3">
                                    <label class="form-label" for="username">Username</label>
                                    <input type="text" name="name" class="form-control" id="username" placeholder="Enter username">
                                </div>

                                <div class="mb-3">
                                    <div class="float-end">
                                        <a href="action.php?status=password-recovery" class="text-muted">Forgot password?</a>
                                    </div>
                                    <label class="form-label" for="userpassword">Password</label>
                                    <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter password">
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="auth-remember-check">
                                    <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                </div>

                                <div class="mt-3 text-end">
                                    <button class="btn btn-primary w-sm waves-effect waves-light" type="submit" name="btn" value="submit">Log In</button>
                                </div>




                                <div class="mt-4 text-center">
                                    <p class="mb-0">Don't have an account ? <a href="action.php?status=register" class="fw-medium text-primary"> Signup now </a> </p>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

                <div class="mt-5 text-center">
                    <p>© <script>document.write(new Date().getFullYear())</script> Created <i class="mdi mdi-heart text-danger"></i> by @Md Naimul Islam</p>
                </div>

            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>

<!-- JAVASCRIPT -->
<script src="assets/admin/libs/jquery/jquery.min.js"></script>
<script src="assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/admin/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/admin/libs/simplebar/simplebar.min.js"></script>
<script src="assets/admin/libs/node-waves/waves.min.js"></script>
<script src="assets/admin/libs/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="assets/admin/libs/jquery.counterup/jquery.counterup.min.js"></script>

<!-- App js -->
<script src="assets/admin/js/app.js"></script>

</body>

<!-- Mirrored from themesbrand.com/minible/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Jul 2021 13:45:16 GMT -->
</html>
