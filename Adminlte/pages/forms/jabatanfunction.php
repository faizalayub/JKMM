<?php
  include('../../../login_functions.php');

  // INSERT DEPARTMENT
  if(isset($_POST['save'])){
      $department_name  = $_POST['department_name'];
      $category_name	  = $_POST['category_name'];

      $connection = mysqli_connect('localhost', 'root', '', 'bpsm');
      $query1 = "select * from department WHERE Department_Name = '$department_name'";  
      $run1 = mysqli_query($connection,$query1);  
    
      if(mysqli_num_rows($run1)>0)  
      {  
        echo"<script>alert('$department_name ini telah wujud. Terima Kasih')</script>";
        echo"<script>document.location='addjabatan.php';</script>";  
        exit();  
      }    
        $insertdept="INSERT INTO department(Department_Name, Category_ID) VALUES('$department_name','$category_name')";  
        if(mysqli_query($connection,$insertdept))  
      {  
        echo"<script>alert('$department_name berjaya didaftarkan')</script>";
        echo"<script>document.location='addjabatan.php';</script>";
      }else{
        echo"<script>alert('$department_name tidak berjaya didaftarkan')</script>";
        echo"<script>document.location='addjabatan.php';</script>";
      }
  } 


  // UPDATE DEPARTMENT 
  if (isset($_POST['updatejabatan'])) {
    $department_id		= $_POST['department_id'];
    $department_name	= $_POST['department_name'];
    $category_name	  = $_POST['category_name'];
 
    $updatedept = "UPDATE department SET Department_Name='$department_name', Category_ID='$category_name' WHERE Department_ID='$department_id'";

    if(mysqli_query($connection,$updatedept))
    {
      echo"<script>alert('$department_name berjaya dikemaskini')</script>";
      echo"<script>document.location='addjabatan.php'</script>";
    }else{
      echo"<script>alert('$department_name tidak berjaya dikemaskini')</script>";
      echo"<script>document.location='addjabatan.php'</script>"; 
    }
  }
?>