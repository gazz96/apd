<?php 

$this->add('home', 'HomeController@index');
$this->add('about', 'AboutController@index');

$this->add('login', 'DashboardController@login');
$this->add('login-check', 'DashboardController@check_login');

$this->resource('admin-orders', 'AdminOrdersController');
$this->resource('admin-products', 'AdminProductsController');
$this->resource('admin-users', 'AdminUsersController');
$this->resource('admin-stocks', 'AdminStocksController');


$this->resource('petugas-orders', 'PetugasOrdersController');
$this->resource('petugas-products', 'PetugasProductsController');
$this->resource('petugas-users', 'PetugasUsersController');
$this->resource('petugas-stocks', 'PetugasStocksController');


