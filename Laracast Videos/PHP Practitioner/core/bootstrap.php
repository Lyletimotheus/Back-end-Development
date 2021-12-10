<?php 
// Factory File

$app = [];

$app['config'] = require './config/config.php';

// require 'core/Router.php';
// require 'core/Request.php';
// require 'core/database/Connection.php';
// require 'core/database/QueryBuilder.php';

// Referencing a static method to connect to the DB
// $pdo = Connection::make();

// Instantiating the Querybuilder Class - And inlining the make method 
$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);

