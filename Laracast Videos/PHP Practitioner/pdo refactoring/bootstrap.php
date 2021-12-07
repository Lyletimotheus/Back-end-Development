<?php 
// Factory File
$config = require 'config.php';
require 'database/Connection.php';
require 'QueryBuilder.php';

// Referencing a static method to connect to the DB
// $pdo = Connection::make();

// Instantiating the querybuilder Class - And inlining the make method 
return new QueryBuilder(Connection::make($config['database']));