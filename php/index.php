<?php
 require "vendor/autoload.php";
 require "bootstrap.php";

 
//  Router::load("routes.php");


require Router::load("routes.php")->direct(Request::uri(),Request::method());
 
 