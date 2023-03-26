<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CINE 2.0 | Contacto</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="./assets/Vector-Cinema-Projector-PNG-File.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo base_url(RECURSOS_PORTAL_CSS . 'styles.css') ?>" rel="stylesheet" />
    <link href="<?php echo base_url(RECURSOS_PORTAL_CSS . 'estilos.css') ?>" rel="estilos" />
    <!--Logo de pagina-->
    <link rel="shortcut icon" href="<?php echo base_url(RECURSOS_PORTAL_IMG . 'boletosLogo.png') ?>">
    <!--FONT DE NAVBAR -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mende+Kikakui&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body id="page-top"><br>
    <br><br><br><br><br><br><br>

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #010101;">
        <div class="container nav">
            <a class="navbar-brand" href="/"><img src="<?php echo base_url(RECURSOS_PORTAL_IMG . 'cineLogo.png') ?>" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            </div>
            <div class="collapse navbar-collapse" id="navbarResponsive" style="font-family: 'Noto Sans Mende Kikakui', sans-serif;">
                <a href="/login"><span class="material-symbols-outlined" style="color: white;">login</span></a>
            </div>
        </div>
    </nav>

    <center><img src="<?php echo base_url(RECURSOS_PORTAL_IMG . 'boletosLogo.png') ?>" alt="boletos" style="width:80px;">
        <h2>Contactanos</h2>
    </center>
    <form id="contactForm" data-sb-form-api-token="API_TOKEN">

        <div class="container">
            <div class="row">
                <div class="col">
                </div>
                <div class="col-8">
                    <div class="row align-items-stretch mb-5">
                        <div class="form-group">
                            <label for="first-name">Nombre</label>
                            <input class="form-control" id="name" type="text" placeholder="Nombre" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">Nombre es requerido.</div>
                        </div>
                        <div class="form-group">
                            <label for="country">Ciudad</label>
                            <input type="text" class="form-control" placeholder="Ciudad" id="Ciudad">
                        </div>
                        <div class="form-group">
                            <label for="number">Numero Telefonico</label>
                            <input class="form-control" id="phone" type="tel" placeholder="Numero Telefonico" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">Numero Telefonico es requerido</div>
                        </div>
                        <div class="form-group">
                            <label for="age">Edad</label>
                            <input type="text" class="form-control" placeholder="Edad" id="Edad">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" id="email" type="email" placeholder="Email" data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">Email es requerido.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email no es valido.</div>
                        </div>
                        <div class="form-group">
                            <label for="email">Mensaje</label>
                            <!-- Message input-->
                            <textarea class="form-control" id="message" placeholder="Tu Mensaje " data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Mensaje requerido</div>
                        </div>
                    </div>
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Mensaje enviado</div>
                            Gracias por tu opinion
                            <br />
                            <a href="https://ProjectCINEJED.jessicazempoalt.repl.co">Regresar al inicio</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                </div>
            </div>
        </div>

        </div>
        <!-- Submit error message-->
        <!---->
        <!-- This is what your users will see when there is-->
        <!-- an error submitting the form-->
        <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">Error en tu mensaje!</div>
        </div>
        <!-- Submit Button-->
        <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Enviar</button></div><br>
    </form>
    </div>
    </section>


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
                                <a class="nav-link py-1 text-white" href="/Portal/about">Sobre CineJED</a>
                            </li>
                            <li class="nav-item"><a class="nav-link py-1 text-white" href="/Portal/about">Términos y condiciones Cinefan</a></li>
                            <li class="nav-item"><a class="nav-link py-1 text-white" href="/Portal/about">Política de precios</a></li>
                            <li class="nav-item"><a class="nav-link py-1 text-white" href="/Portal/about">Política de reembolsos</a></li>
                            <li class="nav-item"><a class="nav-link py-1 text-white" href="http://cinemex.bumeran.com.mx/" target="_blank" rel="noopener noreferrer">Bolsa de trabajo corporativo</a></li>
                            <li class="nav-item"><a class="nav-link py-1 text-white" href="/Portal/about">Términos y condiciones</a></li>
                            <li class="nav-item"><a class="nav-link py-1 text-white" href="/Portal/about">Aviso de Privacidad</a></li>
                            <li class="nav-item"><a class="nav-link py-1 text-white" href="/Portal/about">Bolsa de trabajo cines</a></li>
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
    <script src="<?php echo base_url(RECURSOS_USER_JS.'scripts.js') ?>"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>