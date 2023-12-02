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
$routes->setAutoRoute(true);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
$routes->get('/', 'LoginController::login');
$routes->post('/', 'LoginController::login');
$routes->get('/LoginController/logout', 'LoginController::logout');
$routes->get('/register', 'RegisterController::register');
$routes->post('/register', 'RegisterController::register');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/pengguna_create', 'PenggunaController::pengguna_create');
$routes->post('/pengguna_create', 'PenggunaController::pengguna_create');
$routes->get('/pengguna_read', 'PenggunaController::pengguna_read');
$routes->get('/pengguna_update/(:num)', 'PenggunaController::pengguna_update/$1');
$routes->post('/pengguna_update/(:num)', 'PenggunaController::pengguna_update/$1');
$routes->get('/pengguna_delete/(:num)', 'PenggunaController::pengguna_delete/$1');
$routes->get('/pengguna_password/(:num)', 'PenggunaController::pengguna_password/$1');
$routes->post('/pengguna_password/(:num)', 'PenggunaController::pengguna_password/$1');
$routes->get('/barang_create', 'BarangController::barang_create');
$routes->post('/barang_create', 'BarangController::barang_create');
$routes->get('/barang_read', 'BarangController::barang_read');
$routes->get('/barang_update/(:num)', 'BarangController::barang_update/$1');
$routes->post('/barang_update/(:num)', 'BarangController::barang_update/$1');
$routes->get('/barang_delete/(:num)', 'BarangController::barang_delete/$1');
$routes->get('/barang_detail/(:num)', 'BarangController::barang_detail/$1');
$routes->get('/barang_status/(:num)', 'BarangController::barang_status/$1');
$routes->post('/barang_status/(:num)', 'BarangController::barang_status/$1');
$routes->get('/karyawan_create', 'KaryawanController::karyawan_create');
$routes->post('/karyawan_create', 'KaryawanController::karyawan_create');
$routes->get('/karyawan_read', 'KaryawanController::karyawan_read');
$routes->get('/karyawan_update/(:num)', 'KaryawanController::karyawan_update/$1');
$routes->post('/karyawan_update/(:num)', 'KaryawanController::karyawan_update/$1');
$routes->get('/karyawan_delete/(:num)', 'KaryawanController::karyawan_delete/$1');
$routes->get('/surat_create', 'SuratController::surat_create');
$routes->post('/surat_create', 'SuratController::surat_create');
$routes->get('/surat_read', 'SuratController::surat_read');
$routes->get('/surat_update/(:num)', 'SuratController::surat_update/$1');
$routes->post('/surat_update/(:num)', 'SuratController::surat_update/$1');
$routes->get('/surat_delete/(:num)', 'SuratController::surat_delete/$1');
$routes->get('/surat_detail/(:num)', 'SuratController::surat_detail/$1');
$routes->get('/surat_status/(:num)', 'SuratController::surat_status/$1');
$routes->post('/surat_status/(:num)', 'SuratController::surat_status/$1');


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
