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

echo '
    <script>
        function docReady(fn) {            
            if (document.readyState === "complete" || document.readyState === "interactive") {                
                setTimeout(fn, 1);
            } else {
                document.addEventListener("DOMContentLoaded", fn);
            }
        }

        function redirect(c){
            let domain = window.location.href.split(\'Adminlte\')[0];
            window.location.href = `${ domain }${ c }`;
        }

        docReady(function() { 
            let targetMenuAppend = $(`nav.mt-2`);           
            let url = window.location.href.split("/");
            let d = url.findIndex(s => s == "Adminlte");
            let newUrlPath = url.slice(0, d);

            newUrlPath = newUrlPath.join("/");

            if(window.location.href.includes("Adminlte")){
                let onceRun = false;

                targetMenuAppend.html(`
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p> 2021 <i class="right fas fa-angle-left"></i> </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: block;">

                                <li class="nav-item">
                                    <a onclick="redirect(\'Adminlte/index2.php\')" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Halaman Utama</p>
                                    </a>
                                </li>

                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-edit"></i>
                                        <p>Borang<i class="fas fa-angle-left right"></i></p>
                                    </a>
                                    <ul class="nav nav-treeview" style="display: none;">
                                        <li class="nav-item">
                                            <a onclick="redirect(\'Adminlte/pages/forms/addadmin.php\')" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Daftar Admin</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a onclick="redirect(\'Adminlte/pages/forms/addpegawai.php\')" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Daftar Pegawai</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a onclick="redirect(\'Adminlte/pages/forms/addjabatan.php\')" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Daftar Jabatan</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-table"></i>
                                        <p>Laporan<i class="fas fa-angle-left right"></i></p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a onclick="redirect(\'Adminlte/pages/tables/data.php\')" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Data Pegawai</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a onclick="redirect(\'Adminlte/pages/tables/kursus.php\')" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Data Kursus</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item has-treeview">
                                    <a onclick="redirect(\'Adminlte/pages/forms/tukarpassword.php\')" class="nav-link">
                                        <i class="nav-icon fas fa-key"></i>
                                        <p> Tukar Kata Laluan</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p> 2020 <i class="right fas fa-angle-left"></i> </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: none;">

                                <li class="nav-item">
                                    <a onclick="redirect(\'Adminlte/index2.php\')" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Halaman Utama</p>
                                    </a>
                                </li>

                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-edit"></i>
                                        <p>Borang<i class="fas fa-angle-left right"></i></p>
                                    </a>
                                    <ul class="nav nav-treeview" style="display: none;">
                                        <li class="nav-item">
                                            <a onclick="redirect(\'Adminlte/pages/forms/addadmin.php\')" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Daftar Admin</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a onclick="redirect(\'Adminlte/pages/forms/addpegawai.php\')" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Daftar Pegawai</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a onclick="redirect(\'Adminlte/pages/forms/addjabatan.php\')" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Daftar Jabatan</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-table"></i>
                                        <p>Laporan<i class="fas fa-angle-left right"></i></p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a onclick="redirect(\'Adminlte/pages/tables/data.php\')" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Data Pegawai</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a onclick="redirect(\'Adminlte/pages/tables/kursus.php\')" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Data Kursus</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item has-treeview">
                                    <a onclick="redirect(\'Adminlte/pages/forms/tukarpassword.php\')" class="nav-link">
                                        <i class="nav-icon fas fa-key"></i>
                                        <p> Tukar Kata Laluan</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                `);
            }
        });

    </script>
';

?>