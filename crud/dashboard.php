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
<body>

<section class="main container-fluid">
    <div class="row">
        <!--        sidebar start-->
        <div class="col-12 col-lg-3 col-xl-2 vh-100 sidebar">
            <div class="d-flex justify-content-between align-items-center py-2 mt-3 nav-brand">
                <div class="d-flex align-items-center">
                    <span class="bg-primary p-2 rounded d-flex justify-content-center align-items-center mr-2">
                        <i class="feather-shopping-bag text-white h4 mb-0"></i>
                    </span>
                    <span class="font-weight-bolder h4 mb-0 text-uppercase text-primary">My Shop</span>
                </div>
                <button class="hide-sidebar-btn btn btn-light d-block d-lg-none">
                    <i class="feather-x text-primary" style="font-size: 2em;"></i>
                </button>
            </div>
            <div class="nav-menu">
                <ul>
                    <li class="menu-spacer"></li>

                    <li class="menu-item">
                        <a href="dashboard.html" class="menu-item-link active">
                            <span>
                                <i class="feather-home"></i>
                                Dashboard
                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="plane.html" class="menu-item-link">
                            <span>
                                <i class="feather-shopping-bag"></i>
                                Today Orders
                            </span>
                            <span class="badge badge-pill bg-white shadow-sm text-primary">15</span>

                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="plane.html" class="menu-item-link">
                            <span>
                                <i class="feather-grid"></i>
                                Recent Items
                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="plane.html" class="menu-item-link">
                            <span>
                                <i class="feather-pie-chart"></i>
                                Data Analysis
                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="plane.html" class="menu-item-link">
                            <span>
                                <i class="feather-file"></i>
                                Plane Page
                            </span>
                        </a>
                    </li>

                    <li class="menu-spacer"></li>




                    <li class="menu-title">
                        <span>Item Management</span>
                    </li>
                    <li class="menu-item">
                        <a href="item_add.html" class="menu-item-link">
                            <span>
                                <i class="feather-plus-circle"></i>
                                Create New Item
                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="item_list.html" class="menu-item-link">
                            <span>
                                <i class="feather-server"></i>
                                Item Lists
                            </span>
                            <span class="badge badge-pill bg-white shadow-sm text-primary">57</span>
                        </a>
                    </li>
                    <li class="menu-spacer"></li>

                    <li class="menu-title">
                        <span>User Management</span>
                    </li>
                    <li class="menu-item">
                        <a href="" class="menu-item-link">
                            <span>
                                <i class="feather-user-plus"></i>
                                Create User
                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="item_list.html" class="menu-item-link">
                            <span>
                                <i class="feather-users"></i>
                                Manage User
                            </span>
                            <span class="badge badge-pill bg-white shadow-sm text-primary">100</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="" class="menu-item-link">
                            <span>
                                <i class="feather-user-minus"></i>
                                Baned User
                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="" class="menu-item-link">
                            <span>
                                <i class="feather-bar-chart"></i>
                                User Analysis
                            </span>
                        </a>
                    </li>
                    <li class="menu-spacer"></li>


                    <li class="menu-title">
                        <span>Inventory</span>
                    </li>
                    <li class="menu-item">
                        <a href="" class="menu-item-link">
                            <span>
                                <i class="feather-file-plus"></i>
                                Create New Stock
                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="" class="menu-item-link">
                            <span>
                                <i class="feather-list"></i>
                                All Stock
                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="item_list.html" class="menu-item-link">
                            <span>
                                <i class="feather-file-minus"></i>
                                Out of Stock
                            </span>
                            <span class="badge badge-pill bg-white shadow-sm text-primary">16</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="" class="menu-item-link">
                            <span>
                                <i class="feather-bar-chart-2"></i>
                                Stock Analysis
                            </span>
                        </a>
                    </li>
                    <li class="menu-spacer"></li>

                    <li class="menu-title">
                        <span>Your Profile</span>
                    </li>
                    <li class="menu-item">
                        <a href="" class="menu-item-link">
                            <span>
                                <i class="feather-lock"></i>
                                Change Password
                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="" class="menu-item-link">
                            <span>
                                <i class="feather-user-check"></i>
                                Edit Profile
                            </span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <!--        sidebar end-->
        <div class="col-12 col-lg-9 col-xl-10 vh-100 py-3 content">
            <div class="row header mb-4">
                <div class="col-12">
                    <div class="p-2 bg-primary d-flex justify-content-between align-items-center rounded">
                        <button class="show-sidebar-btn btn btn-primary d-block d-lg-none">
                            <i class="feather-menu text-light" style="font-size: 2em;"></i>
                        </button>
                        <form action="" method="post" class="d-none d-md-block">
                            <div class="form-inline">
                                <input type="text" class="form-control mr-2" placeholder="Search Everything">
                                <button class="btn btn-light">
                                    <i class="feather-search text-primary"></i>
                                </button>
                            </div>
                        </form>
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="img/user/me.jpg" class="user-img shadow-sm" alt=""> Hein Htet Zan
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--content Area Start-->
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card mb-4 status-card" onclick="go('https://google.com')">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <i class="feather-shopping-bag h1 text-primary"></i>
                                </div>
                                <div class="col-9">
                                    <p class="mb-1 h4 font-weight-bolder">
                                        <span class="counter-up">123</span>
                                    </p>
                                    <p class="mb-0 text-black-50">Today Order</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card mb-4 status-card" onclick="go('https://google.com')">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <i class="feather-users h1 text-primary"></i>
                                </div>
                                <div class="col-9">
                                    <p class="mb-1 h4 font-weight-bolder">
                                        <span class="counter-up">456</span>
                                    </p>
                                    <p class="mb-0 text-black-50">Total User</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card mb-4 status-card" onclick="go('item_list.html')">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <i class="feather-package h1 text-primary"></i>
                                </div>
                                <div class="col-9">
                                    <p class="mb-1 h4 font-weight-bolder">
                                        <span class="counter-up">223</span>
                                    </p>
                                    <p class="mb-0 text-black-50">Total Items</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card mb-4 status-card" onclick="go('https://google.com')">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <i class="feather-map-pin h1 text-primary"></i>
                                </div>
                                <div class="col-9">
                                    <p class="mb-1 h4 font-weight-bolder">
                                        <span class="counter-up">14</span>
                                    </p>
                                    <p class="mb-0 text-black-50">Support Location</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row align-items-end">
                <div class="col-12 col-xl-7">
                    <div class="card overflow-hidden shadow mb-4">
                        <div class="">
                            <div class="d-flex justify-content-between align-items-center p-3">
                                <h4 class="mb-0">Order & Viewer</h4>
                                <div class="">
                                    <img src="img/user/avatar1.jpg" class="ov-img rounded-circle" alt="">
                                    <img src="img/user/avatar2.jpg" class="ov-img rounded-circle" alt="">
                                    <img src="img/user/avatar3.jpg" class="ov-img rounded-circle" alt="">
                                    <img src="img/user/avatar4.jpg" class="ov-img rounded-circle" alt="">
                                    <img src="img/user/avatar5.jpg" class="ov-img rounded-circle" alt="">
                                </div>
                            </div>
                            <canvas id="ov" height="100"></canvas>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-5">
                    <div class="card mb-4 item-carousel-card">
                        <div class="card-body">
                            <div id="carouselExampleIndicators" class="carousel item-carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators" style="bottom: -30px">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="bg-secondary active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="bg-secondary"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="bg-secondary"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3" class="bg-secondary"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="item-card">
                                            <div class="d-flex justify-content-between align-items-end">
                                                <div class="w-50">

                                                    <h4 class="">Coffee Cup</h4>
                                                    <p class="font-weight-bolder text-black-50 mb-3">500 MMk</p>
                                                    <div class="progress mb-4">
                                                        <div class="progress-bar " role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <img src="img/item/item1.png" class="item-card-img" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="item-card">
                                            <div class="d-flex justify-content-between align-items-end">
                                                <div class="w-50">

                                                    <h4 class="">Stick</h4>
                                                    <p class="font-weight-bolder text-black-50 mb-3">1500 MMk</p>
                                                    <div class="progress mb-4">
                                                        <div class="progress-bar " role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <img src="img/item/item2.png" class="item-card-img" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="item-card">
                                            <div class="d-flex justify-content-between align-items-end">
                                                <div class="w-50">
                                                    <h4 class="">Book</h4>
                                                    <p class="font-weight-bolder text-black-50 mb-3">520 MMk</p>
                                                    <div class="progress mb-4">
                                                        <div class="progress-bar " role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <img src="img/item/item3.png" class="item-card-img" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="item-card">
                                            <div class="d-flex justify-content-between align-items-end">
                                                <div class="w-50">

                                                    <h4 class="">Name Card</h4>
                                                    <p class="font-weight-bolder text-black-50 mb-3">500 MMk</p>
                                                    <div class="progress mb-4">
                                                        <div class="progress-bar " role="progressbar" style="width: 35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <img src="img/item/item4.png" class="item-card-img" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-5">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center p-3">
                                <h4 class="mb-0">Order & Place</h4>
                                <div class="">
                                    <i class="feather-pie-chart h4 mb-0 text-primary"></i>
                                </div>
                            </div>
                            <canvas id="op" height="200"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-7">
                    <div class="card overflow-hidden mb-4">

                        <div class="">
                            <div class="d-flex justify-content-between align-items-center p-3">
                                <p class="mb-0">Subscriber List</p>
                                <div class="">
                                    <i class="feather-more-vertical h4 mb-0 text-primary"></i>
                                </div>
                            </div>
                            <table class="table table-hover sub-list mb-0">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Company</th>
                                    <th>Start Date</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Michael Austin</td>
                                    <td>ABC Fintech LTD.</td>
                                    <td>Jan 1,2019</td>
                                    <td><span class="badge badge-pill badge-danger">Close</span></td>
                                    <td>$ 1000.00</td>
                                    <td class="center-align"><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Aldin Rakić</td>
                                    <td>ACME Pvt LTD.</td>
                                    <td>Jan 10,2019</td>
                                    <td><span class="badge badge-pill badge-success">Open</span></td>
                                    <td>$ 3000.00</td>
                                    <td class="center-align"><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                                </tr>
                                <tr>
                                    <td>İris Yılmaz</td>
                                    <td>Collboy Tech LTD.</td>
                                    <td>Jan 12,2019</td>
                                    <td><span class="badge badge-pill badge-success">Open</span></td>
                                    <td>$ 2000.00</td>
                                    <td class="center-align"><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Lidia Livescu</td>
                                    <td>My Fintech LTD.</td>
                                    <td>Jan 14,2019</td>
                                    <td><span class="badge badge-pill badge-danger">Close</span></td>
                                    <td>$ 1100.00</td>
                                    <td class="center-align"><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Michael Austin</td>
                                    <td>ABC Fintech LTD.</td>
                                    <td>Jan 1,2019</td>
                                    <td><span class="badge badge-pill badge-danger">Close</span></td>
                                    <td>$ 1000.00</td>
                                    <td class="center-align"><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Aldin Rakić</td>
                                    <td>ACME Pvt LTD.</td>
                                    <td>Jan 10,2019</td>
                                    <td><span class="badge badge-pill badge-success">Open</span></td>
                                    <td>$ 3000.00</td>
                                    <td class="center-align"><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                                </tr>
                                <tr>
                                    <td>İris Yılmaz</td>
                                    <td>Collboy Tech LTD.</td>
                                    <td>Jan 12,2019</td>
                                    <td><span class="badge badge-pill badge-success">Open</span></td>
                                    <td>$ 2000.00</td>
                                    <td class="center-align"><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--content Area Start-->
        </div>
    </div>
</section>

<script src="vendor/jquery.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/way_point/jquery.waypoints.js"></script>
<script src="vendor/counter_up/counter_up.js"></script>
<script src="vendor/chart_js/chart.min.js"></script>
<script src="js/app.js"></script>

<script src="js/dashboard.js"></script>
</body>
</html>