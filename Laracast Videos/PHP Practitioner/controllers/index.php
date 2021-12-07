<?php
// Our controller will interact with the DB and load a view 
$tasks = $app['database'] -> selectAll('todos');

require 'core/views/index.view.php'; 