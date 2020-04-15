<?php
	require_once "../models/model.php";

	$user_data = userData();

	function userData() {
		$user = new CRUD;
		$id = $_SESSION['HRIS_id'];
		$sql = "SELECT * FROM tbl_users WHERE id='$id'";
		$user_data = $user->displayRecord($sql);
		return $user_data[0];
	}

	function positionData() {
		$position = new CRUD;
		$sql = "SELECT * FROM tbl_settings_position ORDER BY description ASC";
		$data = $position->displayRecord($sql);
		return $data;
	}

	

	function renderPosition() {
		$user_data = userData();
		$positionData = positionData();
		$position = $user_data[0]['position'];
		$html = "";

		foreach ($positionData as $value) {
			$position_id = $value['position_id'];

			if($position == $position_id) {
				$html = $html."
				<option selected value='$position_id'>".$value['description']."</option>
				";
			}
			else {
				$html = $html."
				<option value='$position_id'>".$value['description']."</option>
				";
			}
		}
		echo $html;
	}
?>