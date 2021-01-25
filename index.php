<?php
	include('login_functions.php');
	if (isset($_SESSION['user_id'] )){
		$user_id = $_SESSION['user_id'];
	}else{
		$user_id = 0;
	}
?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>JKMM</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="//fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Nunito:400,600,700,800,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="classes/css/w3.css">
  <link rel="stylesheet" href="classes/css/modal form.css">
  <link rel="stylesheet" href="classes/css/drop down.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
    
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 300px;
      margin: auto;
      text-align: center;
      font-family: arial;
    }
    
    .price {
      color: grey;
      font-size: 22px;
    }
    
    .card button {
      border: none;
      outline: 0;
      padding: 12px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
    }
    
    .card button:hover {
      opacity: 0.7;
    }
    
    /* Three image containers (use 25% for four, and 50% for two, etc) */
    .column {
      float: right;
      width: 50%;
      padding: 10px;
    }
    
    /* Clear floats after image containers */
    .row::after {
      content: "";
      clear: both;
      display: table;
    }
    </style>


<body>
<section class="w3l-bootstrap-header">
  <nav class="navbar navbar-expand-lg navbar-light bg-primary py-lg-2 py-2 px-sm-0 px-2">
    <div class="container">
     <a class="navbar-brand" href="index.php"><img src="img/LogoMelaka.png" alt="reflection" style="height:50px;"/>&nbsp;&nbsp;JKMM</a>
      <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active">
            <h5><a class="nav-link" href="index.php"><b>BPSM</b><span class="sr-only">(current)</span></a></h5>
          </li>
          <li class="nav-item">
            <h5><a class="nav-link" href="index.php#about"><b>Latar Belakang</b></a></h5>
          </li>
          <li class="nav-item">
            <h5><a class="nav-link" href="index.php#services"><b>Latihan</b></a></h5>
          </li>
          <li class="nav-item">
            <h5><a class="nav-link" href="index.php#portfolio"><b>Album</b></a></h5>
          </li>
          <li class="nav-item">
            <h5><a class="nav-link" href="index.php#contact"><b>Hubungi Kami</a></h5>
          </li>
        </ul>
        <div class="form-inline">
            <button onclick="document.getElementById('Login').style.display='block'" class="btn btn-light">&nbsp;</i>Log Masuk
        </div>
      </div>
    </div>
  </nav>
</section>


<section class="w3l-carousel">
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>

<!--LOGIN FORM-->
<div id="Login" class="modal">
  <form class="modal-content animate w3-round-xlarge" method="post" action="index.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('Login').style.display='none'" class="close">&times;</span>
	  <h3><i class="fa fa-user-circle w3-margin-right"></i>Log Masuk Sistem</h3>
    </div>
    <div class="container">
      <label><b>Email</b></label>
      <input class="w3-input w3-border w3-round-medium" type="text" placeholder="Enter email address" name="login_email" 
	           pattern="[a-zA-Z0-9-\_.]+@[a-zA-Z0-9-\_.]+\.[a-zA-Z0-9.]" title="Please enter a registered email. eg:xxx@gmail.com" required>  
	  <p>
      <label><b>Kata Laluan</b></label>
      <input class="w3-input w3-border w3-round-medium" type="password" placeholder="Enter password" name="login_password" 
			       pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}" title="Password must contain at least 1 number, 1 uppercase and 1 lowercase letter. 
             The password length should be at least 8 or more characters, may contains symbols" required>  
	  <br><br>
      <button class="w3-blue w3-round-medium" type="submit" name="login">Log Masuk</button>	
      <br><br>	
      <button onclick="document.getElementById('Signup').style.display='block'" class="btn btn-light">&nbsp;</i>Belum mendaftar? Klik disini untuk Daftar Baru
    </div>
  </form>
</div>


