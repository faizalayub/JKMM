 <?php

  include('../../../login_functions.php');
	
  $u = $_SESSION ['admin'];
  $query   = "SELECT * FROM chief WHERE Chief_EmailAddr ='$u'";
  $result  = mysqli_query($connection,$query);
  $record  = mysqli_fetch_array($result);
  
  $chief_id2	      =  $record['Chief_ID'];
  $department_name2 =  $record['Department_ID'];
	
    
  // INSERT STAFF 
  if(isset($_POST['save'])) {
	  $staff_name		  = $_POST['staff_name'];
	  $staff_position	= $_POST['staff_position'];
    $staff_grade		= $_POST['staff_grade'];
    $staff_group		= $_POST['staff_group'];
    
    $check_name="select * from staff WHERE Staff_Name='$staff_name'";  
    $run_query=mysqli_query($connection,$check_name);  
    
    if(mysqli_num_rows($run_query)>0)  
    {  
      echo"<script>alert('Nama $staff_name ini telah wujud. Terima Kasih')</script>"; 
      echo"<script>document.location='staffadd.php';</script>"; 
      exit();  
    } 

	  $insertStaff = "INSERT INTO staff(Staff_Name, Staff_Position, Staff_Grade, Staff_Group, Chief_ID, Department_ID) 
                    VALUES('$staff_name','$staff_position','$staff_grade','$staff_group','$chief_id2','$department_name2')"; 
    if (mysqli_query($connection, $insertStaff)) 
    {
        echo"<script>alert('Data staff berjaya disimpan..')</script>";
        echo"<script>document.location='../tables/datastaff.php';</script>";
    }else{
        echo"<script>alert('Data staff tidak berjaya disimpan...')</script>";
        echo"<script>document.location='../tables/datastaff.php';</script>";
    }
  }
                                   

  // UPDATE STAFF
  if (isset($_POST['updatestaff'])) {
    $staff_id 		  = $_POST['staff_id'];
    $staff_name		  = $_POST['staff_name'];
	  $staff_position	= $_POST['staff_position'];
    $staff_grade		= $_POST['staff_grade'];
    $staff_group		= $_POST['staff_group']; 

    $updates = "UPDATE staff SET Staff_Name='$staff_name', Staff_Position='$staff_position', Staff_Grade='$staff_grade', Staff_Group='$staff_group' WHERE Staff_ID='$staff_id'";
    if(mysqli_query($connection,$updates))
    {
      echo"<script>alert('Data Staff berjaya dikemaskini')</script>";
      echo"<script>document.location='../tables/datastaff.php'</script>";
    }else{
      echo"<script>alert('Data Staff tidak berjaya dikemaskini')</script>";
      echo"<script>document.location='../tables/datastaff.php'</script>"; 
    }
  }

?>