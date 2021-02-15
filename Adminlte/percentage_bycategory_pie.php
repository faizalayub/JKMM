<?php  
    $query = "SELECT department.Department_Name, count(course.Staff_ID) from department left join staff on staff.Department_ID = department.Department_ID left join course on course.Staff_ID = staff.Staff_ID where department.Category_ID = '4' group by department.Department_ID";  
    $result = mysqli_query($connection, $query);  

    $totalStaff = mysqli_query($connection, "SELECT count(*) as overallCourse FROM course");
    $totalStaff = mysqli_fetch_array($totalStaff);
    $totalStaff = (!empty($totalStaff) ? $totalStaff['overallCourse'] : 0);

    $counter = 1;
    $DataResult = [];
    $LabelIndexCollection = [];
    $ReservedIndexCollection = [];
    $pieArraySet = [];

    $DataValue = [];
    
    $categorySql = "SELECT * FROM category";  
    $categoryResult = mysqli_query($connection, $categorySql); 

    while($row = mysqli_fetch_array($categoryResult)){ 

        $getCountByCategory = mysqli_fetch_array(mysqli_query($connection, "SELECT count(course.Course_ID) as total FROM course JOIN staff ON (staff.Staff_ID = course.Staff_ID) WHERE staff.Chief_ID IN (SELECT Chief_ID FROM chief JOIN department ON(chief.Department_ID = department.Department_ID) WHERE department.Category_ID = ".$row["Category_ID"].")")); 

        $DataResult[] = $getCountByCategory;
        $LabelIndexCollection[] = $row["Category_Name"];
        $ReservedIndexCollection[] = "0";

        $counter++;
    }

    if(count($DataResult) > 0){
        foreach ($DataResult as $idx => $value) {

            $countPercentStaf = ($value['total'] / $totalStaff) * 100;
            $countPercentStaf = number_format((float)$countPercentStaf, 2, '.', '');

            $CloneArray = $ReservedIndexCollection;

            $CloneArray[$idx] = $countPercentStaf;

            $DataValue[] = array(
                'label' => 'Nothing',
                'backgroundColor' => "#".random_color(),
                'data' => $CloneArray
            );

            $pieArraySet[] = $countPercentStaf;
        }
    }
?>  

<canvas id="bycategory_all_pie" width="200" height="100"></canvas>  

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.js"></script>

<script type="text/javascript">
    var ctx = document.getElementById("bycategory_all_pie");
    
    var myDoughnutChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            datasets: [{
                data: <?php echo json_encode($pieArraySet); ?>,
                backgroundColor: [
                    "#2ecc71",
                    "#3498db",
                    "#95a5a6",
                    "#9b59b6"
                ],
            }],
            labels: ['JKMM','PAN','PBT','BBN']
        },
        options: {
            legend: {display: true},
            responsive: true,
            tooltips: {
                callbacks: {
                        label: function(tooltipItem, data) {
                            let prc = data.datasets[0].data[tooltipItem.index];
                            
                            return `${ prc }% Kursus`;
                        }
                }
            }
        }
    });
</script>
