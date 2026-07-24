<?php

require 'Validator.php';

$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'Create note';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];

    $validator = new Validator();

    if(! $validator->string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'A body of no more than 1,000 charachter is required';
    }

    if(empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES (:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 3
        ]);

        header('Location: /notes');
        exit();
    }
}

require 'views/notes/create.view.php';