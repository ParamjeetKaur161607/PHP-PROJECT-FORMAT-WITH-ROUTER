<?php

// $router->define([
//     'pk'=>'controllers/index.php',
//     'pk/about'=>'controllers/about.php',
//     'pk/contact'=>'controllers/contact.php',  
//     'pk/names'=>'controllers/add-name.php',  
// ]);

$router->get('pk','controllers/index.php');
$router->get('pk/about','controllers/about.php');
$router->get('pk/contact','controllers/contact.php');
$router->post('pk/names','controllers/add-name.php');

echo "<pre>";
var_dump($router);
echo "</pre>";