<!--SIGN UP FORM-->
<div id="Signup" class="modal" method="post">
  <form class="modal-content animate w3-round-xlarge" method="post" action="index.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('Signup').style.display='none'" class="close">&times;</span>
	  <h3><i class="fa fa-user-circle w3-margin-right"></i>Pendaftaran Pegawai Baru</h3>
    </div>
    <div class="container">
      <label><b>Nama</b></label>
      <input class="w3-input w3-border w3-round-medium" type="text" name="chief_name" style="text-transform:uppercase" required>  
    <p>
      <label><b>No kad Pengenalan</b></label>
      <input class="w3-input w3-border w3-round-medium" type="text" name="chief_ic" placeholder="Contoh: 930101046140" required>  
    <p>
      <label><b>Jabatan</b></label>
      <select class="form-control" name="department_name" style="text-transform:uppercase" required>
          <?php
            $list = mysqli_query($connection,"SELECT * FROM department");
            while ($rowdept = mysqli_fetch_array($list)) { ?>
            <option value="<?php echo $rowdept['Department_ID']; ?>"> <?php echo $rowdept['Department_Name']; ?></option>
          <?php } ?>      
      </select>
    <p>
      <label><b>Jawatan</b></label>
      <input class="w3-input w3-border w3-round-medium" type="text" name="chief_position" style="text-transform:uppercase" required>  
    <p>
      <label><b>Gred</b></label>
      <input class="w3-input w3-border w3-round-medium" type="text" name="chief_grade" style="text-transform:uppercase" required> 
    <p>
      <label><b>No. Tel HP</b></label>
      <input class="w3-input w3-border w3-round-medium" type="text" name="chief_contactno" placeholder="Contoh: 0171234567" required> 
    <p>
      <label><b>Email</b></label>
      <input class="w3-input w3-border w3-round-medium" type="text"  name="chief_email" 
	         pattern="[a-zA-Z0-9-\_.]+@[a-zA-Z0-9-\_.]+\.[a-zA-Z0-9.]" title="Please enter a registered email. eg:xxx@gmail.com" required>  
	<p>
      <label><b>Kata Laluan</b></label>
      <input class="w3-input w3-border w3-round-medium" type="password"  name="chief_password" id="password"
			 pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}" title="Password must contain at least 1 number, 1 uppercase and 1 lowercase letter. 
             The password length should be at least 8 or more characters, may contains symbols" required>
	<p>
    <p>
      <label><b>Ulang Kata Laluan</b></label>
      <input class="w3-input w3-border w3-round-medium" type="password"  name="chief_password" id="reconfirmpassword"
			 pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}" title="Password must contain at least 1 number, 1 uppercase and 1 lowercase letter. 
             The password length should be at least 8 or more characters, may contains symbols" required>
	<p>
      <button class="w3-blue w3-round-medium" type="submit" name="daftar" onclick="return Validate()">Daftar</button>		
    </div>
  </form>
</div>


