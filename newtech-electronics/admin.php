<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Sign In | New Tech</title>

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
                    <div class="col-12 col-lg-6">
                        <div class="row g-2">
                            <div class="col-12">
                                <p class="title2">Admin Sign In</p>
                            </div>
                            
                            
                            <div class="col-12">
                                <label class="form-label title3">Email</label>
                                <input type="email" class="form-control"/>
                            </div>
                            <div class="col-12">
                                <label class="form-label title3">Password</label>
                                <input type="password" class="form-control"/>
                            </div>
                            
                            <div class="col-12 col-lg-6 d-grid">
                            <button class="btn btn-primary" onclick="window.location='adminpart.php'">Sign In</button>
                            </div>
                            <div class="col-12 col-lg-6 d-grid">
                                <button class="btn btn-dark " onclick="window.location='index.php'">New to Shop?Join Now</button>
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