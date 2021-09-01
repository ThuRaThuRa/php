<?php
// print_r($_POST['username']);
// die();

$app['database']->insert('users', [
    'username' => $_POST['username']
]);

header('Location:/');