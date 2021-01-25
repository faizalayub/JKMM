<?php
  include('../../../login_functions.php');
    
  // INSERT COURSE
  if(isset($_POST['save'])) {
	$staff_name		    = $_POST['staff_name'];
	$course_name	  	= $_POST['course_name'];
  $course_organizer	= $_POST['course_organizer']; 
  $start_date		  	= $_POST['start_date'];
	$end_date	        = $_POST['end_date'];
	$total_days		    = $_POST['total_days'];
  $place		        = $_POST['place'];
        
                                   
    $insertCourse = "INSERT INTO course(Course_Name, Course_Organizer, Start_Date, End_Date, Total_Days, Place, Staff_ID) 
                     VALUES('$course_name','$course_organizer','$start_date','$end_date','$total_days','$place','$staff_name')"; 
    if (mysqli_query($connection, $insertCourse)) 
    {
        echo"<script>alert('Data berjaya disimpan')</script>";
        echo"<script>document.location='../tables/data.php';</script>";
    }else{
        echo"<script>alert('Maaf data tidak berjaya disimpan')</script>";
        echo"<script>document.location='../tables/data.php';</script>";
    }
}	


  // UPDATE COURSE
  if (isset($_POST['updatecourse'])) {
    $course_id 		    = $_POST['course_id'];
    $staff_name		    = $_POST['staff_name'];
    $course_name	  	= $_POST['course_name'];
    $course_organizer	= $_POST['course_organizer']; 
    $start_date		  	= $_POST['start_date'];
	  $end_date	        = $_POST['end_date'];
	  $total_days		    = $_POST['total_days'];
    $place		        = $_POST['place'];
	 

    $update = "UPDATE course SET Staff_ID='$staff_name', Course_Name='$course_name', Course_Organizer='$course_organizer', Start_Date='$start_date', End_Date='$end_date'
    ,          Total_Days='$total_days', Place='$place' WHERE Course_ID='$course_id'";
    if(mysqli_query($connection,$update))
    {
      echo"<script>alert('Data Staff berjaya dikemaskini')</script>";
      echo"<script>document.location='../tables/data.php'</script>";
    }else{
      echo"<script>alert('Data staff tidak berjaya dikemaskini')</script>";
      echo"<script>document.location='../tables/data.php'</script>"; 
    }
  }
?>