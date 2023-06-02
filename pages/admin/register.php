<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/minible/layouts/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Jul 2021 13:45:16 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Register | Minible - Admin & Dashboard Template</title>
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
                            <h5 class="text-primary">Register Account</h5>

                        </div>
<!--                        <span>-->
<!--                            --><?php //if (isset($_SESSION['message'])) {?>
<!--                                <div class="alert alert-warning alert-dismissible fade show" role="alert">-->
<!--                                --><?php //echo $_SESSION['message']?>
<!--                                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">-->
<!--                                        <span aria-hidden="true">&times;</span>-->
<!--                                     </button>-->
<!--                                </div>-->
<!--                            --><?php //} ?>
<!--                        </span>-->
                        <div class="alert">
                            <?php
                            if (isset($_SESSION['message']))
                            {
                                echo "<h4>".$_SESSION['message']."</h4>";
                                unset($_SESSION['message']);
                            }
                            ?>
                        </div>
                        <div class="p-2 mt-4">
                            <form action="action.php" method="post">

                                <div class="mb-3">
                                    <label class="form-label" for="username">Name</label>
                                    <input type="text" name="name" class="form-control" id="username" placeholder="Enter name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="username">Phone</label>
                                    <input type="number" name="phone" class="form-control" id="username" placeholder="Enter phone number">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="useremail">Email </label>
                                    <input type="email" name="email" class="form-control" id="useremail" placeholder="Enter email">
                                </div>



                                <div class="mb-3">
                                    <label class="form-label" for="userpassword">Password</label>
                                    <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter password">
                                </div>

<!--                                <div class="form-check">-->
<!--                                    <input type="checkbox" class="form-check-input" id="auth-terms-condition-check">-->
<!--                                    <label class="form-check-label" for="auth-terms-condition-check">I accept <a href="javascript: void(0);" class="text-dark">Terms and Conditions</a></label>-->
<!--                                </div>-->



                                <div class="mt-3 text-end">
                                    <button class="btn btn-primary w-sm waves-effect waves-light" type="submit" value="register" name="btn">Register</button>
                                </div>



                                <div class="mt-4 text-center">
                                    <p class="text-muted mb-0">Already have an account ? <a href="action.php?status=login" class="fw-medium text-primary"> Login</a></p>
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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

<!-- Mirrored from themesbrand.com/minible/layouts/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Jul 2021 13:45:16 GMT -->
</html>
