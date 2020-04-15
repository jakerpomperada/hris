<?php define("BASE_URL", "http://localhost/pds2/"); ?>
<?php
  include_once("./controllers/auth.php");
  loginAuth();
  $token = token('HRIS_login_token');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN | HRIS</title>

    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets/images/tuplogo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>node_modules/bootstrap/dist/css/bootstrap.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/font-awesome/css/font-awesome.min.css">
    <!-- Font Izitoast Alert css -->
    <link rel=" stylesheet" href="<?php echo BASE_URL; ?>node_modules/izitoast/dist/css/izitoast.min.css">
    <!-- Font Custom css -->
    <link rel=" stylesheet" href="<?php echo BASE_URL; ?>assets/css/custom.css">

</head>

<body class="login-app">
    <nav class="navbar-app navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand text-white">TUP VISAYAS - <span>INTEGRATION OF MACHINE LEARNING IN HUMAN RESOURCE
                INFORMATION SYSTEM</span> </a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <div class="app-container">
        <div class="login-wrapper d-flex align-items-center flex-wrap">
            <div class="col-md-8">
                <form id="loginForm">
                    <div class="card border-0">
                        <div class="card-header card-header-app">
                            <h5 class="card-title mx-auto text-white">Login Form</h5>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="Username">Username</label>
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <span class="border-light bg-white input-group-text" id="my-addon"><i
                                                class="fa fa-user"></i></span>
                                    </div>
                                    <input class="border-light shadow-lg form-control" type="text" id="username"
                                        name="username" placeholder="Enter Username" aria-label="username "
                                        aria-describedby="my-addon" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <div class="input-group">
                                    <div class="input-group-append">

                                        <span class="border-light bg-white input-group-text" id="my-addon"><i
                                                class="fa fa-key"></i></i></span>
                                    </div>
                                    <input class="border-light shadow-lg form-control" type="password" id="password"
                                        name="password" placeholder="Enter Password" aria-label="password"
                                        aria-describedby="my-addon" required>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn-app btn btn-default btn-block text-white"><i
                                    class="fa fa-sign-in">
                                </i>
                                Login</button>
                        </div>

                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <img src="<?php echo BASE_URL; ?>assets/images/tuplogo.png" class="img-repsonsive" alt="app-logo">
                <center>
                    <h4 class="text-white">
                        <b id="date"></b>
                        <b id="timer"></b>
                    </h4>
                </center>
            </div>
        </div>
    </div>
    <script src="<?php echo BASE_URL; ?>node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo BASE_URL; ?>node_modules/izitoast/dist/js/izitoast.min.js"></script>

    <script type="text/javascript">
    var d = new Date();
    $("#date").text(d.toDateString());
    var myVar = setInterval(myTimer, 1000);

    function myTimer() {
        var d = new Date();
        $("#timer").text(d.toLocaleTimeString());
    }

    $("#loginForm").on('submit', (function(e) {
        e.preventDefault();
        $.ajax({
            url: "./controllers/login.php",
            dataType: 'json',
            type: "POST",
            data: {
                action: 'login',
                username: $("#username").val(),
                password: $("#password").val(),
                HRIS_login_token: "<?php echo $token; ?>"
            },
            success: function(response) {
                if (response.php_error == false) {

                    iziToast.success({
                        title: 'Success',
                        message: response.php_message,
                        pauseOnHover: true,
                        position: 'topRight',
                        animateInside: true,
                        balloon: true,
                    });

                    window.location.href = response.link

                } else if (response.php_error == true) {
                    // showError(response.php_message);
                    iziToast.error({
                        title: 'Error',
                        message: response.php_message,
                        pauseOnHover: true,
                        position: 'topRight',
                        animateInside: true,
                        balloon: true
                    });
                } else {
                    // showError("Error");
                    iziToast.error({
                        title: 'Error',
                        message: response.php_message,
                        pauseOnHover: true,
                        position: 'topRight',
                        animateInside: true,
                        balloon: true
                    });
                }
            },
            error: function() {
                // showError("error");
            }
        });
    }));
    </script>
</body>

</html>