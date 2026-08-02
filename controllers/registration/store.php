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
$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

if ($user) {
    header('location: /');
} else {
    // Create the account
    $db->query('insert into users(email, password) values (:email, :password)', [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    $_SESSION['user'] = [
        'email' => $email
    ];

    header('location: /');
    exit();
}