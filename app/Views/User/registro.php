<?php
#require('../../helpers/menu_portal.php');
#require('../../helpers/funciones_generales.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CINE 2.0 | Registro</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="./assets/Vector-Cinema-Projector-PNG-File.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo base_url(RECURSOS_USER_CSS . 'styles.css') ?>" rel="stylesheet" />
    <link href="<?php echo base_url(RECURSOS_USER_CSS . 'estilos.css') ?>" rel="estilos" />
    <link rel="shortcut icon" href="<?php echo base_url(RECURSOS_USER_IMG . 'boletosLogo.png') ?>">
</head>

<body id="page-top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #010101;">
        <div class="container nav">
            <a class="navbar-brand" href="/"><img src="<?php echo base_url(RECURSOS_PORTAL_IMG . 'cineLogo.png') ?>" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <? #php echo crear_menuLogin('User','login');
                ?>
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
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4 text-center">REGISTRARSE
                                        <img src="<?php echo base_url(RECURSOS_PORTAL_IMG_REGISTRO . 'pelis.png') ?>" alt="logo" style="width:100px;">
                                </div>
                            </div>
                            <!--<form action="../../Panel/backend/crud/usuario/insertarUsuario.php" method="POST" class="signin-form">-->
                            <!--Formulario-->
                            <?php
                            $attributes = array('id' => 'form_registro');
                            echo form_open('registro', $attributes);
                            ?>
                            <div class="form-group mb-3">
                                <label class="label" for="name">Nombre</label>
                                <!--<input type="text" class="form-control" placeholder="Usuario" value="" id="nombre" name="nombre" required>-->
                                <?php
                                $data = array(
                                    'type'  => 'text',
                                    'class' => 'form-control',
                                    'placeholder' => 'Usuario',
                                    'id'    => 'name',
                                    'name'  => 'name',
                                    'required' => 'true'
                                );
                                echo form_input($data);
                                ?>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Apellido Paterno</label>
                                    <!--<input type="text" class="form-control" placeholder="contraseña" id="apellidoPaterno" name="apellidoPaterno" required>-->
                                    <?php
                                        $data = array(
                                            'type'  => 'text',
                                            'class' => 'form-control',
                                            'placeholder' => 'Apellido Paterno',
                                            'id'    => 'apellidoPaterno',
                                            'name'  => 'apellidoPaterno',
                                            'required' => 'true'
                                        );
                                        echo form_input($data);
                                    ?>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Apellido Materno</label>
                                    <!--<input type="text" class="form-control" placeholder="Usuario" value="" id="apellidoMaterno" name="apellidoMaterno" required>-->
                                    <?php
                                        $data = array(
                                            'type'  => 'text',
                                            'class' => 'form-control',
                                            'placeholder' => 'Apellido Materno',
                                            'id'    => 'apellidoMaterno',
                                            'name'  => 'apellidoMaterno',
                                            'required' => 'true'
                                        );
                                        echo form_input($data);
                                    ?>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Email</label>
                                    <!--<input type="email" class="form-control" placeholder="Usuario" value="" id="correo" name="correo" required>-->
                                    <?php
                                        $data = array(
                                            'type'  => 'email',
                                            'class' => 'form-control',
                                            'placeholder' => 'Ejemplo:correo@gmail.com',
                                            'id'    => 'email',
                                            'name'  => 'email',
                                            'required' => 'email'
                                        );
                                        echo form_input($data);
                                    ?>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Password</label>
                                    <!--<input type="password" class="form-control" placeholder="Usuario" value="" id="password" name="password" required>-->
                                    <?php
                                        $data = array(
                                            'type'  => 'password',
                                            'class' => 'form-control',
                                            'placeholder' => '********',
                                            'id'    => 'password',
                                            'name'  => 'password',
                                            'required' => 'true'
                                        );
                                        echo form_password($data); 
                                    ?>
                                </div>
                                <div class="form-group">
                                    <!--<button type="submit" class="form-control btn btn-primary rounded submit px-3">Ingresar</button>-->
                                    <?= form_submit('Registrarse', 'Registrarse', ['class' => 'form-control btn btn-primary rounded submit px-3'])?>
                                </div>
                            <?php echo form_close(); ?>
                        
                        <div class="login-wrap p-5 p-md-1">
                            <img src="<?php echo base_url(RECURSOS_USER_IMG.'direc.jpg') ?>" alt="logo" style="width: 300px;">
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
                                    <a class="nav-link py-1 text-white" href="/nosotros">Sobre CineJED</a>
                                </li>
                                <li class="nav-item"><a class="nav-link py-1 text-white" href="/landing/privacidad-cinefan/privacidad-cinefan">Términos y condiciones Cinefan</a></li>
                                <li class="nav-item"><a class="nav-link py-1 text-white" href="/politica-precios">Política de precios</a></li>
                                <li class="nav-item"><a class="nav-link py-1 text-white" href="/politica-de-reembolsos">Política de reembolsos</a></li>
                                <li class="nav-item"><a class="nav-link py-1 text-white" href="http://cinemex.bumeran.com.mx/" target="_blank" rel="noopener noreferrer">Bolsa de trabajo corporativo</a></li>
                                <li class="nav-item"><a class="nav-link py-1 text-white" href="/terminos">Términos y condiciones</a></li>
                                <li class="nav-item"><a class="nav-link py-1 text-white" href="/privacidadvisitantes">Aviso de Privacidad</a></li>
                                <li class="nav-item"><a class="nav-link py-1 text-white" href="/empleos/formulario">Bolsa de trabajo cines</a></li>
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
        <script src="./resources/js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

        <script src="<?php echo base_url(RECURSOS_USER_PLUGINS . 'jquery.validate.min.js') ?>"></script>
        <script src="<?php echo base_url(RECURSOS_USER_PLUGINS . 'additional-methods.min.js')?>"></script>
        <script src="<?php echo base_url(RECURSOS_USER_JS_LOGIN . 'acceso.js')?>"></script>
        <!--jQuerys-->
        <script src="<?php echo base_url(RECURSOS_USER_JS . 'jquery_v3.min.js') ?>"></script> 
        <script src="<?php echo base_url(RECURSOS_USER_JS . 'scripts.js') ?>"></script> 
        <script src="<?php echo base_url(RECURSOS_USER_PLUGINS . 'jquery-validation/jquery.validate.min.js') ?>"></script>
        <script src="<?php echo base_url(RECURSOS_USER_PLUGINS . 'jquery-validation/additional-methods.min.js')?>"></script>
        <script src="<?php echo base_url(RECURSOS_USER_JS . 'especificos/registro.js')?>"></script>
</body>

</html>