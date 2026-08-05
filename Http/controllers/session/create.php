<?php

view('session/create.view.php', [
    'title' => 'Log in',
    'errors' => $_SESSION['_flash']['errors'] ?? []
]);