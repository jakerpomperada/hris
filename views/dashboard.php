<?php include '../template/header.php';?>
<?Php
$host_name = "localhost";
$database = "hris";
$username = "root";   
$password = "";   
$connection = mysqli_connect($host_name, $username, $password, $database);
if (!$connection) {
    echo "Error: Unable to connect to MySQL.<br>";
    echo "<br>Debugging errno: " . mysqli_connect_errno();
    echo "<br>Debugging error: " . mysqli_connect_error();
    exit;
}
?>

<main class="dashboard">
    <div class="container py-5">

        <div class="row">
            <div class="col-lg-4 col-md-8 mb-5 mb-lg-0 mx-auto">
                <a href="<?php echo BASE_URL; ?>views/education.php"
                    class="item-dshboard bg-primary card border-0  shadow-lg">

                    <div class="card-body d-flex align-items-end flex-column text-right text-white">
                        <h4>Educational Attainment</h4>
                        <p class="w-75">Click here to view Employees Educational Qualifications</p>
                        <i class="fa fa-line-chart"></i>

                        <?php
                    $stmt = $connection->query("SELECT * FROM emp_records");
                    echo " <span class='badge badge-warning'>$stmt->num_rows</span>";
                    ?>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-8 mb-5 mb-lg-0 mx-auto">
                <a href="<?php echo BASE_URL; ?>views/turn_over.php"
                    class="item-dshboard bg-success card border-0  shadow-lg">
                    <div class="card-body d-flex align-items-end flex-column text-right text-white">
                        <h4>Turn Over</h4>
                        <p class="w-75">Click here to view Employees Turn Over</p>
                        <i class="fa fa-user"></i>
                        <span class="badge badge-primary">50</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-8 mx-auto">
                <a href="<?php echo BASE_URL; ?>views/record.php"
                    class="item-dshboard bg-warning card border-0 shadow-lg">
                    <div class="card-body d-flex align-items-end flex-column text-right text-white">
                        <h4>Record</h4>
                        <p class="w-75">Click here to view All Employess Information</p>
                        <i class="fa fa-folder"></i>
                        <?php
                    $stmt = $connection->query("SELECT * FROM emp_records");
                    echo " <span class='badge badge-success'>$stmt->num_rows</span>";
                    ?>
                    </div>
                </a>
            </div>

            <div class="col-lg-12 py-5 d-none">
                <?php
                    if($stmt = $connection->query("SELECT teaching, nos  FROM tbl_educ_qua_chart")){
                    echo "<input  type='text' class='value-educ' value='$stmt->num_rows'><br>";
                    $php_data_array = Array(); // create PHP array
                    echo "<table class='table-bordered'>
                    <tr> <th>Teaching</th><th>Nos</th></tr>";
                    while ($row = $stmt->fetch_row()) {
                    echo "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
                    $php_data_array[] = $row; // Adding to array
                    }
                    echo "</table>";
                    }else{
                    echo $connection->error;
                    }
                    //print_r( $php_data_array);
                    // You can display the json_encode output here. 
                    echo json_encode($php_data_array); 

                    // Transfor PHP array to JavaScript two dimensional array 
                    echo "<script>
                            var my_2d1 = ".json_encode($php_data_array)."
                    </script>";
                    ?>

                <?php
                    if($stmt = $connection->query("SELECT teaching_status, nos  FROM tbl_teaching_chart")){
                    echo "<input  type='text' class='employment_stat' value='$stmt->num_rows'><br>";
                    $php_data_array = Array(); // create PHP array
                    echo "<table class='table-bordered'>
                    <tr> <th>Teaching</th><th>Nos</th></tr>";
                    while ($row = $stmt->fetch_row()) {
                    echo "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
                    $php_data_array[] = $row; // Adding to array
                    }
                    echo "</table>";
                    }else{
                    echo $connection->error;
                    }
                    //print_r( $php_data_array);
                    // You can display the json_encode output here. 
                    echo json_encode($php_data_array); 

                    // Transfor PHP array to JavaScript two dimensional array 
                    echo "<script>
                            var my_2d2 = ".json_encode($php_data_array)."
                    </script>";
                    ?>

                <?php
                    if($stmt = $connection->query("SELECT non_teaching_status, nos  FROM tbl_nonteaching_chart")){
                    echo "<input  type='text' class='nonemployment_stat' value='$stmt->num_rows'><br>";
                    $php_data_array = Array(); // create PHP array
                    echo "<table class='table-bordered'>
                    <tr> <th>Teaching</th><th>Nos</th></tr>";
                    while ($row = $stmt->fetch_row()) {
                    echo "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
                    $php_data_array[] = $row; // Adding to array
                    }
                    echo "</table>";
                    }else{
                    echo $connection->error;
                    }
                    //print_r( $php_data_array);
                    // You can display the json_encode output here. 
                    echo json_encode($php_data_array); 

                    // Transfor PHP array to JavaScript two dimensional array 
                    echo "<script>
                            var my_2d3 = ".json_encode($php_data_array)."
                    </script>";
                    ?>

                <?php
                    if($stmt = $connection->query("SELECT non_teaching_status, nos  FROM tbl_nonteachingstatus_chart")){
                    echo "<input  type='text' class='nonemployment_stat' value='$stmt->num_rows'><br>";
                    $php_data_array = Array(); // create PHP array
                    echo "<table class='table-bordered'>
                    <tr> <th>Teaching</th><th>Nos</th></tr>";
                    while ($row = $stmt->fetch_row()) {
                    echo "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
                    $php_data_array[] = $row; // Adding to array
                    }
                    echo "</table>";
                    }else{
                    echo $connection->error;
                    }
                    //print_r( $php_data_array);
                    // You can display the json_encode output here. 
                    echo json_encode($php_data_array); 

                    // Transfor PHP array to JavaScript two dimensional array 
                    echo "<script>
                            var my_2d4 = ".json_encode($php_data_array)."
                    </script>";
                    ?>
            </div>
            <div class="col-lg-6 py-5">
                <div id="chart_div_educ_qua"></div>
            </div>
            <div class="col-lg-6 py-5">
                <div id="chart_div_teaching"></div>
            </div>
            <div class="col-lg-6">
                <div id="chart_div_nonteaching"></div>
            </div>
            <div class="col-lg-6">
                <div id="chart_div_nonteachingstat"></div>
            </div>
        </div>

    </div>

    <?php include '../template/footer.php';?>
