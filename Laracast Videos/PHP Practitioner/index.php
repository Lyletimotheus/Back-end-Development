<?php 
    require 'functions.php';

    // $names = ['Jeff', 'Lyle', 'Carlos'];
    // $animals = ['Cat', 'Bat', 'Snake', 'Rat','Dog'];

    // $person = [
    //     'name' => 'Lyle Timotheus',
    //     'age' => 27,
    //     'hair color' => 'black',
    //     'career' => 'web developer'
    // ];
    // Pushing a new item to the array
    // $person['soccer team'] = 'Arsenal' ;

    // Removing a item from the array
    // unset($person['age']);

    // $task = [
    //     'title' => 'Maths homework',
    //     'due' => '1 December 2021',
    //     'assigned_to' => 'Lyle Timotheus',
    //     'completed' => false,
    //     'billable' => false 
    // ];

    // if($task['completed'] === true) {
    //     echo "Task completed";
    // }else{
    //     echo "Task NOT completed.";
    // }

    // Calling the above pre function 
    // dd($task);

    // dd($animals);

    // Calling the age function to determine age 
    // echo age(3);

##################
#### CLASSES  ####
##################

    // Todo Application
    // Todo, Comment, User
    class Task {
        // Look at your database to determine what you might need for a task
        // We include two protected properties.
        // We would not add the completed property to the constructor as every task we add at the beginning will be incomplete (set to false).
        public $description;
        public $completed = false;

        public function __construct($description)
        {
            // Automatically triggered on instantiation (new keyword)
            $this->description = $description;
        }

        public function complete() {
            $this->completed = true;
        }

        public function isComplete() {
            return $this-> completed;
        }
    }

    // $task = new Task('Go to the store');
    // $task->complete();
    // var_dump($task->isComplete());
    // var_dump($task);

    // Array of tasks 
    $tasks = [
        new Task('Go to the store'),
        new Task('Finish my homework'),
        new Task('Clean my bedroom')
    ];

    $tasks[0]->complete();
    // dd($tasks);
    require 'index.view.php';
   

