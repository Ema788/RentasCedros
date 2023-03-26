<?php
require('../../helpers/menu_portal.php');
require('../../helpers/funciones_generales.php');


//Declaración de variables par la conexion con la BD
$server = 'localhost'; //Servidor
$bd =  'cinejed'; //Base de datos
$user = 'root'; //Usuario de acceso a la BD
$password = ''; // Contraseña de acceso a la BD

//Proceso de conexión a la BD
$conexion = mysqli_connect($server, $user, $password, $bd);

//Validamos la conexión con la BD
if (!$conexion) {
    die('Error al conectarse con la Base de Datos,' . mysqli_connect_error());
    exit;
} //end 

//Procesa o relizamos una petición a la BD
//echo '<script>alert("Conexión éxitosa a la BD")</script>';
//variable de conexion y el proceso que se quiere realizar
mysqli_query($conexion, 'SET NAMES "utf8"');

//Se realiza la petición sql 
//specific select ya que se muestra informacion especifica de la tabla peliculasEstrenos inner join roles
$query_text = 'SELECT categoriaspeliculas.idcategoriapelicula, categoriaspeliculas.idPelicula, categoriaspeliculas.categoria, 
                      peliculas.nombrePelicula, peliculas.anioEstreno, peliculas.descripcion, peliculas.duracion, 
                      peliculas.director, peliculas.estatus_pelicula, peliculas.imagenPelicula
               FROM peliculas INNER JOIN categoriaspeliculas
               ON peliculas.idPelicula = categoriaspeliculas.idPelicula
               WHERE categoriaspeliculas.idcategoriapelicula = 1';

$query_res = mysqli_query($conexion, $query_text);

