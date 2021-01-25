<?php
  include('../../../login_functions.php');

  // INSERT ADMIN
  if(isset($_POST['save'])){
    $admin_name		  	= $_POST['admin_name'];
  	$admin_email	    = $_POST['admin_email'];
    $admin_password		= md5('Admin1234');

    $check_admin="select * from admin WHERE Admin_EmailAddr='$admin_email'";  
    $run_admin=mysqli_query($connection,$check_admin);  
    
    if(mysqli_num_rows($run_admin)>0)  
    {  
      echo"<script>alert('Email $admin_email ini telah wujud. Sila guna email yang lain. Terima Kasih')</script>";
      echo"<script>document.location='addadmin.php';</script>";  
      exit();  
    }    

    $admin="INSERT INTO admin(Admin_Name, Admin_EmailAddr, Admin_Password) 
            VALUES('$admin_name','$admin_email','$admin_password')"; 
    if(mysqli_query($connection,$admin))
    {
      echo"<script>alert('Admin berjaya didaftarkan')</script>";
      echo"<script>document.location='addadmin.php';</script>";
    }else{
      echo"<script>alert('Admin tidak berjaya didaftarkan')</script>";
      echo"<script>document.location='addadmin.php';</script>";
    }
  }


  // UPDATE ADMIN 
  if (isset($_POST['updateadmin'])) {
    $admin_id		     = $_POST['admin_id'];
    $admin_name		   = $_POST['admin_name'];
    $admin_email	   = $_POST['admin_email'];
    $admin_password	 = md5($_POST['admin_password']);
 
    $updatead = "UPDATE admin SET Admin_Name='$admin_name', Admin_EmailAddr='$admin_email', Admin_Password='$admin_password' WHERE Admin_ID='$admin_id'";

    if(mysqli_query($connection,$updatead))
    {
      echo"<script>alert('Data Admin berjaya dikemaskini....')</script>";
      echo"<script>document.location='addadmin.php'</script>";
    }else{
      echo"<script>alert('Data Admin tidak berjaya dikemaskini....')</script>";
      echo"<script>document.location='addadmin.php'</script>"; 
    }
  }


  
  // RESET PASSWORD ADMIN
  if (isset($_POST['resetadmin'])) {
    $admin_id		      = $_POST['admin_id'];
    $admin_password	  = md5($_POST['admin_password']); 

    $updatead = "UPDATE admin SET Admin_Password='$admin_password' WHERE Admin_ID='$admin_id'";
    if(mysqli_query($connection,$updatead))
    {
      echo"<script>alert('Kata Laluan berjaya dikemaskini')</script>";
      echo"<script>document.location='addadmin.php'</script>";
    }else{
      echo"<script>alert('Kata Laluan tidak berjaya dikemaskini')</script>";
      echo"<script>document.location='addadmin.php'</script>"; 
    }
}


?>