</main>

<script type="text/javascript" src="charts/loader.js"></script>
<script>
// Load the Visualization API and the corechart package.
google.charts.load('current', {
    'packages': ['corechart']
});

// Set a callback to run when the Google Visualization API is loaded.
google.charts.setOnLoadCallback(drawChart);
google.charts.setOnLoadCallback(drawChart1);
google.charts.setOnLoadCallback(drawChart2);
google.charts.setOnLoadCallback(drawChart3);

function drawChart() {

    // Create the data table.
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'teaching');
    data.addColumn('number', 'Nos');
    for (i = 0; i < my_2d1.length; i++)
        data.addRow([my_2d1[i][0], parseInt(my_2d1[i][1])]);
    // above row adds the JavaScript two dimensional array data into required chart format
    var options = {
        title: 'Teaching Personnel Educational Qualification as of February 20, 2020',
        width: 580,
        height: 500


    };


    // Instantiate and draw our chart, passing in some options.
    var chart = new google.visualization.PieChart(document.getElementById('chart_div_educ_qua'));
    chart.draw(data, options);
}




function drawChart1() {
    // var emp_stat = $('.employment_stat').val();
    // Create the data table.
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'teaching_status');
    data.addColumn('number', 'Nos');
    for (i = 0; i < my_2d2.length; i++)
        data.addRow([my_2d2[i][0], parseInt(my_2d2[i][1])]);
    // above row adds the JavaScript two dimensional array data into required chart format
    var options = {
        title: 'Teaching Personnel Employment Status',
        width: 540,
        height: 500,
        colors: ['violet']

    };



    // Instantiate and draw our chart, passing in some options.
    var chart = new google.visualization.ColumnChart(document.getElementById('chart_div_teaching'));
    chart.draw(data, options);
}

function drawChart2() {

    // Create the data table.
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'non_teaching_status');
    data.addColumn('number', 'Nos');
    for (i = 0; i < my_2d3.length; i++)
        data.addRow([my_2d3[i][0], parseInt(my_2d3[i][1])]);
    // above row adds the JavaScript two dimensional array data into required chart format
    var options = {
        title: 'Non-Teaching Personnel Educational Qualification as of February 20, 2020',
        width: 580,
        height: 500
    };

    // Instantiate and draw our chart, passing in some options.
    var chart = new google.visualization.PieChart(document.getElementById('chart_div_nonteaching'));
    chart.draw(data, options);
}

function drawChart3() {
    // var emp_stat = $('.employment_stat').val();
    // Create the data table.
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'non_teaching_status');
    data.addColumn('number', 'Nos');
    for (i = 0; i < my_2d4.length; i++)
        data.addRow([my_2d4[i][0], parseInt(my_2d4[i][1])]);
    // above row adds the JavaScript two dimensional array data into required chart format
    var options = {
        title: 'Non-Teaching Personnel Employment Status',
        width: 540,
        height: 500
    };

    // Instantiate and draw our chart, passing in some options.
    var chart = new google.visualization.ColumnChart(document.getElementById('chart_div_nonteachingstat'));
    chart.draw(data, options);
}
</script>