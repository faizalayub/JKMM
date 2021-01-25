<?php

	include('../../../login_functions.php');
	
	//connection to localhost Apache web server and MySQL database server
  $connection = new mysqli('localhost', 'root', '', 'bpsm');


  $u = $_SESSION ['admin'];
  $query   = "SELECT * FROM admin WHERE Admin_EmailAddr ='$u'";
  $result  = mysqli_query($connection,$query);
  $record  = mysqli_fetch_array($result);		
  
  $admin_email2   =  $record['Admin_EmailAddr'];
  $admin_id2      =  $record['Admin_ID'];
  $admin_name2    =  $record['Admin_Name'];


  
	// DELETE ADMIN
	if (isset($_GET['deladmin'])) {
		$admin_id = $_GET['deladmin'];
    mysqli_query($connection, "DELETE FROM admin WHERE Admin_ID = $admin_id");

		echo"<script>alert('Data admin telah dihapuskan')</script>";
		echo"<script>document.location='addadmin.php'</script>";
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
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   <!-- Google Icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  .edit_btn {
      text-decoration: none;
      padding: 2px 5px;
      background: #2E8B57;
      color: white;
      border-radius: 3px;
  }

  .reset_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #E38105;
    color: white;
    border-radius: 3px;
}

  .del_btn {
      text-decoration: none;
      padding: 2px 5px;
      color: white;
      border-radius: 3px;
      background: #800000;
  }

  div.ex1 {
    overflow: scroll;
  }
</style>
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
        <a class="nav-link" data-slide="true" href="../../../login_functions.php?logout='1'" onClick="return confirm('Are you sure to log out?');">
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
                <a href="../forms/addadmin.php" class="nav-link active">
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
          <li class="nav-item has-treeview">
            <a href="tukarpassword.php" class="nav-link">
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
            <h1>Daftar Admin</h1>
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
                <h3 class="card-title">Sila isi ruang kosong</h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form role="form" id="quickForm" method="post" action="adminfunction.php">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Penuh</label>
                    <input type="text" class="form-control" id="nama" name="admin_name" style="text-transform:uppercase" required>
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" id="email"  name="admin_email" required>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="save">Daftar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- View Table Admin -->
            <section class="content">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Data Admin</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <div class="ex1">
                    <?php                    
                    $resultsadmin = mysqli_query($connection, "SELECT * FROM admin"); 
                    $counter = 1;
                    ?>
                      <table id="example1" class="table table-bordered" style="font-size:14px !important" >
                        <thead>
                        <tr style="text-align:center">
                          <th>ID</th>
                          <th>NAMA</th>
                          <th>EMAIL</th>
                          <th>PASSWORD</th>
                          <th>ACTION</th>                
                        </tr>
                        </thead>

                      <?php while ($row = mysqli_fetch_array($resultsadmin)) { ?>
                        <tr>
                        <td style="text-align:center"><?php echo $counter; ?></td> 
                        <td style="text-transform:uppercase"><?php echo $row['Admin_Name']; ?></td> 
                        <td><?php echo $row['Admin_EmailAddr']; ?></td>
                        <td><?php echo $row['Admin_Password']; ?></td> 
                        <td><center>
                        <a href="editadmin.php?editadmin=<?php echo $row['Admin_ID'];?>" class="edit_btn btn"><i class="fa fa-pencil-square-o"></i></a>&nbsp;&nbsp;
                        <a href="resetadmin.php?resetadmin=<?php echo $row['Admin_ID'];?>" class="reset_btn btn"><i class="fa fa-key"></i></a>
                        <a href="addadmin.php?deladmin=<?php echo $row['Admin_ID'];?>" onClick="return confirm('Adakah anda pasti untuk hapuskan data ini?');" class="del_btn btn"><i class="fa fa-trash-o"></i></a>
                        </center></td>
                        </tr>              
                      <?php $counter++; } ?>
                      </table>

                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </section>
            <!-- /.content -->

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
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
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
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>