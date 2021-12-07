<?php 

// Factory File
require 'core/Router.php';
$config = require './config/config.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

// Referencing a static method to connect to the DB
// $pdo = Connection::make();

// Instantiating the Querybuilder Class - And inlining the make method 
return new QueryBuilder(Connection::make($config['database']));

