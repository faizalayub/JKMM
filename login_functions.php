<?php
session_start(); // Starting a session

$connection = mysqli_connect("localhost", "root", "", "bpsm");  
//$connection = mysqli_connect("dbhosting.melaka.gov.my", "ppsm", "ppsm1028#", "epljkmm");
if (!$connection)
{
    die('Could not connect:'. mysqli_connect_error());

}


//To log the user in
if(isset($_POST["login"])){

    // Getting Post Values From Login Form
    $email = $_POST['login_email'];
    $password = md5($_POST['login_password']); // Add MD5 to password encryption


    $_SESSION['admin']=$email;
    $_SESSION['pass']=$password;


    $query = "SELECT * FROM admin WHERE Admin_EmailAddr = '$email' AND Admin_Password = '$password'";
    $select = mysqli_query($connection,$query);
    $check1 = (mysqli_num_rows($select));

    $login = mysqli_query($connection,"SELECT * FROM chief WHERE Chief_EmailAddr = '$email' AND Chief_Password = '$password'");
    $check2 = mysqli_num_rows($login);


    if($check1 == true)
    {
        echo"<script>document.location='Adminlte/index2.php'</script>";
    }
    else if($check2 > 0)
    {
        echo"<script>document.location='Pegawai/index2.php'</script>";
    }
    else
    {
        echo"<center><h2 style='color:red'>Access Denied</h2></center>";
    }           
}
         
//To log the user out
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user_id']);
	header("location: index.php");
}

//When this function is called, it tells you if a user is logged in or not by returning true or false.
function isLoggedIn(){
	if (isset($_SESSION['user_id'])) {
		return true;
	}else{
		return false;
	}
}
?>