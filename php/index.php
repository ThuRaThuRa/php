<?php
 
 $query=require "bootstrap.php";
  
 
 $router=new Route();
 
 require "routes.php";
$uri=trim($_SERVER["REQUEST_URI"],'/');
require $router->direct($uri);
 
 