<?php
$id = $_GET["id"];

$nav = array("print_pds0.php");
$nav_final = "";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hris";

$db = new mysqli($servername, $username, $password, $dbname);


$query = mysqli_query($db, "SELECT * FROM tbl_children WHERE employee_id=\"$id\"");
if(mysqli_num_rows($query) > 12){
	array_push($nav, "print_pds0-1.php");
}

array_push($nav, "print_pds1.php");

$query = mysqli_query($db, "SELECT * FROM tbl_eligibility WHERE employee_id=\"$id\"");
$query2 = mysqli_query($db, "SELECT * FROM tbl_work_experience WHERE employee_id=\"$id\"");
if(mysqli_num_rows($query) > 7 || mysqli_num_rows($query2) > 28){
	array_push($nav, "print_pds1-1.php");
}

array_push($nav, "print_pds2.php");

$query = mysqli_query($db, "SELECT * FROM tbl_voluntary_work WHERE employee_id=\"$id\"");
$query2 = mysqli_query($db, "SELECT * FROM tbl_training WHERE employee_id=\"$id\"");
$query2 = mysqli_query($db, "SELECT * FROM tbl_skills_hobbies WHERE employee_id=\"$id\"");
if(mysqli_num_rows($query) > 7 || mysqli_num_rows($query2) > 28){
	array_push($nav, "print_pds2-1.php");
}

array_push($nav, "print_pds3.php");

$nav_final = json_encode($nav);

?>

<!DOCTYPE html>
<html>
<head>
	<title>PDS View</title>
	<style type="text/css">
		.centerTable{
			margin-top: 10px !important;
			margin: 0 auto;
			margin-bottom: 10px !important;
		}
		@media print{
			#controller
			{
				display: none !important;
			}
		}
	</style>
	<script src="../node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="live.js"></script>
</head>
<body style="font-family: Arial; margin: 0">
	<div id="controller" style="text-align: center; background: linear-gradient(to bottom, #93291e, #93291e); padding-top: 10px; padding-bottom: 20px;">
		<h3 style="margin-bottom: 0px; color: #E3AFAF">Personal Data Sheet: <?php echo $id; ?></h3> <br>
		<button id="prev" style="font-size: 14px; padding-left: 20px; padding-right: 20px; padding-top: 10px; padding-bottom: 10px; border: 1px solid; border-radius: 7px; margin-top: -5px; cursor: pointer;"><b><<</b></button>
		<button id="print" style="font-size: 14px; padding-left: 20px; padding-right: 20px; padding-top: 10px; padding-bottom: 10px; border: 1px solid; border-radius: 7px; margin-top: -5px; cursor: pointer;">Print Page</button>
		<button id="next" style="font-size: 14px; padding-left: 20px; padding-right: 20px; padding-top: 10px; padding-bottom: 10px; border: 1px solid; border-radius: 7px; margin-top: -5px; cursor: pointer;"><b>>></b></button>
	</div>

	<div id="cont" style="width: 100%">
		
	</div>
</body>
<script type="text/javascript">
	var x = 0;
	var id = '<?php echo $id; ?>';
	var str = '<?php echo $nav_final; ?>';
	var nav = JSON.parse(str);
	
	function load1(){
		if(x == 0){
			$('#prev').prop('disabled', true);
		}
		if(x == 1 || x == 2){
			$('#prev').prop('disabled', false);
			$('#next').prop('disabled', false);
		}
		if(x == nav.length){
			$('#next').prop('disabled', true);
		}else{
			$('#next').prop('disabled', false);
		}
		$('#cont').load(nav[x] + '?print=' + id);
	}

	$('#prev').click(function(){
		x = x - 1;
		load1();
	});

	$('#next').click(function(){
		x = x + 1;
		load1();
	});

	$('#print').click(function(){
		$('#controller').toggle();
		$('#t01').toggleClass('centerTable');
		window.print();
		$('#controller').toggle();
		$('#t01').toggleClass('centerTable');
	});

	load1();


</script>
</html>