<?php

use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if(! Validator::email($email)) {
    $errors['email'] = 'A valid email is required';
}

if(! Validator::string($password, 7, 255)) {
    $errors['password'] = 'A password of at least 7 charachters is required';
}

if(! empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

$db = App::resolve(Database::class);

// Check if the account already exists
$result = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

dd($result);