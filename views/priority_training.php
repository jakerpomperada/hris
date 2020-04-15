<?php include '../template/header.php';?>

<?php
error_reporting(0);
///////////////////////////////////////////
// Created by Jeffric Pisuena            //
// An algo for training                  // 
// prioritization based on a DB          //
// designed for a PDS                    //
// Under GNU General Public License v3.0 //
///////////////////////////////////////////

$conn = new mysqli("localhost", "root", "", "hris");

//tbl_p_info - personal information of employee based on PDS
$sql = "SELECT employee_id, CONCAT(surname, ',', first_name, ' ', middle_name) AS emp_name FROM tbl_p_info";
$emp_result = $conn->query($sql);

//tbl_training - a table that contains the trainings/semenars attended by an employee based on PDS; 
//att_to - the date of the last day of training or seminar / can be changed also to date the training started
$sql = "SELECT COUNT(att_to) AS num_t FROM tbl_training";
$count_result = $conn->query($sql);
$count_data_arr = $count_result->fetch_assoc();
$count_data = $count_data_arr['num_t'];

//no_hours - the total number of hours of the training/seminar attended (1 day = 8 hrs)
$sql = "SELECT SUM(no_hours) AS total_hours FROM tbl_training";
$hours_result = $conn->query($sql);
$hours_data_arr = $hours_result->fetch_assoc();
$hours_data = $hours_data_arr['total_hours'];

$curr_year = date("Y");

foreach($emp_result as $emp_arr) {
    $time_point = 100; $num_point=100; $length_point=100;
    
    
    $sql = "SELECT YEAR(att_to) AS t_year FROM tbl_training WHERE employee_id='$emp_arr[employee_id]' ORDER BY att_to DESC";
    $train_result = $conn->query($sql);
    $t_y_att[$emp_arr['employee_id']] = "";
    foreach($train_result as $t) {
        $ded = 50;
        for($i=0; $i<=5; $i++) {
            $year = $curr_year - $i;
            if($t['t_year']==$year) {
                $time_point = $time_point-$ded;
            }
            $ded -= 10;
        }
        $t_y_att[$emp_arr['employee_id']] .= "$t[t_year] ";
    }
    
    $sql = "SELECT COUNT(att_to) AS num_t FROM tbl_training WHERE employee_id='$emp_arr[employee_id]' AND no_hours>0";
    $count_result = $conn->query($sql);
    $no_train_att[$emp_arr['employee_id']]="";
    foreach($count_result as $c) {
        $percent = ($c['num_t']/$count_data) * 100;
        $num_point = $num_point - $percent;
        $no_train_att[$emp_arr['employee_id']] = $c['num_t'];
    }
    
    
    $sql = "SELECT SUM(no_hours) AS total_hours FROM tbl_training WHERE employee_id='$emp_arr[employee_id]'";
    $sum_result = $conn->query($sql);
    foreach($sum_result as $s) {
        $percent = ($s['total_hours']/$hours_data) * 100;
        $length_point = $length_point - $percent;
        $total_train_hrs[$emp_arr['employee_id']] = $s['total_hours'];
    }
    
    $total_points = $time_point+$num_point+$length_point;
    
    $fortraining_n[$emp_arr[employee_id]] = $emp_arr[emp_name];
    $fortraining_p[$emp_arr[employee_id]] = $total_points;
    
}

arsort($fortraining_p);

?>

<html>
    <head>
        <title>Training Priority of Employees</title>
    </head>
    <style>
      body{
       color:white;

      }

      #cssTable td,th 
    {
    text-align: center; 
    vertical-align: middle;
    }

    table{
    margin:25px 0 0 25px;
    }


    h4 { 
     position: relative; 
     top: 25px;
    left: 20px;
    }
    </style>
    <body>
       
        <h4>Training Priority of Employees</h3><br>
        <table border="2" id="cssTable">
            <thead>
                <th>Priority</th>
                <th>Name</th>
                <th>Last Trainings Att (Y)</th>
                <th>No. of Trainings Att</th>
                <th>Total Hours of Training</th>
                <th>Total Points</th>
            </thead>
            <tbody>
            <?php
              $ctr=1;
              foreach($fortraining_p as $k => $v) {
                  echo "<tr>
                            <td>$ctr</td>
                            <td>$fortraining_n[$k]</td>
                            <td>$t_y_att[$k]</td>
                            <td>$no_train_att[$k]</td>
                            <td>$total_train_hrs[$k]</td>
                            <td>$v</td>
                            
                        </tr>";
                  $ctr++;
              }  

            ?>

            </tbody>

        </table>
    </body>
</html>

    <?php include '../template/footer.php';?>