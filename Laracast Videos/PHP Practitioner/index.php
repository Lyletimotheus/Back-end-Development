<?php

$query = require 'core/bootstrap.php';



// Calling the selectAll method and passing the todo table in as a parameter and mapping the tasks into instances of the Task class 
// $tasks = $query -> selectAll('todos', 'Task');

// $router = new Router;

// require 'routes.php';


require Router::load('routes.php')
    ->direct(Request::uri());