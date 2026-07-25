<?php

// Giving virtual adress
namespace core;

use PDO;

// Connect to the database, and execute a query
class Database {

    public $connection;
    public $statement;

    // Costruct always work
    public function __construct($config, $username = 'root', $password = ''){

        $dsn = 'mysql:' . http_build_query($config, '', ';');

        // Making like this for secure. We write the parameters for secure database connection
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }


    public function query($query, $params = []) {

        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);

        return $this;
    }

    public function find() {
        return $this->statement->fetch();
    }

    public function fetchAll() {
        return $this->statement->fetchAll();
    }

    public function findOrFail() {
        $result = $this->find();

        if(! $result) {
            abort();
        }

        return $result;
    }
}
