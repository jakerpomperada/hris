<?php 
    include_once("../controllers/auth.php"); 
    include_once("../controllers/user_data.php");
    define("BASE_URL","http://localhost/pds2/");
    homeAuth(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--  <title>Dashboard | Welcome</title> -->
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets/images/tuplogo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/DataTables/jquery.datatables.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/DataTables/buttons.datatables.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>node_modules/sweetalert2/dist/sweetalert2.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery.bootgrid.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/custom.css">
    <script src="<?php echo BASE_URL; ?>node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/jquery.bootgrid.min.js"></script>
</head>

<body>

    <div class="app-container">
        <nav class="nav-app navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="<?php echo BASE_URL; ?>./views/dashboard.php">
                <img src="<?php echo BASE_URL; ?>assets/images/tuplogo.png" class="img-repsonsive" alt="app-logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav w-100 align-items-center">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo BASE_URL; ?>./views/dashboard.php">Dashboard <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL; ?>./views/form.php">Form</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL; ?>./views/record.php">Records</a>
                    </li>
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                            id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="pl-1">
                                Reports
                            </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?php echo BASE_URL; ?>views/priority_training.php">Training Priority</a>
                            <a class="dropdown-item" href="<?php echo BASE_URL; ?>views/years_service.php">Years of
                                Service</a>
                            <a class="dropdown-item" href="<?php echo BASE_URL; ?>views/loyalty_awards.php">Loyalty
                                Awards</a>
                            <a class="dropdown-item" href="<?php echo BASE_URL; ?>views/gender.php">Gender</a>
                            <a class="dropdown-item" href="<?php echo BASE_URL; ?>views/education.php">Educational
                                Attainment</a>
                            <a class="dropdown-item" href="<?php echo BASE_URL; ?>views/leaves.php">Leave
                                Credits</a>
                            <a class="dropdown-item" href="<?php echo BASE_URL; ?>views/turn_over.php">Turn
                                Over</a>
                          </div>
                    </li>
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                            id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="pl-1">
                                Graph
                            </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?php echo BASE_URL; ?>views/predict.php">Linear
                                Regression</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL; ?>./views/user.php">Users</a>
                    </li>
                    <li class="user-menu nav-item dropdown ml-auto">

                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                            id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <div class="user-photo overflow-hidden">
                                <img src="<?php echo "../assets/images/uploaded/".$user_data['image']; ?>"
                                    class="img-repsonsive" alt="profile">
                            </div>

                            <span class="pl-1">
                                <?php echo ucwords($user_data['fname'])." ".ucwords($user_data['lname'])." "; ?>
                            </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Account<i class="fa fa-key pull-right"></i></a>
                            <a class="dropdown-item" href="<?php echo BASE_URL; ?>./controllers/logout.php">Logout<i
                                    class="fa fa-sign-out pull-right"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>