<?php
  
  if(isset($_POST['daftar'])){
  $chief_ic		      = $_POST['chief_ic'];
  $chief_name		    = $_POST['chief_name'];
  $chief_position	  = $_POST['chief_position'];
  $chief_grade      = $_POST['chief_grade'];
  $chief_contactno 	= $_POST['chief_contactno'];
  $chief_email	    = $_POST['chief_email'];
  $chief_password	  = md5($_POST['chief_password']); 
  $department_name	= $_POST['department_name'];

    
  $connection = mysqli_connect('localhost', 'root', '', 'bpsm');
  $check_email_query="select * from chief WHERE Chief_EmailAddr='$chief_email'";  
  $run_query=mysqli_query($connection,$check_email_query);  

  if(mysqli_num_rows($run_query)>0)  
  {  
    echo "<script>alert('Email $chief_email ini telah wujud. Sila guna email yang lain. Terima Kasih')</script>";  
    exit();  
  }  

  $insert_user="INSERT INTO chief(Chief_IC, Chief_Name, Chief_Position, Chief_Grade, Chief_ContactNo, Chief_EmailAddr, Chief_Password, Department_ID) 
                VALUES('$chief_ic','$chief_name','$chief_position','$chief_grade','$chief_contactno','$chief_email','$chief_password','$department_name')";  
    if(mysqli_query($connection,$insert_user))  
  {  
    echo"<script>alert('Data anda telah berjaya didaftarkan. Sila log masuk semula. Terima Kasih')</script>";
    echo"<script>document.location='index.php';</script>"; 
  }else{
    echo"<script>alert('Maaf data anda tidak berhaya didaftarkan')</script>";
    echo"<script>document.location='index.php';</script>"; 
  }

}
?>


  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" style="background-image: url('img/SeriNegeri.jpg')">        
      <!-- <img src="img/SeriNegeri.jpg" class="d-block w-100" alt="..."> -->
      <h5><div align="left"><font face="georgia" color="White"><marquee width="100%">
        PENGUMUMAN #Semua pegawai dikehendaki mengemaskini maklumat kursus yang telah dihadiri dalam tempoh 3 hari selepas berkursus
      </marquee></font></div></h5>
      <div class="carousel-caption container">
        <h6 class="tag-cover-9">JKMM</h6>
        <h3 class="title-cover-9">Jabatan Ketua Menteri Melaka</h3>
        <p class="para-cover-9">JKMM merupakan jabatan terpenting di bawah kuasa Eksekutif Kerajaan Negeri yang berkuasa penuh terhadap semua dasar dan 
            perintah-perintah kerajaan. JKMM juga adalah penyelaras dan sebagai sumber rujukan bagi semua Jabatan Kerajaan Negeri, Persekutuan, Badan Berkanun dan
             Pihak Berkuasa Tempatan.
        </p>
        <a href="#portfolio" class="btn btn-primary btn-action mt-5">Album</a>
        <a href="#about" class="btn btn-outline-light btn-outline-action mt-5">BPSM</a>
      </div>
    </div>
    <div class="carousel-item" style="background-image: url('img/melakamaju.jpg')">
      <!-- <img src="img/MelakaBerwibawa.jpg" class="d-block w-100" alt="..."> -->
      <h5><div align="left"><font face="georgia" color="White"><marquee width="100%">
        PENGUMUMAN #Semua pegawai dikehendaki mengemaskini maklumat kursus yang telah dihadiri dalam tempoh 3 hari selepas berkursus
      </marquee></font></div></h5>
    </div>
    <div class="carousel-item" style="background-image: url('img/SeriNegeri-1.jpg')">
      <!-- <img src="img/SeriNegeri-1.jpg" class="d-block w-100" alt="..."> -->
      <h5><div align="left"><font face="georgia" color="White"><marquee width="100%">
        PENGUMUMAN #Semua pegawai dikehendaki mengemaskini maklumat kursus yang telah dihadiri dalam tempoh 3 hari selepas berkursus
      </marquee></font></div></h5>
      <div class="carousel-caption container">
        <h6 class="tag-cover-9">Blok Bentara</h6>
        <h3 class="title-cover-9">Bahagian Pengurusan Sumber Manusia</h3>
        <p class="para-cover-9">Dasar Latihan Sektor Awam Sumber Manusia telah ditetapkan iaitu setiap anggota setiap anggota perkhidmatan awam perlu 
            melengkapkan diri / dilengkapkan dengan sikap (attitude), kemahiran (skills) dan pengetahuan (knowledge) yang bersesuaian melalui program pembangunan 
            sumber manusia yang terancang yang berteraskan pembangunan kompetensi dan pembelajaran berterusan</p>
          <a href="#portfolio" class="btn btn-primary btn-action mt-5">Album</a>
          <a href="#about" class="btn btn-outline-light btn-outline-action mt-5">BPSM</a>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>

