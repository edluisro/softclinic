<!DOCTYPE html>
<html lang="es">

<head>
    <base href="<?php echo base_url(); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Software administración clínica">
    <meta name="author" content="Alexis Cáceres">
    <meta name="keyword" content="Hospital, Clinica, Administración, Software, Php, CodeIgniter">
    <link rel="shortcut icon" href="uploads/favicon.png">
    <title>Iniciar Sesión - <?php echo $this->db->get('settings')->row()->system_vendor; ?></title>
    <link href="common/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="common/assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="common/assets/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="common/assets/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="common/assets/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="common/assets/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="common/css/util.css">
    <link rel="stylesheet" type="text/css" href="common/css/main.css">
    <link rel="stylesheet" type="text/css" href="common/css/modi.css">
</head>

<body style="background-color: #FFF;">
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="post" action="auth/login">
                    <div class="flex-row blue">
                        <span class="login100-form-title p-b-43" style="display: flex; justify-content:center; align-items:center;">
                            <img alt="clinic-soft-logo" src="uploads/logo.png" style="width: 60px; padding-right: 10px;"></h2>
                            <?php echo $this->db->get('settings')->row()->title; ?>
                        </span>
                    </div>
                    <div id="infoMessage"><?php echo $message; ?></div>
                    <div class="wrap-input100 validate-input" data-validate="Usuario requerido">
                        <input class="input100" type="text" name="identity" autofocus="">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Usuario</span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Contraseña requerida">
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Contraseña</span>
                    </div>
                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        <!-- <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Remember me
                            </label>
                        </div> -->
                        <div>
                            <span class="pull-right">
                                <a data-toggle="modal" href="#myModal"> Olvidé mi contraseña</a>
                            </span>
                        </div>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Ingresar
                        </button>
                    </div>
                    <!-- <div class="text-center p-t-46 p-b-20">
                        <span class="txt2">
                            or sign up using
                        </span>
                    </div>

                    <div class="login100-form-social flex-c-m">
                        <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                            <i class="fa fa-facebook-f" aria-hidden="true"></i>
                        </a>

                        <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </div> -->
                </form>
                <div class="login100-more" style="background-image: url('common/img/bg-03.png');">
                </div>
            </div>
        </div>
    </div>
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
        <div class="modal-dialog border-0">
            <div class="modal-content" style="margin-top: 15%; border-radius: 10px;">
                <form method="post" action="auth/forgot_password">
                    <div class="modal-header mocon border-0">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title titumo">Olvidé mi contraseña </h4>
                    </div>
                    <div class="modal-body">
                        <input type="text" name="email" placeholder="Correo" style="width: 80%;margin-left: 10%" autocomplete="off" class="form-control placeholder-no-fix " reguired>
                    </div>
                    <div class="modal-footer border-0">
                        <button data-dismiss="modal" class="btn btn-default canboton" type="button">Cancelar</button>
                        <input class="btn detailsbutton enviboton" type="submit" name="submit" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="common/js/jquery.js"></script>
    <script src="common/js/bootstrap.min.js"></script>
    <script src="common/assets/animsition/js/animsition.min.js"></script>
    <script src="common/js/main.js"></script>
</body>

</html>