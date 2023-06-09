<?php
session_start();
?>
<script>
    function validateLoginForm()
    {
        let x =document.forms["myForm"]['email'].value
        let y =document.forms["myForm"]['password'].value
        let z =document.forms["myForm"]['repassword'].value

        if (x=='')
        {
            document.getElementById('eError').innerText='Please Enter Your Email';
            return false
        }
        if (y=='')
        {
            document.getElementById('pError').innerText='Please Enter Your Password';
            return false
        }
        if (z=='')
        {
            document.getElementById('pError').innerText='Please Enter Your Re-Password';
            return false
        }
    }

</script>

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
                    <a href="action.php?status=login" class="mb-5 d-block auth-logo">
                        <img src="assets/admin/images/logo-dark.png" alt="" height="22" class="logo logo-dark">
                        <img src="assets/admin/images/logo-light.png" alt="" height="22" class="logo logo-light">
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card">

                    <div class="card-body p-4">
                        <div class="text-center mt-2">
                            <h5 class="text-primary">Welcome TO Travel BD !</h5>
                            <p class="text-muted">Sign in to continue to @My Blog</p>
                        </div>
                        <span class="text-center" style="font-size: 12px !important;">
                            <?php if (isset($_SESSION['message'])) {?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?php
                                echo $_SESSION['message'];
                                unset($_SESSION['message']);
                                ?>

                                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                     </button>
                                </div>
                            <?php } ?>
                        </span>
                        <div class="alert">
                            <?php
                            if (isset($message))
                            {
                                echo "<h4>".$message."</h4>";
                                unset($message);
                            }
                            ?>
                        </div>
                        <div class="p-2 mt-4">
                            <form action="action.php" method="post" enctype="" onsubmit="return validateLoginForm()" name="myForm">
                                <div class="mb-3">


                                    <input type="hidden" name="v_token" class="form-control" id="password" placeholder="Enter password" value="<?php if (isset($_GET['token'])) {echo $_GET['token'];} ?>">

                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="username">Email</label>
                                    <input type="text" name="email" class="form-control text-left" id="email" placeholder="Enter email" value="<?php if (isset($_GET['email'])) {echo $_GET['email'];} ?>">
                                    <p id="eError" class="text-danger"></p>
                                </div>

                                <div class="mb-3">

                                    <label class="form-label" for="userpassword">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                                    <p id="pError" class="text-danger"></p>
                                </div>
                                <div class="mb-3">

                                    <label class="form-label" for="userpassword">Re-Password</label>
                                    <input type="password" name="re_password" class="form-control" id="password" placeholder="Enter password">
                                    <p id="rpError" class="text-danger"></p>
                                </div>


                                <div class="mt-3 text-end">
                                    <button class="btn btn-primary w-sm waves-effect waves-light" type="submit" name="btn" value="reset-pass">SUBMIT</button>
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
<!--JAVASCRIPT CODE START--->



<!--JAVASCRIPT CODE END--->
<!-- JAVASCRIPT LINK-->
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

<!-- Mirrored from themesbrand.com/minible/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Jul 2021 13:45:16 GMT -->
</html>