<!-- Content-with-photo23 block -->
<section class="w3l-content-with-photo-23" id="about">
    <div id="cwp23-block" class="py-5">
        <div class="container py-lg-3">
            <h3 class="global-title text-secondary">Bahagian Pengurusan Sumber Manusia</h3>
            <div class="row cwp23-content align-items-lg-center">
                <div class="cwp23-img col-md-6 pt-md-4">
                    <img src="img/teamwork.png" class="img-fluid" alt="" />
                </div>
                <div class="cwp23-text col-md-6 mt-4 mt-md-0 pl-md-4">
                    <div class="cwp23-title">
                        <center><h3>Latar Belakang</h3></center>
                    </div>
                    <div class="row cwp23-text-cols">
                        <div class="column col-lg-6 mt-4">
                            <h4 class="text-primary">Visi</h4>
                            <div align="justify">
                            <p>Memberikan perkhidmatan Pengurusan Sumber Manusia yang profesional melalui anggota yang cekap serta sistem pengurusan terkini </p>
                            </div>
                        </div>
                        <div class="column col-lg-6 mt-4">
                            <h4 class="text-primary">Misi</h4>
                            <div align="justify">
                            <p>Berfungsi dengan lebih berkesan sebagai penasihat dan pelaksana Pengurusan Sumber Manusia Jabatan dan Agensi Negeri  </p>
                            </div>
                        </div>
                        <div class="column col-lg-6 mt-4">
                            <h4 class="text-primary">Objektif</h4>
                            <div align="justify">
                            <p>Mewujudkan Perancangan Dan Bilangan Anggota Perkhidmatan Awam Yang Optima  </p>
                            </div>
                        </div>
                        <div class="column col-lg-6 mt-4">
                            <h4 class="text-primary">Fungsi Utama</h4>
                            <div align="justify">
                            <p>Merancang Tenaga Manusia Dan Pembangunan Organisasi dan Pembangunan Sumber Manusia Melalui Latihan Dan Kursus </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- //form-16-section -->
