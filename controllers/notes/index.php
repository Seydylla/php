<?php

$config = require base_path('config.php');
$db = new Database($config['database']);

$heading = 'My Notes';

$notes = [];

$notes = $db->query('select * from notes')->fetchAll();
require base_path('views/notes/index.view.php');