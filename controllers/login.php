<?php
    require_once "../models/model.php";
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action'])) {

        //LOGIN
        if ($_POST['action'] == "login") {
            if ($_SESSION['HRIS_login_token'] == $_POST['HRIS_login_token']) {
                $database = new Database;
                $login = new Login;
                $user = new CRUD;

                $username_is_valid = $database->checkData($_POST['username']);
                $password_is_valid = $database->checkData($_POST['password']);
                $action = "";

                if ($username_is_valid == false) {
                    array_push($php_message, "Username is required.");
                }
                if ($password_is_valid == false) {
                    array_push($php_message, "Password is required.");
                }
                if ($username_is_valid == true &&
                    $password_is_valid == true) {
                    $id = "";
                    $username = $database->cleanData($_POST['username']);
                    $password = $database->cleanData($_POST['password']);
                    $password = md5($password);

                    $sql1 = "SELECT * FROM tbl_users WHERE username='$username'";
                    $username_exist = $login->validateLogin($sql1);
                    $sql2 = "SELECT * FROM tbl_users WHERE username='$username' AND password='$password'";
                    $password_exist = $login->validateLogin($sql2);
                    $sql3 = "SELECT * FROM tbl_users WHERE username='$username' AND password='$password' AND status='Active'";
                    $account_active = $login->validateLogin($sql3);
                
                    $user_data = $user->displayRecord($sql1);
                    $message = validateResult($username_exist, $password_exist, $account_active);
                    
                    if ($message == "Login successfully.") {
                        $id = $user_data[0]['id'];
                        $_SESSION['HRIS_id'] = $id;
                        $action = "Login";
                       
                        $data = array("link" =>"./views/dashboard.php", "php_message" =>$message, "php_error" =>false);
                        echo json_encode($data);
                    } else {
                        if ($username_exist == false) {
                            $id = 0;
                        } else {
                            $id = $user_data[0]['id'];
                        }
                        $action = "Error";
                        $data = array("link" =>"", "php_message" =>[$message], "php_error" =>true);
                        echo json_encode($data);
                    }
                } else {
                    $data = array("link" =>"", "php_message" =>"Invalid input.", "php_error" =>true);
                    echo json_encode($data);
                }
            }
        }
    }


    function validateResult($username_exist, $password_exist, $account_active)
    {
        $php_message = "";
        if ($username_exist == true) {
                if ($password_exist == true) {
                    if ($account_active == true) {
                        $php_message = "Login successfully.";
                    } else {
                        $php_message = "User account is inactive.";
                    }
                } else {
                    $php_message = "User password is incorrect.";
                }
        } else {
            $php_message = "User account not exist.";
        }
        return $php_message;
    }
    
    
    