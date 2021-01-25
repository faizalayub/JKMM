<?php 

$connection = new mysqli('localhost', 'root', '', 'bpsm');

if (isset($_POST['save']))
{
    $chief_email = $_POST['chief_email'];
    $selectquery = mysqli_query($connection, "SELECT * FROM chief WHERE Chief_EmailAddr = '[$chief_email]'") or die (mysqli_error($connection));
    $count = mysqli_num_rows($selectquery);
    $row = mysqli_fetch_array($selectquery);

    if($count > 0)
    {
        echo $row['Chief_Password'];
    }
}
?>



<html>
<body>

    <form method="post">
    <h2> Forgot Password </h2>
        <table>
        <tr>
            <td>Enter Your Email</td>
            <td><input type="chief_email" name="chief_email"></td>
        </tr>
        <tr>
            <td></td>
            <td><input name="save" type="Submit"></td>
        </tr>
        </table>
    </form>
</body>
</html>