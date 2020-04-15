<?php include '../template/header.php';?>
<!-- <title>Employee's Turn-Over Predictions Using Linear Regression</title>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--  <title>Dashboard | Welcome</title> -->
 <!--    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets/images/tuplogo.png" type="image/x-icon"> -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/DataTables/jquery.datatables.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/DataTables/buttons.datatables.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>node_modules/sweetalert2/dist/sweetalert2.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery.bootgrid.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/custom.css"> -->

   <!--  <script src="<?php echo BASE_URL; ?>node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/jquery.bootgrid.min.js"></script> -->
</head> -->

<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Regression\LeastSquares;

$conn = new mysqli("localhost", "root", "", "hris");

$sql = "SELECT count(employee_id) AS active_emp FROM tbl_p_info WHERE employment_status > 0";
$result = $conn->query($sql);
$data = $result->fetch_assoc();
$active_emp = $data['active_emp'];
$result->close();

$sql = "SELECT distinct YEAR(date_turnover) AS year_turnover FROM tbl_turnover order by date_turnover";
$result = $conn->query($sql);
while($data = $result->fetch_assoc()) {
    $years[] = $data['year_turnover'];
}
$result->close();
$years_max_index = count($years);
$next_year = $years[$years_max_index-1]+1;
$n_next_year = $next_year+1;
$nn_next_year = $n_next_year+1;

foreach($years as $year) {
    $sql = "SELECT COUNT(date_turnover) AS ret_count FROM tbl_turnover WHERE YEAR(date_turnover)='$year'";
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();
    $samples[][] = $year;
    $targets[] = ($data['ret_count']/$active_emp) * 100;
    
}

$regression = new LeastSquares();
$regression->train($samples, $targets);

$prediction1 = round($regression->predict([$next_year]),2);
$prediction2 = round($regression->predict([$n_next_year]),2);
$prediction3 = round($regression->predict([$nn_next_year]),2);

?>
   <div class="container">
       <br><br>
        <h4  class="text-white my-3" align="center">Employee's Turn-Over Predictions Using Linear Regression</h4><br>

       <!--  <div class="chart-container" style="position: relative; height:15vh; width:25vw">
    <canvas id="myChart" width="400" height="400"></canvas> </div> -->
    <div style="width: 400px; margin: auto;">

<div class="chart-container" style="position: relative; height:15vh; width:25vw;" >
    <canvas id="myChart" width="400" height="400" style="background-color: white;"></canvas>
</div>
  
    </div>
     <!--  &nbsp; &nbsp; &nbsp;     
      <button type="button" class="btn btn-primary"
onClick="Javascript:window.location.href = 'dashboard.php';"
title="Click here to go back to main menu.">Return</button>
    </div> -->
<br>

</body>
 <?php include '../template/footer.php';?>
<script src="node_modules/chart.js/dist/Chart.js"></script>
<script>
var ctx = document.getElementById('myChart');

// Chart.defaults.global.defaultFontColor = 'white';
var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
        datasets: [{
            label: 'Employee\'s Turnover',
            
            data: [
                <?php
                    //echo "0";
                    $ctr=0;
                    foreach($targets as $t) {
                        echo $ctr>0?",$t":$t;
                        $ctr++;
                    }
                    if(count($targets)>0){
                        echo ",".$prediction1;
                        echo ",".$prediction2;
                        echo ",".$prediction3; 
                    }
                ?>
            ],
            backgroundColor: [

                // 'rgba(255,255,0,1)'
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
             // 'rgba(255,255,255,1)',
             
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }],
        labels: [
            <?php
                //echo $years[0]-1;
                $ctr=0;
                foreach($years as $year) {
                    echo $ctr>0?",$year":$year;
                    $ctr++;
                }
                if($years_max_index>0) {
                    echo ",$next_year";
                    echo ",$n_next_year";
                    echo ",$nn_next_year";
                }
            ?>
            
        ]
    },
    options: {
        // legend: {
        //     labels: {
        //         // This more specific font property overrides the global property
        //         fontColor: 'white'
        //     }
        //   }  
        scales: {
            yAxes: [{
                ticks: {
                    suggestedMin: 0,
                    suggestedMax: 100
                }
            }]
        }
    }
});

    
</script>