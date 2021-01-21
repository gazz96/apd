<?php 

$this->add('home', 'HomeController@index');
$this->add('about', 'AboutController@index');

$this->resource('admin-products', 'AdminProductsController');