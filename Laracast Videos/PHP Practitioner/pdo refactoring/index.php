<?php

$query = require 'bootstrap.php';

$tasks = $query -> selectAll('todos');

// Calling the selectAll method and passing the todo table in as a parameter and mapping the tasks into instances of the Task class 
// $tasks = $query -> selectAll('todos', 'Task');

require 'index.view.php'; 