$peliculasEstrenos = mysqli_fetch_array($query_res, MYSQLI_ASSOC);
//Verificar si realmente el usuario existe
if (mysqli_num_rows($query_res) <= 0) {
    echo '<script>
                alert("El usuario no existe. Verifica la ID");
                window.location = "./usuarios.php";
                </script>';
} //
//Se libera la conexion
mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Películas de estreno</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="./assets/Vector-Cinema-Projector-PNG-File.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../resources/css/styles.css" rel="stylesheet">
    <link rel="estilos" href="../resources/css/estilos.css">
    <link rel="shortcut icon" href="../img/boletosLogo.png">
    <!--FONT DE NAVBAR -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mende+Kikakui&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body id="page-top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #010101;">
        <div class="container nav">
            <a class="navbar-brand" href="../../index.php"><img src="../img/cineLogo.png" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <?php echo crear_menu('pages', 'estrenos'); ?>
            </div>
            <div class="collapse navbar-collapse" id="navbarResponsive" style="font-family: 'Noto Sans Mende Kikakui', sans-serif;">
                <a href="../../User/pages/login.php"><span class="material-symbols-outlined" style="color: white;">login</span></a>
            </div>
        </div>
    </nav>

    <!-- Masthead-->
    <header">
        </header>
        <br>
        <br>
        <br>

        <!--Peliculas Primero fila-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="container">
                    <h1 class="h3 d-flex align-items-center sc-iyvyFf fPOSuk">
                        Estrenos
                        <span class="sc-kfGgVZ dPGWdA">🎬</span>
                    </h1>
                    <br>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-sm-6 mb-4">
                        <!-- Angry2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img src="<?php echo ($peliculasEstrenos['imagenPelicula'] == NULL) ? '../../Portal/img/no-disponible.jpg' : '../../Portal/img/Accion/' . $peliculasEstrenos['imagenPelicula']; ?>" class="img-fluid">
                            </a>
                            <div class="portfolio-caption">
                                <br>
                                <?php
                                $html = '';
                                $html = '<div class="portfolio-caption-heading">' . $peliculasEstrenos['nombrePelicula'] . '</div>
                                    <div class="portfolio-caption-subheading text-muted">' . $peliculasEstrenos['anioEstreno'] . '</div>
                                    ';
                                echo $html;
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-6 mb-4">
                        <!-- Baby-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="../../Portal/img/Accion/batman.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <br>
                                <div class="portfolio-caption-heading">The Batman</div>
                                <div class="portfolio-caption-subheading text-muted">2022</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-6 mb-4">
                        <!-- Brujas-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="../../Portal/img/Accion/bullet.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <br>
                                <div class="portfolio-caption-heading">Bullet Train</div>
                                <div class="portfolio-caption-subheading text-muted">2022</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-6 mb-4 mb-lg-0">
                        <!--Buz-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="../../Portal/img/Accion/ciudad.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <br>
                                <div class="portfolio-caption-heading">La ciudad perdida</div>
                                <div class="portfolio-caption-subheading text-muted">2021</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-6 mb-4 mb-sm-0">
                        <!--Dc-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="../../Portal/img/Accion/doctor.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <br>
                                <div class="portfolio-caption-heading">Doctor Strange</div>
                                <div class="portfolio-caption-subheading text-muted">2022</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-6">
                        <!--Era-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="../../Portal/img/Accion/Gun.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <br>
                                <div class="portfolio-caption-heading">Top Gun: Maverick</div>
                                <div class="portfolio-caption-subheading text-muted">2022</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Modals-->
        <!-- Angry-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../../Portal/img/close.png" alt="Close modal" style="width: 100%;"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <?php
                                    $html = '';
                                    $html = '
                                    <h2 class="text-uppercase">' . $peliculasEstrenos['nombrePelicula'] . '</h2>
                                            <br>
                                            <iframe width="500" height="300" src="https://www.youtube.com/embed/kOFTZWyaOgc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <p>' . $peliculasEstrenos['descripcion'] . '</p>
                                            <ul class="list-inline">
                                                <li>
                                                    <strong>Director: ' . $peliculasEstrenos['director'] . '</strong>
                                                </li>
                                                <li>
                                                    <strong>Categoria: ' . $peliculasEstrenos['categoria'] . '</strong>
                                                </li>
                                            </ul>
                                    
                                            <a class="btn btn-primary btn-xl text-uppercase" href="../../Panel/pages/formularioPago.php?idPelicula=' . $peliculasEstrenos['idPelicula'] . '">Comprar boletos</a>
                                            ';
                                    echo $html;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Baby-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../../Portal/img/close.png" alt="Close modal" style="width: 100%;"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase"></h2>
                                    <h2 class="text-uppercase">The Batman</h2>
                                    <br>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/fWQrd6cwJ0A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <p>Theodore Templeton y su hermano, ahora adultos, toman una pócima mágica que los transforma en bebés durante 48 horas. Juntos, deben evitar que un villano convierta a otros niños pequeños en monstruitos insoportables.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Director:</strong>
                                            Tom McGrath
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Acción
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        
                                        Comprar boletos
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brujas-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../../Portal/img/close.png" alt="Close modal" style="width: 100%;"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Bullet Train</h2>
                                    <br>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/0IOsk2Vlc4o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <p>Han pasado 29 años desde que alguien encendió la Vela de la Llama Negra y resucitó a las hermanas Sanderson del siglo XVII, y ahora buscan venganza. De tres estudiantes de secundaria depende impedir que las voraces brujas causen un nuevo tipo de estrago en Salem antes del amanecer el día de Halloween.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Director: </strong>
                                            Anne Fletcher
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Acción
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        
                                        Comprar boletos
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Buz-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../../Portal/img/close.png" alt="Close modal" style="width: 100%;"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">La ciudad perdida</h2>
                                    <br>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/cP5tjsc4aqQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <p>Atrapado en un planeta hostil a 4,2 millones de años luz de la Tierra junto a su comandante y su tripulación, Buzz Lightyear intenta encontrar la manera de volver a casa a través del espacio y el tiempo. Pero la llegada de Zurg, una presencia imponente con un ejército de robots despiadados y una agenda misteriosa, complica aún más las cosas y pone en peligro la misión.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Director: </strong>
                                            Angus MacLane
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Acción
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        
                                        Comprar boletos
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Dc-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../../Portal/img/close.png" alt="Close modal" style="width: 100%;"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Doctor Strange</h2>
                                    <br>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/mCg0V88W0Xw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <p>Krypto el Superperro y Superman son amigos inseparables que comparten los mismos superpoderes y luchan juntos contra el crimen en Metrópolis. Cuando Superman y el resto de la Liga de la Justicia son secuestrados, Krypto debe convencer a un variopinto grupo de un albergue –Ace el sabueso, PB la cerdita barrigona, Merton la tortuga y Chip la ardilla– de dominar sus nuevos poderes y ayudarlo a rescatar a los superhéroes. Animación Acción Familia Comedia Ciencia ficción</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Director:</strong>
                                            Jared Stern
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Acción
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        
                                        Comprar boletos
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Era-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../../Portal/img/close.png" alt="Close modal" style="width: 100%;"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Top Gun: Maverick</h2>
                                    <br>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/zzBIzYmxatU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <p>Continúa contando las hilarantes aventuras de uno de los mamíferos favoritos de la prehistoria. Tras un distanciamiento con su hermana mayor, Ellie, los hermanos Crash y Eddie parten a la búsqueda de un lugar propio, pero rápidamente acaban atrapados en una caverna subterránea. El aventurero Buck Wild acudirá a su rescate y juntos, tendrán que enfrentarse a los dinosaurios del Mundo Perdido.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Director:</strong>
                                            John C. Donkin
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Acción
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        
                                        Comprar boletos
                                    </button>
                                </div>
                            </div>
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
        <script src="../resources/js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>