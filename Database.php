<?php

// Connect to the database, and execute a query
class Database {

    public $connection;

    // Costruct always work
    public function __construct(){

        $config = [
            'host' => 'localhost',
            'port' => '3306',
            'dbname' => 'myapp',
            'charset' => 'utf8mb4'
        ];

        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};user=root;charset={$config['charset']}";

        // Making like this for secure. We write the parameters for secure database connection
        $this->connection = new PDO($dsn, 'root', '', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }


    public function query($query) {

        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}
