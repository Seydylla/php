<?php

$config = require base_path('config.php');
$db = new Database($config['database']);

$heading = 'Note';
$currentUserId = 3;


$note = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

require base_path('views/notes/note.view.php');