<?php
$person = [
    'age' => 20,
    'hairColor' => 'black',
    'carrer' => 'web developer'
];
$person['address'] = "Yangon"; //add array value

unset($person['age']); // delete array value

die(var_dump($person));  //dump and die >>>>>>>>>dd();
// var_dump($person);

require "index.view.php";