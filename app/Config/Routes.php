<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Aritmatika');
$routes->setDefaultMethod('index_baru');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/aritmatika/index_aritmatika', 'Aritmatika::index_baru');
// $routes->get('/aritmatika/index_aritmatika/(:num)/(:num)', 'Aritmatika::index_baru/$1/$2');

$routes->get('/admin', 'Admin::index');
$routes->get('/admin/login', 'Admin::index');
$routes->post('/admin/autentikasi', 'Admin::autentikasi_login');
$routes->get('/admin/dashboard-admin', 'Admin::dashboard');
$routes->get('/admin/logout-sistem', 'Admin::logout');

$routes->get('/admin/master-admin', 'Admin::master_admin');
$routes->get('/admin/edit-admin/(:alphanum)', 'Admin::edit_admin/$1');
$routes->post('/admin/update-admin', 'Admin::update_admin');
$routes->get('/admin/hapus-admin/(:alphanum)', 'Admin::hapus_admin/$1');
$routes->get('/admin/input-admin', 'Admin::input_admin');
$routes->post('/admin/simpan-admin', 'Admin::simpan_admin');

$routes->get('/admin/master-siswa', 'Admin::master_siswa');
$routes->get('/admin/edit-siswa/(:alphanum)', 'Admin::edit_siswa/$1');
$routes->post('/admin/update-siswa', 'Admin::update_siswa');
$routes->get('/admin/hapus-siswa/(:alphanum)', 'Admin::hapus_siswa/$1');
$routes->get('/admin/input-siswa', 'Admin::input_siswa');
$routes->post('/admin/simpan-siswa', 'Admin::simpan_siswa');

$routes->get('/admin/master-guru', 'Admin::master_guru');
$routes->get('/admin/edit-guru/(:alphanum)', 'Admin::edit_guru/$1');
$routes->post('/admin/update-guru', 'Admin::update_guru');
$routes->get('/admin/hapus-guru/(:alphanum)', 'Admin::hapus_guru/$1');
$routes->get('/admin/input-guru', 'Admin::input_guru');
$routes->post('/admin/simpan-guru', 'Admin::simpan_guru');

$routes->get('/admin/master-kelas', 'Admin::master_kelas');
$routes->get('/admin/edit-kelas/(:alphanum)', 'Admin::edit_kelas/$1');
$routes->post('/admin/update-kelas', 'Admin::update_kelas');
$routes->get('/admin/hapus-kelas/(:alphanum)', 'Admin::hapus_kelas/$1');
$routes->get('/admin/input-kelas', 'Admin::input_kelas');
$routes->post('/admin/simpan-kelas', 'Admin::simpan_kelas');

$routes->get('/admin/master-ekskul', 'Admin::master_ekskul');
$routes->get('/admin/edit-ekskul/(:alphanum)', 'Admin::edit_ekskul/$1');
$routes->post('/admin/update-ekskul', 'Admin::update_ekskul');
$routes->get('/admin/hapus-ekskul/(:alphanum)', 'Admin::hapus_ekskul/$1');
$routes->get('/admin/input-ekskul', 'Admin::input_ekskul');
$routes->post('/admin/simpan-ekskul', 'Admin::simpan_ekskul');

$routes->get('/admin/master-acc-prestasi', 'Admin::master_acc_prestasi');
$routes->get('/admin/master-prestasi', 'Admin::master_prestasi');
$routes->get('/admin/cetak-laporan', 'Admin::cetak_laporan');
$routes->post('/admin/cetak-laporan-prestasi', 'Admin::cetak_laporan_prestasi');
$routes->get('/admin/detail-prestasi/(:alphanum)', 'Admin::detail_prestasi/$1');
$routes->post('/admin/update-prestasi-wakasek', 'Admin::update_prestasi_wakasek');
$routes->post('/admin/update-prestasi-walikelas', 'Admin::update_prestasi_walikelas');

$routes->get('/user', 'User::index');
$routes->get('/user/login', 'User::index');
/*$routes->post('/user/autentikasi', 'User::autentikasi_login');*/
$routes->get('/user/dashboard-user', 'User::dashboard');
$routes->get('/user/logout-sistem', 'User::logout');

$routes->get('/', 'Home::dashboard');
$routes->get('/user', 'Home::index');
$routes->get('/user/login', 'Home::index');
$routes->post('/user/autentikasi', 'Home::autentikasi_login');
$routes->get('/user/dashboard', 'Home::dashboard1');
$routes->get('/user/data-prestasi', 'Home::data_prestasi');
$routes->get('/user/detail-prestasi/(:alphanum)', 'Home::detail_prestasi/$1');
$routes->get('/user/edit-prestasi/(:alphanum)', 'Home::edit_prestasi/$1');
$routes->post('/user/update-prestasi', 'Home::update_prestasi');
$routes->get('/user/hapus-prestasi/(:alphanum)', 'Home::hapus_prestasi/$1');
$routes->get('/user/input-prestasi', 'Home::input_prestasi');
$routes->post('/user/simpan-prestasi', 'Home::simpan_prestasi');

$routes->get('/user/master-user', 'User::master_user');
$routes->get('/user/edit-user/(:alphanum)', 'User::edit_user/$1');
$routes->post('/user/update-user', 'User::update_user');
$routes->get('/user/hapus-user/(:alphanum)', 'User::hapus_user/$1');
$routes->get('/user/input-user', 'User::input_user');
$routes->post('/user/simpan-user', 'User::simpan_user');

$routes->get('/user/master-prestasi', 'User::master_prestasi');
$routes->get('/user/detail-prestasi/(:alphanum)', 'User::detail_prestasi/$1');
$routes->get('/user/edit-prestasi/(:alphanum)', 'User::edit_prestasi/$1');
$routes->post('/user/update-prestasi', 'User::update_prestasi');
$routes->get('/user/hapus-prestasi/(:alphanum)', 'User::hapus_prestasi/$1');
$routes->get('/user/input-prestasi', 'User::input_prestasi');
$routes->post('/user/simpan-prestasi', 'User::simpan_prestasi');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
