<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
//How to define a new route
// $routes->methodType('routeIdentificationURL', 'Controller-Path::method');             //identifier
//'Carpet/controllerName::functionName', ['as' => 'identifierName']

//================================================================================
//                                  RUTAS PARA LOGIN Y PANEL
$routes->get('/Portal/about', 'Portal\AboutPortal::aboutPortal', ['as' => 'aboutPortal']);
$routes->get('/Portal/accion', 'Portal\AccionPortal::accionPortal', ['as' => 'accionPortal']);
$routes->get('/Portal/comedia', 'Portal\ComediaPortal::comediaPortal', ['as' => 'comediaPortal']);
$routes->get('/Portal/contacto', 'Portal\ContactoPortal::contactoPortal', ['as' => 'contactoPortal']);
$routes->get('/Portal/estrenos', 'Portal\EstrenosPortal::estrenosPortal', ['as' => 'estrenosPortal']);
$routes->get('/Portal/familiares', 'Portal\FamiliaresPortal::familiaresPortal', ['as' => 'familiaresPortal']);
$routes->get('/Portal/preventa', 'Portal\PreventaPortal::preventaPortal', ['as' => 'preventaPortal']);

//POR EL METODO POST
$routes->get('/login', 'User\Login::login', ['as' => 'login']);
$routes->get('/registro', 'User\Registro::registro', ['as' => 'registro']);
$routes->post('/validar_Usuario', 'User\Login::validar', ['as' => 'validar_Usuario']);
$routes->get('/cerrarSesion', 'User\CerrarSesion::index', ['as' => 'cerrarSesion']);

//REGISTRAR USUARIO
$routes->post('/registrarUsuario', 'Panel\Usuario_Nuevo::registrar', ['as' => 'registrarUsuario']);

//REGISTRAR NUEVA PELICULA 
$routes->post('/nuevaPelicula', 'Panel\Pelicula_Familiar_Nueva::nuevaPeli', ['as' => 'nuevaPelicula']);

//================================================================================
//                                  RUTAS PARA EL PANEL DE ADMINISTRACION
//$routes->get('/panel', 'Panel::panelIndex');
//dashboard - index del panel de administracion
$routes->get('/dashboard', 'Panel\Dashboard::index', ['as' => 'dashboard']);

//usuarios - vista de todos los usuarios registrados
$routes->get('/dashboard/usuarios', 'Panel\Usuarios::index', ['as' => 'usuarios']);

//boletos
$routes->get('/dashboard/boletos', 'Panel\Boletos::index', ['as' => 'boletos']);
$routes->get('/dashboard/boleto_nuevo', 'Panel\Boleto_Nuevo::index', ['as' => 'boleto_nuevo']);

//contacto
$routes->get('/dashboard/contacto', 'Panel\Contacto::index', ['as' => 'contacto']);
$routes->get('/dashboard/contactoDetalles', 'Panel\Contacto_detalles::index', ['as' => 'contactoDetalles']);

//salas
$routes->get('/dashboard/salas', 'Panel\Salas::index', ['as' => 'salas']);

//peliculas
$routes->get('/dashboard/PeliculaNueva', 'Panel\Pelicula_Familiar_Nueva::index', ['as' => 'peliculaFamiliarNueva']);

//sucursales
$routes->get('/dashboard/sucursales', 'Panel\Sucursales::index', ['as' => 'sucursales']);

//perfil
$routes->get('/perfil', 'Panel\Perfil::index', ['as' => 'perfil']);

//pago
$routes->get('/dashboard/pago', 'Panel\FormularioPago::index', ['as' => 'formularioPago']);

//proyeccion
$routes->get('/dashboard/proyeccion', 'Panel\Proyeccion::index', ['as' => 'proyeccion']);

//proyeccion_Detalles
$routes->get('/dashboard/proyeccionDetalles', 'Panel\Proyeccion_Detalles::index', ['as' => 'proyeccion_detalles']);

//proyeccion_nueva
$routes->get('/dashboard/proyeccionNueva', 'Panel\Proyeccion_Nuevo::index', ['as' => 'proyeccion_nueva']);

//usuario nuevo
$routes->get('/dashboard/usuarioNuevo', 'Panel\Usuario_Nuevo::index', ['as' => 'usuario_nuevo']);

//usuario nuevo detalles
//leer datos actualizar 
$routes->get('/usuarioDetalles/(:num)', 'Panel\Usuario_Detalles::index/$1', ['as' => 'usuario_detalles']);
//Actualizar
//(any)
$routes->post('/editar_usuario', 'Panel\Usuario_Detalles::editar',['as' =>'editar_usuario']);
$routes->get('/estatus_usuario/(:num)/(:num)', 'Panel\Usuarios::estatus/$1/$2', ['as' => 'estatus_usuario']);
$routes->get('/eliminar_usuario/(:num)', 'Panel\usuarios::eliminar/$1',['as' => 'eliminar_usuario']);

//sucursal nueva
$routes->get('/dashboard/sucursalNueva', 'Panel\Sucursal_Nueva::index', ['as' => 'sucursal_nueva']);

//salas detalles
$routes->get('/dashboard/salasDetalles', 'Panel\Salas_Detalles::index', ['as' => 'sales_detalles']);

//pelicula familiar
$routes->get('/dashboard/peliculasFamiliares', 'Panel\Peliculas_Familiares::index', ['as' => 'peliculas_Familiares']);

//pelicula familiar detalles
$routes->get('/dashboard/peliculasDetalles', 'Panel\Peliculas_Familiares_Detalles::index', ['as' => 'peliculas_Familiares_detalles']);

//pelicula familiar
$routes->get('/dashboard/peliculasComedia', 'Panel\Peliculas_Comedia::index', ['as' => 'peliculas_Comedia']);

//pelicula accion
$routes->get('/dashboard/peliculasAccion', 'Panel\Peliculas_Accion::index', ['as' => 'peliculas_Accion']);

//=======================================================
// RUTAS PARA LOS ERRORES DEL SISTEMA
//=======================================================
$routes->get('/error_401', 'Errores\Error_401::index', ['as' => 'error_401']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
