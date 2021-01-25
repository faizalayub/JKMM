<?php

  include('../../../login_functions.php');
	
  $u = $_SESSION ['admin'];
  $query   = "SELECT * FROM chief WHERE Chief_EmailAddr ='$u'";
  $result  = mysqli_query($connection,$query);
  $record  = mysqli_fetch_array($result);

  $chief_id2	        =  $record['Chief_ID'];
  $chief_ic2	        =  $record['Chief_IC'];
  $chief_name2    	  =  $record['Chief_Name'];
  $chief_position2	  =  $record['Chief_Position'];
  $chief_grade2	      =  $record['Chief_Grade'];
  $chief_contact_no2  =  $record['Chief_ContactNo'];
  $chief_email2       =  $record['Chief_EmailAddr'];
  $department_name2   =  $record['Department_ID'];
  
  
  // DELETE STAFF
	if (isset($_GET['delstaff'])) {
		$staff_id = $_GET['delstaff'];
		mysqli_query($connection, "DELETE FROM staff WHERE Staff_ID = $staff_id");
		
		echo"<script>window.alert('Data Staff telah dihapuskan')</script>";
		echo"<script>document.location='datastaff.php'</script>";
	}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>AdminLTE 3 | DataTables</title>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
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
          <a href="#" style="text-transform:uppercase" class="d-block"><?php echo $record['Chief_Name'];?></a>
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
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Borang
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../forms/staffadd.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Staff</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/kursusadd.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Kursus</p>
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
                <a href="../tables/datastaff.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Staff</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/data.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kursus</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="../forms/tukarpassword.php" class="nav-link">
              <i class="nav-icon fas fa-key"></i>
              <p>
                Tukar Kata Laluan
                <i class="fas fa-angle-left right"></i>
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
            <h1>Data Staff</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
            <div class="ex1">

              <?php   
                $resultstaff = mysqli_query($connection, "select * from staff WHERE Chief_ID = '".$chief_id2."'"); 
                $counter = 1;
              ?>

              <table id="example1" class="table table-bordered" style="text-transform:uppercase" style="font-size:14px !important">
                <thead>
                  <tr style="text-align:center">
                    <th>BIL</th>
                    <th>NAMA</th>
                    <th>JABATAN</th>
                    <th>JAWATAN</th>
                    <th>GRED</th>
                    <th>KUMPULAN PERKHIDMATAN</th>
                    <th>JUMLAH KURSUS</th>
                    <th>ACTION</th>                   
                  </tr>
                </thead>
                  <?php 
                                
                  while ($row = mysqli_fetch_array($resultstaff)) { 
                    
                    $deptinfo = mysqli_fetch_assoc(mysqli_query($connection, "SELECT Department_Name FROM `department` WHERE Department_ID = '".$row['Department_ID']."'"));   
                    $countCourses = mysqli_fetch_assoc(mysqli_query($connection, "SELECT count(*) as totalCourse FROM course WHERE Staff_ID = '".$row['Staff_ID']."'"));   

                  ?>
			            <tr>
                    <td style="text-align:center"><?php echo $counter; ?></td> 
                    <td><?php echo $row['Staff_Name']; ?></td> 
                    <td><?php echo $deptinfo['Department_Name']; ?></td>     
                    <td><?php echo $row['Staff_Position']; ?></td>
                    <td><?php echo $row['Staff_Grade']; ?></td>
                    <td><?php echo $row['Staff_Group']; ?></td>
                    <td style="text-align:center"><?php echo $countCourses['totalCourse']; ?></td>
                    <td style="text-align:center">
                    <a href="../forms/staffupdate.php?editstaff=<?php echo $row['Staff_ID'];?>" class="edit_btn btn"><i class="fa fa-pencil-square-o"></i></a>               
                    <a href="datastaff.php?delstaff=<?php echo $row['Staff_ID'];?>" onClick="return confirm('Adakah anda pasti untuk hapuskan data ini?');" class="del_btn btn"><i class="fa fa-trash-o"></i></a>
                    </td>
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
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
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