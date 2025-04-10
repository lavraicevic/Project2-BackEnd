<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$errors = [];

if (! Validator::string($_POST['title'])) {
    $errors['title'] = 'Title is required';
}

if (! Validator::string($_POST['body'], 1, 100)) {
    $errors['body'] = 'A body of no more that 10 characters is requried';
}

if (! empty($errors)) {
    view('notes/create', [
        'heading' => 'Create Note', 'errors' => $errors
    ]);
}

$db->query('INSERT INTO notes(title, user_id, body) VALUES(:title, :user_id, :body)', [
    'title' => $_POST['title'], 'user_id' => 1, 'body' => $_POST['body']
]);

header('Location: /notes');

exit;

