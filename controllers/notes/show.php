<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$heading = 'Note';

$userId = 1;
$note = $db->query("select * from notes where id = :id", ['id' => $_GET['id']])->findOrFail();

authorize($note['user_id'] === $userId);

view('notes/show', [
    'heading' => $heading, 'note' => $note
]);   