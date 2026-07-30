<?php

use Core\App;

$db = App::container()->resolve('Core\Database');

$currentUserId = 3;


//form was submittes, delete the note

$note = $db->query('select * from notes where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);


$db->query('delete from notes where id = :id', [
    'id' => $_POST['id']
]);

header('location: /notes');
exit();