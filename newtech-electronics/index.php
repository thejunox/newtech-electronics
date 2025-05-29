<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resource/logo.png" />

</head>

<body class="main-body">

    <div class="container-fluid vh-100 d-flex justify-content-center">
        <div class="row align-content-center">

            <!-- header -->
            <div class="col-12">
                <div class="row">
                    <div class="col-12 logo"></div>
                    <div class="col-12">
                        <p class="text-center title1">Welcome to New Tech</p>
                    </div>
                </div>
            </div>
            <!-- header -->

            <!-- content -->
            <div class="col-12 p-3">
                <div class="row">

                    <div class="col-6 d-none d-lg-block background"></div>
                    <div class="col-12 col-lg-6" id="signUpBox">
                        <div class="row g-2">
                            <div class="col-12">
                                <p class="title2">Create New Account</p>
                            </div>
                            <div class="col-12 d-none">
                                <div class="alert alert-danger" role="alert">
                                    <i class="bi bi-x-octagon-fill fs-5">

                                    </i>
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="form-label title3">First Name</label>
                                <input type="text" class="form-control"/>
                            </div>
                            <div class="col-6">
                                <label class="form-label title3">Last Name</label>
                                <input type="text" class="form-control"/>
                            </div>
                            <div class="col-12">
                                <label class="form-label title3">Email</label>
                                <input type="email" class="form-control"/>
                            </div>
                            <div class="col-12">
                                <label class="form-label title3">Password</label>
                                <input type="password" class="form-control"/>
                            </div>
                            <div class="col-6">
                                <label class="form-label title3">Mobile</label>
                                <input type="text" class="form-control"/>
                            </div>
                            <div class="col-6">
                                <label class="form-label title3">Gender</label>
                                <select class="form-select">
                                    

                                        <option >Male</option>
                                        <option >Female</option>

                                   
                                </select>
                            </div>
                            <div class="col-12 col-lg-6 d-grid">
                                <button class="btn btn-primary">Sign Up</button>
                            </div>
                            <div class="col-12 col-lg-6 d-grid">
                                <button class="btn btn-dark" onclick="changeView();">Already have an account?Sign In</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 d-none" id="signInBox">
                        <div class="row g-2">
                            <div class="col-12">
                                <p class="title2">Sign In</p>
                                <span class="text-danger"></span>
                            </div>

                            

                            <div class="col-12">
                                <label class="form-label title3">Email</label>
                                <input type="email" class="form-control"/>
                            </div>
                            <div class="col-12">
                                <label class="form-label title3">Password</label>
                                <input type="password" class="form-control"/>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label title3">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-6 text-end">
                                <a href="#" class="link-primary">Forgot Password?</a>
                            </div>
                            
                            <div class="col-12 col-lg-6 d-grid">
                                <a href="home.php" class="btn btn-primary ">Sign In</a>
                            </div>
                            <div class="col-12 col-lg-6 d-grid">
                                <button class="btn btn-danger" onclick="changeView();">New to Shop?Join Now</button>
                            </div>
                            <div class="col-12 col-lg-12 d-grid">
                                <a href="admin.php" class="btn btn-dark">If you are a admin?Admin Sign In</a>
                            </div>
                            
                        </div>
                    </div>

                </div>
            </div>
            <!-- content -->

            

            <!-- footer -->

            <div class="col-12 fixed-bottom d-none d-lg-block">
                <p class="text-center title3">&copy; 2022 newtech.lk || All Right Reserved</p>
            </div>

            <!-- footer -->

        </div>

    </div>

    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
</body>

</html>