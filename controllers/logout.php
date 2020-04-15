<?php	
	require_once "../models/model.php";
	session_start();

	$id = $_SESSION['HRIS_id'];

	// Unset all of the session variables
	$_SESSION = array();
 
	// Destroy the session.
	session_destroy();
 
	// Redirect to login page
	unset($_SESSION['HRIS_id']);
    unset($_SESSION['HRIS_token']);
	header("location: ../index.php");
exit;

	

?>