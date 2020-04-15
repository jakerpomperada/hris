<?php	
	if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action'])) {
		require_once "../models/model.php";
		$user = new CRUD;
		$controller = new Database;
		session_start();
		$id = $_SESSION['HRIS_id'];

		//INSERT NEW USER
		if($_POST['action'] == "insert") {
			
			$php_errors = false;
			
			foreach($_POST as $key => $value) {
			  if($controller->checkData($_POST[$key])) {
			  	$php_errors == false; 
			  }
			  if(!$controller->cleanData($_POST[$key])) {
			  	$php_errors == true;
			  }
			} 

			if($php_errors == false) {
				$user_fname = $_POST['user_fname'];
				$user_lname = $_POST['user_lname'];
				$user_gender = $_POST['user_gender'];
				$user_position = ucwords(strtolower($_POST['user_position']));
				$user_address = ucwords(strtolower($POST['user_address']));
				$username = $_POST['username'];
				$user_password = md5($_POST['user_password']);
				$user_contact = $_POST['user_contact'];
				$user_bdate = $_POST['user_bdate'];
				$user_image = "";
				$user_status = "Active";
				date_default_timezone_set('Asia/Manila');
				$date_reg = date("Y-m-d");

				if($user_gender == "Male") {
					$user_image = "Male.png";
				}
				else {
					$user_image = "Female.png";
				}

				$sql = "INSERT INTO tbl_users(user_image, user_fname, user_lname, user_address, 
						user_contact, user_gender, user_position, user_bdate, user_password, username, user_status, user_date_reg) 
				 		VALUES ('$user_image', '$user_fname', '$user_lname','$user_address', 
						 '$user_contact', '$user_gender', '$user_position', '$user_bdate', '$user_password', '$username' ,'$user_status', '$date_reg')";
						 
				$response = $user->addRecord($sql);


				$date =  date("Y-m-d h:i:s");
				$message = "Add user of ".$user_fname." ".$user_lname;
				$action = "Add";
				userLogs($message, $action, $date, $user_id);

				echo json_encode($response);
			}
			else {
				echo json_encode(true);
			}
		}

		//UPDATE USER DETAILS
		if($_POST['action'] == "update") {
			
			$php_errors = false;
			
			foreach($_POST as $key => $value) {
			  if($controller->checkData($_POST[$key])) {
			  	$php_errors == false; 
			  }
			  if(!$controller->cleanData($_POST[$key])) {
			  	$php_errors == true;
			  }
			} 

			if($php_errors == false) {
				$user_id = $_POST['user_id'];
				$user_fname = $_POST['user_fname'];
				$user_lname = $_POST['user_lname'];
				$user_gender = $_POST['user_gender'];
				$user_position = ucwords(strtolower($_POST['user_position']));
				$user_address = ucwords(strtolower($_POST['user_address']));
				$user_contact = $_POST['user_contact'];
				$user_bdate = $_POST['user_bdate'];
				$user_status = $_POST['user_status'];
				$sql = "UPDATE tbl_users SET user_fname='$user_fname', user_lname='$user_lname', user_address='$user_address', user_contact='$user_contact', user_gender='$user_gender', user_position='$user_position', user_bdate='$user_bdate', user_status='$user_status' WHERE user_id='$user_id'";
				$response = $user->updateRecord($sql);

				$date =  date("Y-m-d h:i:s");
				$message = "Update user details of ".$user_fname." ".$user_lname;
				$action = "Update";
				$id = $_SESSION['DMMS_userid'];
				userLogs($message, $action, $date, $id);

				echo json_encode($response);
			}
			else {
				echo json_encode(true);
			}
		}

		//UPDATE USER DETAILS PROFILE
		if($_POST['action'] == "update_user_details") {
			
			$php_errors = false;
			
			foreach($_POST as $key => $value) {
			  if($controller->checkData($_POST[$key])) {
			  	$php_errors == false; 
			  }
			  if(!$controller->cleanData($_POST[$key])) {
			  	$php_errors == true;
			  }
			} 

			if($php_errors == false) {
				$user_id = $_POST['user_id'];
				$user_fname = $_POST['user_fname'];
				$user_lname = $_POST['user_lname'];
				$user_gender = $_POST['user_gender'];
				$user_position = $_POST['user_position'];
				$user_address = $_POST['user_address'];
				$user_contact = $_POST['user_contact'];
				$user_bdate = $_POST['user_bdate'];
				$sql = "UPDATE tbl_users SET user_fname='$user_fname', user_lname='$user_lname', user_address='$user_address', user_contact='$user_contact', user_gender='$user_gender', user_position='$user_position', user_bdate='$user_bdate' WHERE user_id='$user_id'";
				$response = $user->updateRecord($sql);

				$date =  date("Y-m-d h:i:s");
				$message = "Update user details ".$user_fname." ".$user_lname;
				$action = "Update";
				$id = $_SESSION['DMMS_userid'];
				userLogs($message, $action, $date, $id);

				echo json_encode($response);
			}
			else {
				echo json_encode(true);
			}
		}

		//UPLOAD TENANT PROFILE
		if($_POST['action'] == "upload") {
			if(!empty($_FILES['image-source']['name'])) {

	        	$user_id = $_POST['user_id'];
				$image_name = $_FILES['image-source']['name'];
				$image_tmp = $_FILES['image-source']['tmp_name'];

				$sql = "SELECT * FROM tbl_users WHERE user_id='$user_id'";
				$data = $user->searchRecord($sql);
				$name = $data[0]['user_fname']." ".$data[0]['user_lname'];

				$sql = "UPDATE tbl_users SET user_image='$image_name' WHERE user_id='$user_id'";
		        $error = $user->updateRecord($sql);
		            
		        if($error == false) {
		        	$result = $controller->uploadImage($image_name, $image_tmp);

		        	$date =  date("Y-m-d h:i:s");
					$message = "Change user profile picture of ".$name;
					$action = "Update";
					$id = $_SESSION['DMMS_userid'];
					userLogs($message, $action, $date, $id);

		        	echo json_encode($result);
		        }
		        else {
		            echo json_encode(false);
		        }
			}
		}

		if($_POST['action'] == "capture") {
			$img = $_POST['image'];
			$user_id = $_POST['user_id'];
			$img = str_replace('data:image/jpeg;base64,', '', $img);
			$img = str_replace(' ', '+', $img);
			$data = base64_decode($img);
			$image_name = uniqid() . '.png';
			$file = "../images/UPLOADED/".$image_name;

			
			$sql = "UPDATE tbl_users SET user_image='$image_name' WHERE user_id='$user_id'";
		    $error = $user->updateRecord($sql);
		    if($error == false) {
	        	if(file_put_contents($file, $data)) {

	        		$sql = "SELECT * FROM tbl_users WHERE user_id='$user_id'";
					$data = $user->searchRecord($sql);
					$name = $data[0]['user_fname']." ".$data[0]['user_lname'];
					$date =  date("Y-m-d h:i:s");

					$message = "Change user profile picture of ".$name;
					$action = "Update";
					$id = $_SESSION['DMMS_userid'];
					userLogs($message, $action, $date, $id);
	        		echo json_encode(true);
	        	}
	        	else {
	        		echo json_encode(false);
	        	}
	        }
	        else {
	            echo json_encode(false);
	        }
		}

		//CHECK CURRENT PASSWORD
		if($_POST['action'] == "check_current_pass") {		
			$php_errors = false;
			
			foreach($_POST as $key => $value) {
			  if($controller->checkData($_POST[$key])) {
			  	$php_errors == false; 
			  }
			  if(!$controller->cleanData($_POST[$key])) {
			  	$php_errors == true;
			  }
			} 

			if($php_errors == false) {
				$user_id = $_POST['user_id'];
				$input_pass = $_POST['password'];
				$sql = "SELECT *  FROM tbl_users WHERE user_id='$user_id'";
				$response = $user->searchRecord($sql);
				$database_pass = $response[0]['user_password'];
				$input_pass = md5($input_pass);
				$data = false;

				if($input_pass == $database_pass) {

					$data = true;
				}

				echo json_encode($data);
			}
			else {
				echo json_encode(true);
			}
		}

		//UPDATE USER PASSWORD PROFILE
		if($_POST['action'] == "update_password") {
			
			$php_errors = false;
			
			foreach($_POST as $key => $value) {
			  if($controller->checkData($_POST[$key])) {
			  	$php_errors == false; 
			  }
			  if(!$controller->cleanData($_POST[$key])) {
			  	$php_errors == true;
			  }
			} 

			if($php_errors == false) {
				$user_id = $_POST['user_id'];
				$username = $_POST['username'];
				$current_password = $_POST['current_password'];
				$new_password = $_POST['new_password'];
				$confirm_password = $_POST['confirm_password'];

				$sql = "SELECT *  FROM tbl_users WHERE user_id='$user_id'";
				$response = $user->searchRecord($sql);
				$database_pass = $response[0]['user_password'];
				$current_password = md5($current_password);
				$is_current_pass_correct = false;
				$is_password_match = false;
				$is_error = true;

				if($current_password == $database_pass) {
					$is_current_pass_correct = true;
				}
				if($new_password == $confirm_password) {
					$is_password_match = true;
				}

				if($is_current_pass_correct == true && $is_password_match == true) {
					$new_password = md5($new_password);
					$sql = "UPDATE tbl_users SET username='$username', user_password='$new_password'
							 WHERE user_id='$user_id'";
					$is_error = $user->updateRecord($sql);

					$sql = "SELECT * FROM tbl_users WHERE user_id='$user_id'";
					$data = $user->searchRecord($sql);
					$name = $data[0]['user_fname']." ".$data[0]['user_lname'];
					$date =  date("Y-m-d h:i:s");

					$message = "Change user password or username of ".$name;
					$action = "Update";
					$id = $_SESSION['DMMS_userid'];
					userLogs($message, $action, $date, $id);
					
				}

				echo json_encode(
					array("is_error" => $is_error, "check_1"=> $is_current_pass_correct, "check_2" => $is_password_match)
				);
				
			}
			else {
				echo json_encode(
					array("is_success" => false, "check_1"=> false, "check_2" => false)
				);
			}
		}

	}


	//GET USER DETAILS 
	function getUserDetais($id) {
		require_once "../models/model.php";
		$user = new CRUD;
		$controller = new Database;

		$sql = "SELECT * FROM tbl_users WHERE id='$id'";
		$response = $user->searchRecord($sql);

		return $response[0];
	}


	function allUsers() {
		require_once "../models/model.php";
		$user = new CRUD;
		$controller = new Database;
		$html = "";
		$sql = "SELECT * FROM tbl_users ORDER  BY lname ASC";
		$data = $user->displayRecord($sql);
		$count = 0;
		$profile_dir = "";

		
		foreach ($data as $value) {
			$count++;
			$id = $value['id'];
			$status = "";

			if($value['image'] == "") {
				$profile_dir = ($value['gender'] == "Male") ? "male.png" : "female.png";
			}
			else {
				$profile_dir = $value['image'];
			}

			$html = $html.'

			<div class="user-wrapper col-lg-3 col-sm-4 mb-5 text-center">
                <div class="image-cont">
				
					  <img src="../assets/images/uploaded/'.$profile_dir.'" class="img-fluid" alt="user-image">
<div class="sel-option">
    <button class="btn  btn-danger"><i class="fa fa-close pull-right"></i></button>
    <button class="btn btn-primary"><i class="fa fa-pencil   pull-right"></i></button>
</div>
</div>
<div class="username-txt text-white mt-2"><span><b>'.$value['fname'].' '.$value['lname'].'</b></span></div>
</div>
';

}

if(count($data) > 0) {
return $html;
}
else {
return "
    <h4>-------------------- No records available. -------------------</h4>
";
}
}


