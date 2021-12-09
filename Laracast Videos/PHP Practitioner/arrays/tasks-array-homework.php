<?php

class Task 
{
    public $description;
    public $date;
    public $status;

    public function __construct($description, $date, $status)
    {
        $this->description = $description;
        $this->date = $date;
        $this->status = $status;
    }
}

// Create a array of Task Objects
$tasks = [
    new Task('Clean my room', '10 December', true),
    new Task('Don\'t forget to get bread and milk', '14 December', false),
    new Task('Submit class assignment', '14 December', false),
    new Task('Christmas Dinner', '24 December', true),
    new Task('Buy gifts for the family', '10 December', true),
    new Task('Dog food', '1 January', false),
];

// If we want to return the first object we can use the following: 
$taskOne = $tasks[0];
// If we want to get the first objects date
$taskOneDate = $tasks[0]->date;
// If we want to get the completion status of the task
$taskOneStatus = $tasks[0]->status;

// Filter out all the completed tasks
$completedTasks = array_filter($tasks, function($task) {
    return $task->status === false;
});

// Filter out all the incompleted tasks
$incompletedTasks = array_filter($tasks, function($task){
    return $task->status === false;
});

// Changing all the tasks to completed
foreach($tasks as $task){
    $task->status = true;
}

// Listing all the task descriptions
$descriptions = array_column($tasks,'description');

// foreach($descriptions as $description) {
//     echo $description;
// }

// Return an array version of the tasks object 
// $tasks = array_map(function($task) {
//     return (array) $task;
// }, $tasks);

// List all the tasks with a status
$completed = array_column($tasks,'date', 'status');

var_dump($completed);
