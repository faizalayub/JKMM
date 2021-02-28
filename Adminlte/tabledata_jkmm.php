<?php 
    include('../login_functions.php');

    $categoryid = 1;

    	
    $year = 2020;

    if(isset($_GET['y'])){
        $year = $_GET['y'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <style>
        td{
            text-align:center;
            padding:.6em;
        }
    </style>
    
    <h2>JKMM</h2>

    <div class="content-template">
        <table border="1" cellspacing="0" width="100%">
            <tr>
                <td>BIL.</td>
                <td colspan="2">JABATAN</td>
                <td colspan="12">BIL. PEGAWAI YANG MENGHADIRI KURSUS PADA 2020</td>            
            </tr>
            <tr>
                <td></td>
                <td colspan="2"></td>
                <td></td>
                <td colspan="2">Gred Jusa</td>
                <td colspan="2">Kumpulan Pengurusan & Professional</td>
                <td colspan="2">Kumpulan Sokongan 1</td>
                <td colspan="2">Kumpulan Sokongan 2</td>
                <td>Bilangan Staff Yang Hadir > 1 Hari Setahun</td>
                <td>Tidak Hadir Kursus</td>
                <td>%</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"></td>
                <td>Bilangan Staff</td>
                <td>Bil Staff Yg Hadir > 1 Hari Setahun</td>
                <td>Tidak Hadir Kursus</td>
                <td>Bil Staff Yg Hadir > 1 Hari Setahun</td>
                <td>Tidak Hadir Kursus</td>
                <td>Bil Staff Yg Hadir > 1 Hari Setahun</td>
                <td>Tidak Hadir Kursus</td>
                <td>Bil Staff Yg Hadir > 1 Hari Setahun</td>
                <td>Tidak Hadir Kursus</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <?php 
                $numbering = 1;
                $totalAvailableStaff = 0;

                $query = "SELECT * FROM department WHERE Category_ID = $categoryid";  
                $result = mysqli_query($connection, $query);

                while($row = mysqli_fetch_assoc($result)){ 

                    $deptId = $row['Department_ID'];

                    $totalStaff = mysqli_fetch_assoc(mysqli_query($connection, "SELECT count(*) as total FROM staff WHERE Department_ID = ".$deptId));

                    $totalJusa_hadir = mysqli_fetch_assoc(mysqli_query($connection, "SELECT count(*) as totalJusaHadir FROM course WHERE course.Start_Date LIKE '%".$year."%' AND Staff_ID IN (SELECT Staff_ID FROM staff WHERE Staff_Group LIKE '%jusa%' AND Department_ID = ".$deptId.")"));

                    $totalSokongan1_hadir = mysqli_fetch_assoc(mysqli_query($connection, "SELECT count(*) as totalSokongan1Hadir FROM course WHERE course.Start_Date LIKE '%".$year."%' AND Staff_ID IN (SELECT Staff_ID FROM staff WHERE Staff_Group LIKE '%sokongan 1%' AND Department_ID = ".$deptId.")"));

                    $totalSokongan2_hadir = mysqli_fetch_assoc(mysqli_query($connection, "SELECT count(*) as totalSokongan2Hadir FROM course WHERE course.Start_Date LIKE '%".$year."%' AND Staff_ID IN (SELECT Staff_ID FROM staff WHERE Staff_Group LIKE '%sokongan 2%' AND Department_ID = ".$deptId.")"));

                    $totalPengProf_hadir = mysqli_fetch_assoc(mysqli_query($connection, "SELECT count(*) as totalPengProfHadir FROM course WHERE course.Start_Date LIKE '%".$year."%' AND Staff_ID IN (SELECT Staff_ID FROM staff WHERE Staff_Group LIKE '%pengurusan & profesional%' AND Department_ID = ".$deptId.")"));

                    $overallHadir = mysqli_fetch_assoc(mysqli_query($connection, "SELECT count(*) as totalHadir FROM course WHERE course.Start_Date LIKE '%".$year."%' AND Staff_ID IN (SELECT Staff_ID FROM staff WHERE Department_ID = ".$deptId.")"));

                    $totalAvailableStaff = $totalAvailableStaff + $totalStaff['total'];
            ?>

                <tr>
                    <td><?php echo $numbering; ?></td>

                    <td colspan="2"><?php echo $row['Department_Name']; ?></td>

                    <td><?php echo $totalStaff['total']; ?></td>

                    <td><?php echo $totalJusa_hadir['totalJusaHadir']; ?></td>

                    <td><?php echo ($totalStaff['total'] - $totalJusa_hadir['totalJusaHadir']); ?></td>

                    <td><?php echo $totalPengProf_hadir['totalPengProfHadir']; ?></td>

                    <td><?php echo ($totalStaff['total'] - $totalPengProf_hadir['totalPengProfHadir']); ?></td>

                    <td><?php echo $totalSokongan1_hadir['totalSokongan1Hadir']; ?></td>

                    <td><?php echo ($totalStaff['total'] - $totalSokongan1_hadir['totalSokongan1Hadir']); ?></td>

                    <td><?php echo $totalSokongan2_hadir['totalSokongan2Hadir']; ?></td>

                    <td><?php echo ($totalStaff['total'] - $totalSokongan2_hadir['totalSokongan2Hadir']); ?></td>

                    <td><?php echo $overallHadir['totalHadir']; ?></td>

                    <td><?php echo abs($totalStaff['total'] - $overallHadir['totalHadir']); ?></td>

                    <?php if($totalStaff['total'] != 0){ ?>

                        <td>
                            <?php 
                                $s = ($overallHadir['totalHadir'] > $totalStaff['total'] ? $totalStaff['total'] : $overallHadir['totalHadir']);
                                echo round((abs($s) / $totalStaff['total']) * 100); 
                            ?>%
                        </td>

                    <?php }else{ ?>

                        <td>0%</td>

                    <?php } ?>
                    
                </tr>

            <?php
                    $numbering++; 
                } 
            ?>

        </table>
    </div>
    
    <!--Add External Libraries - JQuery and jspdf 
    check out url - https://scotch.io/@nagasaiaytha/generate-pdf-from-html-using-jquery-and-jspdf
    -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
    <script>
        // $(".cmd").click(function () {
        //     var pdf = new jsPDF();
        //     var specialElementHandlers = {
        //         "#editor": function (element, renderer) {
        //             return true;
        //         }
        //     };
        //     var $addr = $(this).closest(".res").find(".content");
        //     var $temp = $(".content-template");
            
        //     $temp.find("h3").text($addr.find("h3").text());
            
        //     pdf.fromHTML($temp.html(), 15, 15, {
        //         width: 170,
        //         elementHandlers: specialElementHandlers
        //     });
            
        //     pdf.save("sample-file.pdf");
        // });
    </script>
</body>
</html>