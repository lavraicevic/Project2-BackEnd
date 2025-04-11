<?php

use Core\App;
use Core\Database;

$heading = 'Create Note';

$db = App::resolve(Database::class);

$categories = $db->query('SELECT * from categories')->get();

view('posts/create', [
	'heading' => $heading,
	'errors' => [],
	'categories' => $categories
]);