<div class="w3l-grids-block-5" id="blog">
    <!-- grids block 5 -->
    <section id="grids5-block" class="py-5">
        <div class="container py-lg-3">
            <div class="section-title align-center text-center">
                <h4 class="sub-title">Bahagian Pengurusan Sumber Manusia</h4>
                <h3 class="global-title text-secondary">Asas-Asas Pertimbangan</h3>
            </div>
            <div class="row">
                <div class="grids5-info col-lg-4 col-md-6 mt-4">
                    <img src="img/responsible-1.jpg" alt="" /></a>
                    <div class="blog-info">
                        <h4>Bertanggungjawab, Merancang, Mengenalpasti</a></h4>
                        <div align="justify">
                        <p>BPSM adalah bertanggungjawab dalam merancang dan mengenalpasti keperluan latihan pegawai
                            dan kakitangan Jabatan Ketua Menteri Melaka (JKMM) supaya selaras dengan 
                            Dasar Latihan Sumber Manusia Sektor Awam yang ditetapkan
                        </p>
                        </div>
                    </div>
                </div>
                <div class="grids5-info col-lg-4 col-md-6 mt-4">
                    <img src="img/management.jpg" alt="" /></a>
                    <div class="blog-info">
                        <h4>Mengurus dan Melaksana</a></h4>
                        <div align="justify">
                        <p>BPSM juga bertanggungjawab dalam mengurus dan melaksanakan latihan / program / kursus kepada warga 
                            JKMM dengan menentu dan meneliti serta memilih kursus-kursus jangka pendek samaada di dalam atau di luar negara<br><br></p>
                        </div>
                    </div>
                </div>
                <div class="grids5-info col-lg-4 offset-md-3 offset-lg-0 col-md-6 mt-4">
                    <img src="img/latihan.jpg" alt="" /></a>
                    <div class="blog-info">
                        <h4>Struktur Latihan</a></h4>
                        <div align="justify">
                        <p>Struktur latihan yang telah dirangka dan akan dilaksanakan adalah meliputi semua skim dan klasifikasi 
                            perkhidmatan pegawai dan kakitangan Jabatan Ketua Menteri Melaka <br><br><br></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="w3l-features-7">
	<!-- /features -->
	<div class="features py-5" id="services">
		<div class="container py-lg-3">
			<div class="section-title align-center text-center">
				<h3 class="sub-title">Asas-Asas Pertimbangan</h3>
				<h4 class="global-title text-white">Gred 1 hingga Pengurusan Tertinggi yang telah ditetapkan seperti berikut:</h4>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="feature-gd">
						<div class="icon"> <span class="fa fa-truck text-primary" aria-hidden="true"></span></div>
						<div class="icon-info">
                            <h5 class="my-3">Peringkat Pra Penempatan</h5>
                            <div align="justify">
                            <p> Latihan dilaksanakan kepada anggota perkhidmatan yang baru dilantik secara tetap.</p>
                            </div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
				<div class="feature-gd">
					<div class="icon"> <span class="fa fa-money text-primary" aria-hidden="true"></span></div>
					<div class="icon-info">
                        <h5 class="my-3">Peringkat Asas</h5>
                        <div align="justify">
                        <p> Latihan dilaksanakan kepada semua anggota perkhidmatan yang berkhidmat dari awal pelantikan sehingga tiga (3) tahun.</p>
                        </div>
					</div>
				</div>
				</div>
				
				<div class="col-lg-4 col-md-6">
				<div class="feature-gd">
					<div class="icon"> <span class="fa fa-exchange text-primary" aria-hidden="true"></span></div>
					<div class="icon-info">
                        <h5 class="my-3">Peringkat Pertengahan</h5>
                        <div align="justify">
                        <p> Latihan yang melibatkan pembangunan kompetensi dan juga peningkatan kompetensi kepada anggota yang berkhidmat antara tiga hingga sepuluh tahun.</p>
                        </div>
					</div>
				</div>
			</div>
            
			<div class="col-lg-4 col-md-6">
				<div class="feature-gd">
					<div class="icon"> <span class="fa fa-truck text-primary" aria-hidden="true"></span></div>
					<div class="icon-info">
                        <h5 class="my-3">Peringkat Lanjutan</h5>
                        <div align="justify">
                        <p> Latihan yang melibatkan pembangunan kompetensi dan juga peningkatan kompetensi kepada anggota yang berkhidmat antara tiga hingga sepuluh tahun.</p>
                        </div>
					</div>
				</div>
            </div>
        
			<div class="col-lg-4 col-md-6">
				<div class="feature-gd">
					<div class="icon"> <span class="fa fa-money text-primary" aria-hidden="true"></span></div>
					<div class="icon-info">
                        <h5 class="my-3">Peringkat Peralihan</h5>
                        <div align="justify">
                        <p> Latihan diberikan kepada anggota yang akan meninggalkan perkhidmatan dalam tempoh dua tahun sebelum bersara</p>
                        </div>
					</div>
				</div>
            </div>
			</div>
		</div>
	</div>
	<!-- //features -->
