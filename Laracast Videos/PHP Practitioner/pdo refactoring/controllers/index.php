<?php
// Our controller will interact with the DB and load a view 
$tasks = $query -> selectAll('todos');

require 'core/views/index.view.php'; 