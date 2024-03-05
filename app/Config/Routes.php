<?php

use CodeIgniter\Router\RouteCollection;
use CodeIgniter\I18n\Time;

/**
 * @var RouteCollection $routes
 */

// LATIHAN ROUTES
// $routes->get('/', 'Home::index');
$routes->get('/', 'Pages::index');
$routes->get('/pages/about', 'Pages::about');
$routes->get('/pages/contact', 'Pages::contact');

// KOMIK
$routes->get('/komik/index', 'Komik::index');
$routes->get('/komik/create', 'Komik::create');
$routes->get('/komik/edit/(:segment)', 'Komik::edit/$1');
$routes->delete('/komik/index/(:num)', 'Komik::delete/$1');
$routes->post('/komik/update/(:segment)', 'Komik::update/$1');
$routes->post('/komik/save', 'Komik::save');

// KATEGORI KOMIK
$routes->get('/komik/index', 'Komik::index');


// HELPER
$routes->get('/number', function(){
    helper('number');
    echo number_to_currency(1234.56, 'IDR', 'id_ID', 2);
});

// $routes->get('/number', function(){
//     helper('number');
//     echo number_to_currency(1234.56, 'IDR', 'id_ID', 2);
// });

// LIBRARY
$routes->get('/time', function() {
    // Mendapatkan waktu sekarang dengan zona waktu 'America/Chicago' dan format bahasa 'en_US'
    // $myTime = Time::now('America/Chicago', 'en_US');

    // Menampilkan waktu sekarang
    $myTime = Time::parse('March 9, 2016 12:00:00', 'America/Chicago');
    echo $myTime->toLocalizedString('MMM d, yyyy'); // March 9, 2016
});

$routes->get('/komik/(:segment)', 'Komik::detail/$1');