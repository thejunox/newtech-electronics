<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Purchased History | New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resource/logo.png" />

</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <?php include "header.php";?>

                <div class="col-12">
                    <div class="row">
                        <div class="col-12 border border-1 border-primary rounded mb-2">
                            <div class="row">

                                <div class="col-12">
                                    <label class="form-label fs-1 fw-bolder">Purchased History <img src="resource/history_icon.svg"/></label>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <hr />
                                </div>

                                <div class="col-12">
                                    <div class="row">
                                        <div class="offset-lg-2 col-12 col-lg-6 mb-3">
                                            <input type="text" class="form-control" placeholder="Search in Purchased History..." />
                                        </div>
                                        <div class="col-12 col-lg-2 mb-3 d-grid">
                                            <button class="btn btn-primary">Search</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <hr />
                                </div>

                                <div class="col-11 col-lg-2 border-0 border-end border-1 border-primary">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Purchased History</li>
                                        </ol>
                                    </nav>
                                    <nav class="nav nav-pills flex-column">
                                        <a class="nav-link active" aria-current="page" href="#">Purchased History</a>
                                        <a class="nav-link" href="watchlist.php">My Watchlist</a>
                                        <a class="nav-link" href="cart.php">My Cart</a>
                                    </nav>
                                </div>

                                
                                    <!-- empty view
                                    <div class="col-12 col-lg-9">
                                        <div class="row">
                                            <div class="col-12 emptyView1"></div>
                                            <div class="col-12 text-center">
                                                <label class="form-label fs-1 fw-bold">You have no items in your Purchased History yet.</label>    
                                                     <div class="offset-lg-4 col-12 col-lg-4 d-grid mb-3">
                                                <a href="home.php" class="btn btn-outline-warning fs-3 fw-bold">Start Shopping</a>
                                            </div>
                                        </div>
                                    </div>
                                   empty view -->
                                   
                                    <div class="col-12 col-lg-9">
                                            <div class="row">
                                    
                                        <!-- have Products -->
                                        

                                                <div class="card mb-3 mx-0 mx-lg-2 col-12">
                                                    <div class="row g-0">
                                                        <div class="col-md-4">
                                                        
                                                            <img src="resource/mobile_images/Canon-EOS-R6.jpeg" class="img-fluid rounded-start" style="height: 200px;" />
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="card-body">
                                                               
                                                                
                                                                <h5 class="card-title fs-2 fw-bold text-primary">Canon EOS R6</h5>
                                                                
                                                                <span class="fs-5 fw-bold text-black-50">Colour : Black</span>
                                                                &nbsp;&nbsp; | &nbsp;&nbsp;
                                                               
                                                                <span class="fs-5 fw-bold text-black-50">Condition : Brand New</span>
                                                                <br />
                                                                <span class="fs-5 fw-bold text-black-50">Price :</span>&nbsp;&nbsp;
                                                                <span class="fs-5 fw-bold text-black">Rs. 947,500 .00</span>
                                                                <br />
                                                                <span class="fs-5 fw-bold text-black-50">Quantity :</span>&nbsp;&nbsp;
                                                                <span class="fs-5 fw-bold text-black">10 Items available</span>
                                                                <br />
                                                                <span class="fs-5 fw-bold text-black-50">Seller :</span>
                                                                <br />


                                                                <span class="fs-5 fw-bold text-black">Junox Nujan</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mt-5">
                                                            <div class="card-body d-lg-grid">
                                                                <a href="invoice.php" class="btn btn-outline-success mb-2">Invoic</a>
                                                                <a href="#" class="btn btn-outline-warning mb-2">Add To Cart</a>
                                                                <a href="#" class="btn btn-outline-danger">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            
                                                <!-- have Products -->

                                
                                    </div>
                                        </div>
                                    
                                

                                





                            </div>
                        </div>
                    </div>
                </div>


            <?php include "footer.php"; ?>

        </div>
    </div>

    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>