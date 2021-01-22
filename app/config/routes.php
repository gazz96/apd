<?php 

$this->add('home', 'HomeController@index');
$this->add('about', 'AboutController@index');

$this->add('login', 'DashboardController@login');
$this->add('login-check', 'DashboardController@check_login');
$this->add('logout', 'DashboardController@logout');
$this->add('pengaturan', 'DashboardController@pengaturan');
$this->add('update-pengaturan', 'DashboardController@updatePengaturan');
$this->add('bantuan', 'DashboardController@bantuan');

$this->resource('admin-orders', 'AdminOrdersController');
$this->resource('admin-products', 'AdminProductsController');
$this->resource('admin-users', 'AdminUsersController');
$this->resource('admin-stocks', 'AdminStocksController');
$this->add('admin-laporan-index', 'AdminLaporanController@index');


$this->resource('petugas-orders', 'PetugasOrdersController');
$this->resource('petugas-products', 'PetugasProductsController');
$this->resource('petugas-users', 'PetugasUsersController');
$this->resource('petugas-stocks', 'PetugasStocksController');


