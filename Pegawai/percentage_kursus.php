<?php  

     $getCategory = "SELECT department.Category_ID FROM `chief` JOIN department ON(department.Department_ID = chief.Department_ID) where Chief_EmailAddr = '".$_SESSION ['admin']."'";
     $resultCategoryId = mysqli_query($connection, $getCategory);
     $resultCategoryId = mysqli_fetch_array($resultCategoryId);

     $query = "SELECT department.Department_Name, count(course.Staff_ID) from department left join staff on staff.Department_ID = department.Department_ID  left join course on course.Staff_ID = staff.Staff_ID where department.Category_ID = '".$resultCategoryId['Category_ID']."' group by department.Department_ID";  
     $result = mysqli_query($connection, $query);
    
     $totalStaff = mysqli_query($connection, "SELECT count(Course_ID) as maxcount FROM course WHERE Staff_ID IN (SELECT Staff_ID FROM staff WHERE Department_ID = ".$resultCategoryId['Category_ID'].")");
     // $totalStaff = mysqli_query($connection, "SELECT count(Course_ID ) as maxcount FROM course");
     $totalStaff = mysqli_fetch_array($totalStaff);
     $totalStaff = (!empty($totalStaff) ? $totalStaff['maxcount'] : 0);

     $counter = 1;
     $DataResult = [];
     $LabelIndexCollection = [];
     $ReservedIndexCollection = [];
     $DataValue = [];

     while($row = mysqli_fetch_array($result)){ 
          if($row['count(course.Staff_ID)'] != '0'){
               $DataResult[] = $row;
               $LabelIndexCollection[] = $row["Department_Name"];
               $ReservedIndexCollection[] = "0";
     
               $counter++;
          } 
     }

     if(count($DataResult) > 0){
          foreach ($DataResult as $idx => $value) {

               $countPercentStaf = ($value['count(course.Staff_ID)'] / $totalStaff) * 100;
               $countPercentStaf = number_format((float)$countPercentStaf, 2, '.', '');

               $CloneArray = $ReservedIndexCollection;

               $CloneArray[$idx] = $countPercentStaf;

               $DataValue[] = array(
                    'label' => $value["Department_Name"],
                    'backgroundColor' => "#".random_color(),
                    'data' => $CloneArray
               );

          }
     }
?>  

<canvas id="Chart_KursusPegawai" style="padding:0 1em" width="200" height="<?php echo $counter*8; ?>"></canvas>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.js"></script>

<script type="text/javascript">
     var ctx = document.getElementById("Chart_KursusPegawai");
     
     var myChart = new Chart(ctx, {
          type: 'horizontalBar',
          data: {
               labels: <?php echo json_encode($LabelIndexCollection); ?>,
               datasets: <?php echo json_encode($DataValue); ?>
          },
          options: {
               legend: {display: false},
               responsive: true,
               scales: {
                    yAxes: [{
                         ticks: {min: 0},
                         scaleLabel: {
                              display: true,
                              labelString: 'Percentage'
                         },
                         barPercentage: <?php echo $counter/2.5; ?>
                    }],
                    xAxes: [{
                         ticks: {
                              min: 0,
                              max: 100,
                              stepSize: 20
                         }
                    }]
               },
               tooltips: {
                    callbacks: {
                         label: function(tooltipItem, data) {
                              return `(${ tooltipItem.xLabel }%) (${ (tooltipItem.xLabel/100*<?php echo $totalStaff; ?>).toFixed(0) } /<?php echo $totalStaff; ?>) Kursus`;
                         }
                    }
               }
          }
     });
</script>
