<?php
// Our controller will interact with the DB and load a view 
$users = $app['database'] -> selectAll('users');

// echo "<pre>";
// var_dump($users);
// echo "</pre>";
require 'core/views/index.view.php'; 