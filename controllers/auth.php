<?php
	session_start();
	function loginAuth() {
		if(isset($_SESSION['HRIS_id']) && !empty($_SESSION['HRIS_id'])) {
			header("location: ./views/dashboard.php");
			exit;
		}
	}

	function homeAuth() {
		if(!isset($_SESSION['HRIS_id']) && empty($_SESSION['HRIS_id'])) {
			header("location: ../index.php");
		}
	}

	function token($name) {
		require_once "./models/model.php";
		$database = new Database;
		$HRIS_token = $database->generateToken();
		$_SESSION[$name] = $HRIS_token;
		return $HRIS_token;
	}
?>