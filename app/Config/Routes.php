<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('head_view', 'Home::head_view');
$routes->get('navbar_view', 'Home::navbar_view');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('catalogo', 'Home::catalogo');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');
$routes->get('footer_view', 'Home::footer_view');

/* Rutas del Registro de Usuarios*/
$routes->get('/registro','usuario_controller::create');
$routes->post('/enviar-form','usuario_controller::formValidation');

/* rutas del login */
$routes->get('/login', 'Login_controller');
$routes->post('/enviarlogin','Login_controller::auth');
$routes->get('/panel', 'Panel_controller::index',['filter' => 'auth']);
$routes->get('/logout', 'Login_controller::logout');

?>
