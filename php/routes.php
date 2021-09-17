<?php

// $router->define([
//     ''=>'controllers/index.php', 
    
//     'contact'=>'controllers/contact.php ',
    
//     'product' =>'controllers/product.php',
    
//     'user' =>'controllers/user.php'
// ]);
  
$router->get("","PageController@home");
$router->get("product","PageController@product");
$router->get("contact","PageController@contact");
$router->get("about","PageController@about");
$router->get("users","UserController@index");
$router->post("users","UserController@store");  