<?php

/*
 | --------------------------------------------------------------------
 | App Namespace
 | --------------------------------------------------------------------
 |
 | This defines the default Namespace that is used throughout
 | CodeIgniter to refer to the Application directory. Change
 | this constant to change the namespace that all application
 | classes should use.
 |
 | NOTE: changing this will require manually modifying the
 | existing namespaces of App\* namespaced-classes.
 */
defined('APP_NAMESPACE') || define('APP_NAMESPACE', 'App');

/*
 | --------------------------------------------------------------------------
 | Composer Path
 | --------------------------------------------------------------------------
 |
 | The path that Composer's autoload file is expected to live. By default,
 | the vendor folder is in the Root directory, but you can customize that here.
 */
defined('COMPOSER_PATH') || define('COMPOSER_PATH', ROOTPATH . 'vendor/autoload.php');

/*
 |--------------------------------------------------------------------------
 | Timing Constants
 |--------------------------------------------------------------------------
 |
 | Provide simple ways to work with the myriad of PHP functions that
 | require information to be in seconds.
 */
defined('SECOND') || define('SECOND', 1);
defined('MINUTE') || define('MINUTE', 60);
defined('HOUR')   || define('HOUR', 3600);
defined('DAY')    || define('DAY', 86400);
defined('WEEK')   || define('WEEK', 604800);
defined('MONTH')  || define('MONTH', 2_592_000);
defined('YEAR')   || define('YEAR', 31_536_000);
defined('DECADE') || define('DECADE', 315_360_000);

/*
 | --------------------------------------------------------------------------
 | Exit Status Codes
 | --------------------------------------------------------------------------
 |
 | Used to indicate the conditions under which the script is exit()ing.
 | While there is no universal standard for error codes, there are some
 | broad conventions.  Three such conventions are mentioned below, for
 | those who wish to make use of them.  The CodeIgniter defaults were
 | chosen for the least overlap with these conventions, while still
 | leaving room for others to be defined in future versions and user
 | applications.
 |
 | The three main conventions used for determining exit status codes
 | are as follows:
 |
 |    Standard C/C++ Library (stdlibc):
 |       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
 |       (This link also contains other GNU-specific conventions)
 |    BSD sysexits.h:
 |       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
 |    Bash scripting:
 |       http://tldp.org/LDP/abs/html/exitcodes.html
 |
 */
defined('EXIT_SUCCESS')        || define('EXIT_SUCCESS', 0);        // no errors
defined('EXIT_ERROR')          || define('EXIT_ERROR', 1);          // generic error
defined('EXIT_CONFIG')         || define('EXIT_CONFIG', 3);         // configuration error
defined('EXIT_UNKNOWN_FILE')   || define('EXIT_UNKNOWN_FILE', 4);   // file not found
defined('EXIT_UNKNOWN_CLASS')  || define('EXIT_UNKNOWN_CLASS', 5);  // unknown class
defined('EXIT_UNKNOWN_METHOD') || define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     || define('EXIT_USER_INPUT', 7);     // invalid user input
defined('EXIT_DATABASE')       || define('EXIT_DATABASE', 8);       // database error
defined('EXIT__AUTO_MIN')      || define('EXIT__AUTO_MIN', 9);      // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      || define('EXIT__AUTO_MAX', 125);    // highest automatically-assigned error code

/**
 * @deprecated Use \CodeIgniter\Events\Events::PRIORITY_LOW instead.
 */
define('EVENT_PRIORITY_LOW', 200);

/**
 * @deprecated Use \CodeIgniter\Events\Events::PRIORITY_NORMAL instead.
 */
define('EVENT_PRIORITY_NORMAL', 100);

/**
 * @deprecated Use \CodeIgniter\Events\Events::PRIORITY_HIGH instead.
 */
define('EVENT_PRIORITY_HIGH', 10);

#CONSTANTES DE HELPERS
define('HELPERS_MENU_PORTAL', '/Helpers');

