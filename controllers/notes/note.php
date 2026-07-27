<?php
use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    //form was submittes, delete the note
} else {
    $currentUserId = 3;


    $note = $db->query('select * from notes where id = :id', [
        'id' => $_GET['id']
    ])->findOrFail();

    authorize($note['user_id'] === $currentUserId);

    view('notes/note.view.php', [
        'heading' => 'Notes',
        'note' => $note
    ]);
}