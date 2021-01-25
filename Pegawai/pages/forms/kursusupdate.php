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

  $staff_name       = "";
  $course_name      = "";
  $course_organizer = ""; 
  $start_date       = "";
  $end_date         = "";
  $total_days       = "";
  $place            = "";


  if(isset($_GET['editcourse'])) {
    $course_id = $_GET['editcourse'];
    //$record11 = mysqli_query($connection, "SELECT * FROM course WHERE Course_ID='$course_id'");
	$record11 = mysqli_query($connection, "SELECT * from course left join staff on course.Staff_ID = staff.Staff_ID  WHERE Course_ID='".$course_id."'"); 

      if (mysqli_num_rows($record11) > 0) {
        $course = mysqli_fetch_array($record11);

        //$staff_id     	= $course['Staff_ID'];
        $staff_name 		= $course['Staff_Name'];
        $course_name	  	= $course['Course_Name'];
        $course_organizer	= $course['Course_Organizer']; 
        $start_date		    = $course['Start_Date'];
        $end_date	        = $course['End_Date'];
        $total_days		    = $course['Total_Days'];
        $place		        = $course['Place'];

        $staffdata = mysqli_query($connection, "SELECT * FROM `bpsm`.`staff` WHERE `Staff_ID`=".$course['Staff_ID']);
        if (mysqli_num_rows($staffdata) > 0) {
          $staffdata = mysqli_fetch_array($staffdata);
        }
 
      }else{
        echo "<script>alert('Data Not Found!');history.go(-1);</script>";
      }
    }
	
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pegawai</title>
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
   <!-- daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <script type="text/javascript">
        function GetDays(){
                var edate = new Date(document.getElementById("end").value);
                var sdate = new Date(document.getElementById("start").value);
                return parseInt((edate - sdate) / (24 * 3600 * 1000));
        }

        function cal(){
        if(document.getElementById("end")){
            document.getElementById("hari").value=GetDays();
        }  
    }

  </script>
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
      <!-- Messages Dropdown Menu -->
      
      <a class="nav-link" data-slide="true" href="../../../login_functions.php?logout='1'">
          <i class="nav-icon fas fa-power-off" title="Log Keluar"></i>
        </a>
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i></a>
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
                <a href="../forms/staffadd.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Staff</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/kursusadd.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Kursus</p>
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
                <a href="../tables/datastaff.php" class="nav-link">
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

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Kursus</h1>
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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sila Kemas kini Maklumat Kursus</small></h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form role="form" id="view kursus" method="post" action="kursusfunction.php">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Penuh</label>
                    <input type="text" class="form-control" id="namapenuh" name="staff_name" placeholder=""  value="<?php echo $staff_name; ?>" style="text-transform:uppercase" required>
                  </div>
                  <div class="form-group">
                    <label for="kursus">Tajuk Kursus</label>
                    <input type="kursus" class="form-control" id="kursus" name="course_name" placeholder="" value="<?php echo $course_name; ?>" style="text-transform:uppercase" required>
                  </div>
                    <!-- Date range -->
                  <div class="form-group">
                    <label>Tarikh Mula Kursus</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="far fa-calendar-alt"></i>
                        </span>
                      </div>
                      <input type="date" class="form-control float-right" id="start" name="start_date" value="<?php echo $start_date; ?>" onchange="cal()">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Tarikh Akhir Kursus</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="far fa-calendar-alt"></i>
                        </span>
                      </div>
                      <input type="date" class="form-control float-right" id="end" name="end_date" value="<?php echo $end_date; ?>" onchange="cal()">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label for="hari">Bilangan Hari</label>
                    <input type="text" class="form-control" id="hari" name="total_days" placeholder="" value="<?php echo $total_days; ?>" required> 
                  </div>
                  <div class="form-group">
                    <label for="place">Tempat Berkursus</label>
                    <input type="place" class="form-control" id="place" name="place" placeholder="" value="<?php echo $place; ?>" style="text-transform:uppercase" required>
                  </div>
                  <div class="form-group">
                    <label for="anjuran">Anjuran</label>
                    <input type="anjuran" class="form-control" id="anjuran" name="course_organizer" placeholder="" value="<?php echo $course_organizer; ?>" style="text-transform:uppercase" required>
                  </div>
                   <!-- post hidden input course_id -->
                   <input type="hidden" name="course_id" value="<?php echo $course_id; ?>">
                  <button type="submit" class="btn btn-primary" name="updatecourse">Kemaskini Kursus</button>
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
