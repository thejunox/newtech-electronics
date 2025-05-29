<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home | New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resource/logo.png" />
</head>

<body>

    <div class="container-fluid">
        <div class="row">
        <?php include "header.php"; ?>


            <hr />

            <div class="col-12 justify-content-center">
                <div class="row mb-3">

                    <div class="offset-4 offset-lg-1 col-4 col-lg-1 logo" style="height: 60px;"></div>

                    <div class="col-12 col-lg-6">

                        <div class="input-group mt-3 mb-3">
                            <input type="text" class="form-control" aria-label="Text input with dropdown button">

                            <select class="form-select" style="max-width: 250px;">
                                <option value="0">All Categories</option>


                                <option>Cell Phones</option>
                                <option>Cell Phones Accessories</option>
                                <option>Smart Watches</option>
                                <option>Camera</option>
                                <option>Tablets</option>
                                <option>Drones</option>
                                <option>Gaming</option>
                                <option>Portable Audio</option>
                                <option>Smart Home Devices</option>
                                <option>TV, Video & Home Audio Electronics</option>
                                <option>VR Headsets & Accessories</option>
   
                            </select>

                        </div>

                    </div>

                    <div class="col-12 col-lg-2 d-grid">
                        <button class="btn btn-primary mt-3 mb-3">Search</button>
                    </div>

                    <div class="col-12 col-lg-2 mt-2 mt-lg-4 text-center text-lg-start">
                        <a href="advancedSearch.php" class="link-secondary text-decoration-none fw-bold">Advanced</a>
                    </div>

                </div>
            </div>

            <hr />

            <div class="col-12">
                <div class="row">

                    <!-- carousel -->

                    <div class="col-12 d-none d-lg-block mb-3">
                        <div class="row">

                            <div id="carouselExampleIndicators" class="offset-2 col-8 carousel slide carousel-fade" data-bs-ride="true">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="resource/slider images/in.jpg" class="d-block poster-img-1" style="width: 950px;"/>
                                        <div class="carousel-caption d-none d-md-block poster-caption">
                                            <h5 class="poster-title">Welcome to New Tech</h5>
                                            <p class="poster-txt">The World's Best Online Store By One Click.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resource/slider images/gamin.png" class="d-block poster-img-1" style="width: 950px;"/>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resource/slider images/cam.jpg" class="d-block poster-img-1" style="width: 950px;"/>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resource/slider images/mobile.jpg" class="d-block poster-img-1" style="width: 950px;"/>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resource/slider images/laptop.png" class="d-block poster-img-1" style="width: 950px;"/>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resource/slider images/smart.jpeg" class="d-block poster-img-1" style="width: 950px;"/>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resource/slider images/drone.jpg" class="d-block poster-img-1" style="width: 950px;"/>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resource/slider images/posterimg2.jpg" class="d-block poster-img-1" style="width: 950px;"/>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resource/slider images/posterimg3.jpg" class="d-block poster-img-1" style="width: 950px;"/>
                                        <div class="carousel-caption d-none d-md-block poster-caption-1">
                                            <h5 class="poster-title">Be Free...</h5>
                                            <p class="poster-txt">Experience the Lowest Delivery Costs With Us.</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                        </div>
                    </div>

                    <!-- carousel -->

                    

                        <!-- category name -->

                        <div class="col-12 mt-3 mb-3">
                            <a href="#" class="text-decoration-none link-dark fs-3 fw-bold">Cell Phones</a> &nbsp;&nbsp;
                            <a href="#" class="text-decoration-none link-dark fs-6">See All &nbsp; &rarr;</a>
                        </div>

                        <!-- category name -->

                        <!-- Products -->

                        <div class="col-12 mb-3">
                            <div class="row border border-primary">

                                <div class="col-12">
                                    <div class="row justify-content-center gap-2">

                                       

                                            <div class="card col-6 col-lg-2 mt-2 mb-2" style="width: 18rem;">

                                                

                                                <img src="resource/mobile_images/iphone-14-pro.png" class="card-img-top img-thumbnail mt-2" style="height: 180px;" />
                                                <div class="card-body ms-0 m-0 text-center">
                                                    <h5 class="card-title fs-6 fw-bold">iPhone 14 Pro Max<span class="badge bg-info">New</span></h5>
                                                    <span class="card-text text-primary">Rs. 559,950 .00</span> <br />

                                                    

                                                        <span class="card-text text-warning fw-bold">In Stock</span> <br />
                                                        <span class="card-text text-success fw-bold">Items Available</span><br /><br />
                                                        <button class="col-12 btn btn-success"onclick="window.location='single_product.php'">Buy Now</button>
                                                        <button class="col-12 btn btn-danger mt-2">Add to Cart</button>                           

                                                    <button class="col-12 btn btn-outline-light mt-2 border border-info"><i class="bi bi-heart-fill text-danger fs-5"></i></button>
                                                </div>
                                            </div>

                                            <div class="card col-6 col-lg-2 mt-2 mb-2" style="width: 18rem;">

                                                

                                                <img src="resource/mobile_images/Apple_iPhone-13-Pro.jpg" class="card-img-top img-thumbnail mt-2" style="height: 180px;" />
                                                <div class="card-body ms-0 m-0 text-center">
                                                    <h5 class="card-title fs-6 fw-bold">Apple iPhone 13 Pro<span class="badge bg-info">New</span></h5>
                                                    <span class="card-text text-primary">Rs. 395,000 .00</span> <br />

                                                    

                                                        <span class="card-text text-warning fw-bold">In Stock</span> <br />
                                                        <span class="card-text text-success fw-bold">Items Available</span><br /><br />
                                                        <button class="col-12 btn btn-success">Buy Now</button>
                                                        <button class="col-12 btn btn-danger mt-2">Add to Cart</button>

                                                 <button class="col-12 btn btn-outline-light mt-2 border border-info"><i class="bi bi-heart-fill text-danger fs-5"></i></button>
                                                </div>
                                            </div>

                                            <div class="card col-6 col-lg-2 mt-2 mb-2" style="width: 18rem;">

                                                

                                                <img src="resource/mobile_images/Samsung-Galaxy-S22-Ultra-5Gpg.jpg" class="card-img-top img-thumbnail mt-2" style="height: 180px;" />
                                                <div class="card-body ms-0 m-0 text-center">
                                                    <h5 class="card-title fs-6 fw-bold">Samsung Galaxy S22 Ultra 5G<span class="badge bg-info">New</span></h5>
                                                    <span class="card-text text-primary">Rs. 365,000 .00</span> <br />

                                                    

                                                        <span class="card-text text-warning fw-bold">In Stock</span> <br />
                                                        <span class="card-text text-success fw-bold">Items Available</span><br /><br />
                                                        <button class="col-12 btn btn-success">Buy Now</button>
                                                        <button class="col-12 btn btn-danger mt-2">Add to Cart</button>

                                                    
                                                    <button class="col-12 btn btn-outline-light mt-2 border border-info"><i class="bi bi-heart-fill text-danger fs-5"></i></button>
                                                </div>
                                            </div>

                                            <div class="card col-6 col-lg-2 mt-2 mb-2" style="width: 18rem;">

                                                

                                                <img src="resource/mobile_images/samsung-galaxy-note20ultra.jpg" class="card-img-top img-thumbnail mt-2" style="height: 180px;" />
                                                <div class="card-body ms-0 m-0 text-center">
                                                    <h5 class="card-title fs-6 fw-bold">Samsung Galaxy Note20 Ultra<span class="badge bg-info">New</span></h5>
                                                    <span class="card-text text-primary">Rs. 315,000 .00</span> <br />

                                                    

                                                        <span class="card-text text-warning fw-bold">In Stock</span> <br />
                                                        <span class="card-text text-success fw-bold">Items Available</span><br /><br />
                                                        <button class="col-12 btn btn-success">Buy Now</button>
                                                        <button class="col-12 btn btn-danger mt-2">Add to Cart</button>


                                                    <button class="col-12 btn btn-outline-light mt-2 border border-info"><i class="bi bi-heart-fill text-danger fs-5"></i></button>
                                                </div>
                                            </div>

                                            <div class="card col-6 col-lg-2 mt-2 mb-2" style="width: 18rem;">

                                                

                                                <img src="resource/mobile_images/huawei-p40-pro.jpg" class="card-img-top img-thumbnail mt-2" style="height: 180px;" />
                                                <div class="card-body ms-0 m-0 text-center">
                                                    <h5 class="card-title fs-6 fw-bold">Huawei P40 Pro<span class="badge bg-info">New</span></h5>
                                                    <span class="card-text text-primary">Rs. 269,500 .00</span> <br />

                                                    

                                                        <span class="card-text text-warning fw-bold">In Stock</span> <br />
                                                        <span class="card-text text-success fw-bold">Items Available</span><br /><br />
                                                        <button class="col-12 btn btn-success">Buy Now</button>
                                                        <button class="col-12 btn btn-danger mt-2">Add to Cart</button>

                                                    <button class="col-12 btn btn-outline-light mt-2 border border-info"><i class="bi bi-heart-fill text-danger fs-5"></i></button>
                                                </div>
                                            </div>

                                        

                                        

                                        

                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Products -->
                        <!-- category name -->

                        <div class="col-12 mt-3 mb-3">
                            <a href="#" class="text-decoration-none link-dark fs-3 fw-bold">Laptop</a> &nbsp;&nbsp;
                            <a href="#" class="text-decoration-none link-dark fs-6">See All &nbsp; &rarr;</a>
                        </div>

                        <!-- category name -->

                        <!-- Products -->

                        <div class="col-12 mb-3">
                            <div class="row border border-primary">

                                <div class="col-12">
                                    <div class="row justify-content-center gap-2">

                                       

                                            <div class="card col-6 col-lg-2 mt-2 mb-2" style="width: 18rem;">

                                                

                                                <img src="resource/mobile_images/hp.jpg" class="card-img-top img-thumbnail mt-2" style="height: 180px;" />
                                                <div class="card-body ms-0 m-0 text-center">
                                                    <h5 class="card-title fs-6 fw-bold">HP Pavilion 15 Eg1678Tu<span class="badge bg-info">New</span></h5>
                                                    <span class="card-text text-primary">Rs. 277,000 .00</span> <br />

                                                    

                                                        <span class="card-text text-warning fw-bold">In Stock</span> <br />
                                                        <span class="card-text text-success fw-bold">Items Available</span><br /><br />
                                                        <button class="col-12 btn btn-success">Buy Now</button>
                                                        <button class="col-12 btn btn-danger mt-2">Add to Cart</button>

                                                    

                                                    

                                                    


                                                    <button class="col-12 btn btn-outline-light mt-2 border border-info"><i class="bi bi-heart-fill text-danger fs-5"></i></button>
                                                </div>
                                            </div>

                                            <div class="card col-6 col-lg-2 mt-2 mb-2" style="width: 18rem;">

                                                

                                                <img src="resource/mobile_images/Apple-MacBook-Air-M2.jpg" class="card-img-top img-thumbnail mt-2" style="height: 180px;" />
                                                <div class="card-body ms-0 m-0 text-center">
                                                    <h5 class="card-title fs-6 fw-bold">Apple MacBook Air M2  MLXW3<span class="badge bg-info">New</span></h5>
                                                    <span class="card-text text-primary">Rs. 475,000 .00</span> <br />

                                                    

                                                        <span class="card-text text-warning fw-bold">In Stock</span> <br />
                                                        <span class="card-text text-success fw-bold">Items Available</span><br /><br />
                                                        <button class="col-12 btn btn-success">Buy Now</button>
                                                        <button class="col-12 btn btn-danger mt-2">Add to Cart</button>


                                                    <button class="col-12 btn btn-outline-light mt-2 border border-info"><i class="bi bi-heart-fill text-danger fs-5"></i></button>
                                                </div>
                                            </div>

                                            <div class="card col-6 col-lg-2 mt-2 mb-2" style="width: 18rem;">

                                                

                                                <img src="resource/mobile_images/MSI-GF65.jpg" class="card-img-top img-thumbnail mt-2" style="height: 180px;" />
                                                <div class="card-body ms-0 m-0 text-center">
                                                    <h5 class="card-title fs-6 fw-bold">MSI GF65 Thin 10UE (i7)<span class="badge bg-info">New</span></h5>
                                                    <span class="card-text text-primary">Rs. 525,000 .00</span> <br />

                                                    

                                                        <span class="card-text text-warning fw-bold">In Stock</span> <br />
                                                        <span class="card-text text-success fw-bold">Items Available</span><br /><br />
                                                        <button class="col-12 btn btn-success">Buy Now</button>
                                                        <button class="col-12 btn btn-danger mt-2">Add to Cart</button>

                                                    <button class="col-12 btn btn-outline-light mt-2 border border-info"><i class="bi bi-heart-fill text-danger fs-5"></i></button>
                                                </div>
                                            </div>

                                            <div class="card col-6 col-lg-2 mt-2 mb-2" style="width: 18rem;">

                                                

                                                <img src="resource/mobile_images/Asus-TUF-Gaming-F15-FX507ZC-HN025W.jpg" class="card-img-top img-thumbnail mt-2" style="height: 180px;" />
                                                <div class="card-body ms-0 m-0 text-center">
                                                    <h5 class="card-title fs-6 fw-bold">Asus TUF Gaming F15 FX507ZC  HN025W (i7)<span class="badge bg-info">New</span></h5>
                                                    <span class="card-text text-primary">Rs. 632,000 .00</span> <br />

                                                    

                                                        <span class="card-text text-warning fw-bold">In Stock</span> <br />
                                                        <span class="card-text text-success fw-bold">Items Available</span><br /><br />
                                                        <button class="col-12 btn btn-success">Buy Now</button>
                                                        <button class="col-12 btn btn-danger mt-2">Add to Cart</button>

                                                    <button class="col-12 btn btn-outline-light mt-2 border border-info"><i class="bi bi-heart-fill text-danger fs-5"></i></button>
                                                </div>
                                            </div>

                                            <div class="card col-6 col-lg-2 mt-2 mb-2" style="width: 18rem;">

                                                

                                                <img src="resource/mobile_images/DELL-XPS-13.jpg" class="card-img-top img-thumbnail mt-2" style="height: 180px;" />
                                                <div class="card-body ms-0 m-0 text-center">
                                                    <h5 class="card-title fs-6 fw-bold">DELL XPS 13 9310<span class="badge bg-info">New</span></h5>
                                                    <span class="card-text text-primary">Rs. 550,000 .00</span> <br />

                                                    

                                                        <span class="card-text text-warning fw-bold">In Stock</span> <br />
                                                        <span class="card-text text-success fw-bold">Items Available</span><br /><br />
                                                        <button class="col-12 btn btn-success">Buy Now</button>
                                                        <button class="col-12 btn btn-danger mt-2">Add to Cart</button>

                                                    <button class="col-12 btn btn-outline-light mt-2 border border-info"><i class="bi bi-heart-fill text-danger fs-5"></i></button>
                                                </div>
                                            </div>

                                        

                                        

                                        

                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Products -->

                        <!-- category name -->

                        <div class="col-12 mt-3 mb-3">
                            <a href="#" class="text-decoration-none link-dark fs-3 fw-bold">Drones</a> &nbsp;&nbsp;
                            <a href="#" class="text-decoration-none link-dark fs-6">See All &nbsp; &rarr;</a>
                        </div>

                        <!-- category name -->

                        <!-- Products -->

                        <div class="col-12 mb-3">
                            <div class="row border border-primary">

                                <div class="col-12">
                                    <div class="row justify-content-center gap-2">

                                       

                                            <div class="card col-6 col-lg-2 mt-2 mb-2" style="width: 18rem;">

                                                

                                                <img src="resource/mobile_images/1604518526_1598331.jpg" class="card-img-top img-thumbnail mt-2" style="height: 180px;" />
                                                <div class="card-body ms-0 m-0 text-center">
                                                    <h5 class="card-title fs-6 fw-bold">DJI Mini 2<span class="badge bg-info">New</span></h5>
                                                    <span class="card-text text-primary">Rs. 157,500 .00</span> <br />

                                                    

                                                        <span class="card-text text-warning fw-bold">In Stock</span> <br />
                                                        <span class="card-text text-success fw-bold">Items Available</span><br /><br />
                                                        <button class="col-12 btn btn-success">Buy Now</button>
                                                        <button class="col-12 btn btn-danger mt-2">Add to Cart</button>

                                                    

                                                    

                                                    


                                                    <button class="col-12 btn btn-outline-light mt-2 border border-info"><i class="bi bi-heart-fill text-danger fs-5"></i></button>
                                                </div>
                                            </div>

                                            <div class="card col-6 col-lg-2 mt-2 mb-2" style="width: 18rem;">

                                                

                                                <img src="resource/mobile_images/mini 3.jpg" class="card-img-top img-thumbnail mt-2" style="height: 180px;" />
                                                <div class="card-body ms-0 m-0 text-center">
                                                    <h5 class="card-title fs-6 fw-bold">DJI Mini 3 Pro<span class="badge bg-info">New</span></h5>
                                                    <span class="card-text text-primary">Rs. 389,000 .00</span> <br />

                                                    

                                                        <span class="card-text text-warning fw-bold">In Stock</span> <br />
                                                        <span class="card-text text-success fw-bold">Items Available</span><br /><br />
                                                        <button class="col-12 btn btn-success">Buy Now</button>
                                                        <button class="col-12 btn btn-danger mt-2">Add to Cart</button>

                                                    

                                                    

                                                    


                                                    <button class="col-12 btn btn-outline-light mt-2 border border-info"><i class="bi bi-heart-fill text-danger fs-5"></i></button>
                                                </div>
                                            </div>

                                            <div class="card col-6 col-lg-2 mt-2 mb-2" style="width: 18rem;">

                                                

                                                <img src="resource/mobile_images/autel_robotics.jpg" class="card-img-top img-thumbnail mt-2" style="height: 180px;" />
                                                <div class="card-body ms-0 m-0 text-center">
                                                    <h5 class="card-title fs-6 fw-bold">Autel Evo Lite+<span class="badge bg-info">New</span></h5>
                                                    <span class="card-text text-primary">Rs. 600,000 .00</span> <br />

                                                    

                                                        <span class="card-text text-warning fw-bold">In Stock</span> <br />
                                                        <span class="card-text text-success fw-bold">Items Available</span><br /><br />
                                                        <button class="col-12 btn btn-success">Buy Now</button>
                                                        <button class="col-12 btn btn-danger mt-2">Add to Cart</button>

                                                    

                                                    

                                                    


                                                    <button class="col-12 btn btn-outline-light mt-2 border border-info"><i class="bi bi-heart-fill text-danger fs-5"></i></button>
                                                </div>
                                            </div>

                                            <div class="card col-6 col-lg-2 mt-2 mb-2" style="width: 18rem;">

                                                

                                                <img src="resource/mobile_images/0002168_parrot-anafi-usa-uav_1900.jpeg" class="card-img-top img-thumbnail mt-2" style="height: 180px;" />
                                                <div class="card-body ms-0 m-0 text-center">
                                                    <h5 class="card-title fs-6 fw-bold">Parrot Anafi<span class="badge bg-info">New</span></h5>
                                                    <span class="card-text text-primary">Rs. 693,394 .00</span> <br />

                                                    

                                                        <span class="card-text text-warning fw-bold">In Stock</span> <br />
                                                        <span class="card-text text-success fw-bold">Items Available</span><br /><br />
                                                        <button class="col-12 btn btn-success">Buy Now</button>
                                                        <button class="col-12 btn btn-danger mt-2">Add to Cart</button>

                                                    

                                                    

                                                    


                                                    <button class="col-12 btn btn-outline-light mt-2 border border-info"><i class="bi bi-heart-fill text-danger fs-5"></i></button>
                                                </div>
                                            </div>

                                            <div class="card col-6 col-lg-2 mt-2 mb-2" style="width: 18rem;">

                                                

                                                <img src="resource/mobile_images/Ryze Tello.jpg" class="card-img-top img-thumbnail mt-2" style="height: 180px;" />
                                                <div class="card-body ms-0 m-0 text-center">
                                                    <h5 class="card-title fs-6 fw-bold">Ryze Tello<span class="badge bg-info">New</span></h5>
                                                    <span class="card-text text-primary">Rs. 45,500 .00</span> <br />

                                                    

                                                        <span class="card-text text-warning fw-bold">In Stock</span> <br />
                                                        <span class="card-text text-success fw-bold">Items Available</span><br /><br />
                                                        <button class="col-12 btn btn-success">Buy Now</button>
                                                        <button class="col-12 btn btn-danger mt-2">Add to Cart</button>

                                                    

                                                    

                                                    


                                                    <button class="col-12 btn btn-outline-light mt-2 border border-info"><i class="bi bi-heart-fill text-danger fs-5"></i></button>
                                                </div>
                                            </div>

                                        

                                        

                                        

                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Products -->

                         <!-- category name -->

                         <div class="col-12 mt-3 mb-3">
                            <a href="#" class="text-decoration-none link-dark fs-3 fw-bold">Camera</a> &nbsp;&nbsp;
                            <a href="#" class="text-decoration-none link-dark fs-6">See All &nbsp; &rarr;</a>
                        </div>

                        <!-- category name -->

                        <!-- Products -->

                        <div class="col-12 mb-3">
                            <div class="row border border-primary">

                                <div class="col-12">
                                    <div class="row justify-content-center gap-2">

                                       

                                            <div class="card col-6 col-lg-2 mt-2 mb-2" style="width: 18rem;">

                                                

                                                <img src="resource/mobile_images/sonya7.jpg" class="card-img-top img-thumbnail mt-2" style="height: 180px;" />
                                                <div class="card-body ms-0 m-0 text-center">
                                                    <h5 class="card-title fs-6 fw-bold">Sony A7 IV<span class="badge bg-info">New</span></h5>
                                                    <span class="card-text text-primary">Rs.  975,500 .00</span> <br />

                                                    

                                                        <span class="card-text text-warning fw-bold">In Stock</span> <br />
                                                        <span class="card-text text-success fw-bold">Items Available</span><br /><br />
                                                        <button class="col-12 btn btn-success">Buy Now</button>
                                                        <button class="col-12 btn btn-danger mt-2">Add to Cart</button>                           

                                                    <button class="col-12 btn btn-outline-light mt-2 border border-info"><i class="bi bi-heart-fill text-danger fs-5"></i></button>
                                                </div>
                                            </div>

                                            <div class="card col-6 col-lg-2 mt-2 mb-2" style="width: 18rem;">

                                                

                                                <img src="resource/mobile_images/fujifilm_xt4.jpg" class="card-img-top img-thumbnail mt-2" style="height: 180px;" />
                                                <div class="card-body ms-0 m-0 text-center">
                                                    <h5 class="card-title fs-6 fw-bold">Fujifilm X-T4<span class="badge bg-info">New</span></h5>
                                                    <span class="card-text text-primary">Rs. 795,000 .00</span> <br />

                                                    

                                                        <span class="card-text text-warning fw-bold">In Stock</span> <br />
                                                        <span class="card-text text-success fw-bold">Items Available</span><br /><br />
                                                        <button class="col-12 btn btn-success">Buy Now</button>
                                                        <button class="col-12 btn btn-danger mt-2">Add to Cart</button>

                                                 <button class="col-12 btn btn-outline-light mt-2 border border-info"><i class="bi bi-heart-fill text-danger fs-5"></i></button>
                                                </div>
                                            </div>

                                            <div class="card col-6 col-lg-2 mt-2 mb-2" style="width: 18rem;">

                                                

                                                <img src="resource/mobile_images/Canon-EOS-R6.jpeg" class="card-img-top img-thumbnail mt-2" style="height: 180px;" />
                                                <div class="card-body ms-0 m-0 text-center">
                                                    <h5 class="card-title fs-6 fw-bold">Canon EOS R6<span class="badge bg-info">New</span></h5>
                                                    <span class="card-text text-primary">Rs. 947,500 .00</span> <br />

                                                    

                                                        <span class="card-text text-warning fw-bold">In Stock</span> <br />
                                                        <span class="card-text text-success fw-bold">Items Available</span><br /><br />
                                                        <button class="col-12 btn btn-success">Buy Now</button>
                                                        <button class="col-12 btn btn-danger mt-2">Add to Cart</button>

                                                    
                                                    <button class="col-12 btn btn-outline-light mt-2 border border-info"><i class="bi bi-heart-fill text-danger fs-5"></i></button>
                                                </div>
                                            </div>

                                            <div class="card col-6 col-lg-2 mt-2 mb-2" style="width: 18rem;">

                                                

                                                <img src="resource/mobile_images/OM_System_OM-1jpeg.jpeg" class="card-img-top img-thumbnail mt-2" style="height: 180px;" />
                                                <div class="card-body ms-0 m-0 text-center">
                                                    <h5 class="card-title fs-6 fw-bold">OM System OM-1<span class="badge bg-info">New</span></h5>
                                                    <span class="card-text text-primary">Rs. 900,000 .00</span> <br />

                                                    

                                                        <span class="card-text text-warning fw-bold">In Stock</span> <br />
                                                        <span class="card-text text-success fw-bold">Items Available</span><br /><br />
                                                        <button class="col-12 btn btn-success">Buy Now</button>
                                                        <button class="col-12 btn btn-danger mt-2">Add to Cart</button>


                                                    <button class="col-12 btn btn-outline-light mt-2 border border-info"><i class="bi bi-heart-fill text-danger fs-5"></i></button>
                                                </div>
                                            </div>

                                            <div class="card col-6 col-lg-2 mt-2 mb-2" style="width: 18rem;">

                                                

                                                <img src="resource/mobile_images/z6.png" class="card-img-top img-thumbnail mt-2" style="height: 180px;" />
                                                <div class="card-body ms-0 m-0 text-center">
                                                    <h5 class="card-title fs-6 fw-bold">Nikon Z6 II<span class="badge bg-info">New</span></h5>
                                                    <span class="card-text text-primary">Rs. 852,500 .00</span> <br />

                                                    

                                                        <span class="card-text text-warning fw-bold">In Stock</span> <br />
                                                        <span class="card-text text-success fw-bold">Items Available</span><br /><br />
                                                        <button class="col-12 btn btn-success">Buy Now</button>
                                                        <button class="col-12 btn btn-danger mt-2">Add to Cart</button>

                                                    

                                                    

                                                    


                                                    <button class="col-12 btn btn-outline-light mt-2 border border-info"><i class="bi bi-heart-fill text-danger fs-5"></i></button>
                                                </div>
                                            </div>

                                        

                                        

                                        

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