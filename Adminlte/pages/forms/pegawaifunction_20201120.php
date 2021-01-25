<?php
  include('../../../login_functions.php');

  // INSERT CHIEF
  if(isset($_POST['save'])){
    $chief_ic		      = $_POST['chief_ic'];
    $chief_name		  	= $_POST['chief_name'];
    $chief_position		= $_POST['chief_position'];
    $chief_grade      = $_POST['chief_grade'];
    $chief_contactno 	= $_POST['chief_contactno'];
  	$chief_email	    = $_POST['chief_email'];
    $chief_password		= md5('System1234');
    $department_name	= $_POST['department_name'];

    $check_email_query="select * from chief WHERE Chief_EmailAddr='$chief_email'";  
    $run_query=mysqli_query($connection,$check_email_query);  
    
    if(mysqli_num_rows($run_query)>0)  
    {  
      echo"<script>alert('Email $chief_email ini telah wujud. Sila guna email yang lain. Terima Kasih')</script>"; 
      echo"<script>document.location='addpegawai.php';</script>"; 
      exit();  
    }    

    $insert_user="INSERT INTO chief(Chief_IC, Chief_Name, Chief_Position, Chief_Grade, Chief_ContactNo, Chief_EmailAddr, Chief_Password, Department_ID) 
                  VALUES('$chief_ic','$chief_name','$chief_position','$chief_grade','$chief_contactno','$chief_email','$chief_password','$department_name')";  
    if(mysqli_query($connection,$insert_user))  
    {  
      echo"<script>alert('Daftar Pegawai berjaya')</script>";
      echo"<script>document.location='../tables/data.php';</script>";
    }else{
      echo"<script>alert('Data Pegawai tidak berjaya didaftarkan')</script>";
      echo"<script>document.location='addpegawai.php';</script>";
    }
  } 


  // UPDATE CHIEF
  if (isset($_POST['updatepegawai'])) {
    $chief_id		      = $_POST['chief_id'];
    $chief_ic		      = $_POST['chief_ic'];
    $chief_name		  	= $_POST['chief_name'];
    $chief_position		= $_POST['chief_position'];
    $chief_grade      = $_POST['chief_grade'];
    $chief_contactno 	= $_POST['chief_contactno'];
    $chief_email	    = $_POST['chief_email'];
    $department_name	= $_POST['department_name']; 

    $updatepeg = "UPDATE chief SET Chief_IC='$chief_ic', Chief_Name='$chief_name', Chief_Position='$chief_position', Chief_Grade='$chief_grade', 
                  Chief_ContactNo='$chief_contactno', Chief_EmailAddr='$chief_email', Department_ID='$department_name' WHERE Chief_ID='$chief_id'";
    if(mysqli_query($connection,$updatepeg))
    {
      echo"<script>alert('Data pegawai berjaya dikemaskini')</script>";
      echo"<script>document.location='../tables/data.php'</script>";
    }else{
      echo"<script>alert('Data pegawai tidak berjaya dikemaskini')</script>";
      echo"<script>document.location='../tables/data.php'</script>"; 
    }
}


  // RESET PASSWORD CHIEF
  if (isset($_POST['resetpegawai'])) {
    $chief_id		      = $_POST['chief_id'];
    $chief_password	  = md5($_POST['chief_password']); 

    $updatepeg = "UPDATE chief SET Chief_Password='$chief_password' WHERE Chief_ID='$chief_id'";
    if(mysqli_query($connection,$updatepeg))
    {
      echo"<script>alert('Kata Laluan berjaya dikemaskini')</script>";
      echo"<script>document.location='../tables/data.php'</script>";
    }else{
      echo"<script>alert('Kata Laluan tidak berjaya dikemaskini')</script>";
      echo"<script>document.location='../tables/data.php'</script>"; 
    }
}

?>