<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/pages', 'Pages::index', ['filter' => 'auth']);
$routes->get('/detail/(:segment)/(:segment)/(:segment)', '/Detail::index/$1/$2/$3');
$routes->get('upload/getDataSubKategori(:segment)', '/DataSubKategori/$1');
// $routes->get('/detail/detailpribadi/(:segment)/(:segment)/(:segment)', '/Detail::detailpribadi/$1/$2/$3');
// http://localhost:8081/detail/detailpribadi/LAY042/CAT001/SCAT002


// $routes->get('upload/save(:segment)', '/upload::save/$1');
// $routes->get('/Upload_coba/save/(:segment)', '/Upload::save/$1');
// $routes->get('/Upload/save/(:segment)', '/Upload::save/$1');

$routes->get('/sign', 'Sign::index', ['filter' => 'signback']);
$routes->get('/signOut', 'Sign::signOut');
// $routes->get('/pages/detail/(:segment)', '/Detail::index/$i');

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
