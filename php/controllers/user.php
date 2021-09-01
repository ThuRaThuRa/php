<?php
// print_r($_POST['username']);
// die();

App::get('database')->insert('users', [
    'username' => $_POST['username']
]);

header('Location:/');