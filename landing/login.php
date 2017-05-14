<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Login</title>
    <!-- Favicon-->
    <link rel="icon" href="../view/template/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../view/template/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../view/template/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../view/template/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../view/template/css/style.css" rel="stylesheet">

    <link href="../utils/css/toastr.css" rel="stylesheet" />
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);"><b>DiliAgente</b></a>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="">
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" id="btn_sign_in" type="button">SIGN IN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="register.php">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password.html">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="../view/template/plugins/jquery/jquery.min.js"></script>

    <script src="../utils/js/controller/ajaxPetition.js"></script>
    <script src="../utils/js/controller/loginController.js"></script>
    <script src="../utils/js/controller/DEFINE.js"></script>
     <script src="../utils/js/toastr.js"></script>
    <!-- Bootstrap Core Js -->
    <script src="../view/template/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../view/template/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../view/template/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="../view/template/js/admin.js"></script>
    <script src="../view/template/js/pages/examples/sign-in.js"></script>


</body>

</html>