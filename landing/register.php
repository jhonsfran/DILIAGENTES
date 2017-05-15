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
        <!-- Sweetalert Css -->
        <link href="../view/template/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
        <!-- Bootstrap Select Css -->
        <link href="../view/template/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
        <!-- Custom Css -->
        <link href="../view/template/css/style.css" rel="stylesheet" />
        <link href="../utils/css/toastr.css" rel="stylesheet" />
    </head>
    <body class="signup-page">
        <div class="signup-box">
            <div class="logo">
                <a href="javascript:void(0);">Registro <b>DiliAgente</b></a>
            </div>
            
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation" class="active"><a href="#home" data-toggle="tab" id="uno">Primer Paso</a></li>
                                <li role="presentation"><a href="#profile" data-toggle="tab" id="dos">Segundo Paso</a></li>
                                <li role="presentation"><a href="#messages" data-toggle="tab" id="tres">Ultimo Paso</a></li>
                            </ul>
                            
                            <!-- Tab panes -->
                            <form id="sign_up" method="POST" action="">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="home">
                                        
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Nombres" required autofocus>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Apellidos" required autofocus>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electrónico" required>
                                            </div>
                                        </div>
                                        <button class="btn btn-block btn-lg bg-deep-orange waves-effect" id="next1">SIGUIENTE</button>
                                        <div class="m-t-25 m-b--5 align-center">
                                            <a href="login.php">Ya te encuentras registrado?</a>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="profile">
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">settings_phone</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Teléfono" required autofocus>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">smartphone</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="smartphone" id="smartphone" placeholder="Celular" required autofocus>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="document_number" id="document_number" placeholder="Numero de Documento" required>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                            <div class="form-line">
                                                <select class="form-control show-tick" name="document_type" id="document_type">
                                                    <option value="">Tipo de documento</option>
                                                    <option value="1">C.C.</option>
                                                    <option value="2">T.I.</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <button class="btn btn-block btn-lg bg-deep-orange waves-effect" id="next2">SIGUIENTE</button>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="messages">
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="nickname" id="nickname" placeholder="NickName" required autofocus>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="password" class="form-control" name="password" id="password" minlength="6" placeholder="Contraseña" required>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="password" class="form-control" name="confirm_pass" id="confirm_pass" minlength="6" placeholder="Confirmar Contraseña" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-deep-orange">
                                            <label for="terms">He leído y Acepto los <a href="javascript:void(0);">Terminos de uso</a>.</label>
                                        </div>
                                        <button class="btn btn-block btn-lg bg-deep-orange waves-effect" id="btn_sign_up" type="button">ENVIAR</button>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Jquery Core Js -->
            <script src="../view/template/plugins/jquery/jquery.min.js"></script>
            <script src="../utils/js/controller/ajaxPetition.js"></script>
            <script src="../utils/js/controller/registerController.js"></script>
            <script src="../utils/js/controller/DEFINE.js"></script>
            <script src="../utils/js/toastr.js"></script>
            <script type="text/javascript">
            
            $("#next1").on("click",function() {
            $("#dos").click ();
            });
            $("#next2").on("click",function() {
            $("#tres").click ();
            });
            </script>
            <!-- Bootstrap Core Js -->
            <script src="../view/template/plugins/bootstrap/js/bootstrap.js"></script>.
            <!-- Select Plugin Js -->
            <script src="../view/template/plugins/bootstrap-select/js/bootstrap-select.js"></script>
            <!-- Waves Effect Plugin Js -->
            <script src="../view/template/plugins/node-waves/waves.js"></script>
            <!-- Autosize Plugin Js -->
            <script src="../view/template/plugins/autosize/autosize.js"></script>
            <!-- Validation Plugin Js -->
            <script src="../view/template/plugins/jquery-validation/jquery.validate.js"></script>
            <!-- Bootstrap Notify Plugin Js -->
            <script src="../view/template/plugins/bootstrap-notify/bootstrap-notify.js"></script>
            <!-- SweetAlert Plugin Js -->
            <script src="../view/template/plugins/sweetalert/sweetalert.min.js"></script>
            
            <!-- Custom Js -->
            <script src="../view/template/js/admin.js"></script>
            <script src="../view/template/js/pages/examples/sign-up.js"></script>
            <script src="../view/template/js/pages/ui/dialogs.js"></script>
        </body>
    </html>