function allUsersHidden() {
require_once "../../models/model.php";
$tenant = new CRUD;
$controller = new Database;
$html = "";
$sql = "SELECT * FROM tbl_users ORDER BY user_lname ASC";
$data = $tenant->displayRecord($sql);
$count = 0;
$profile_dir = "";


foreach ($data as $value) {
$count++;
$user_id = $value['user_id'];

$html = $html.'
<tr>
    <td align="center">'.$count.'</td>
    <td>'.$value['user_fname'].' '.$value['user_lname'].'</td>
    <td>'.$value['user_gender'].'</td>
    <td>'.date('M d, Y', strtotime($value['user_bdate'])).'</td>
    <td>'.$value['user_position'].'</td>
    <td>'.ucwords(strtolower($value['user_address'])).'</td>
    <td>'.ucwords(strtolower($value['user_contact'])).'</td>
    <td>'.date('M d, Y', strtotime($value['user_date_reg'])).'</td>
    <td>'.$value['user_status'].'</td>
</tr>
';

}

if(count($data) > 0) {
return $html;
}
else {
return "
<tr>
    <td class='text-center' colspan='4'>
        <h4>-------------------- No records available. -------------------</h4>
    </td>
</tr>
";
}
}

function allUserLogs() {
require_once "../../models/model.php";
$logs = new CRUD;
$controller = new Database;
$html = "";
$sql = "SELECT * FROM user_logs
LEFT JOIN tbl_users ON user_logs.user_id=tbl_users.user_id
WHERE user_logs.action='Login' OR user_logs.action='Logout' OR user_logs.action='Error'
ORDER BY user_logs.logs_id DESC";
$data = $logs->displayRecord($sql);
$count = 0;
$profile_dir = "";
$username = "";
$logs = "";


foreach ($data as $value) {
$count++;

if($value['action'] == "Login" ) {
$logs = '<span class="label label-success">LOGIN</span>';
}
else if ($value['action'] == "Logout") {
$logs = '<span class="label label-warning">LOGOUT</span>';
}
else {
$logs = '<span class="label label-danger">ERROR</span>';
}


if($value['user_id'] == NULL) {
$username = "Unknown";
$profile_dir = "../../images/UPLOADED/error.png";
}
else {
$profile_dir = "../../images/UPLOADED/".$value['user_image'];
$username = $value['username'];
}



$html = $html.'
<tr>
    <td align="center">'.$count.'</td>
    <td>
        <img src="'.$profile_dir.'" class="display_img">
    </td>
    <td>'.$username.'</td>
    <td>'.$value['message'].'</td>
    <td>'.$logs.'</td>
    <td>'.date('M d, Y h:i:s A', strtotime($value['date'])).'</td>
</tr>
';

}

if(count($data) > 0) {
return $html;
}
else {
return "
<tr>
    <td class='text-center' colspan='8'>
        <h4>-------------------- No records available. -------------------</h4>
    </td>
</tr>
";
}
}

