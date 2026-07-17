<?php

require "functions.php";

// Connect to the database, and execute a query
class Database {
    public function query($query) {
        $dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";

        $pdo = new PDO($dsn);

        $statement = $pdo->prepare($query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

$db = new Database();
$posts = $db->query("select * from posts");


foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}