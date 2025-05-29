<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Panel | New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />


    <link rel="icon" href="resource/logo.png" />

</head>

<body>

    <!-- Main  -->
    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>

            <div class="search">
                <label>
                    <input type="text" placeholder="Search here">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>

            <div class="user">
                <img src="resource/user2.webp" alt="">
            </div>
        </div>

        <!-- Cards -->
        <div class="cardBox">
            <div class="card">
                <div>
                    <div class="numbers">1,220</div>
                    <div class="cardName">Daily Views</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="eye-outline"></ion-icon>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">218</div>
                    <div class="cardName">Sales</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="cart-outline"></ion-icon>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">683</div>
                    <div class="cardName">Comments</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="chatbubbles-outline"></ion-icon>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">Rs. 58,000 .00</div>
                    <div class="cardName">Earning</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="cash-outline"></ion-icon>
                </div>
            </div>
        </div>

        <!-- Order Details List -->
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Recent Orders</h2>
                    <a href="#" class="btn">View All</a>
                </div>

                <table>
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>Price</td>
                            <td>Payment</td>
                            <td>Status</td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Keyboard</td>
                            <td>Rs. 4,500 .00</td>
                            <td>Paid</td>
                            <td><span class="status delivered">Delivered</span></td>
                        </tr>

                        <tr>
                            <td>Laptop Ram</td>
                            <td>Rs. 12,500 .00</td>
                            <td>Due</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>

                        <tr>
                            <td>Apple Watch</td>
                            <td>Rs. 38,500 .00</td>
                            <td>Paid</td>
                            <td><span class="status return">Return</span></td>
                        </tr>

                        <tr>
                            <td>GT 1030 2GB</td>
                            <td>Rs. 16,500 .00</td>
                            <td>Due</td>
                            <td><span class="status inProgress">In Progress</span></td>
                        </tr>

                        <tr>
                            <td>Gaming Mouse</td>
                            <td>Rs. 3,800 .00</td>
                            <td>Paid</td>
                            <td><span class="status delivered">Delivered</span></td>
                        </tr>

                        <tr>
                            <td>DDR3 Laptop Ram 8Gb</td>
                            <td>Rs. 7,200 .00</td>
                            <td>Due</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>

                        <tr>
                            <td>Tempered Glass</td>
                            <td>Rs. 1,200 .00</td>
                            <td>Paid</td>
                            <td><span class="status return">Return</span></td>
                        </tr>

                        <tr>
                            <td> Laptop Skin Protector</td>
                            <td>Rs. 2,400 .00</td>
                            <td>Due</td>
                            <td><span class="status inProgress">In Progress</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- New Customers -->
            <div class="recentCustomers">
                <div class="cardHeader">
                    <h2>Recent Customers</h2>
                </div>

                <table>
                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="resource/cus1.webp" alt=""></div>
                        </td>
                        <td>
                            <h4>Kamal <br> <span>Colombo</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="resource/customer01.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>Saman <br> <span>Kandy</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="resource/customer02.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>Sahan <br> <span>Galle</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="resource/customer01.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>Adeesha <br> <span>Rathnapura</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="resource/customer02.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>Deeptha <br> <span>Trincomalee</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="resource/cus2.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>Gayan <br> <span>Colombo</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="resource/cus1.webp" alt=""></div>
                        </td>
                        <td>
                            <h4>Samanthi <br> <span>Kandy</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="resource/customer02.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>Rathnaweera <br> <span>Galle</span></h4>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    </div>

</body>

</html>