<?php
require 'Task.php';
require 'functions.php';

// Call the pdo function 
$pdo = connectToDb();

// Fetch all tasks
$tasks = fetchAllTasks($pdo);

// Prepare our SQL query
// $statement = $pdo->prepare('SELECT * FROM todos');
// Execute our prepared SQL query
// $statement -> execute();
// Fetch all the results as a object
// $tasks = $statement->fetchAll(PDO::FETCH_OBJ);
// Fetch all the task from DB and saving it to a specific class 
// $tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
// dd($tasks[0]->description);

// Accessing a method from the class Task
// dd($tasks[0]->foobar());


require 'pdo.index.view.php';