#CONSTANTES PORTAL-LOGIN
define('RECURSOS_PORTAL_CSS', '/Portal/recursosPortal/css/');
define('RECURSOS_PORTAL_JS', '/Portal/recursosPortal/js/');
define('RECURSOS_PORTAL_IMG', '/Portal/imagenesPortal/img/');
define('RECURSOS_PORTAL_IMG_REGISTRO', '/Portal/imagenesPortal/img/registro/');
define('RECURSOS_PORTAL_PLUGINS', '/Portal/recursosPortal/plugins/');

define('RECURSOS_USER_CSS', '/User/recursosUser/css/');
define('RECURSOS_USER_JS', '/User/recursosUser/js/');
define('RECURSOS_USER_JS_LOGIN', '/User/recursosUser/js/especificos/');
define('RECURSOS_USER_IMG', '/User/imagenesUser/img/');
define('RECURSOS_USER_IMG_TEAM', '/User/imagenesUser/img/img/team/');
define('RECURSOS_USER_IMG_ACCION', '/User/imagenesUser/img/accion/');
define('RECURSOS_USER_IMG_COMEDIA', '/User/imagenesUser/img/comedia/');
define('RECURSOS_USER_IMG_FAMILIARES', '/User/imagenesUser/img/Familiares/');
define('RECURSOS_USER_IMG_REGISTRO', '/User/imagenesUser/img/registro/');
define('RECURSOS_USER_PLUGINS', '/User/recursosUser/plugins/');

#RECURSOS DEL PANEL
define('RECURSOS_PANEL_CSS', '/Panel/resources/css/');
define('RECURSOS_PANEL_JS', '/Panel/resources/js/');
define('RECURSOS_PANEL_PLUGINS', '/Panel/resources/plugins/');
define('RECURSOS_PANEL_IMG', '/Panel/img/');
define('RECURSOS_PANEL_IMG_USUARIOS', 'Panel/img/usuarios/');

#Constantes del sistema
define("ALERT_SUCCES", 1);
define("ALERT_DANGER", 2);
define("ALERT_WARNING", 3);
define("ALERT_INFO", 4);

#CONSTANTES DE LOS ROLES
define('ROL_CLIENTE', array('clave' => 1, 'rol' => 'Cliente'));
define('ROL_ADMINISTRADOR', array('clave' => 2, 'rol' => 'Administrador'));
define('ROL_OPERADOR', array('clave' => 3, 'rol' => 'Operador'));

define("ROLES", array(
    ROL_CLIENTE["clave"] => ROL_CLIENTE["rol"],
    ROL_ADMINISTRADOR['clave'] => ROL_ADMINISTRADOR['rol'],
    ROL_OPERADOR['clave'] => ROL_OPERADOR['rol']
));


#CONSTANTES DE LOS GENEROS
define('GEN_FAMILIAR', array('clave' => 1, 'gen' => 'Familiar'));
define('GEN_ACCION', array('clave' => 2, 'gen' => 'Accion'));
define('GEN_COMEDIA', array('clave' => 3, 'gen' => 'Comedia'));

define("GENEROS", array(
    GEN_FAMILIAR["clave"] => GEN_FAMILIAR["gen"],
    GEN_ACCION['clave'] => GEN_ACCION['gen'],
    GEN_COMEDIA['clave'] => GEN_COMEDIA['gen']
));


#Constantes para los estatus de los usuarios
define("ESTATUS_HABILITADO", 1);
define("ESTATUS_DESHABILITADO", 0);

#CONSTANTES PARA EL SEXO DEL USUARIO
define('SEXO_FEMENINO', array('clave' => 1, 'sexo' => 'Femenino'));
define('SEXO_MASCULINO', array('clave' => 2, 'sexo' => 'Masculino'));
define("SEXO", array(
    SEXO_FEMENINO["clave"] => SEXO_FEMENINO["sexo"],
    SEXO_MASCULINO['clave'] => SEXO_MASCULINO['sexo']
));

define('FEMALE', 'female.png');
define('MALE', 'male.webp');

