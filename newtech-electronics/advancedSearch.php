<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Advanced Search | New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resource/logo.png" />
</head>

<body class="bg-info">

    <div class="container-fluid">
        <div class="row">

            <div class="col-12 bg-body mb-2">
                <?php include "header.php"; ?>
            </div>

            <div class="col-12 bg-body mb-2">
                <div class="row">
                    <div class="offset-lg-4 col-12 col-lg-4">
                        <div class="row">
                            <div class="col-2">
                                <div class="mt-2 mb-2 logo" style="height: 80px;"></div>
                            </div>
                            <div class="col-10 text-center">
                                <p class="fs-1 text-black-50 fw-bold mt-3 pt-2">Advanced Search</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="offset-lg-2 col-12 col-lg-8 bg-body rounded mb-2">
                <div class="row">

                <div class="offset-lg-1 col-12 col-lg-10">
                    <div class="row">
                        <div class="col-12 col-lg-10 mt-2 mb-1">
                            <input type="text" class="form-control" placeholder="Type Keyword to search..."/>
                        </div>
                        <div class="col-12 col-lg-2 mt-2 mb-1 d-grid">
                            <button class="btn btn-primary">Search</button>
                        </div>
                        <div class="col-12">
                            <hr class="border border-3 border-primary"/>
                        </div>
                    </div>
                </div>

                <div class="offset-lg-1 col-12 col-lg-10">
                    <div class="row">

                    <div class="col-12">
                        <div class="row">

                        <div class="col-12 col-lg-4 mb-2">
                            <select class="form-select" id="c1">
                                <option value="0">Select Category</option>
                                
                                <option value="1">Cell Phones</option>
                                            <option value="2">Cell Phones Accessories</option>
                                            <option value="3">Smart Watches</option>
                                            <option value="4">Camera</option>
                                            <option value="5">Tablets</option>
                                            <option value="6">Drones</option>
                                            <option value="7">Gaming</option>
                                            <option value="8">Portable Audio</option>
                                            <option value="9">Smart Home Devices</option>
                                            <option value="10">TV, Video & Home Audio Electronics</option>
                                            <option value="11">VR Headsets & Accessories</option>
                                    
                            </select>
                        </div>

                        <div class="col-12 col-lg-4 mb-2">
                            <select class="form-select" id="b">
                                <option value="0">Select Brand</option>
                                
                                <option>Apple</option>
                                            <option>Samsung</option>
                                            <option>Huawei</option>
                                            <option>HP</option>
                                            <option>MSI</option>
                                            <option>Asus</option>
                                            <option>DELL</option>
                                            <option>DJI</option>
                                            <option>Autel</option>
                                            <option>Parrot</option>
                                            <option>Ryze</option>
                                            <option>Sony</option>
                                            <option>Fujifilm</option>
                                            <option>Canon</option>
                                            <option>Olympus</option>
                                            <option>Nikon</option>
                                    
                            </select>
                        </div>

                        <div class="col-12 col-lg-4 mb-2">
                            <select class="form-select" id="m">
                                <option value="0">Select Model</option>
                                
                                <option value="1">A1</option>
                                            <option value="2">A2</option>
                                            <option value="3">A3</option>
                                   
                            </select>
                        </div>

                        <div class="col-12 col-lg-6 mb-2">
                            <select class="form-select" id="c2">
                                <option value="0">Select Condition</option>
                                
                                    <option value="1">Brand New</option>
                                    <option value="2">Used</option>
                                   
                            </select>
                        </div>

                        <div class="col-12 col-lg-6 mb-2">
                            <select class="form-select" id="c3">
                                <option value="0">Select Colour</option>
                                
                                <option>black</option>
                                                    <option>silver</option>
                                                    <option>gray</option>
                                                    <option>white</option></option>
                                                    <option>red</option>
                                                    <option>purple</option>
                                                    <option>fuchsia</option>
                                                    <option>lime</option>
                                                    <option>yellow</option>
                                                    <option>navy</option>
                                                    <option>blue</option>
                                                    <option>maroon</option>
                                                    <option>aquam</option>
                                                    <option>teal</option>
                                                    <option>green</option>
                                                    <option>beige</option>
                                   
                            </select>
                        </div>

                        <div class="col-12 col-lg-6 mb-2">
                            <input type="text" class="form-control" placeholder="Price From..."/>
                        </div>

                        <div class="col-12 col-lg-6 mb-2">
                            <input type="text" class="form-control" placeholder="Price To..."/>
                        </div>

                        </div>
                    </div>

                    </div>
                </div>

                </div>
            </div>

            <div class="offset-lg-2 col-12 col-lg-8 bg-body rounded mb-2">
                <div class="row">
                    <div class="offset-4 offset-lg-8 col-8 col-lg-4 mt-2 mb-2">
                        <select class="form-select border border-start-0 border-top-0 border-end-0 border-2 border-primary shadow-none" id="s">
                            <option value="0">SORT BY</option>
                            <option value="1">PRICE HIGH TO LOW</option>
                            <option value="2">PRICE LOW TO HIGH</option>
                            <option value="3">QUANTITY HIGH TO LOW</option>
                            <option value="4">QUANTITY LOW TO HIGH</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="offset-lg-2 col-12 col-lg-8 bg-body rounded mb-2">
                <div class="row">
                    <div class="offset-lg-1 col-12 col-lg-10 text-center">
                        <div class="row" id="view_area">
                            <div class="offset-5 col-2 mt-5">
                                <span class="fw-bold text-black-50"><i class="bi bi-search" style="font-size: 100px;"></i></span>
                            </div>
                            <div class="offset-3 col-6 mt-3 mb-5">
                                <span class="h1 text-black-50 fw-bold">No Items Searched Yet...</span>
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