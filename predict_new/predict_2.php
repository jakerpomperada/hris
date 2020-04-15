<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Regression\LeastSquares;

$conn = new mysqli("localhost", "root", "root", "hris");

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

$years_max_index = isset($years)?count($years):0;

if($years_max_index>0) {
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
}

?>
<body style="background-color: #800000;"><br><br>
<div style="width: 400px; margin: auto;">

<div class="chart-container" style="position: relative; height:15vh; width:25vw;" >
    <canvas id="myChart" width="400" height="400" style="background-color: white;"></canvas>
</div>
  
    </div>


<script src="node_modules/chart.js/dist/Chart.js"></script>

<script>
var ctx = document.getElementById('myChart');
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
                       
                    } 
                ?>
            ],
            backgroundColor: [
                <?php
                for($x=0; $x<$ctr; $x++) {
                    echo "'rgba(0, 0, 255, 0.2)',";
                } ?>
                'rgba(255, 0, 0, 0.6)',
                'rgba(255, 0, 0, 0.7)',
                'rgba(255, 0, 0, 0.8)'
            ],
            borderColor: [
                <?php
                for($x=0; $x<$ctr; $x++) {
                    echo "'rgba(255, 99, 132, 0.2)',";
                } ?>
                'rgba(255, 0, 0, 1)',
                'rgba(255, 0, 0, 1)',
                'rgba(255, 0, 0, 1)'
            ],
            borderWidth: 1
        },
                   

        {
            label: 'Predicted Employee\'s Turnover',
            data: [
                <?php
                    //echo "0";
                    $ctr=0;
                    foreach($targets as $t) {
                        echo $ctr>0?",NaN":"NaN";
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
                <?php
                for($x=0; $x<$ctr; $x++) {
                    echo "'rgba(255, 0, 0, 0.3)',";
                } ?>
                'rgba(255, 0, 0, 0.6)',
                'rgba(255, 0, 0, 0.7)',
                'rgba(255, 0, 0, 0.8)'
            ],
            borderColor: [
                <?php
                for($x=0; $x<$ctr; $x++) {
                    echo "'rgba(255, 99, 132, 0.2)',";
                } ?>
                'rgba(255, 0, 0, 1)',
                'rgba(255, 0, 0, 1)',
                'rgba(255, 0, 0, 1)'
            ],
            borderWidth: 1
        }                   
                   
                   
        ],
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
    
    </body>