function allUserActivities() {
require_once "../../models/model.php";
$logs = new CRUD;
$controller = new Database;
$html = "";
$sql = "SELECT * FROM user_logs
LEFT JOIN tbl_users ON user_logs.user_id=tbl_users.user_id
WHERE user_logs.action='Add' OR user_logs.action='Update'
ORDER BY user_logs.logs_id DESC";
$data = $logs->displayRecord($sql);
$count = 0;
$profile_dir = "";
$username = "";
$logs = "";


foreach ($data as $value) {
$count++;
$profile_dir = "../../images/UPLOADED/".$value['user_image'];
$username = $value['username'];

if($value['action'] == "Add" ) {
$logs = '<span class="label label-success">ADD</span>';
}
else if ($value['action'] == "Update") {
$logs = '<span class="label label-warning">UPDATE</span>';
}
else {
$logs = '<span class="label label-danger">CANCEL</span>';
}



$html = $html.'
<tr>
    <td align="center">'.$count.'</td>
    <td>
        <img src="'.$profile_dir.'" class="display_img">
    </td>
    <td>'.$username.'</td>
    <td>'.$value['message'].'</td>
    <td>'.$logs.'</td>
    <td>'.date('M d, Y h:i:s A', strtotime($value['date'])).'</td>
</tr>
';
}

if(count($data) > 0) {
return $html;
}
else {
return "
<tr>
    <td class='text-center' colspan='9'>
        <h4>-------------------- No records available. -------------------</h4>
    </td>
</tr>
";
}
}

function userLogs($message, $action, $date, $user_id) {
$database = new Database;
$crud = new CRUD;
$sql = "INSERT INTO user_logs (message, action, date, user_id) VALUES ('$message', '$action', '$date', '$user_id')";
$crud->addRecord($sql);
}
?>