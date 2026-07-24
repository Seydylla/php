<?php

require base_path('Validator.php');

$config = require base_path('config.php');
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

require base_path('views/notes/create.view.php');