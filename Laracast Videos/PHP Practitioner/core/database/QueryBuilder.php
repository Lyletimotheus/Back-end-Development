<?php

class QueryBuilder {
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;   
    }

    public function selectAll($table) {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement -> execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    // Here we are mapping each output to a specific class 
    // public function selectAll($table, $intoClass) {
    //     $statement = $this->pdo->prepare("SELECT * FROM {$table}");
    //     $statement -> execute();
    //     return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    // }
}
