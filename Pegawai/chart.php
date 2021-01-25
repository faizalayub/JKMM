<?php

//$dbhandle = new mysqli("dbhosting.melaka.gov.my", "ppsm", "ppsm1028#", "epljkmm");
$dbhandle= new mysqli('localhost','root','','bpsm');
$dbhandle->connect_error;

$query = "SELECT department.Department_Name, count(course.Staff_ID) from department left join staff on staff.Department_ID = department.Department_ID where department.Category_ID = '1' group by department.Department_ID";
$res = $dbhandle->query($query);
?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   
	<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Department', 'Department'],
         <?php
		 while($row=$res -> fetch_assoc())
		 {
			 echo "['".$row['Department_Name']."',".$row['count(Department_ID)']."],";			 
		 }

		 ?>
        ]);

        var options = {
          //title: 'The total of staff',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>

<div id="piechart_3d" style="width: 400px; height: 500px;"></div>