//===============================================
// CONSTANTES PARA LAS TAREA - ADMINISTRATIVAS
//===============================================
define("TAREA_PERFIL", 'tarea_perfil');
define("TAREA_DASHBOARD", 'tarea_dashboard');

//PERMISOS TAREAS PARA EL MODULO DE  USUARIOS
define("TAREA_USUARIOS", 'tarea_usuarios');
define("TAREA_USUARIO_NUEVO", 'tarea_nuevo_usuario');
define("TAREA_USUARIO_DETALLES", 'tarea_detalles_usuario');

//PERMISOS TAREAS PARA EL MODULO DE BOLETOS
define("TAREA_BOLETOS", 'tarea_boletos');
define("TAREA_BOLETO_NUEVO", 'tarea_nuevo_boleto');
define("TAREA_BOLETO_DETALLES", 'tarea_detalles_boleto');

//PERMISOS TAREAS PARA EL MODULO DE PELICULAS
define("TAREA_PELICULAS_FAMILIARES", 'tarea_peliculas_familiares');
define("TAREA_PELICULA_NUEVA", 'tarea_nueva_pelicula');
define("TAREA_PELICULA_DETALLES", 'tarea_detalles_pelicula');
define("TAREA_PELICULAS_ACCION", 'tarea_peliculas_accion');
define("TAREA_PELICULAS_COMEDIA", 'tarea_peliculas_comedia');

//PERMISOS TAREAS PARA EL MODULO DE SALAS
define("TAREA_SALAS", 'tarea_salas');
define("TAREA_SALA_DETALLES", 'tarea_detalles_sala');

//PERMISOS TAREAS PARA EL MODULO DE SUCURSALES
define("TAREA_SUCURSALES", 'tarea_sucursales');
define("TAREA_SUCURSAL_NUEVA", 'tarea_nueva_sucursal');

//PERMISOS PARA EL MODULO DE PROYECCIONES
define("TAREA_PROYECCIONES", 'tarea_proyecciones');
define("TAREA_PROYECCION_NUEVA", 'tarea_nueva_proyeccion');
define("TAREA_PROYECCION_DETALLES", 'tarea_detalles_proyeccion');

//PERMISOS PARA EL MODULO DE REPORTES
define("TAREA_CONTACTO", 'tarea_contacto');
define("TAREA_CONTACTO_DETALLES", 'tarea_contacto_detalles');

//CONSTANTES PARA EL ACCESO AL SISTEMA
define("ACCESO_ADMINISTRADOR", array(
                                    TAREA_DASHBOARD,
                                    TAREA_PERFIL,
                                    TAREA_USUARIOS,
                                    TAREA_USUARIO_NUEVO,
                                    TAREA_USUARIO_DETALLES,
                                    TAREA_BOLETOS,
                                    TAREA_BOLETO_NUEVO,
                                    TAREA_BOLETO_DETALLES,
                                    TAREA_PELICULAS_FAMILIARES,
                                    TAREA_PELICULA_NUEVA,
                                    TAREA_PELICULA_DETALLES,
                                    TAREA_PELICULAS_ACCION,
                                    TAREA_PELICULAS_COMEDIA,
                                    TAREA_SALAS,
                                    TAREA_SALA_DETALLES,
                                    TAREA_SUCURSALES,
                                    TAREA_SUCURSAL_NUEVA,
                                    TAREA_PROYECCIONES,
                                    TAREA_PROYECCION_NUEVA,
                                    TAREA_PROYECCION_DETALLES,
                                    TAREA_CONTACTO,
                                    TAREA_CONTACTO_DETALLES
));

//CONSTANTES PARA EL ACCESO AL SISTEMA
define("ACCESO_OPERADOR", array(
                                TAREA_DASHBOARD
));

//CONSTANTES PARA EL ACCESO AL SISTEMA
define("ACCESO_CLIENTE", array(
                                TAREA_DASHBOARD,
                                TAREA_PERFIL
));