</section>
<!-- portfolio -->
    <section class="w3l-gallery py-5" id="portfolio">
        <div class="container py-lg-3">
            <div class="title-section">
                <h4 class="sub-title">Album</h4>
                <h3 class="global-title text-secondary">Unit Latihan</h3>
            </div>
            <ul class="portfolio-categ filter text-center my-md-5 my-3 p-0">
                <li class="port-filter all active">
                    <a href="#" class="btn btn-primary">Semua</a>
                </li>
                <li class="cat-item-1">
                    <a href="#" class="btn btn-outline-primary" title="Category 1">Korporat</a>
                </li>
                <li class="cat-item-2">
                    <a href="#" class="btn btn-outline-primary" title="Category 2">Kursus</a>
                </li>
                <li class="cat-item-3">
                    <a href="#" class="btn btn-outline-primary" title="Category 3">Aktiviti</a>
                </li>
            </ul>
            <ul class="portfolio-area clearfix p-0 m-0">
                <li class="portfolio-item2" data-id="id-1" data-type="cat-item-1">
                    <span class="image-block">
                        <a class="image-zoom" href="img/korporat.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="img/korporat.jpg" class="img-fluid w3layouts " alt="portfolio-img">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-2" data-type="cat-item-2">
                    <span class="image-block">
                        <a class="image-zoom" href="img/kursus.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="img/kursus.jpg" class="img-fluid w3layouts " alt="portfolio-img">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-3" data-type="cat-item-3">
                    <span class="image-block">
                        <a class="image-zoom" href="img/aktiviti.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="img/aktiviti.jpg" class="img-fluid w3layouts " alt="portfolio-img">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-4" data-type="cat-item-3">
                    <span class="image-block">
                        <a class="image-zoom" href="img/aktivitii.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="img/aktivitii.jpg" class="img-fluid w3layouts " alt="portfolio-img">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-7" data-type="cat-item-3">
                    <span class="image-block">
                        <a class="image-zoom" href="img/aktivitiii.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="img/aktivitiii.jpg" class="img-fluid w3layouts " alt="portfolio-img">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-8" data-type="cat-item-3">
                    <span class="image-block">
                        <a class="image-zoom" href="img/aktivitiiii.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="img/aktivitiiii.jpg" class="img-fluid w3layouts " alt="portfolio-img">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-9" data-type="cat-item-2">
                    <span class="image-block">
                        <a class="image-zoom" href="img/kursuss.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="img/kursuss.jpg" class="img-fluid w3layouts " alt="portfolio-img">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-9" data-type="cat-item-2">
                    <span class="image-block">
                        <a class="image-zoom" href="img/kursusss.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="img/kursusss.jpg" class="img-fluid w3layouts " alt="portfolio-img">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-9" data-type="cat-item-1">
                    <span class="image-block">
                        <a class="image-zoom" href="img/korporatt.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="img/korporatt.jpg" class="img-fluid w3layouts " alt="portfolio-img">
                        </a>
                    </span>
                </li>
                <div class="clear"></div>
            </ul>
            <!--end portfolio-area -->
        </div>
        <!-- //gallery container -->
    </section>
    <!-- //portfolio -->

<!-- // grids block 5 -->
<!-- contacts -->
<section class="w3l-contacts-9-main" id="contact">
    <div class="contacts-9 py-5">
        <div class="container py-lg-3">
            <h3 class="global-title text-secondary">Hubungi Kami</h3>
            <div class="row top-map">
                <div class="cont-details col-md-5">
                    <div class="cont-top">
                        <div class="cont-left">
                            <span class="fa fa-phone text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Hubungi Kami</h6>
                            <p><a href="tel:06 2307306">06 2307306/7747</a></p>

                        </div>
                    </div>
                    <div class="cont-top mt-lg-5 mt-4">
                        <div class="cont-left">
                            <span class="fa fa-envelope-o text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Email</h6>

                            <p><class="mail">urusetialatihanmelaka@gmail.com</p>
                        </div>
                    </div>
                    <div class="cont-top mt-lg-5 mt-4">
                        <div class="cont-left">
                            <span class="fa fa-map-marker text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Alamat</h6>
                            <p>Bahagian Pengurusan Sumber Manusia, <br>
                                Aras 1, Blok Bentara, <br>
                                Seri Negeri, Hang Tuah Jaya, <br>
                                75450 Ayer Keroh, Melaka.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
        <span class="fa fa-angle-up"></span>
    </button>
    <!-- /move top -->
</section>
<!-- // footer -->

<!-- jQuery -->
<script src="assets/js/jquery-3.4.1.slim.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

        // Get the login modal
var modal1 = document.getElementById('Login');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}	

<!--Clear input field for email->
function clearInput() {
	document.getElementById('email').value = '';
}
    </script>
<!-- disable body scroll which navbar is in active -->
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("reconfirmpassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>
<!-- disable body scroll which navbar is in active -->

<!-- jQuery-Photo-filter-lightbox-portfolio-plugin -->
<script src="assets/js/jquery-1.7.2.js"></script>
<script src="assets/js/jquery.quicksand.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/jquery.prettyPhoto.js"></script>
<!-- jQuery-Photo-filter-lightbox-portfolio-plugin -->
</body>

</html>