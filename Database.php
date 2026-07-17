<?php

// Connect to the database, and execute a query
class Database {

    public $connection;

    // Costruct always work
    public function __construct($config, $username = 'root', $password = ''){

        $dsn = 'mysql:' . http_build_query($config, '', ';');

        // Making like this for secure. We write the parameters for secure database connection
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }


    public function query($query) {

        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}
