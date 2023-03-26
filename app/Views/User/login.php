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
    <link rel="estilos" href="<?php echo base_url(RECURSOS_USER_CSS . 'estilos.css') ?>">
    <link rel="shortcut icon" href="<?php echo base_url(RECURSOS_PORTAL_IMG . 'boletosLogo.png') ?>">
    <link rel="stylesheet" href="<?php echo base_url(RECURSOS_PANEL_PLUGINS . 'toastr/toastr.min.css'); ?>">
    <!--FONT DE NAVBAR -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mende+Kikakui&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
</head>

<body id="page-top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #010101;">
        <div class="container nav">
            <a class="navbar-brand" href="/"><img src="<?php echo base_url(RECURSOS_PORTAL_IMG . 'cineLogo.png') ?>" alt="..."></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">

            </div>
        </div>
    </nav>

    <!-- Masthead-->
    <header">
        </header>
        <br>
        <br>
        <br>
        <br><br><br><br>


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="login-wrap p-4 p-md-7">
                            <div class="d-flex">
                                <div class="w-100">
                                    <br>
                                    <br>
                                    <h3 class="mb-4 text-center">INICIAR SESION
                                        <img src="<?php echo base_url(RECURSOS_PORTAL_IMG_REGISTRO . 'pelis.png') ?>" alt="logo" style="width:70px;">
                                    </h3>
                                </div>
                            </div>
                            <!-- <form action="../../Panel/backend/admin/validar_Usuario.php" method="POST" class="signin-form">-->
                            <?php
                            $attributes = array('id' => 'form_login', );
                            echo form_open('validar_Usuario', $attributes);
                            ?>
                            <div class="form-group mb-3">
                                <label class="label" for="email">Correo electrónico</label>
                                <!--<input type="text" class="form-control" placeholder="Correo" value="" id="email" name="email" required>-->
                                <?php
                                $data = array(
                                    'type'  => 'text',
                                    'class' => 'form-control',
                                    'placeholder' => 'Ejemplo: correo@gmail.com',
                                    'id'    => 'email',
                                    'name'  => 'email',
                                    // 'required' => 'true'
                                );
                                echo form_input($data);
                                ?>
                            </div>
                            <div class="valid-feedback">
                                ¡Ok válido!
                            </div>
                            <div class="invalid-feedback">
                                Por favor ingrese un correo válido.
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="password">Contraseña</label>
                                <!--<input type="password" class="form-control" placeholder="Contraseña" id="password" name="password" value="" required>-->
                                <?php
                                $data = array(
                                    'type'  => 'password',
                                    'class' => 'form-control',
                                    'placeholder' => '********',
                                    'id'    => 'password',
                                    'name'  => 'password',
                                    // 'required' => 'true'
                                );
                                echo form_password($data);
                                ?>
                            </div>
                            <div class="valid-feedback">
                                ¡Ok válido!
                            </div>
                            <div class="invalid-feedback">
                                Por favor ingrese una contraseña válida.
                            </div>
                            <div class="form-group">
                                <!--<button type="submit" class="form-control btn btn-primary rounded submit px-3">Ingresar </button>-->
                                <?= form_submit('ingresar', 'Ingresar', ['class' => 'form-control btn btn-primary rounded submit px-3']) ?>
                            </div>
                            
                            <?= form_close(); ?>
                            <!--</form>-->
                            <br>
                            <p class="text-center">¿No tienes una cuenta?</p> <br>

                                <a class="btn btn-primary btn-sm " href="/registro">Registrarse Ahora</a>

                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <img src="<?php echo base_url(RECURSOS_USER_IMG_REGISTRO . 'pop.jpg') ?>" alt="logo" style="width:600px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer-->
        <footer class="py-2 bg-dark text-write">
            <div class="container no-width">
                <div class="row no-gutters my-5">
                    <div class="col-12 col-lg-4">
                        <div class="pr-lg-5 pb-5">
                            <p class="h1 sc-bwzfXH cEFPpN">
                                <small>Atención telefónica</small>
                                <br>
                                <a href="tel:5552576969" class="text-white">
                                    <strong>246 175 9822</strong>
                                </a>
                            </p>
                        </div>
                        <div class="pr-lg-5 pt-5 border-top border-secondary">
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-outline-white btn-icon-circle" href="http://www.facebook.com/pages/Cinemex/83988183288" target="_blank" rel="noopener noreferrer">
                                    <i class="fab fa-fw fa-facebook-f">
                                    </i>
                                </a>
                                <a class="btn btn-outline-white btn-icon-circle" href="https://twitter.com/cinemex" target="_blank" rel="noopener noreferrer">
                                    <i class="fab fa-fw fa-twitter">
                                    </i>
                                </a>
                                <a class="btn btn-outline-white btn-icon-circle" href="https://instagram.com/cinemex" target="_blank" rel="noopener noreferrer">
                                    <i class="fab fa-fw fa-instagram">
                                    </i>
                                </a>
                                <a class="btn btn-outline-white btn-icon-circle" href="https://www.youtube.com/channel/UCK7DXWnJJarFsyu3-kADUsg" target="_blank" rel="noopener noreferrer">
                                    <i class="fab fa-fw fa-youtube">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="px-5 py-5 py-lg-0 my-5 my-lg-0 sc-bxivhb hgSmeg">
                            <ul class="font-weight-light small py-2">
                                <li class="nav-item">
                                    <a class="nav-link py-1 text-white" href="">Sobre CineJED</a>
                                </li>
                                <li class="nav-item"><a class="nav-link py-1 text-white" href="">Términos y condiciones Cinefan</a></li>
                                <li class="nav-item"><a class="nav-link py-1 text-white" href="">Política de precios</a></li>
                                <li class="nav-item"><a class="nav-link py-1 text-white" href="">Política de reembolsos</a></li>
                                <li class="nav-item"><a class="nav-link py-1 text-white" href="" target="_blank" rel="noopener noreferrer">Bolsa de trabajo corporativo</a></li>
                                <li class="nav-item"><a class="nav-link py-1 text-white" href="">Términos y condiciones</a></li>
                                <li class="nav-item"><a class="nav-link py-1 text-white" href="">Aviso de Privacidad</a></li>
                                <li class="nav-item"><a class="nav-link py-1 text-white" href="">Bolsa de trabajo cines</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="d-flex justify-content-around justify-content-lg-between align-items-center pl-lg-5 pb-5">
                            <a class="sc-bdVaJa jeNtWj" href="https://itunes.apple.com/mx/app/cinemex/id418163740" target="_blank" rel="noopener noreferrer">
                                <img src="https://s3.amazonaws.com/statics3.cinemex.com/v2/dist/images/logo-app-store.png" class="img-fluid1" alt="App Store"></a>
                            <a class="sc-bdVaJa jeNtWj" href="https://play.google.com/store/apps/details?id=com.cinemex&amp;hl=es" target="_blank" rel="noopener noreferrer">
                                <img src="https://s3.amazonaws.com/statics3.cinemex.com/v2/dist/images/logo-google-play.png" class="img-fluid1" alt="Google Play"></a>
                        </div>
                        <div class="pt-5 border-top border-secondary">
                            <div class="d-flex flex-wrap flex-md-nowrap justify-content-around justify-content-lg-between align-items-center pl-lg-5">
                                <a href="https://www.fundaciongrupomexico.org/programas/Paginas/concienciaCinemex.aspx" target="_blank" rel="noopener noreferrer" class="m-2 mb-4">
                                    <img src="https://s3.amazonaws.com/statics3.cinemex.com/v2/dist/images/logo-conciencia-cinemex.png" class="img-fluid1" alt="Conciencia Cinemex"></a>
                                <a href="http://www.canacine.org.mx/" target="_blank" rel="noopener noreferrer" class="m-2 mb-4">
                                    <img src="https://s3.amazonaws.com/statics3.cinemex.com/v2/dist/images/logo-canacine.png" class="img-fluid1" alt="Canacine"></a>
                                <a href="http://www.alboa.com.mx/?utm_source=cinemex" target="_blank" rel="noopener noreferrer" class="m-2 mb-4">
                                    <img src="https://s3.amazonaws.com/statics3.cinemex.com/v2/dist/images/logo-alboa.png" class="img-fluid1" alt="Alboa"></a>
                                <a href="https://gamersarena.com.mx/?utm_source=cinemex" target="_blank" rel="noopener noreferrer" class="m-2 mb-4">
                                    <img src="https://s3.amazonaws.com/statics3.cinemex.com/v2/dist/images/logo-arena.png" class="img-fluid1" alt="Gamers Arena"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
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