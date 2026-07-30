<?php

use Core\App;
use Core\Database;

$db = App::container()->resolve(Database::class);

$heading = 'My Notes';

$notes = $db->query('select * from notes')->fetchAll();
view('notes/index.view.php', [
    'heading' => 'My Notes',
    'notes' => $notes
]);