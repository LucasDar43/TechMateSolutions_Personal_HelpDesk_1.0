<?php


    
    require_once("../config/conexiones.php");
    if(isset($_POST["enviar"]) and $_POST ["enviar"] =="si"){
        require_once("../models/Usuario.php");
        $usuario = new Usuario();
        $usuario->login();
    }


?>

<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Leonardo</>::Acceso</title>

	

    <link rel="stylesheet" href="/Personal_HelpDesk/public/css/separate/pages/login.min.css">
    <link rel="stylesheet" href="/Personal_HelpDesk/public/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="/Personal_HelpDesk/public/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/Personal_HelpDesk/public/css/main.css">

    
</head>
<body>

    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">

             


                <form class="sign-box" action="" method="post" id="login_form" >
                <input type="hidden" id="rol_id" name="rol_id" value="1">
                    <div class="sign-avatar">
                        <img src="/Personal_HelpDesk/public/img/avatar-sign1.jpg" alt="">
                    </div>
                    <header class="sign-title" id="titulo_usuario">Acceso Usuario</header>

                    <?php

                    if (isset($_GET['m'])){
                        switch($_GET['m']){
                            case '1';
                    ?>

                            <div class="alert alert-danger" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="close" >
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="d-flex align-items-center justify-content-start">
                                    <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
                                    <span>El usuario y/o contraseña son incorrectos.</span>
                                </div>
                            </div>
                    <?php
                     break;
                     
                     case '2';
                     ?>
                     <div class="alert alert-danger" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="close" >
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="d-flex align-items-center justify-content-start">
                                    <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
                                    <span>Los campos estan vacios.</span>
                                </div>
                            </div>
                     <?php
                     break;

                        }
                    }
                    ?>     

                   





                    <div class="form-group">
                        <input type="text" id="usuario_correo" name="usuario_correo" class="form-control" placeholder="Correo electronico"/>
                    </div>
                    <div class="form-group">
                        <input type="password" id="usuario_pass" name="usuario_pass" class="form-control" placeholder="Clave" />
                    </div>
                    <div class="form-group">
                        <div class="checkbox float-left">
                            <input type="checkbox" id="signed-in"/>
                        </div>
                        <div class="float-right reset">
                            <a href="reset-password.html">Cambiar contraseña</a>
                        </div>
                        <div class="float-left reset">
                            <a href="#" id="btnsoporte">Acceso soporte</a>
                        </div>
                    </div>

                    <input type="hidden" name="enviar" class="form_control" value="si">
                    <button type="submit" class="btn btn-rounded">Acceder</button>
                   
                
                </form>
            </div>
        </div>
    </div>


<script src="/Personal_HelpDesk/public/js/lib/jquery/jquery.min.js"></script>
<script src="/Personal_HelpDesk/public/js/lib/tether/tether.min.js"></script>
<script src="/Personal_HelpDesk/public/js/lib/bootstrap/bootstrap.min.js"></script>
<script src="/Personal_HelpDesk/public/js/plugins.js"></script>
<script type="text/javascript" src="/Personal_HelpDesk/public/js/lib/match-height/jquery.matchHeight.min.js"></script>
<script>
        $(function() {
            $('.page-center').matchHeight({
                target: $('html')
            });

            $(window).resize(function(){
                setTimeout(function(){
                    $('.page-center').matchHeight({ remove: true });
                    $('.page-center').matchHeight({
                        target: $('html')
                    });
                },100);
            });
        });
    </script>
<script src="/Personal_HelpDesk/public/js/app.js"></script>
<script type="text/javascript" src="index.js"></script>
</body>
</html>