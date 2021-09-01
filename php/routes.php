<?php

// $router->define([
//     ''=>'controllers/index.php',
    
//     'contact'=>'controllers/contact.php ',
    
//     'product' =>'controllers/product.php',
    
//     'user' =>'controllers/user.php'
// ]);
  
$router->get("","controllers/index.php");
$router->get("product","controllers/product.php");
$router->get("contact","controllers/contact.php");
$router->post("users","controllers/user.php");