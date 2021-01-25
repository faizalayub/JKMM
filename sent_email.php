<?php  

include ("config.php");    

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


if(isset($_POST["email"])){
    
    $emailTo= $_POST["email"];
    $sql = "Select Chief_EmailAddr From chief Where Chief_EmailAddr='$emailTo'";
    $s = mysqli_query($connection, $sql);              
    $row = mysqli_fetch_assoc($s);
    if($row){
    $code = uniqid(true);
    $query = "INSERT INTO forgot_pass (CODE,EMAIL) VALUES ('$code','$emailTo')";
    $resetp = mysqli_query($connection, $query);
    
    if(!$resetp){
        exit("Error");
    }
    
    $mail = new PHPMailer(true);

try {
    //Server settings
   
    $mail->isSMTP();                           // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';      // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                  // Enable SMTP authentication
    $mail->Username   = 'sengett07@gmail.com'; // SMTP username
    $mail->Password   = 'whiteyana';           // SMTP password
    $mail->SMTPSecure = 'ssl';                 // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 465;                   // TCP port to connect to

    //Recipients
    $mail->setFrom('sengett07@gmail.com', 'JKMM');
    $mail->addAddress($emailTo);     // Add a recipient
    //$mail->addReplyTo('no-reply@gmail.com','No Reply');    
    // Content
    $url = "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/forgotpass.php?code=$code";
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Your Password reset link';
    $mail->Body    = "<h1>You requested a password reset</h1>
                      Click <a href='$url'>this link</a> to do so";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "<script>alert('Reset Password Link Have Been Sent to Your Email')</script>";
} catch (Exception $e) 
    {
        echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}')</script>";
    }
    }else
    {
        echo"<script>alert('Invalid Email')</script>";     
        
    }
    
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Forget Password</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/skel.min.js"></script>
        <script src="js/skel-panels.min.js"></script>
        <script src="js/init.js"></script>
        <noscript>
            <link rel="stylesheet" href="css/skel-noscript.css" />
            <link rel="stylesheet" href="css/style.css" />
            <link rel="stylesheet" href="css/style-desktop.css" />
        </noscript>
    </head>
    <body>

    <!-- Header -->
        

    <!-- Header --> 

    <!-- Main -->
        <div id="main">
            <div id="content" class="container">
                <section>
                    <center>
                    <header>
                        <h2>Reset Password</h2>
                        <br>
                        <span class="byline">Please Enter Your Email </span>
                    </header>

                    <form onSubmit="return validate();" action="" method="POST" >
                    
                    <table >
                    <tr>
                    <td>EMAIL :</td>
                    <td ><input type="text" name="email" id="email"  placeholder="Enter Valid Email"  value="" maxlength="" autocomplete="off" required size="40"></td>
                    </tr> 
                    
                    </table>
                    <br><br>
                    <button type="submit" name="submit" class="button">SUBMIT</button>
                    
                   
            </form>
                     </center>               

                </section>
            </div>
        </div>
    <!-- /Main -->

    <!-- Tweet -->
    
    <!-- /Tweet -->

    <!-- Footer -->

    <!-- /Footer -->

    <!-- Copyright -->
       


    </body>
</html>


<style>
 table {
  border-collapse: separate;
  width: 35%;
  text-align: center;
  margin: 50px auto 0px;
}

 td {
  padding: 8px;
  text-align: left;
  font-style: solid;
  border-collapse: separate;
  background-color: lightgrey;
  font-family:Arial Black;
 }
.button {
  background-color: #92a8d1;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
}

.button:hover {opacity: 1}

</style>