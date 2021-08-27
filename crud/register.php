<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="vendor/feather-icons-web/feather.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-light">

<section class="main container ">
    <div class="row min-vh-100 justify-content-center align-items-center">
        <div class="col-12 col-mg-6 col-lg-5">
            <div class="my-5">
                <div class="d-flex align-items-center justify-content-center mb-4">
                    <span class="bg-primary p-2 rounded d-flex justify-content-center align-items-center mr-2">
                        <i class="feather-shopping-bag text-white h4 mb-0"></i>
                    </span>
                    <span class="font-weight-bolder h4 mb-0 text-uppercase text-primary">My Shop</span>
                </div>
                <div class="border bg-white rounded-lg shadow-sm">
                    <div class="p-4">
                        <h2 class="text-center font-weight-normal">Create Account</h2>
                        <p class="text-center text-black-50 mb-4">
                            Already have an account?
                            <a href="#">Sign in here</a>
                        </p>
                        <a href="#" class="btn btn-lg btn-outline-secondary btn-block">
                            <i class="feather-log-in"></i>
                            Sign in with Google
                        </a>
                        <hr class="mb-5">
                        <form action="" method="post">
                            <div class="form-row">
                                <div class="col-12">
                                    <label>Full Name</label>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control form-control-lg" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">

                                        <input type="text" name="email" class="form-control form-control-lg" placeholder="Last Name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control form-control-lg">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control form-control-lg">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control form-control-lg">
                            </div>
                            <div class="form-group mb-5">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox">
                                    <label class="custom-control-label text-muted" for="termsCheckbox">
                                        I accept the <a href="#">Terms and Conditions</a>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-lg btn-block btn-primary">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="vendor/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="js/dashboard.js"></script>
</body>
</html>