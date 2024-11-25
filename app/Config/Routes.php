<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

//Index Routes
$routes->get('/', 'Index::login');
$routes->get('index', 'Index::index');
$routes->get('home', 'Index::index');

//About
$routes->get('index/about', 'Index::about');

//Show Data with Parameters
$routes->get('index/showdata', 'Index::showData');
$routes->get('index/showdata/(:alpha)/(:num)', 'Index::showData/$1/$2');

//Login
$routes->get('login', 'Index::login');
$routes->post('login', 'Index::login');

//Users
$routes->get('users', 'Users::index');
$routes->get('users/add', 'Users::add');
$routes->post('users/add', 'Users::add');
$routes->get('users/view/(:num)', 'Users::view/$1');
$routes->get('users/edit/(:num)', 'Users::edit/$1');
$routes->post('users/edit/(:num)', 'Users::edit/$1');
$routes->get('users/delete/(:num)', 'Users::delete/$1');

//Products
$routes->get('products', 'Products::index');               
$routes->get('products/add', 'Products::add');              
$routes->post('products/add', 'Products::add');             
$routes->get('products/view/(:num)', 'Products::view/$1');  
$routes->get('products/edit/(:num)', 'Products::edit/$1');  
$routes->post('products/edit/(:num)', 'Products::edit/$1'); 
$routes->get('products/delete/(:num)', 'Products::delete/$1'); 
