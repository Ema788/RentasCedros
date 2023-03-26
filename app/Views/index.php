<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CINE 2.0 | Inicio</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="./assets/Vector-Cinema-Projector-PNG-File.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo base_url(RECURSOS_PORTAL_CSS.'styles.css') ?>" rel="stylesheet" />
    <link href="<?php echo base_url(RECURSOS_PORTAL_CSS.'estilos.css') ?>" rel="estilos" />
    <!--Logo de pagina-->
    <link rel="shortcut icon" href="<?php echo base_url(RECURSOS_PORTAL_IMG.'boletosLogo.png') ?>">
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
            <a class="navbar-brand" href="/"><img src="<?php echo base_url(RECURSOS_PORTAL_IMG.'cineLogo.png') ?>" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <?php #echo crear_menu('', 'index'); ?>
            </div>
            <div class="collapse navbar-collapse" id="navbarResponsive" style="font-family: 'Noto Sans Mende Kikakui', sans-serif;">
                <a href="/login"><i class="fa fa-sign-in" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div data-setbg="<?php echo base_url(RECURSOS_PORTAL_IMG.'cine.jpg') ?>"></div>
            <div class="masthead-subheading">Welcome To Our Cinema!</div>
            <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="./Portal/about">Tell Me More</a>
        </div>
    </header>

    <!-- Estrenos-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="container">
                <h1 class="d-flex align-items-center sc-iyvyFf fPOSuk">
                    Estrenos
                    <span class="sc-kfGgVZ dPGWdA">🍿</span>
                </h1>
                <br>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <div class="imagenPelicula">
                                <div id="imagenP1" class="imagenPelicula" data-setbg="<?php #echo path_image('', 'blac.jpg')?>"></div>
                            </div>
                        </a>
                        <div class="portfolio-caption">
                            <br>
                            <div class="portfolio-caption-heading">Black Adam</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <div class="imagenPelicula">
                                <div id="imagenP2" class="imagenPelicula" data-setbg="<?php #echo path_image('', 'amenaza.jpg') ?>"></div>
                            </div>
                        </a>
                        <div class="portfolio-caption">
                            <br>
                            <div class="portfolio-caption-heading">Amenaza Explosiva</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mb-4">
                    <!-- Portfolio item 3-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <div class="imagenPelicula">
                                <div id="imagenP3" class="imagenPelicula"></div>
                            </div>
                        </a>
                        <div class="portfolio-caption">
                            <br>
                            <div class="portfolio-caption-heading">Bros: Más Que Amigos</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                    <!-- Portfolio item 4-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <div class="imagenPelicula">
                                <div id="imagenP4" class="imagenPelicula"></div>
                            </div>
                        </a>
                        <div class="portfolio-caption">
                            <br>
                            <div class="portfolio-caption-heading">Lilo, Lilo, Cocodrilo</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Modulo de Estreno-->
    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url(RECURSOS_PORTAL_IMG.'close.png') ?>" alt="Close modal" style="width: 100%;"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Black Adam</h2>
                                <br>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/a1mcS4tKGNg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p>Una familia normal y corriente se enfrenta a circunstancias imprevisibles, provocadas por una misteriosa llamada telefónica que les pone en una situación aterradora.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Clasificación: </strong>
                                        B15
                                    </li>
                                    <li>
                                        <strong>Género: </strong>
                                        Thriller
                                    </li>
                                    <li>
                                        <strong>Director: </strong>
                                        Changju Kim
                                    </li>
                                    <li>
                                        <strong>Duración: </strong>
                                        1h 34m
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
    <!-- Portfolio item 2 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url(RECURSOS_PORTAL_IMG.'close.png') ?>" alt="Close modal" style="width: 100%;"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Amenaza Explosiva</h2>
                                <br>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/JGTc3T4Ff9U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p>Una familia normal y corriente se enfrenta a circunstancias imprevisibles, provocadas por una misteriosa llamada telefónica que les pone en una situación aterradora.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Clasificación: </strong>
                                        B15
                                    </li>
                                    <li>
                                        <strong>Género: </strong>
                                        Thriller
                                    </li>
                                    <li>
                                        <strong>Director: </strong>
                                        Changju Kim
                                    </li>
                                    <li>
                                        <strong>Duración: </strong>
                                        1h 34m
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
    <!-- Portfolio item 3 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url(RECURSOS_PORTAL_IMG.'close.png') ?>" alt="Close modal" style="width: 100%;"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Bros</h2>
                                <p class="item-intro text-muted">Más Que Amigos</p>
                                <br>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/SqtMyR7JY2g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p>Este otoño, Universal Pictures se enorgullece de presentar la primera comedia romántica de un importante estudio sobre dos hombres gays que tal vez, posiblemente, probablemente, están destinados al amor. Quizás, si es que sus agendas y frenéticas
                                    vidas se los permite. Bros, de la feroz y cómica mente de Billy Eichner (serie de TV Billy on the Street, El rey león del 2019 y las series Difficult People y American Crime Story) y la brillantez de los cineastas Nicholas Stoller (Buenos Vecinos, ¿Cómo sobrevivir a mi ex?) y Judd Apatow (Damas en guerra, Esta chica es un desastre, Por eso lo llaman amor), llega Bros, una comedia inteligente arrebatadora y sincera sobre encontrar sexo, amor y romance en medio de la locura.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Clasificación: </strong>
                                        B15
                                    </li>
                                    <li>
                                        <strong>Género: </strong>
                                        Comedia Romantica
                                    </li>
                                    <li>
                                        <strong>Director: </strong>
                                        Nicholas Stoller
                                    </li>
                                    <li>
                                        <strong>Duración: </strong>
                                        1h 55m
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
    <!-- Portfolio item 4 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url(RECURSOS_PORTAL_IMG.'close.png') ?>" alt="Close modal" style="width: 100%;"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Lilo, Lilo, Cocodrilo</h2>
                                <br>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/HB6Ia52H50Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p>Basada en los libros de altas ventas escritos por Bernard Waber, Lilo, Lilo, Cocodrilo, estelarizada por el ganador del premio de la academia Javier Bardem, Constance Wu y Shawn Mendes, es una comedia musical que combina Live-Action y CGI trayendo
                                    a este querido personaje a la vida para una nueva audiencia global. Cuando la familia Primm (Constance Wu, Scoot McNairy, Winslow Fegley) se muda a la ciudad de Nueva York, su hijo Josh lucha por adaptarse a su nueva escuela y nuevos amigos. Todo
                                    cambia cuando descubre a Lilo – un cocodrilo que canta (Mendes), quien ama los baños en tina, el caviar y una gran vida musical en el ático de su nueva casa. Los dos se vuelven rápidamente en amigos. Pero cuando la existencia de Lilo es amenazada
                                    por un malvado vecino Mr. Grumps (Brett Gelman), los Primms deben unirse con el carismático dueño de Lilo, Hector P. Valenti (Bardem), para enseñarle al mundo que la familia puede venir de los lugares más inesperados y no hay nada malo en un gran cocodrilo que canta y con una personalidad aún más grande.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Clasificación: </strong>
                                        A
                                    </li>
                                    <li>
                                        <strong>Género: </strong>
                                        Animación, Comedia
                                    </li>
                                    <li>
                                        <strong>Director: </strong>
                                        Will Speck, Josh Gordon
                                    </li>
                                    <li>
                                        <strong>Duración: </strong>
                                        1h 46m
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

    <!-- Preventa-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="container">
                <h1 class="d-flex align-items-center sc-iyvyFf fPOSuk">
                    Preventa
                    <span class="sc-kfGgVZ dPGWdA">🎟</span>
                </h1>
                <br>
            </div>
            <div class="row">

                <div class="col-lg-3 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <div class="imagenPelicula">
                                <div id="imagenP5" class="imagenPelicula" data-setbg="<?php #echo path_image('', 'batman.jpg') ?>"></div>
                            </div>
                        </a>
                        <div class="portfolio-caption">
                            <br>
                            <div class="portfolio-caption-heading">The Batman</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <div class="imagenPelicula">
                                <div id="imagenP6" class="imagenPelicula" data-setbg="<?php #echo path_image('', 'red.jpg') ?>"></div>
                            </div>
                        </a>
                        <div class="portfolio-caption">
                            <br>
                            <div class="portfolio-caption-heading">One Piece Film: Red</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mb-4">
                    <!-- Portfolio item 3-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal7">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <div class="imagenPelicula">
                                <div id="imagenP7" class="imagenPelicula"></div>
                            </div>
                        </a>
                        <div class="portfolio-caption">
                            <br>
                            <div class="portfolio-caption-heading"> Observada</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                    <!-- Portfolio item 4-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal8">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <div class="imagenPelicula">
                                <div id="imagenP8" class="imagenPelicula"></div>
                            </div>
                        </a>
                        <div class="portfolio-caption">
                            <br>
                            <div class="portfolio-caption-heading">Avatar: El Camino Del Agua</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modulo de Preventa-->
    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url(RECURSOS_PORTAL_IMG.'close.png') ?>" alt="Close modal" style="width: 100%;"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Pantera Negra</h2>
                                <p class="item-intro text-muted">Wakanda Por Siempre</p>
                                <br>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/BPjbiZQmBI4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p>En PANTERA NEGRA: WAKANDA POR SIEMPRE de Marvel Studios, la reina Ramonda (Angela Bassett), Shuri (Letitia Wright), M'Baku (Winston Duke), Okoye (Danai Gurira) y las Dora Milaje (incluida Florence Kasumba) luchan por proteger a su nación de las
                                    potencias mundiales que intervienen tras la muerte del Rey T'Challa. Mientras los habitantes de Wakanda se esfuerzan embarcarse en un nuevo capítulo, los héroes deben unirse con la ayuda de War Dog Nakia (Lupita Nyong'o) y Everett Ross (Martin Freeman) y forjar un nuevo camino para el reino de Wakanda. El film que cuenta con Tenoch Huerta como Namor, rey de una nación submarina oculta, también está protagonizada por Dominique Thorne, Michaela Coel, Mabel Cadena y Alex Livanalli.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Clasificación: </strong>
                                        B
                                    </li>
                                    <li>
                                        <strong>Género: </strong>
                                        Acción
                                    </li>
                                    <li>
                                        <strong>Director: </strong>
                                        Ryan Coogler
                                    </li>
                                    <li>
                                        <strong>Duración: </strong>
                                        2h 41m
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
    <!-- Portfolio item 2 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url(RECURSOS_PORTAL_IMG.'close.png') ?>" alt="Close modal" style="width: 100%;"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Red</h2>
                                <p class="item-intro text-muted">One Piece Film</p>
                                <br>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/77LTrVyPI60" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p>Por primera vez, Uta, la cantante más querida del planeta, se revelará al mundo en un concierto en vivo. La voz que todos han estado esperando está a punto de resonar.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Clasificación: </strong>
                                        A
                                    </li>
                                    <li>
                                        <strong>Género: </strong>
                                        Acción
                                    </li>
                                    <li>
                                        <strong>Director: </strong>
                                        Gorô Taniguchi
                                    </li>
                                    <li>
                                        <strong>Duración: </strong>
                                        1h 55m
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
    <!-- Portfolio item 3 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url(RECURSOS_PORTAL_IMG.'close.png') ?>" alt="Close modal" style="width: 100%;"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Observada</h2>
                                <br>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/Om78eEFxX70" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p>Luego de mudarse a una nueva ciudad junto a su novio, el terror comienza a atormentar a Julia cuando se da cuenta de que un extraño la observa desde el edificio de enfrente, pero nadie que cree que ella este en peligro.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Clasificación: </strong>
                                        B
                                    </li>
                                    <li>
                                        <strong>Género: </strong>
                                        Terror, Thriller
                                    </li>
                                    <li>
                                        <strong>Director: </strong>
                                        Chloe Okuno
                                    </li>
                                    <li>
                                        <strong>Duración: </strong>
                                        1h 36m
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
    <!-- Portfolio item 4 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url(RECURSOS_PORTAL_IMG.'close.png') ?>" alt="Close modal" style="width: 100%;"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Avatar</h2>
                                <p class="item-intro text-muted">El Camino Del Agua</p>
                                <br>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/xboEeqWpDHA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p>Ambientada más de una década después de los sucesos que tuvieron lugar en la primera película, AVATAR: EL CAMINO DEL AGUA narra la historia de la familia Sully (Jake, Neytiri y sus hijos), el peligro que los persigue, los esfuerzos que hacen para mantenerse a salvo, las batallas que libran para seguir con vida, y las tragedias que sobrellevan. Dirigida por James Cameron y producida por Cameron y Jon Landau, la película es protagonizada por Zoe Saldana, Sam Worthington, Sigourney Weaver, Stephen Lang, Cliff Curtis, Joel David Moore, CCH Pounder, Edie Falco, Jemaine Clement, Giovanni Ribisi y Kate Winslet.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Clasificación: </strong>
                                        B
                                    </li>
                                    <li>
                                        <strong>Género: </strong>
                                        Acción, Sci-Fi, Fantasia, Aventura
                                    </li>
                                    <li>
                                        <strong>Director: </strong>
                                        James Cameron
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
                                <a class="nav-link py-1 text-white" href="./Portal/pages/about.php">Sobre CineJED</a>
                            </li>
                            <li class="nav-item"><a class="nav-link py-1 text-white" href="./Portal/pages/about.php">Términos y condiciones Cinefan</a></li>
                            <li class="nav-item"><a class="nav-link py-1 text-white" href="./Portal/pages/about.php">Política de precios</a></li>
                            <li class="nav-item"><a class="nav-link py-1 text-white" href="./Portal/pages/about.php">Política de reembolsos</a></li>
                            <li class="nav-item"><a class="nav-link py-1 text-white" href="http://cinemex.bumeran.com.mx/" target="_blank" rel="noopener noreferrer">Bolsa de trabajo corporativo</a></li>
                            <li class="nav-item"><a class="nav-link py-1 text-white" href="./Portal/pages/about.php">Términos y condiciones</a></li>
                            <li class="nav-item"><a class="nav-link py-1 text-white" href="./Portal/pages/about.php">Aviso de Privacidad</a></li>
                            <li class="nav-item"><a class="nav-link py-1 text-white" href="./Portal/pages/about.php">Bolsa de trabajo cines</a></li>
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
    <script src="<?php echo base_url(RECURSOS_PORTAL_JS.'scripts.js') ?>"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>