<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$name = 'My notes u';

$notes = $db->query("select * from notes")->get();

view('notes/index', [
	'heading' => $name,
	'notes' => $notes
]);