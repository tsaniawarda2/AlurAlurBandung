<?php
session_start();
if (isset($_SESSION['idUser'])) {
  header("Location: ../../index.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../../assets/img/L-Aps1Warna.svg" type="image/x-icon" />
  <title>L-Apss</title>

  <!-- ========== All CSS files linkup ========= -->
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../../assets/css/lineicons.css" />
  <link rel="stylesheet" href="../../assets/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="../../assets/css/fullcalendar.css" />
  <link rel="stylesheet" href="../../assets/css/fullcalendar.css" />
  <link rel="stylesheet" href="../../assets/css/main.css" />
</head>

<body>
  <!-- ======== sidebar-nav start =========== -->
  <aside class="sidebar-nav-wrapper">
    <div class="navbar-logo">
      <a href="index.php">
        <img src="../../assets/img/L-Aps1Warna.svg" alt="logo" id="logo" />
      </a>
    </div>
    <nav class="sidebar-nav">
      <ul>
        <li class="nav-item active">
          <a href="index.php">
            <span class="icon">
              <svg width="22" height="22" viewBox="0 0 22 22">
                <path d="M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z" />
              </svg>
            </span>
            <span class="text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="du/index.php">
            <span class="icon">
              <i class="lni lni-user"></i>
            </span>
            <span class="text">Data User</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="laporan/daftar.php">
            <span class="icon">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.8334 1.83325H5.50008C5.01385 1.83325 4.54754 2.02641 4.20372 2.37022C3.8599 2.71404 3.66675 3.18036 3.66675 3.66659V18.3333C3.66675 18.8195 3.8599 19.2858 4.20372 19.6296C4.54754 19.9734 5.01385 20.1666 5.50008 20.1666H16.5001C16.9863 20.1666 17.4526 19.9734 17.7964 19.6296C18.1403 19.2858 18.3334 18.8195 18.3334 18.3333V7.33325L12.8334 1.83325ZM16.5001 18.3333H5.50008V3.66659H11.9167V8.24992H16.5001V18.3333Z" />
              </svg>
            </span>
            <span class="text">Laporan User</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="dokumen/datadokumen.php">
            <span class="icon">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.75 4.58325H16.5L15.125 6.41659L13.75 4.58325ZM4.58333 1.83325H17.4167C18.4342 1.83325 19.25 2.65825 19.25 3.66659V18.3333C19.25 19.3508 18.4342 20.1666 17.4167 20.1666H4.58333C3.575 20.1666 2.75 19.3508 2.75 18.3333V3.66659C2.75 2.65825 3.575 1.83325 4.58333 1.83325ZM4.58333 3.66659V7.33325H17.4167V3.66659H4.58333ZM4.58333 18.3333H17.4167V9.16659H4.58333V18.3333ZM6.41667 10.9999H15.5833V12.8333H6.41667V10.9999ZM6.41667 14.6666H15.5833V16.4999H6.41667V14.6666Z" />
              </svg>
            </span>
            <span class="text">Data Dokumen</span>
          </a>
        </li>
      </ul>
    </nav>
  </aside>
  <div class="overlay"></div>
  <!-- ======== sidebar-nav end =========== -->

  <!-- ======== main-wrapper start =========== -->
  <main class="main-wrapper">
    <!-- ========== header start ========== -->
    <header class="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-6">
            <div class="header-left d-flex align-items-center">
              <div class="menu-toggle-btn mr-20">
                <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                  <i class="lni lni-chevron-left me-2"></i> Menu
                </button>
              </div>
              <div class="header-search d-none d-md-flex">
                <form action="#">
                  <input type="text" placeholder="Search..." />
                  <button><i class="lni lni-search-alt"></i></button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-7 col-md-7 col-6">
            <div class="header-right">
              <!-- profile start -->
              <div class="profile-box ml-15">
                <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile" data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="profile-info">
                    <div class="info">
                      <h6>John Doe</h6>
                      <div class="image">
                        <img src="../../assets/img/profile/profile-image.png" alt="" />
                        <span class="status"></span>
                      </div>
                    </div>
                  </div>
                  <i class="lni lni-chevron-down"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                  <li>
                    <a href="../profile.php">
                      <i class="lni lni-user"></i> View Profile
                    </a>
                  </li>
                  <li>
                    <a href="../../index.php">
                      <i class="lni lni-user"></i> Halaman User
                    </a>
                  </li>
                  <li>
                    <a href="../logout.php"> <i class="lni lni-exit"></i> Sign Out </a>
                  </li>
                </ul>
              </div>
              <!-- profile end -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- ========== header end ========== -->

    <!-- ========== section start ========== -->
    <section class="section">
      <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="title mb-30">
                <h2>eCommerce Dashboard</h2>
              </div>
            </div>
            <!-- end col -->
            <div class="col-md-6">
              <div class="breadcrumb-wrapper mb-30">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                      <a href="#0">Dashboard</a>
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
            <!-- end col -->
          </div>
          <!-- end row -->
        </div>
        <!-- ========== title-wrapper end ========== -->
        <div class="row">
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="icon-card mb-30">
              <div class="icon purple">
                <i class="lni lni-cart-full"></i>
              </div>
              <div class="content">
                <h6 class="mb-10">New Orders</h6>
                <h3 class="text-bold mb-10">34567</h3>
                <p class="text-sm text-success">
                  <i class="lni lni-arrow-up"></i> +2.00%
                  <span class="text-gray">(30 days)</span>
                </p>
              </div>
            </div>
            <!-- End Icon Cart -->
          </div>
          <!-- End Col -->
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="icon-card mb-30">
              <div class="icon success">
                <i class="lni lni-dollar"></i>
              </div>
              <div class="content">
                <h6 class="mb-10">Total Income</h6>
                <h3 class="text-bold mb-10">$74,567</h3>
                <p class="text-sm text-success">
                  <i class="lni lni-arrow-up"></i> +5.45%
                  <span class="text-gray">Increased</span>
                </p>
              </div>
            </div>
            <!-- End Icon Cart -->
          </div>
          <!-- End Col -->
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="icon-card mb-30">
              <div class="icon primary">
                <i class="lni lni-credit-cards"></i>
              </div>
              <div class="content">
                <h6 class="mb-10">Total Expense</h6>
                <h3 class="text-bold mb-10">$24,567</h3>
                <p class="text-sm text-danger">
                  <i class="lni lni-arrow-down"></i> -2.00%
                  <span class="text-gray">Expense</span>
                </p>
              </div>
            </div>
            <!-- End Icon Cart -->
          </div>
          <!-- End Col -->
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="icon-card mb-30">
              <div class="icon orange">
                <i class="lni lni-user"></i>
              </div>
              <div class="content">
                <h6 class="mb-10">New User</h6>
                <h3 class="text-bold mb-10">34567</h3>
                <p class="text-sm text-danger">
                  <i class="lni lni-arrow-down"></i> -25.00%
                  <span class="text-gray"> Earning</span>
                </p>
              </div>
            </div>
            <!-- End Icon Cart -->
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
        <div class="row">
          <div class="col-lg-7">
            <div class="card-style mb-30">
              <div class="title d-flex flex-wrap justify-content-between">
                <div class="left">
                  <h6 class="text-medium mb-10">Yearly subscription</h6>
                  <h3 class="text-bold">$245,479</h3>
                </div>
                <div class="right">
                  <div class="select-style-1">
                    <div class="select-position select-sm">
                      <select class="light-bg">
                        <option value="">Yearly</option>
                        <option value="">Monthly</option>
                        <option value="">Weekly</option>
                      </select>
                    </div>
                  </div>
                  <!-- end select -->
                </div>
              </div>
              <!-- End Title -->
              <div class="chart">
                <canvas id="Chart1" style="width: 100%; height: 400px"></canvas>
              </div>
              <!-- End Chart -->
            </div>
          </div>
          <!-- End Col -->
          <div class="col-lg-5">
            <div class="card-style mb-30">
              <div class="title d-flex flex-wrap align-items-center justify-content-between">
                <div class="left">
                  <h6 class="text-medium mb-30">Sales/Revenue</h6>
                </div>
                <div class="right">
                  <div class="select-style-1">
                    <div class="select-position select-sm">
                      <select class="light-bg">
                        <option value="">Yearly</option>
                        <option value="">Monthly</option>
                        <option value="">Weekly</option>
                      </select>
                    </div>
                  </div>
                  <!-- end select -->
                </div>
              </div>
              <!-- End Title -->
              <div class="chart">
                <canvas id="Chart2" style="width: 100%; height: 400px"></canvas>
              </div>
              <!-- End Chart -->
            </div>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
        <div class="row">
          <div class="col-lg-5">
            <div class="card-style mb-30">
              <div class="title d-flex justify-content-between align-items-center">
                <div class="left">
                  <h6 class="text-medium mb-30">Sells by State</h6>
                </div>
              </div>
              <!-- End Title -->
              <div id="map" style="width: 100%; height: 400px"></div>
              <p>Last updated: 7 days ago</p>
            </div>
          </div>
          <!-- End Col -->
          <div class="col-lg-7">
            <div class="card-style mb-30">
              <div class="title d-flex flex-wrap justify-content-between align-items-center">
                <div class="left">
                  <h6 class="text-medium mb-30">Top Selling Products</h6>
                </div>
                <div class="right">
                  <div class="select-style-1">
                    <div class="select-position select-sm">
                      <select class="light-bg">
                        <option value="">Yearly</option>
                        <option value="">Monthly</option>
                        <option value="">Weekly</option>
                      </select>
                    </div>
                  </div>
                  <!-- end select -->
                </div>
              </div>
              <!-- End Title -->
              <div class="table-responsive">
                <table class="table top-selling-table">
                  <thead>
                    <tr>
                      <th></th>
                      <th>
                        <h6 class="text-sm text-medium">Products</h6>
                      </th>
                      <th class="min-width">
                        <h6 class="text-sm text-medium">Category</h6>
                      </th>
                      <th class="min-width">
                        <h6 class="text-sm text-medium">Price</h6>
                      </th>
                      <th class="min-width">
                        <h6 class="text-sm text-medium">Sold</h6>
                      </th>
                      <th class="min-width">
                        <h6 class="text-sm text-medium">Profit</h6>
                      </th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="check-input-primary">
                          <input class="form-check-input" type="checkbox" id="checkbox-1" />
                        </div>
                      </td>
                      <td>
                        <div class="product">
                          <div class="image">
                            <img src="../../assets/img/products/product-mini-1.jpg" alt="" />
                          </div>
                          <p class="text-sm">Arm Chair</p>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm">Interior</p>
                      </td>
                      <td>
                        <p class="text-sm">$345</p>
                      </td>
                      <td>
                        <p class="text-sm">43</p>
                      </td>
                      <td>
                        <p class="text-sm">$45</p>
                      </td>
                      <td>
                        <div class="action justify-content-end">
                          <button class="more-btn ml-10 dropdown-toggle" id="moreAction1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="lni lni-more-alt"></i>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                            <li class="dropdown-item">
                              <a href="#0" class="text-gray">Remove</a>
                            </li>
                            <li class="dropdown-item">
                              <a href="#0" class="text-gray">Edit</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="check-input-primary">
                          <input class="form-check-input" type="checkbox" id="checkbox-1" />
                        </div>
                      </td>
                      <td>
                        <div class="product">
                          <div class="image">
                            <img src="../../assets/img/products/product-mini-2.jpg" alt="" />
                          </div>
                          <p class="text-sm">SOfa</p>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm">Interior</p>
                      </td>
                      <td>
                        <p class="text-sm">$145</p>
                      </td>
                      <td>
                        <p class="text-sm">13</p>
                      </td>
                      <td>
                        <p class="text-sm">$15</p>
                      </td>
                      <td>
                        <div class="action justify-content-end">
                          <button class="more-btn ml-10 dropdown-toggle" id="moreAction1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="lni lni-more-alt"></i>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                            <li class="dropdown-item">
                              <a href="#0" class="text-gray">Remove</a>
                            </li>
                            <li class="dropdown-item">
                              <a href="#0" class="text-gray">Edit</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="check-input-primary">
                          <input class="form-check-input" type="checkbox" id="checkbox-1" />
                        </div>
                      </td>
                      <td>
                        <div class="product">
                          <div class="image">
                            <img src="../../assets/img/products/product-mini-3.jpg" alt="" />
                          </div>
                          <p class="text-sm">Dining Table</p>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm">Interior</p>
                      </td>
                      <td>
                        <p class="text-sm">$95</p>
                      </td>
                      <td>
                        <p class="text-sm">32</p>
                      </td>
                      <td>
                        <p class="text-sm">$215</p>
                      </td>
                      <td>
                        <div class="action justify-content-end">
                          <button class="more-btn ml-10 dropdown-toggle" id="moreAction1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="lni lni-more-alt"></i>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                            <li class="dropdown-item">
                              <a href="#0" class="text-gray">Remove</a>
                            </li>
                            <li class="dropdown-item">
                              <a href="#0" class="text-gray">Edit</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="check-input-primary">
                          <input class="form-check-input" type="checkbox" id="checkbox-1" />
                        </div>
                      </td>
                      <td>
                        <div class="product">
                          <div class="image">
                            <img src="../../assets/img/products/product-mini-4.jpg" alt="" />
                          </div>
                          <p class="text-sm">Office Chair</p>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm">Interior</p>
                      </td>
                      <td>
                        <p class="text-sm">$105</p>
                      </td>
                      <td>
                        <p class="text-sm">23</p>
                      </td>
                      <td>
                        <p class="text-sm">$345</p>
                      </td>
                      <td>
                        <div class="action justify-content-end">
                          <button class="more-btn ml-10 dropdown-toggle" id="moreAction1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="lni lni-more-alt"></i>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                            <li class="dropdown-item">
                              <a href="#0" class="text-gray">Remove</a>
                            </li>
                            <li class="dropdown-item">
                              <a href="#0" class="text-gray">Edit</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <!-- End Table -->
              </div>
            </div>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
        <div class="row">
          <div class="col-lg-7">
            <div class="card-style mb-30">
              <div class="title d-flex flex-wrap align-items-center justify-content-between">
                <div class="left">
                  <h6 class="text-medium mb-2">Sales Forecast</h6>
                </div>
                <div class="right">
                  <div class="select-style-1 mb-2">
                    <div class="select-position select-sm">
                      <select class="light-bg">
                        <option value="">Last Month</option>
                        <option value="">Last 3 Months</option>
                        <option value="">Last Year</option>
                      </select>
                    </div>
                  </div>
                  <!-- end select -->
                </div>
              </div>
              <!-- End Title -->
              <div class="chart">
                <div id="legend3">
                  <ul class="legend3 d-flex flex-wrap align-items-center mb-30">
                    <li>
                      <div class="d-flex">
                        <span class="bg-color primary-bg"> </span>
                        <div class="text">
                          <p class="text-sm text-success">
                            <span class="text-dark">Revenue</span> +25.55%
                            <i class="lni lni-arrow-up"></i>
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex">
                        <span class="bg-color purple-bg"></span>
                        <div class="text">
                          <p class="text-sm text-success">
                            <span class="text-dark">Net Profit</span> +45.55%
                            <i class="lni lni-arrow-up"></i>
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex">
                        <span class="bg-color orange-bg"></span>
                        <div class="text">
                          <p class="text-sm text-danger">
                            <span class="text-dark">Order</span> -4.2%
                            <i class="lni lni-arrow-down"></i>
                          </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <canvas id="Chart3" style="width: 100%; height: 450px"></canvas>
              </div>
            </div>
          </div>
          <!-- End Col -->
          <div class="col-lg-5">
            <div class="card-style mb-30">
              <div class="title d-flex flex-wrap align-items-center justify-content-between">
                <div class="left">
                  <h6 class="text-medium mb-2">Traffic</h6>
                </div>
                <div class="right">
                  <div class="select-style-1 mb-2">
                    <div class="select-position select-sm">
                      <select class="bg-ligh">
                        <option value="">Last 6 Months</option>
                        <option value="">Last 3 Months</option>
                        <option value="">Last Year</option>
                      </select>
                    </div>
                  </div>
                  <!-- end select -->
                </div>
              </div>
              <!-- End Title -->
              <div class="chart">
                <div id="legend4">
                  <ul class="legend3 d-flex flex-wrap align-items-center mb-30">
                    <li>
                      <div class="d-flex">
                        <span class="bg-color primary-bg"> </span>
                        <div class="text">
                          <p class="text-sm text-success">
                            <span class="text-dark">Store Visits</span>
                            +25.55%
                            <i class="lni lni-arrow-up"></i>
                          </p>
                          <h2>3456</h2>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex">
                        <span class="bg-color danger-bg"></span>
                        <div class="text">
                          <p class="text-sm text-danger">
                            <span class="text-dark">Visitors</span> -2.05%
                            <i class="lni lni-arrow-down"></i>
                          </p>
                          <h2>3456</h2>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <canvas id="Chart4" style="width: 100%; height: 420px"></canvas>
              </div>
              <!-- End Chart -->
            </div>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
        <div class="row">
          <div class="col-lg-5">
            <div class="card-style calendar-card mb-30">
              <div id="calendar-mini"></div>
            </div>
          </div>
          <!-- End Col -->
          <div class="col-lg-7">
            <div class="card-style mb-30">
              <div class="title d-flex flex-wrap align-items-center justify-content-between">
                <div class="left">
                  <h6 class="text-medium mb-30">Sales History</h6>
                </div>
                <div class="right">
                  <div class="select-style-1">
                    <div class="select-position select-sm">
                      <select class="light-bg">
                        <option value="">Today</option>
                        <option value="">Yesterday</option>
                      </select>
                    </div>
                  </div>
                  <!-- end select -->
                </div>
              </div>
              <!-- End Title -->
              <div class="table-responsive">
                <table class="table top-selling-table">
                  <thead>
                    <tr>
                      <th>
                        <h6 class="text-sm text-medium">Products</h6>
                      </th>
                      <th class="min-width">
                        <h6 class="text-sm text-medium">
                          Category <i class="lni lni-arrows-vertical"></i>
                        </h6>
                      </th>
                      <th class="min-width">
                        <h6 class="text-sm text-medium">
                          Revenue <i class="lni lni-arrows-vertical"></i>
                        </h6>
                      </th>
                      <th class="min-width">
                        <h6 class="text-sm text-medium">
                          Status <i class="lni lni-arrows-vertical"></i>
                        </h6>
                      </th>
                      <th>
                        <h6 class="text-sm text-medium text-end">
                          Actions <i class="lni lni-arrows-vertical"></i>
                        </h6>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="product">
                          <div class="image">
                            <img src="../../assets/img/products/product-mini-1.jpg" alt="" />
                          </div>
                          <p class="text-sm">Bedroom</p>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm">Interior</p>
                      </td>
                      <td>
                        <p class="text-sm">$345</p>
                      </td>
                      <td>
                        <span class="status-btn close-btn">Pending</span>
                      </td>
                      <td>
                        <div class="action justify-content-end">
                          <button class="edit">
                            <i class="lni lni-pencil"></i>
                          </button>
                          <button class="more-btn ml-10 dropdown-toggle" id="moreAction1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="lni lni-more-alt"></i>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                            <li class="dropdown-item">
                              <a href="#0" class="text-gray">Remove</a>
                            </li>
                            <li class="dropdown-item">
                              <a href="#0" class="text-gray">Edit</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="product">
                          <div class="image">
                            <img src="../../assets/img/products/product-mini-2.jpg" alt="" />
                          </div>
                          <p class="text-sm">Arm Chair</p>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm">Interior</p>
                      </td>
                      <td>
                        <p class="text-sm">$345</p>
                      </td>
                      <td>
                        <span class="status-btn warning-btn">Refund</span>
                      </td>
                      <td>
                        <div class="action justify-content-end">
                          <button class="edit">
                            <i class="lni lni-pencil"></i>
                          </button>
                          <button class="more-btn ml-10 dropdown-toggle" id="moreAction1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="lni lni-more-alt"></i>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                            <li class="dropdown-item">
                              <a href="#0" class="text-gray">Remove</a>
                            </li>
                            <li class="dropdown-item">
                              <a href="#0" class="text-gray">Edit</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="product">
                          <div class="image">
                            <img src="../../assets/img/products/product-mini-3.jpg" alt="" />
                          </div>
                          <p class="text-sm">Sofa</p>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm">Interior</p>
                      </td>
                      <td>
                        <p class="text-sm">$345</p>
                      </td>
                      <td>
                        <span class="status-btn success-btn">Completed</span>
                      </td>
                      <td>
                        <div class="action justify-content-end">
                          <button class="edit">
                            <i class="lni lni-pencil"></i>
                          </button>
                          <button class="more-btn ml-10 dropdown-toggle" id="moreAction1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="lni lni-more-alt"></i>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                            <li class="dropdown-item">
                              <a href="#0" class="text-gray">Remove</a>
                            </li>
                            <li class="dropdown-item">
                              <a href="#0" class="text-gray">Edit</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="product">
                          <div class="image">
                            <img src="../../assets/img/products/product-mini-4.jpg" alt="" />
                          </div>
                          <p class="text-sm">Kitchen</p>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm">Interior</p>
                      </td>
                      <td>
                        <p class="text-sm">$345</p>
                      </td>
                      <td>
                        <span class="status-btn close-btn">Canceled</span>
                      </td>
                      <td>
                        <div class="action justify-content-end">
                          <button class="edit">
                            <i class="lni lni-pencil"></i>
                          </button>
                          <button class="more-btn ml-10 dropdown-toggle" id="moreAction1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="lni lni-more-alt"></i>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                            <li class="dropdown-item">
                              <a href="#0" class="text-gray">Remove</a>
                            </li>
                            <li class="dropdown-item">
                              <a href="#0" class="text-gray">Edit</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <!-- End Table -->
              </div>
            </div>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
      <!-- end container -->
    </section>
    <!-- ========== section end ========== -->

    <!-- ========== footer start =========== -->
    <footer class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 order-last order-md-first">
            <div class="copyright text-center text-md-start">
              <p class="text-sm">
                Designed and Developed by
                <a href="https://plainadmin.com" rel="nofollow" target="_blank">
                  PlainAdmin
                </a>
              </p>
            </div>
          </div>
          <!-- end col-->
          <div class="col-md-6">
            <div class="terms d-flex justify-content-center justify-content-md-end">
              <a href="#0" class="text-sm">Term & Conditions</a>
              <a href="#0" class="text-sm ml-15">Privacy & Policy</a>
            </div>
          </div>
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </footer>
    <!-- ========== footer end =========== -->
  </main>
  <!-- ======== main-wrapper end =========== -->

  <!-- ========= All Javascript files linkup ======== -->
  <script src="../../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/js/Chart.min.js"></script>
  <script src="../../assets/js/dynamic-pie-chart.js"></script>
  <script src="../../assets/js/moment.min.js"></script>
  <script src="../../assets/js/fullcalendar.js"></script>
  <script src="../../assets/js/jvectormap.min.js"></script>
  <script src="../../assets/js/world-merc.js"></script>
  <script src="../../assets/js/polyfill.js"></script>
  <script src="../../assets/js/main.js"></script>

  <script>
    // ======== jvectormap activation
    var markers = [{
        name: "Egypt",
        coords: [26.8206, 30.8025]
      },
      {
        name: "Russia",
        coords: [61.524, 105.3188]
      },
      {
        name: "Canada",
        coords: [56.1304, -106.3468]
      },
      {
        name: "Greenland",
        coords: [71.7069, -42.6043]
      },
      {
        name: "Brazil",
        coords: [-14.235, -51.9253]
      },
    ];

    var jvm = new jsVectorMap({
      map: "world_merc",
      selector: "#map",
      zoomButtons: true,

      regionStyle: {
        initial: {
          fill: "#d1d5db",
        },
      },

      labels: {
        markers: {
          render: (marker) => marker.name,
        },
      },

      markersSelectable: true,
      selectedMarkers: markers.map((marker, index) => {
        var name = marker.name;

        if (name === "Russia" || name === "Brazil") {
          return index;
        }
      }),
      markers: markers,
      markerStyle: {
        initial: {
          fill: "#4A6CF7"
        },
        selected: {
          fill: "#ff5050"
        },
      },
      markerLabelStyle: {
        initial: {
          fontWeight: 400,
          fontSize: 14,
        },
      },
    });
    // ====== calendar activation
    document.addEventListener("DOMContentLoaded", function() {
      var calendarMiniEl = document.getElementById("calendar-mini");
      var calendarMini = new FullCalendar.Calendar(calendarMiniEl, {
        initialView: "dayGridMonth",
        headerToolbar: {
          end: "today prev,next",
        },
      });
      calendarMini.render();
    });

    // =========== chart one start
    const ctx1 = document.getElementById("Chart1").getContext("2d");
    const chart1 = new Chart(ctx1, {
      // The type of chart we want to create
      type: "line", // also try bar or other graph types

      // The data for our dataset
      data: {
        labels: [
          "Jan",
          "Fab",
          "Mar",
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec",
        ],
        // Information about the dataset
        datasets: [{
          label: "",
          backgroundColor: "transparent",
          borderColor: "#4A6CF7",
          data: [
            600, 800, 750, 880, 940, 880, 900, 770, 920, 890, 976, 1100,
          ],
          pointBackgroundColor: "transparent",
          pointHoverBackgroundColor: "#4A6CF7",
          pointBorderColor: "transparent",
          pointHoverBorderColor: "#fff",
          pointHoverBorderWidth: 5,
          pointBorderWidth: 5,
          pointRadius: 8,
          pointHoverRadius: 8,
        }, ],
      },

      // Configuration options
      defaultFontFamily: "Inter",
      options: {
        tooltips: {
          callbacks: {
            labelColor: function(tooltipItem, chart) {
              return {
                backgroundColor: "#ffffff",
              };
            },
          },
          intersect: false,
          backgroundColor: "#f9f9f9",
          titleFontFamily: "Inter",
          titleFontColor: "#8F92A1",
          titleFontColor: "#8F92A1",
          titleFontSize: 12,
          bodyFontFamily: "Inter",
          bodyFontColor: "#171717",
          bodyFontStyle: "bold",
          bodyFontSize: 16,
          multiKeyBackground: "transparent",
          displayColors: false,
          xPadding: 30,
          yPadding: 10,
          bodyAlign: "center",
          titleAlign: "center",
        },

        title: {
          display: false,
        },
        legend: {
          display: false,
        },

        scales: {
          yAxes: [{
            gridLines: {
              display: false,
              drawTicks: false,
              drawBorder: false,
            },
            ticks: {
              padding: 35,
              max: 1200,
              min: 500,
            },
          }, ],
          xAxes: [{
            gridLines: {
              drawBorder: false,
              color: "rgba(143, 146, 161, .1)",
              zeroLineColor: "rgba(143, 146, 161, .1)",
            },
            ticks: {
              padding: 20,
            },
          }, ],
        },
      },
    });

    // =========== chart one end

    // =========== chart two start
    const ctx2 = document.getElementById("Chart2").getContext("2d");
    const chart2 = new Chart(ctx2, {
      // The type of chart we want to create
      type: "bar", // also try bar or other graph types
      // The data for our dataset
      data: {
        labels: [
          "Jan",
          "Fab",
          "Mar",
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec",
        ],
        // Information about the dataset
        datasets: [{
          label: "",
          backgroundColor: "#4A6CF7",
          barThickness: 6,
          maxBarThickness: 8,
          data: [
            600, 700, 1000, 700, 650, 800, 690, 740, 720, 1120, 876, 900,
          ],
        }, ],
      },
      // Configuration options
      options: {
        borderColor: "#F3F6F8",
        borderWidth: 15,
        backgroundColor: "#F3F6F8",
        tooltips: {
          callbacks: {
            labelColor: function(tooltipItem, chart) {
              return {
                backgroundColor: "rgba(104, 110, 255, .0)",
              };
            },
          },
          backgroundColor: "#F3F6F8",
          titleFontColor: "#8F92A1",
          titleFontSize: 12,
          bodyFontColor: "#171717",
          bodyFontStyle: "bold",
          bodyFontSize: 16,
          multiKeyBackground: "transparent",
          displayColors: false,
          xPadding: 30,
          yPadding: 10,
          bodyAlign: "center",
          titleAlign: "center",
        },

        title: {
          display: false,
        },
        legend: {
          display: false,
        },

        scales: {
          yAxes: [{
            gridLines: {
              display: false,
              drawTicks: false,
              drawBorder: false,
            },
            ticks: {
              padding: 35,
              max: 1200,
              min: 0,
            },
          }, ],
          xAxes: [{
            gridLines: {
              display: false,
              drawBorder: false,
              color: "rgba(143, 146, 161, .1)",
              zeroLineColor: "rgba(143, 146, 161, .1)",
            },
            ticks: {
              padding: 20,
            },
          }, ],
        },
      },
    });
    // =========== chart two end

    // =========== chart three start
    const ctx3 = document.getElementById("Chart3").getContext("2d");
    const chart3 = new Chart(ctx3, {
      // The type of chart we want to create
      type: "line", // also try bar or other graph types

      // The data for our dataset
      data: {
        labels: [
          "Jan",
          "Fab",
          "Mar",
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec",
        ],
        // Information about the dataset
        datasets: [{
            label: "Revenue",
            backgroundColor: "transparent",
            borderColor: "#4a6cf7",
            data: [80, 120, 110, 100, 130, 150, 115, 145, 140, 130, 160, 210],
            pointBackgroundColor: "transparent",
            pointHoverBackgroundColor: "#4a6cf7",
            pointBorderColor: "transparent",
            pointHoverBorderColor: "#fff",
            pointHoverBorderWidth: 3,
            pointBorderWidth: 5,
            pointRadius: 5,
            pointHoverRadius: 8,
          },
          {
            label: "Profit",
            backgroundColor: "transparent",
            borderColor: "#9b51e0",
            data: [
              120, 160, 150, 140, 165, 210, 135, 155, 170, 140, 130, 200,
            ],
            pointBackgroundColor: "transparent",
            pointHoverBackgroundColor: "#9b51e0",
            pointBorderColor: "transparent",
            pointHoverBorderColor: "#fff",
            pointHoverBorderWidth: 3,
            pointBorderWidth: 5,
            pointRadius: 5,
            pointHoverRadius: 8,
          },
          {
            label: "Order",
            backgroundColor: "transparent",
            borderColor: "#f2994a",
            data: [180, 110, 140, 135, 100, 90, 145, 115, 100, 110, 115, 150],
            pointBackgroundColor: "transparent",
            pointHoverBackgroundColor: "#f2994a",
            pointBorderColor: "transparent",
            pointHoverBorderColor: "#fff",
            pointHoverBorderWidth: 3,
            pointBorderWidth: 5,
            pointRadius: 5,
            pointHoverRadius: 8,
          },
        ],
      },

      // Configuration options
      options: {
        tooltips: {
          intersect: false,
          backgroundColor: "#fbfbfb",
          titleFontColor: "#8F92A1",
          titleFontSize: 16,
          titleFontFamily: "Inter",
          titleFontStyle: "400",
          bodyFontFamily: "Inter",
          bodyFontColor: "#171717",
          bodyFontSize: 16,
          multiKeyBackground: "transparent",
          displayColors: false,
          xPadding: 30,
          yPadding: 15,
          borderColor: "rgba(143, 146, 161, .1)",
          borderWidth: 1,
          title: false,
        },

        title: {
          display: false,
        },

        layout: {
          padding: {
            top: 0,
          },
        },

        legend: false,

        scales: {
          yAxes: [{
            gridLines: {
              display: false,
              drawTicks: false,
              drawBorder: false,
            },
            ticks: {
              padding: 35,
              max: 300,
              min: 50,
            },
          }, ],
          xAxes: [{
            gridLines: {
              drawBorder: false,
              color: "rgba(143, 146, 161, .1)",
              zeroLineColor: "rgba(143, 146, 161, .1)",
            },
            ticks: {
              padding: 20,
            },
          }, ],
        },
      },
    });
    // =========== chart three end

    // ================== chart four start
    const ctx4 = document.getElementById("Chart4").getContext("2d");
    const chart4 = new Chart(ctx4, {
      // The type of chart we want to create
      type: "bar", // also try bar or other graph types
      // The data for our dataset
      data: {
        labels: ["Jan", "Fab", "Mar", "Apr", "May", "Jun"],
        // Information about the dataset
        datasets: [{
            label: "",
            backgroundColor: "#4A6CF7",
            barThickness: "flex",
            maxBarThickness: 8,
            data: [600, 700, 1000, 700, 650, 800],
          },
          {
            label: "",
            backgroundColor: "#d50100",
            barThickness: "flex",
            maxBarThickness: 8,
            data: [690, 740, 720, 1120, 876, 900],
          },
        ],
      },
      // Configuration options
      options: {
        borderColor: "#F3F6F8",
        borderWidth: 15,
        backgroundColor: "#F3F6F8",
        tooltips: {
          callbacks: {
            labelColor: function(tooltipItem, chart) {
              return {
                backgroundColor: "rgba(104, 110, 255, .0)",
              };
            },
          },
          backgroundColor: "#F3F6F8",
          titleFontColor: "#8F92A1",
          titleFontSize: 12,
          bodyFontColor: "#171717",
          bodyFontStyle: "bold",
          bodyFontSize: 16,
          multiKeyBackground: "transparent",
          displayColors: false,
          xPadding: 30,
          yPadding: 10,
          bodyAlign: "center",
          titleAlign: "center",
        },

        title: {
          display: false,
        },
        legend: {
          display: false,
        },

        scales: {
          yAxes: [{
            gridLines: {
              display: false,
              drawTicks: false,
              drawBorder: false,
            },
            ticks: {
              padding: 35,
              max: 1200,
              min: 0,
            },
          }, ],
          xAxes: [{
            gridLines: {
              display: false,
              drawBorder: false,
              color: "rgba(143, 146, 161, .1)",
              zeroLineColor: "rgba(143, 146, 161, .1)",
            },
            ticks: {
              padding: 20,
            },
          }, ],
        },
      },
    });
    // =========== chart four end
  </script>
</body>

</html>