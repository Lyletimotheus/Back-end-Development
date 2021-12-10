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

    public function insert($table, $parameters) {
       $sql = sprintf(
           'insert into %s (%s) values (%s)',
           $table, 
           implode(', ', array_keys($parameters)),
           ':' . implode(', :', array_keys($parameters)) // Here we are putting the colons on to reference the third argument so that we can insert it in as placeholders 
       );
       
       try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
       } catch (Exception $e) {
           die('Something went wrong.');
       }
    }

    // Here we are mapping each output to a specific class 
    // public function selectAll($table, $intoClass) {
    //     $statement = $this->pdo->prepare("SELECT * FROM {$table}");
    //     $statement -> execute();
    //     return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    // }
}
