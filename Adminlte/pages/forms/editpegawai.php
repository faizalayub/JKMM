<?php

	include('../../../login_functions.php');

  $u = $_SESSION ['admin'];
  $query   = "SELECT * FROM admin WHERE Admin_EmailAddr ='$u'";
  $result  = mysqli_query($connection,$query);
  $record  = mysqli_fetch_array($result);		
  
  $admin_email2   =  $record['Admin_EmailAddr'];
  $admin_id2      =  $record['Admin_ID'];
  $admin_name2    =  $record['Admin_Name'];


  if(isset($_GET['editpegawai'])) {
  $chief_id = $_GET['editpegawai'];
  $record2 = mysqli_query($connection, "SELECT * FROM chief WHERE Chief_ID='$chief_id'");

  if (mysqli_num_rows($record2) > 0) {
    $chief = mysqli_fetch_array($record2);
    $chief_ic 		    = $chief['Chief_IC'];
    $chief_name     	= $chief['Chief_Name'];
    $chief_position 	= $chief['Chief_Position'];
    $chief_grade 	  	= $chief['Chief_Grade'];
    $chief_contactno  = $chief['Chief_ContactNo'];
    $chief_email      = $chief['Chief_EmailAddr'];
    $chief_password   = $chief['Chief_Password'];
    $department_name	= $chief['Department_ID'];
  }

}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index2.php" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-slide="true" href="../../../login_functions.php?logout='1'">
          <i class="nav-icon fas fa-power-off" title="Log Keluar"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <center>
    <a href="../../index2.php" class="brand-link">
      <span class="brand-text font-weight-light"><b><h3>Selamat Datang</h3></b></span>
    </a>
    </center>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="pages/forms/addadmin.php" style="text-transform:uppercase" class="d-block"><?php echo $record['Admin_Name'];?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Halaman Utama
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jumlah Peratus</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Borang
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../forms/addadmin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/addpegawai.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/addjabatan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Jabatan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../tables/data.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/kursus.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kursus</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Maklumat Pegawai</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../tables/data.php">Kembali</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary" >
              <div class="card-header">
                <h3 class="card-title">Sila Kemaskini Maklumat Pegawai</small></h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form role="form" id="view pegawai" method="post" action="pegawaifunction.php">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Penuh</label>
                    <input type="text" class="form-control" id="namapenuh" name="chief_name" placeholder="" value="<?php echo $chief_name; ?>" style="text-transform:uppercase" required>
                  </div>
                  <div class="form-group">
                    <label>No Kad Pengenalan</label>
                    <input type="text" class="form-control" id="ic" name="chief_ic" placeholder="Contoh: 930101046140" value="<?php echo $chief_ic; ?>"  required> 
                  </div>

                  <div class="form-group">
                    <label>Jabatan</label>
                    <select class="form-control" id="jabatan" name="department_name" style="text-transform:uppercase" required>
                    <?php
                      $list = mysqli_query($connection,"SELECT * FROM department");
                      while ($rowdept = mysqli_fetch_array($list)) {
                        $activeOpt = ($rowdept['Department_ID'] == $chief['Department_ID'] ? 'selected' : '');
                    ?>
                      <option <?php echo $activeOpt; ?> value="<?php echo $rowdept['Department_ID']; ?>"><?php echo $rowdept['Department_Name']; ?></option>
                    <?php 
                      } 
                    ?>      
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Jawatan</label>
                    <input type="text" class="form-control" id="jawatan" name="chief_position" placeholder="" value="<?php echo $chief_position; ?>" style="text-transform:uppercase" required>
                  </div>
                  <div class="form-group">
                    <label>Gred</label>
                    <input type="text" class="form-control" id="gred" name="chief_grade" placeholder="" value="<?php echo $chief_grade; ?>" style="text-transform:uppercase" required>
                  </div>
                  <div class="form-group">
                    <label>No. Tel HP</label>
                    <input type="text" class="form-control" id="phone" name="chief_contactno" placeholder="Contoh:0171234567" value="<?php echo $chief_contactno; ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" id="email" name="chief_email" placeholder="" value="<?php echo $chief_email; ?>" required>
                  </div>
                  <!-- post hidden input chief_id -->
                  <input type="hidden" name="chief_id" value="<?php echo $chief_id; ?>">
                  <button type="submit" class="btn btn-primary" name="updatepegawai">Kemaskini Pegawai</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>