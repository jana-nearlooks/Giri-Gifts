

<?php
session_start();
include("../db.php");

if (!isset($_SESSION['admin_name'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: ./login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['admin_name']);
  header("location: ./login.php");
}


if(isset($_POST['btn_save']))
{
$product_name=$_POST['product_name'];
$details=$_POST['details'];
$price=$_POST['price'];
$c_price=$_POST['c_price'];
$product_type=$_POST['product_type'];
$brand=$_POST['brand'];
$tags=$_POST['tags'];

//picture coding
$picture_name=$_FILES['picture']['name'];
$picture_type=$_FILES['picture']['type'];
$picture_tmp_name=$_FILES['picture']['tmp_name'];
$picture_size=$_FILES['picture']['size'];

if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
{
	if($picture_size<=50000000)
	
		$pic_name=time()."_".$picture_name;
		move_uploaded_file($picture_tmp_name,"../product_images/".$pic_name);
		
mysqli_query($con,"insert into products (product_cat, product_brand,product_title,product_price, product_desc, product_image,product_keywords) values ('$product_type','$brand','$product_name','$price','$details','$pic_name','$tags')") or die ("query incorrect");

 header("location: admin-dashboard.php");
}

mysqli_close($con);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Giri - Add Products</title>
  <!-- [Meta] -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="" />


  <!-- [Favicon] icon -->

  <link rel="stylesheet" href="assets/css/plugins/jsvectormap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700&amp;display=swap"  rel="stylesheet">
  <link rel="stylesheet" href="assets/fonts/material.css">
  <link rel="icon" href="https://html.phoenixcoded.net/light-able/bootstrap/assets/images/favicon.svg" type="image/x-icon"/>
  <link rel="stylesheet" href="assets/css/plugins/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="assets/css/plugins/buttons.bootstrap5.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/fonts/tabler-icons.min.css">
  <link rel="stylesheet" href="assets/fonts/feather.css">
  <link rel="stylesheet" href="assets/fonts/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style.css" id="main-style-link">
  <link rel="stylesheet" href="assets/css/style-preset.css">

  <style>
    .dt-search {
      margin-bottom: 1%;
      margin-left: 70%;
    }
  </style>

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr"
  data-pc-theme="light">
  <!-- [ Pre-loader ] start -->
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>
  <!-- [ Pre-loader ] End -->
  <!-- [ Sidebar Menu ] start -->
  <nav class="pc-sidebar">
    <div class="navbar-wrapper">
      <div class="m-header m-t-20 mb-4">
        <a href="index.html" class="b-brand text-primary">
          <!-- ========   Change your logo from here   ============ -->
          <img src="assets/images/logo.png" alt="logo image"  width="130" style="margin-left: 30% !important; margin-top: 10%;"/>

        </a>
      </div>
      <div class="navbar-content">
        <ul class="pc-navbar">
          <li class="pc-item pc-caption">
            <label>Navigation</label>
          </li>
          <li class="pc-item">
            <a href="admin-dashboard.php" class="pc-link">
              <span class="pc-micon">
                <i class="fas fa-tachometer-alt"></i>
              </span>
              <span class="pc-mtext">Dashboard</span>
            </a>
          </li>
          <li class="pc-item ">
            <a href="add-user.php" class="pc-link">
              <span class="pc-micon">
                <i class="fas fa-user-plus"></i>
              </span>
              <span class="pc-mtext">Add Users</span>
            </a>
          </li>
          <li class="pc-item ">
            <a href="add-product.php" class="pc-link">
              <span class="pc-micon">
                <i class="fas fa-cart-plus"></i>
              </span>
              <span class="pc-mtext">Add Products</span>
            </a>
          </li>
          <li class="pc-item ">
            <a href="product-list.php" class="pc-link">
              <span class="pc-micon">
                <i class="fas fa-clipboard-list"></i>
              </span>
              <span class="pc-mtext">Products List</span>
            </a>
          </li>
          <li class="pc-item ">
            <a href="#" class="pc-link">
              <span class="pc-micon">
                <i class="fas fa-users-cog"></i>
              </span>
              <span class="pc-mtext">Manage Users</span>
            </a>
          </li>
          <li class="pc-item ">
            <a href="#" class="pc-link">
              <span class="pc-micon">
                <i class="fas fa-chart-bar"></i>
              </span>
              <span class="pc-mtext">Sales</span>
            </a>
          </li>
          <li class="pc-item ">
            <a href="#" class="pc-link">
              <span class="pc-micon">
                <i class="fas fa-cogs"></i>
              </span>
              <span class="pc-mtext">Settings</span>
            </a>
          </li>



        </ul>

      </div>
      <div class="card pc-user-card">
        <!-- <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="flex-shrink-0">
            <img src="assets/images/user/avatar-1.jpg" alt="user-image" class="user-avtar wid-45 rounded-circle" />
          </div>
          <div class="flex-grow-1 ms-3 me-2">
            <h6 class="mb-0">Jonh Smith</h6>
            <small>Administrator</small>
          </div>
          <div class="dropdown">
            <a
              href="#"
              class="btn btn-icon btn-link-secondary avtar arrow-none dropdown-toggle"
              data-bs-toggle="dropdown"
              aria-expanded="false"
              data-bs-offset="0,20"
            >
              <i class="ph-duotone ph-windows-logo"></i>
            </a>
            <div class="dropdown-menu">
              <ul>
                <li
                  ><a class="pc-user-links">
                    <i class="ph-duotone ph-user"></i>
                    <span>My Account</span>
                  </a></li
                >
                <li
                  ><a class="pc-user-links">
                    <i class="ph-duotone ph-gear"></i>
                    <span>Settings</span>
                  </a></li
                >
                <li
                  ><a class="pc-user-links">
                    <i class="ph-duotone ph-lock-key"></i>
                    <span>Lock Screen</span>
                  </a></li
                >
                <li
                  ><a class="pc-user-links">
                    <i class="ph-duotone ph-power"></i>
                    <span>Logout</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div> -->
      </div>
    </div>
  </nav>
  <!-- [ Sidebar Menu ] end -->
  <!-- [ Header Topbar ] start -->
  <header class="pc-header">
    <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
      <div class="me-auto pc-mob-drp">
        <ul class="list-unstyled">
          <!-- ======= Menu collapse Icon ===== -->
          <li class="pc-h-item pc-sidebar-collapse">
            <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
              <i class="ti ti-menu-2"></i>
            </a>
          </li>
          <li class="pc-h-item pc-sidebar-popup">
            <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
              <i class="ti ti-menu-2"></i>
            </a>
          </li>
          <li class="dropdown pc-h-item d-inline-flex d-md-none">
            <a class="pc-head-link dropdown-toggle arrow-none m-0" data-bs-toggle="dropdown" href="#" role="button"
              aria-haspopup="false" aria-expanded="false">
              <i class="ph-duotone ph-magnifying-glass"></i>
            </a>
            <div class="dropdown-menu pc-h-dropdown drp-search">
              <form class="px-3">
                <div class="form-group mb-0 d-flex align-items-center">
                  <input type="search" class="form-control border-0 shadow-none" placeholder="Search..." />
                  <button class="btn btn-light-secondary btn-search">Search</button>
                </div>
              </form>
            </div>
          </li>
          <li class="pc-h-item d-none d-md-inline-flex">
            <form class="form-search">
              <i class="ph-duotone ph-magnifying-glass icon-search"></i>
              <input type="search" class="form-control" placeholder="Search..." />


            </form>
          </li>
        </ul>
      </div>
      <!-- [Mobile Media Block end] -->
      <div class="ms-auto">
        <ul class="list-unstyled">




          <li class="dropdown pc-h-item header-user-profile">
            <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button"
              aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false">
              <img src="assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar" />
            </a>
            <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
              <div class="dropdown-header d-flex align-items-center justify-content-between">
                <h5 class="m-0">Profile</h5>
              </div>
              <div class="dropdown-body">
                <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
                  <ul class="list-group list-group-flush w-100">
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <img src="assets/images/user/avatar-2.jpg" alt="user-image" class="wid-50 rounded-circle" />
                        </div>
                        <div class="flex-grow-1 mx-3">
                          <h5 class="mb-0">Giri Gifts</h5>
                          <a class="link-primary" href="mailto:carson.darrin@company.io">admin@gmail.com</a>
                        </div>
                        <span class="badge bg-primary">ADMIN</span>
                      </div>
                    </li>

                    <li class="list-group-item">
                      <a href="#" class="dropdown-item">
                        <span class="d-flex align-items-center">
                          <i class="ph-duotone ph-user-circle"></i>
                          <span>Edit profile</span>
                        </span>
                      </a>

                    </li>
                    <li class="list-group-item">

                      <a href="?logout='1'" class="dropdown-item">
                        <span class="d-flex align-items-center">
                          <i class="ph-duotone ph-power"></i>
                          <span>Logout</span>
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </header>
  <!-- [ Header ] end -->



  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0)">Add Product</a></li>

              </ul>
            </div>
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">Add New Products</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->

      <!-- [ Main Content ] start -->
      <div class="row">
      <div class="col-md-12">
      <div class="card">
            <div class="card-header">
              <h5>Product Registration Form</h5>
            </div>
            <div class="card-body">
              <form action="add-product.php" method="post" type="form" name="form" enctype="multipart/form-data">
                <div class="row">

             <div class="col-md-6">
             <label class="form-label" for="inputAddress">Upload Product Image</label>
             <div class="input-group  ">
                    <input type="file" name="picture" id="picture" class="form-control" required >
                    <label class="input-group-text" >Upload</label>
            </div>

             </div>  
       
                <div class="form-group col-md-6">
                  <label class="form-label" for="inputAddress">Product Title</label>
                  <input type="text" id="product_name" name="product_name" class="form-control" placeholder="Enter Product Title" required>
                </div>

                <div class="form-group col-md-6">
                      <label class="form-label" for="exampleFormControlTextarea1">Product Description</label>
                      <textarea type="text" id="details"  name="details" class="form-control" rows="3" placeholder="Enter Product Description" required ></textarea>
                    </div>


                <div class="form-group col-md-6">
                  <label class="form-label" for="inputAddress2">Price Amount</label>
                  <input type="text" id="price" name="price" class="form-control" placeholder="Enter Price Amount" required>
                </div>
                <div class="form-group col-md-3">
                  <label class="form-label" for="inputAddress2">Product Category</label>
                  <input type="number" id="product_type" name="product_type"  class="form-control"  placeholder="Enter Product Category" required="[1-6]">
                </div>
                <div class="form-group col-md-3">
                  <label class="form-label" for="inputAddress2">Product Brand</label>
                  <input type="number" id="brand" name="brand"  class="form-control" placeholder="Enter Product Brand" required>
                </div>
                <div class="form-group col-md-6">
                  <label class="form-label" for="inputAddress2">Product Keywords</label>
                  <input type="text" id="tags" name="tags" class="form-control"  placeholder="Enter Product Keywords" required>
                </div>
             
          
            
                </div>
  
         
                <button type="submit" id="btn_save" name="btn_save"  class="btn btn-primary mt-3" required >Add Product</button>
              </form>
            </div>
          </div>

      </div>
      <!-- [ Main Content ] end -->
    </div>
  </div>
  <!-- [ Main Content ] end -->

  <div class="offcanvas border-0 pct-offcanvas offcanvas-end" tabindex="-1" id="offcanvas_pc_layout">
    <div class="offcanvas-header justify-content-between">
      <h5 class="offcanvas-title">Settings</h5>
      <button type="button" class="btn btn-icon btn-link-danger" data-bs-dismiss="offcanvas" aria-label="Close"><i
          class="ti ti-x"></i></button>
    </div>
    <div class="pct-body customizer-body">
      <div class="offcanvas-body py-0">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <div class="pc-dark">
              <h6 class="mb-1">Theme Mode</h6>
              <p class="text-muted text-sm">Choose light or dark mode or Auto</p>
              <div class="row theme-color theme-layout">
                <div class="col-4">
                  <div class="d-grid">
                    <button class="preset-btn btn active" data-value="true" onclick="layout_change('light');">
                      <span class="btn-label">Light</span>
                      <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                    </button>
                  </div>
                </div>
                <div class="col-4">
                  <div class="d-grid">
                    <button class="preset-btn btn" data-value="false" onclick="layout_change('dark');">
                      <span class="btn-label">Dark</span>
                      <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                    </button>
                  </div>
                </div>
                <div class="col-4">
                  <div class="d-grid">
                    <button class="preset-btn btn" data-value="default" onclick="layout_change_default();"
                      data-bs-toggle="tooltip"
                      title="Automatically sets the theme based on user's operating system's color scheme.">
                      <span class="btn-label">Default</span>
                      <span class="pc-lay-icon d-flex align-items-center justify-content-center">
                        <i class="ph-duotone ph-cpu"></i>
                      </span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <h6 class="mb-1">Sidebar Theme</h6>
            <p class="text-muted text-sm">Choose Sidebar Theme</p>
            <div class="row theme-color theme-sidebar-color">
              <div class="col-6">
                <div class="d-grid">
                  <button class="preset-btn btn" data-value="true" onclick="layout_sidebar_change('dark');">
                    <span class="btn-label">Dark</span>
                    <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                  </button>
                </div>
              </div>
              <div class="col-6">
                <div class="d-grid">
                  <button class="preset-btn btn active" data-value="false" onclick="layout_sidebar_change('light');">
                    <span class="btn-label">Light</span>
                    <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                  </button>
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <h6 class="mb-1">Accent color</h6>
            <p class="text-muted text-sm">Choose your primary theme color</p>
            <div class="theme-color preset-color">
              <a href="#!" class="active" data-value="preset-1"><i class="ti ti-check"></i></a>
              <a href="#!" data-value="preset-2"><i class="ti ti-check"></i></a>
              <a href="#!" data-value="preset-3"><i class="ti ti-check"></i></a>
              <a href="#!" data-value="preset-4"><i class="ti ti-check"></i></a>
              <a href="#!" data-value="preset-5"><i class="ti ti-check"></i></a>
              <a href="#!" data-value="preset-6"><i class="ti ti-check"></i></a>
              <a href="#!" data-value="preset-7"><i class="ti ti-check"></i></a>
              <a href="#!" data-value="preset-8"><i class="ti ti-check"></i></a>
              <a href="#!" data-value="preset-9"><i class="ti ti-check"></i></a>
              <a href="#!" data-value="preset-10"><i class="ti ti-check"></i></a>
            </div>
          </li>
          <li class="list-group-item">
            <h6 class="mb-1">Sidebar Caption</h6>
            <p class="text-muted text-sm">Sidebar Caption Hide/Show</p>
            <div class="row theme-color theme-nav-caption">
              <div class="col-6">
                <div class="d-grid">
                  <button class="preset-btn btn active" data-value="true" onclick="layout_caption_change('true');">
                    <span class="btn-label">Caption Show</span>
                    <span
                      class="pc-lay-icon"><span></span><span></span><span><span></span><span></span></span><span></span></span>
                  </button>
                </div>
              </div>
              <div class="col-6">
                <div class="d-grid">
                  <button class="preset-btn btn" data-value="false" onclick="layout_caption_change('false');">
                    <span class="btn-label">Caption Hide</span>
                    <span
                      class="pc-lay-icon"><span></span><span></span><span><span></span><span></span></span><span></span></span>
                  </button>
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="pc-rtl">
              <h6 class="mb-1">Theme Layout</h6>
              <p class="text-muted text-sm">LTR/RTL</p>
              <div class="row theme-color theme-direction">
                <div class="col-6">
                  <div class="d-grid">
                    <button class="preset-btn btn active" data-value="false" onclick="layout_rtl_change('false');">
                      <span class="btn-label">LTR</span>
                      <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                    </button>
                  </div>
                </div>
                <div class="col-6">
                  <div class="d-grid">
                    <button class="preset-btn btn" data-value="true" onclick="layout_rtl_change('true');">
                      <span class="btn-label">RTL</span>
                      <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item pc-box-width">
            <div class="pc-container-width">
              <h6 class="mb-1">Layout Width</h6>
              <p class="text-muted text-sm">Choose Full or Container Layout</p>
              <div class="row theme-color theme-container">
                <div class="col-6">
                  <div class="d-grid">
                    <button class="preset-btn btn active" data-value="false" onclick="change_box_container('false')">
                      <span class="btn-label">Full Width</span>
                      <span class="pc-lay-icon"><span></span><span></span><span></span><span><span></span></span></span>
                    </button>
                  </div>
                </div>
                <div class="col-6">
                  <div class="d-grid">
                    <button class="preset-btn btn" data-value="true" onclick="change_box_container('true')">
                      <span class="btn-label">Fixed Width</span>
                      <span class="pc-lay-icon"><span></span><span></span><span></span><span><span></span></span></span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="d-grid">
              <button class="btn btn-light-danger" id="layoutreset">Reset Layout</button>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- [Page Specific JS] start -->
  <script src="assets/js/plugins/apexcharts.min.js"></script>
  <script src="assets/js/plugins/jsvectormap.min.js"></script>
  <script src="assets/js/plugins/world.js"></script>
  <script src="assets/js/plugins/world-merc.js"></script>
  <script src="assets/js/pages/dashboard-default.js"></script>
  <!-- [Page Specific JS] end -->
  <!-- Required Js -->
  <script src="assets/js/plugins/popper.min.js"></script>
  <script src="assets/js/plugins/simplebar.min.js"></script>
  <script src="assets/js/plugins/bootstrap.min.js"></script>
  <script src="assets/js/fonts/custom-font.js"></script>
  <script src="assets/js/pcoded.js"></script>
  <script src="assets/js/plugins/feather.min.js"></script>
  <script>layout_change('light');</script>
  <script>layout_sidebar_change('light');</script>
  <script>change_box_container('false');</script>
  <script>layout_caption_change('true');</script>
  <script>layout_rtl_change('false');</script>
  <script>preset_change("preset-1");</script>

  <script src="cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="assets/js/plugins/dataTables.min.js"></script>
  <script src="assets/js/plugins/dataTables.bootstrap5.min.js"></script>
  <script src="assets/js/plugins/buttons.colVis.min.js"></script>
  <script src="assets/js/plugins/buttons.print.min.js"></script>
  <script src="assets/js/plugins/pdfmake.min.js"></script>
  <script src="assets/js/plugins/jszip.min.js"></script>
  <script src="assets/js/plugins/dataTables.buttons.min.js"></script>
  <script src="assets/js/plugins/vfs_fonts.js"></script>
  <script src="assets/js/plugins/buttons.html5.min.js"></script>
  <script src="assets/js/plugins/buttons.bootstrap5.min.js"></script>
  <script>
    // [ HTML5 Export Buttons ]
    $('#basic-btn').DataTable({
      dom: 'Bfrtip',
      buttons: ['copy', 'csv', 'excel', 'print']
    });

    // [ Column Selectors ]
    $('#cbtn-selectors').DataTable({
      dom: 'Bfrtip',
      buttons: [
        {
          extend: 'copyHtml5',
          exportOptions: {
            columns: [0, ':visible']
          }
        },
        {
          extend: 'excelHtml5',
          exportOptions: {
            columns: ':visible'
          }
        },
        {
          extend: 'pdfHtml5',
          exportOptions: {
            columns: [0, 1, 2, 5]
          }
        },
        'colvis'
      ]
    });

    // [ Excel - Cell Background ]
    $('#excel-bg').DataTable({
      dom: 'Bfrtip',
      buttons: [
        {
          extend: 'excelHtml5',
          customize: function (xlsx) {
            var sheet = xlsx.xl.worksheets['sheet1.xml'];
            $('row c[r^="F"]', sheet).each(function () {
              if ($('is t', this).text().replace(/[^\d]/g, '') * 1 >= 500000) {
                $(this).attr('s', '20');
              }
            });
          }
        }
      ]
    });

    // [ Custom File (JSON) ]
    $('#pdf-json').DataTable({
      dom: 'Bfrtip',
      buttons: [
        {
          text: 'JSON',
          action: function (e, dt, button, config) {
            var data = dt.buttons.exportData();
            $.fn.dataTable.fileSave(new Blob([JSON.stringify(data)]), 'Export.json');
          }
        }
      ]
    });
  </script>

</body>
<!-- [Body] end -->

</html>