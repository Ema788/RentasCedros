<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ingresar</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo base_url(RECURSOS_USER_CSS . 'styles.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url(RECURSOS_USER_LOGIN_CSS . 'main.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(RECURSOS_USER_LOGIN_CSS . 'util.css') ?>" rel="stylesheet" type="text/css">
    <link rel="estilos" href="<?php echo base_url(RECURSOS_USER_CSS . 'estilos.css') ?>">
    <link rel="shortcut icon" href="<?php echo base_url(RECURSOS_PORTAL_IMG . 'boletosLogo.png') ?>">
    <link rel="stylesheet" href="<?php echo base_url(RECURSOS_PANEL_PLUGINS . 'toastr/toastr.min.css'); ?>">
    <!--FONT DE NAVBAR -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mende+Kikakui&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
</head>
<style>
    .has-val {
    height: 48px !important;

    .has-val + .focus-input100 + .label-input100 {
    top: 14px;
    font-size: 13px;
}
element.style {
    margin-right: 150px;
}
}
</style>

    <body style="background-color: #666666;">
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="login100-form validate-form">
                        <span class="login100-form-title p-b-43">
                            Iniciar Sesión
                        </span>
                        <?php
                            $attributes = array('id' => 'form_login', );
                            echo form_open('validar_Usuario', $attributes);
                            ?>
                        
                        <div class="wrap-input100 validate-input">
                            <label class="label" for="email"></label>
                            <span class="focus-input100"></span>
                            <span class="label-input100">Email</span>
                            <?php
                                $data = array(
                                    'type'  => 'text',
                                    'class' => 'input100',
                                    'id'    => 'email',
                                    'name'  => 'email',
                                    // 'required' => 'true'
                                );
                                echo form_input($data);
                            ?>
                        </div>
                        
                        
                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <label class="label" for="password"></label>
                            <span class="focus-input100"></span>
                            <span class="label-input100">Password</span>
                            <?php
                                $data = array(
                                    'type'  => 'password',
                                    'class' => 'input100',
                                    'id'    => 'password',
                                    'name'  => 'password',
                                    // 'required' => 'true'
                                );
                                echo form_password($data);
                            ?>
                        </div>
                        <div class="flex-sb-m w-full p-t-3 p-b-32">
                            <div class="contact100-form-checkbox">
                                <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                <label class="label-checkbox100" for="ckb1">
                                    Remember me
                                </label>
                            </div>

                            <div>
                                <a href="#" class="txt1">
                                    Forgot Password?
                                </a>
                            </div>
                        </div>
                

                        <div class="container-login100-form-btn">
                        <?= form_submit('ingresar', 'Ingresar', ['class' => 'form-control login100-form-btn']) ?>
                        </div><br>

                        <div class="login100-form-social flex-c-m">
                            <a target="_blank" href="https://www.facebook.com"><img src="<?php echo base_url(RECURSOS_USER_IMG_REGISTRO . 'face.webp') ?>" width="40" height="40"></a>
                            <a target="_blank" href="https://accounts.google.com/v3/signin/identifier?dsh=S-1861348439%3A1679800604934109&continue=http%3A%2F%2Fsupport.google.com%2Faccounts%2Fanswer%2F76194%3Fhl%3Des&ec=GAZAdQ&hl=es&ifkv=AQMjQ7TAKxWdZc-yaZNJA7zMhh_pOzVzo4miqEkaPvYVBF39Vkxw7wF3wgfDkeFh4dB1a1pk5mi9SA&passive=true&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><img src="<?php echo base_url(RECURSOS_USER_IMG_REGISTRO . 'google.png') ?>" width="40" height="40"></a>
                        
                        </div>
                    </div>

                    <div class="login100-more" style="background-image">
                    <img src="<?php echo base_url(RECURSOS_USER_IMG_REGISTRO . 'Edifios.jpg') ?>" width="938" height="745">
                    </div>
                </div>
            </div>
        </div>
        
        
    </body>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url(RECURSOS_USER_JS . 'jquery_v3.min.js') ?>"></script> 
        <script src="<?php echo base_url(RECURSOS_USER_JS . 'scripts.js') ?>"></script> 
        <script src="<?php echo base_url(RECURSOS_USER_PLUGINS . 'jquery-validation/jquery.validate.min.js') ?>"></script>
        <script src="<?php echo base_url(RECURSOS_USER_PLUGINS . 'jquery-validation/additional-methods.min.js')?>"></script>
        <!--toastr-->
    <script src="<?php echo base_url(RECURSOS_PANEL_PLUGINS.'toastr/toastr.min.js') ?>"></script>
        <script>
        //llamar la funcion para mostrar el mensaje
        <?= mostrar_mensaje();?>
    </script>
        <script src="<?php echo base_url(RECURSOS_USER_JS . 'especificos/acceso.js')?>"></script>
</body>
</html>