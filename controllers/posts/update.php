<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$userId = 1;

$note = $db->query("select * from notes where id = :id", [
	'id' => $_POST['id']
])->findOrFail();

authorize($note['user_id'] === $userId);

$errors = [];

if (! Validator::string($_POST['title'])) {
	$errors['title'] = 'Title is required';
}

if (! Validator::string($_POST['body'], 1, 10)) {
	$errors['body'] = 'A body of no more that 10 characters is requried';
}

if (! empty($errors)) {
	view('notes/edit', [
		'heading' => 'Edit Note',
		'errors' => $errors,
		'note' => $note
	]);
	
	die();
}

$db->query('update notes set title = :title, body = :body where id = :id', [
	'title' => $_POST['title'],
	'body' => $_POST['body'],
	'id' => $_POST['id']
]);


header('Location: /notes');