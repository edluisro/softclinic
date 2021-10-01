<!DOCTYPE html>
<html lang="en">
<head>
<base href="<?php echo base_url(); ?>">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Rizvi">
        <meta name="keyword" content="Php, Hospital, Clinic, Management, Software, Php, CodeIgniter, Hms, Accounting">
        <link rel="shortcut icon" href="uploads/favicon.png">

        <title>Login - <?php echo $this->db->get('settings')->row()->system_vendor; ?></title>

<!--===============================================================================================-->  
    
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="common/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="common/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="common/css/util.css">
    <link rel="stylesheet" type="text/css" href="common/css/main.css">
    <link rel="stylesheet" type="text/css" href="common/css/modi.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="post" action="auth/login">
                    <div class="row blue">
                        
                        <div class="col-2">
                             <img alt="" src="uploads/favicon.png"></h2>
                            
                        </div>
                         <div class="col-5 titulogin " >
                             
                          <h2 class="login form-signin-heading"><?php echo $this->db->get('settings')->row()->title; ?>
                         </div>



                    </div>
                 
                    
                    <div id=" infoMessage" ><?php echo $message; ?></div>
                    
                    
                    <div class="wrap-input100 validate-input" data-validate = "Usuario requerido" >
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
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Remember me
                            </label>
                        </div>

                        <div>
                            <span class="pull-right">
                                  <a data-toggle="modal" href="#myModal"> Olvide mi contraseña</a>
              
                              </span>
                        </div>
                    </div>
            

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
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
            <div class="modal-dialog">
                <div class="modal-content  " style="margin-top: 15%; border-radius: 10px;">
                    <form method="post" action="auth/forgot_password">
                        <div class="modal-header mocon ">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title titumo  ">Olvide mi contraseña </h4>
                        </div>

                        <div class="modal-body">
                         
                            <input type="text" name="email" placeholder="Ingrese su usuario" style="width: 80%;margin-left: 10%" autocomplete="off" class="form-control placeholder-no-fix "  reguired>

                        </div>
                        <div class="modal-footer">
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

    
    
<!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="common/js/main.js"></script>
</body>
</html>





        



        

 