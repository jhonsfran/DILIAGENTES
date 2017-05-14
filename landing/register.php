<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Registro</title>
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
</head>

<body class="signup-page">
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);">Registro <b>DiliAgente</b></a>
            
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_up" method="POST">
                    <div class="msg">Register a new membership</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="namesurname" placeholder="Name Surname" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                        <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">NEXT</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="sign-in.html">You already have a membership?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation" class="active"><a href="#home" data-toggle="tab" id="uno">HOME</a></li>
                                <li role="presentation"><a href="#profile" data-toggle="tab" id="dos">PROFILE</a></li>
                                <li role="presentation"><a href="#messages" data-toggle="tab" id="tres">MESSAGES</a></li>
                            </ul>
                            
                            <!-- Tab panes -->
                        <form id="sign_up" method="POST">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="namesurname" placeholder="Nombres" required autofocus>
                                        </div>
                                    </div>
                                   <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="namesurname" placeholder="Apellidos" required autofocus>
                                        </div>
                                    </div>                                    
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="email" class="form-control" name="email" placeholder="Correo Electrónico" required>
                                        </div>
                                    </div>
                                     <button class="btn btn-block btn-lg bg-pink waves-effect" id="next1">NEXT</button>   
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile">                                     
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">settings_phone</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="namesurname" placeholder="Teléfono" required autofocus>
                                        </div>
                                    </div>
                                   <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">smartphone</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="namesurname" placeholder="Celular" required autofocus>
                                        </div>
                                    </div>                                    
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="email" class="form-control" name="email" placeholder="Tipo de Documento" required>
                                        </div>
                                    </div>
                                     <button class="btn btn-block btn-lg bg-pink waves-effect" id="next2">NEXT</button>  
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="messages">                                    
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="namesurname" placeholder="Name" required autofocus>
                                        </div>
                                    </div>
                                   <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="namesurname" placeholder="Last Name" required autofocus>
                                        </div>
                                    </div>                                    
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                                        <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
                                    </div>                                    
                                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">SUBMIT</button>
                                </div>
                                

                            </div>
                        </form>    
                        </div>
                    </div>
                </div>
            </div>

    <!-- Jquery Core Js -->
    <script src="../view/template/plugins/jquery/jquery.min.js"></script>

        <script type="text/javascript">
        
    $("#next1").on("click",function() {

        $("#dos").click ();

    });
        $("#next2").on("click",function() {

        $("#tres").click ();

    });
    </script>

    <!-- Bootstrap Core Js -->
    <script src="../view/template/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../view/template/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../view/template/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="../view/template/js/admin.js"></script>
    <script src="../view/template/js/pages/examples/sign-up.js"></script>


</body>

</html>