<?php

require "functions.php";

// Connect to the database, and execute a query
class Database {

    public $connection;

    // Costruct always work
    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";
        $this->connection = new PDO($dsn);
    }


    public function query($query) {

        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}

$db = new Database();
$posts = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);

dd($posts);