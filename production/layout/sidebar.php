<?php include('config/koneksi.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SIMINBA</title>

    <!-- jQuery UI-->
    <link href="../vendors/jquery-ui/jquery-ui.css" rel="stylesheet">
    <!-- jQuery-->
    <link href="../vendors/jquery/dist/jquery.css" rel="stylesheet"
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!--Date Picker-->
    <link href="../vendors/bootstrap-datepicker/css/bootstrap-datepicker3-min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!--Datetime Picker-->
    <link href="../vendors/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="css/custom.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>SIMINBA!</span></a>
            </div>

            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="<?php echo $_SESSION['foto']; ?>" height="80" width="80" class="img-circle" alt="User Image" style="border: 3px solid white;" />
              </div>
              <div class="profile_info">
                <span>Welcome, <p><?php echo $_SESSION['fullname']; ?></p></span>
              </div>
            </div>
            <!-- /menu profile quick info -->
            </br>
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3><?php echo $_SESSION['akses']; ?></h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php">Dashboard</a>
                      </li>
                      
                    </ul>
                  </li>
                 
                   <?php 
                    if (isset($_SESSION['akses'])) {
                      if ($_SESSION['akses'] == 'admin') {
                  ?>
                  <li><a><i class="fa fa-user"></i> User <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?user=user">Tabel User</a>
                      </li>
                    </ul> 
                  </li>
                  <li><a><i class="fa fa-edit"></i> Forms Master<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?suppliers=suppliers-create-form">Form Supplier</a>
                      </li>
                      <li><a href="?customers=customers-create-form">Form Customers</a>
                      </li>
                      <li><a href="?barang=barang-create-form">Form Barang</a>
                      </li>
                      <li><a href="?satuan=satuan-create-form">Form Satuan</a>
                      </li>
                      <li><a href="?penerimaan=penerimaan-create-form">Form Penerimaan</a>
                      </li>
                      <li><a href="?pengiriman=pengiriman-create-form">Form Pengiriman</a>
                      </li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?suppliers=suppliers">Suppliers</a>
                      </li>
                      <li><a href="?customers=customers">Customer</a>
                      </li>
                      <li><a href="?barang=barang">Barang</a>
                      </li>
                      <li><a href="?satuan=satuan">Satuan</a>
                      </li>
                      <li><a href="?penerimaan=penerimaan">Penerimaan</a>
                      </li>
                      <li><a href="?pengiriman=pengiriman">Pengiriman</a>
                      </li>
                      <li><a href="?user=user">User</a>
                      </li>
                    </ul>
                  </li>
                  
                  <?php
                      }elseif ($_SESSION['akses'] == 'bag.gudang') {
                  ?>
                  <li><a><i class="fa fa-edit"></i> Forms Master<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?suppliers=suppliers-create-form">Form Supplier</a>
                      </li>
                      <li><a href="?customers=customers-create-form">Form Customers</a>
                      </li>
                      <li><a href="?barang=barang-create-form">Form Barang</a>
                      </li>
                      <li><a href="?satuan=satuan-create-form">Form Satuan</a>
                      </li>
                      <li><a href="?penerimaan=penerimaan-create-form">Form Penerimaan</a>
                      </li>
                      <li><a href="?pengiriman=pengiriman-create-form">Form Pengiriman</a>
                      </li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?suppliers=suppliers">Suppliers</a>
                      </li>
                      <li><a href="?customers=customers">Customer</a>
                      </li>
                      <li><a href="?barang=barang">Barang</a>
                      </li>
                      <li><a href="?satuan=satuan">Satuan</a>
                      </li>
                      </li>
                      <li><a href="?penerimaan=penerimaan">Penerimaan</a>
                      </li>
                      <li><a href="?pengiriman=pengiriman">Pengiriman</a>
                      </li>
                    </ul>
                  </li>
                    <?php
            }
          }
        ?>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
