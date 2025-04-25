<?php

use Core\Database;

$db = App::resolve(Database::class);

$id = $_GET['id'];

$event = $db->query('SELECT * FROM events WHERE id = :id', ['id' => $id])->findOrFail();


echo json_encode($event);
