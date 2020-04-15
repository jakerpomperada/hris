<?php
$id = $_GET["id"];

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
	</style>
	<script src="../node_modules/jquery/dist/jquery.min.js"></script>
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
	
	function load1(){
		if(x == 0){
			$('#prev').prop('disabled', true);
		}
		if(x == 1 || x == 2){
			$('#prev').prop('disabled', false);
			$('#next').prop('disabled', false);
		}
		if(x == 3){
			$('#next').prop('disabled', true);
		}
		$('#cont').load('print_pds' + x + '.php?print=' + id);
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