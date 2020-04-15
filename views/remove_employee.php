<?php
require("db_config.php");
$id = $_POST["id"];

$sql = "
	SET FOREIGN_KEY_CHECKS=0;
	Delete from tbl_spouse Where employee_id='$id';
	Delete from tbl_children Where employee_id='$id';
	Delete from tbl_family Where employee_id='$id';
	Delete from tbl_educ Where employee_id='$id';
	Delete from tbl_eligibility Where employee_id='$id';
	Delete from tbl_work_experience Where employee_id='$id';
	Delete from tbl_voluntary_work Where employee_id='$id';
	Delete from tbl_training Where employee_id='$id';
	Delete from tbl_skills_hobbies Where employee_id='$id';
	Delete from tbl_membership Where employee_id='$id';
	Delete from tbl_recog Where employee_id='$id';
	Delete from tbl_additional_info Where employee_id='$id';
	Delete from tbl_references Where employee_id='$id';
	Delete from tbl_gov_id Where employee_id='$id';
	Delete from tbl_p_info Where employee_id='$id';
";

if(mysqli_multi_query($conn, $sql)){
	echo "true";
}else{
	echo mysqli_error($conn);
}

?>