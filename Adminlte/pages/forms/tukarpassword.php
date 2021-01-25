<?php

  include('../../../login_functions.php');
	
  //connection to localhost Apache web server and MySQL database server
  $connection = new mysqli('localhost', 'root', '', 'bpsm');


  $u = $_SESSION ['admin'];
  $query   = "SELECT * FROM admin WHERE Admin_EmailAddr ='$u'";
  $result  = mysqli_query($connection,$query);
  $record  = mysqli_fetch_array($result);		
  
  $ad_email_addr   	=  $record['Admin_EmailAddr'];
  $ad_id            =  $record['Admin_ID'];
  $ad_name        	=  $record['Admin_Name'];
  

  if(isset($_POST['submit'])){

    $_POST["currentPassword"];
    $_POST["newPassword"];


    if (count($_POST) > 0) {
      $result2 = mysqli_query($connection, "SELECT * FROM admin WHERE Admin_EmailAddr='" . $_SESSION["admin"] . "'");
      $row = mysqli_fetch_array($result2);

      if (md5($_POST["currentPassword"]) == $row["Admin_Password"]) {
          mysqli_query($connection, "UPDATE admin set Admin_Password='" . md5($_POST["newPassword"]) . "' WHERE Admin_EmailAddr='" . $_SESSION["admin"] . "'");
          echo"<script>window.alert('Kata Laluan berjaya')</script>";
          echo"<script>document.location='../../index2.php';</script>"; 
      } else
      echo"<script>window.alert('Kata Laluan gagal')</script>";
  }

  }


?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tukar Kata Laluan</title>
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
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
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
          <a href="pages/forms/editadmin.php" style="text-transform:uppercase" class="d-block"><?php echo $record['Admin_Name'];?></a>
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
          <li class="nav-item has-treeviewn">
            <a href="#" class="nav-link">
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
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../tables/data.php" class="nav-link">
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
          <li class="nav-item has-treeview menu-open">
            <a href="tukarpassword.php" class="nav-link active">
              <i class="nav-icon fas fa-key"></i>
              <p>
               Tukar Kata Laluan
              <i class="right fas fa-angle-left"></i>
              </p>
            </a>
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
            <h1>Kata Laluan</h1>
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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sila Tukar Kata Laluan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form name ="form" id="quickForm" method="post" onSubmit="return validatePassword()">
                <div class="card-body">
                  <div class="form-group">
                    <label>Kata Laluan Lama</label>&nbsp;&nbsp;&nbsp;
                    <input class="w3-input w3-border w3-round-medium" type="password" name="currentPassword" id="currentPassword"
			        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}" title="Password must contain at least 1 number, 1 uppercase and 1 lowercase letter. 
                    The password length should be at least 8 or more characters, may contains symbols" required>
                  </div>
                  <div class="form-group">
                    <label>Kata Laluan Baru</label>&nbsp;&nbsp;&nbsp;
                    <input class="w3-input w3-border w3-round-medium" type="password" name="newPassword" id="newPassword"
			        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}" title="Password must contain at least 1 number, 1 uppercase and 1 lowercase letter. 
                    The password length should be at least 8 or more characters, may contains symbols" required>
                  </div>
                  <div class="form-group">
                    <label>Sahkan Kata Laluan</label>&nbsp;&nbsp;&nbsp;
                    <input class="w3-input w3-border w3-round-medium" type="password" name="confirmPassword" id="confirmPassword"
			        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}" title="Password must contain at least 1 number, 1 uppercase and 1 lowercase letter. 
                    The password length should be at least 8 or more characters, may contains symbols" required>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit">Tukar Kata Laluan</button>
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
<!-- jquery-validation -->
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script type="text/javascript">
  function validatePassword() {
    var currentPassword,newPassword,confirmPassword,output = true;

    currentPassword = document.form.currentPassword;
    newPassword = document.form.newPassword;
    confirmPassword = document.form.confirmPassword;

    if(!currentPassword.value) {
      currentPassword.focus();
      document.getElementById("currentPassword").innerHTML = "required";
      output = false;
    }
    else if(!newPassword.value) {
      newPassword.focus();
      document.getElementById("newPassword").innerHTML = "required";
      output = false;
    }
    else if(!confirmPassword.value) {
      confirmPassword.focus();
      document.getElementById("confirmPassword").innerHTML = "required";
      output = false;
    }
    if(newPassword.value != confirmPassword.value) {
      newPassword.value="";
      confirmPassword.value="";
      newPassword.focus();
      document.getElementById("confirmPassword").innerHTML = "not same";
      output = false;
    } 	
  return output;
  }
</script>
</body>
</html>
