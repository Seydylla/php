<?php

use Core\Authenticator;
use Http\Forms\LoginForm;
use Core\Session;
use Core\ValidationException;

try {
    $form = LoginForm::validate([ $attributes = [
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ]]);
} catch(ValidationException $exception) {
    Session::flash('errors', $form->errors());
    Session::flash('old', ['email' => $attributes['email']]);

    return redirect('/login');
}

if((new Authenticator)->attempt($attributes['email'], $attributes['password'])) {
    redirect('/');
}

$form->error('email', 'No matching account found for that email address and password');


return redirect('/login');